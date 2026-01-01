<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Konfigurasi;
use App\Models\Produk;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function stok(Request $request)
    {
        $judul  = 'Aplikasi Penjualan Barang | Laporan Stok Produk';
        $filter = $request->filter ?? 'semua';

        $produk = $this->filterStok($filter)
            ->orderBy('nama')
            ->paginate(10)
            ->withQueryString();

        return view('laporan.stok_produk', compact('judul', 'produk', 'filter'));
    }

    public function stok_pdf(Request $request)
    {
        $filter = $request->filter ?? 'semua';

        $produk = $this->filterStok($filter)
            ->orderBy('nama')
            ->get();

        $konfigurasi = Konfigurasi::first();

        $pdf = FacadePdf::loadView(
            'laporan.stok_pdf',
            compact('konfigurasi', 'produk', 'filter')
        )->setPaper('A4', 'portrait');

        return $pdf->stream('laporan-stok.pdf');
    }

    private function filterStok(string $filter)
    {
        return Produk::when($filter, function ($query) use ($filter) {
            match ($filter) {
                'habis' => $query->where('stok', '<=', 0),
                'stok_menipis' => $query->whereBetween('stok', [1, 5]),
                'masih' => $query->where('stok', '>', 5),
                default => null,
            };
        });
    }

    public function harian(Request $request)
    {
        $judul = 'Aplikasi Penjualan Barang | Laporan Transaksi Harian';
        $user = Auth::user();
        $tanggal = $request->tanggal
            ? Carbon::parse($request->tanggal)
            : Carbon::today();

        $konfigurasi = Konfigurasi::first();

        $query = $this->getTransaksiQuery($tanggal, $user);

        $transaksi = $query
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();

        $totalPenjualan = $query->clone()->sum('subtotal');
        $totalModal = $this->getTotalModal($query->clone()->get());
        $totalTransaksi = $query->clone()->count();
        $labaKotor = $totalPenjualan - $totalModal;

        return view('laporan.harian', compact(
            'judul',
            'konfigurasi',
            'transaksi',
            'totalPenjualan',
            'totalModal',
            'labaKotor',
            'tanggal'
        ));
    }

    public function harian_pdf(Request $request)
    {
        $user = Auth::user();
        $tanggal = $request->tanggal ? Carbon::parse($request->tanggal) : Carbon::today();
        $konfigurasi = Konfigurasi::first();

        $query = $this->getTransaksiQuery($tanggal, $user);

        $transaksi = $query->get();

        $totalPenjualan = $transaksi->sum('subtotal');
        $totalModal = $this->getTotalModal($transaksi);
        $labaKotor = $totalPenjualan - $totalModal;

        $pdf = FacadePdf::loadView(
            'laporan.harian_pdf',
            compact('konfigurasi', 'transaksi', 'totalPenjualan', 'totalModal', 'labaKotor', 'tanggal')
        );

        return $pdf->stream('laporan_harian.pdf');
    }

    public function bulanan(Request $request)
    {
        $tanggal = $request->tanggal
            ? Carbon::parse($request->tanggal)
            : now();

        $bulan = $tanggal->month;
        $tahun = $tanggal->year;

        $konfigurasi = Konfigurasi::first();
        $user = Auth::user();

        $transaksi = $this->getBulananTransaksi($bulan, $tahun, $user, true);
        $allTransaksi = $this->getBulananTransaksi($bulan, $tahun, $user);

        $totalPenjualan = $allTransaksi->sum('subtotal');
        $totalModal = $this->getTotalModal($allTransaksi);

        $biayaOperasional = $this->getBiayaOperasional($konfigurasi);

        $labaKotor  = $totalPenjualan - $totalModal;
        $labaBersih = $labaKotor - $biayaOperasional;

        $judul = 'Aplikasi Penjualan Barang | Laporan Penjualan Bulanan';

        return view('laporan.bulanan', compact(
            'judul',
            'bulan',
            'tahun',
            'konfigurasi',
            'transaksi',
            'totalPenjualan',
            'totalModal',
            'biayaOperasional',
            'labaKotor',
            'labaBersih'
        ));
    }

    public function bulanan_pdf(Request $request)
    {
        $tanggal = $request->tanggal
            ? Carbon::parse($request->tanggal)
            : now();

        $bulan = $tanggal->month;
        $tahun = $tanggal->year;

        $konfigurasi = Konfigurasi::first();
        $user = Auth::user();

        $transaksi = $this->getBulananTransaksi($bulan, $tahun, $user);

        $totalPenjualan = $transaksi->sum('subtotal');
        $totalModal = $this->getTotalModal($transaksi);

        $biayaOperasional = $this->getBiayaOperasional($konfigurasi);

        $labaKotor  = $totalPenjualan - $totalModal;
        $labaBersih = $labaKotor - $biayaOperasional;

        $namaBulan = Carbon::create()->month($bulan)->translatedFormat('F');

        $pdf = FacadePdf::loadView(
            'laporan.bulanan_pdf',
            compact(
                'namaBulan',
                'bulan',
                'tahun',
                'konfigurasi',
                'transaksi',
                'totalPenjualan',
                'totalModal',
                'biayaOperasional',
                'labaKotor',
                'labaBersih'
            )
        );

        return $pdf->stream('laporan_bulanan.pdf');
    }

    public function barang_masuk_harian(Request $request)
    {
        $judul = 'Aplikasi Penjualan Barang | Laporan Barang Masuk';

        $tanggal = $request->tanggal
            ? Carbon::parse($request->tanggal)
            : Carbon::today();

        $barangMasuk = BarangMasuk::with('produk')
            ->whereDate('tanggal_masuk', $tanggal)
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('laporan.barang_masuk.harian', compact('judul', 'tanggal', 'barangMasuk'));
    }

    public function barang_masuk_bulanan(Request $request)
    {
        $judul = 'Aplikasi Penjualan Barang | Laporan Barang Masuk Bulanan';

        $tanggal = $request->tanggal
            ? Carbon::parse($request->tanggal)
            : Carbon::today();

        $bulan = $tanggal->month;
        $tahun = $tanggal->year;

        $barangMasuk = BarangMasuk::with('produk')
            ->whereMonth('tanggal_masuk', $bulan)
            ->whereYear('tanggal_masuk', $tahun)
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('laporan.barang_masuk.bulanan', compact('judul', 'tanggal', 'barangMasuk'));
    }

    public function barang_masuk_harian_pdf(Request $request)
    {
        $tanggal = $request->tanggal
            ? Carbon::parse($request->tanggal)
            : Carbon::today();

        $barangMasuk = BarangMasuk::with('produk')
            ->whereDate('tanggal_masuk', $tanggal)
            ->orderBy('id', 'desc')
            ->get();

        $konfigurasi = Konfigurasi::first();

        $pdf = FacadePdf::loadView(
            'laporan.barang_masuk.harian_pdf',
            compact('tanggal', 'barangMasuk', 'konfigurasi')
        );
        return $pdf->stream('laporan_barang_masuk_harian.pdf');
    }

    public function barang_masuk_bulanan_pdf(Request $request)
    {
        $tanggal = $request->tanggal
            ? Carbon::parse($request->tanggal)
            : Carbon::today();

        $bulan = $tanggal->month;
        $tahun = $tanggal->year;

        $barangMasuk = BarangMasuk::with('produk')
            ->whereMonth('tanggal_masuk', $bulan)
            ->whereYear('tanggal_masuk', $tahun)
            ->orderBy('id', 'desc')
            ->get();

        $namaBulan = Carbon::create()->month($bulan)->translatedFormat('F');
        $konfigurasi = Konfigurasi::first();

        $pdf = FacadePdf::loadView(
            'laporan.barang_masuk.bulanan_pdf',
            compact('namaBulan', 'bulan', 'tahun', 'barangMasuk', 'konfigurasi','tanggal')
        );

        return $pdf->stream('laporan_barang_masuk_bulanan.pdf');
    }

    private function getTransaksiQuery($tanggal, $user)
    {
        $query = Transaksi::with(['DetailTransaksi.produk', 'users'])
            ->whereDate('tanggal', $tanggal);

        if ($user->level === 'kasir') {
            $query->where('id_user', $user->id);
        }

        return $query;
    }

    private function getBulananTransaksi($bulan, $tahun, $user, $paginate = false)
    {
        $query = Transaksi::with(['DetailTransaksi.produk', 'users'])
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->when(
                $user->level === 'kasir',
                fn($q) => $q->where('id_user', $user->id)
            )
            ->orderBy('id', 'desc');

        return $paginate
            ? $query->paginate(10)->withQueryString()
            : $query->get();
    }

    private function getTotalModal($transaksi)
    {
        return $transaksi->sum(
            fn($trx) =>
            $trx->DetailTransaksi->sum(
                fn($d) => $d->jumlah * $d->harga_modal
            )
        );
    }

    private function getBiayaOperasional($konfigurasi)
    {
        return ($konfigurasi->biaya_sewa ?? 0)
            + ($konfigurasi->biaya_lainnya ?? 0)
            + ($konfigurasi->gaji_karyawan ?? 0);
    }
}
