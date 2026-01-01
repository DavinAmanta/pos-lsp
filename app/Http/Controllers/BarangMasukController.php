<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index(Request $request)
    {
        $judul = 'Aplikasi Penjualan Barang | Halaman Barang Masuk';

        $tanggal = $request->tanggal ? Carbon::parse($request->tanggal) : Carbon::now();

        $barangMasuk = BarangMasuk::with('produk:id,nama,kode_produk')
            ->when($tanggal, function ($query) use ($tanggal) {
                $query->whereDate('tanggal_masuk', $tanggal);
            })
            ->orderBy('tanggal_masuk', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('barang_masuk.index', compact('judul', 'barangMasuk'));
    }


    public function create()
    {
        $judul = 'Aplikasi Penjualan Barang | Tambah Barang Masuk';
        $produk = Produk::all();
        return view('barang_masuk.create', compact('judul', 'produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_produk'     => 'required',
            'jumlah'        => 'required|integer',
            'tanggal_masuk' => 'required|date',
            'harga_beli'    => 'required|numeric',
        ], [
            'id_produk.required'        => 'Produk wajib di isi',
            'jumlah.required'           => 'Jumlah wajib di isi',
            'jumlah.integer'            => 'Jumlah harus berupa angka',
            'tanggal_masuk.required'    => 'Tanggal masuk wajib di isi',
            'tanggal_masuk.date'        => 'Tanggal masuk tidak valid',
            'harga_beli.required'       => 'Harga beli wajib di isi',
            'harga_beli.numeric'        => 'Harga beli harus berupa angka',
        ]);

        BarangMasuk::create([
            'id_produk'     => $request->id_produk,
            'jumlah'        => $request->jumlah,
            'tanggal_masuk' => $request->tanggal_masuk,
            'harga_beli'    => $request->harga_beli,
        ]);

        Produk::where('id', $request->id_produk)->update([
            'stok' => Produk::find($request->id_produk)->stok + $request->jumlah,
            'harga_modal' => $request->harga_beli,
        ]);

        return redirect()->route('barang_masuk.index')->with('success', 'Berhasil menambah data barang masuk');
    }
}
