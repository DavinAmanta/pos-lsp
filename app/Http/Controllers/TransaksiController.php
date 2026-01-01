<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Konfigurasi;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class TransaksiController extends Controller
{
    public function index()
    {
        $judul = 'Aplikasi Penjualan Barang | Transaksi Penjualan';
        $user = Auth::user();
        if($user->level == 'kasir'){
            $transaksi = Transaksi::with('users')->whereDate('tanggal', Date::now())->where('id_user',$user->id)->get();
        } else {
            $transaksi = Transaksi::with('users')->whereDate('tanggal', Date::now())->get();
        }
        return view('transaksi.transaksi', compact('judul','transaksi'));
    }

    public function create(Request $request)
    {
        $keranjang = session('keranjang', []);
        $kode_produk = $request->kode_produk;
        if ($kode_produk) {
            $produk = Produk::where('kode_produk', $kode_produk)->where('stok', '>', 0)->first();
            if ($produk) {
                $cek = collect($keranjang)->search(fn($aa) => $aa['id'] == $produk->id);
                if ($cek !== false) {
                    $keranjang[$cek]['jumlah'] += 1;
                } else {
                    $keranjang[] = [
                        'id'          => $produk->id,
                        'nama'        => $produk->nama,
                        'jumlah'      => 1,
                        'harga_jual'  => $produk->harga_jual,
                    ];
                }
                session(['keranjang' => $keranjang]);
                return redirect()->route('transaksi.create')->with('success', 'Produk ditambahkan ke keranjang');
            } else {
                return redirect()->route('transaksi.create')->with('error', 'Produk tidak ditemukan');
            }
        }
        $total = collect($keranjang)->sum(fn($aa) => $aa['jumlah'] * $aa['harga_jual']);
        $judul = 'Aplikasi Penjualan Barang | Transaksi Penjualan';
        return view('transaksi.create', compact('judul','keranjang','total'));
    }

    public function hapus(Request $request){
        $keranjang = session('keranjang',[]);
        $cek = $request->cek;
        if(isset($keranjang[$cek])){
            unset($keranjang[$cek]);
            session(['keranjang' => array_values($keranjang)]); 
        }
        return redirect()->route('transaksi.create')->with('success','Produk dihapus dari keranjang');
    }

    public function updateJumlah(Request $request){
        $cek = $request->cek;
        $jumlah = $request->jumlah;
        $keranjang = session('keranjang',[]);
        $produk = Produk::find($keranjang[$cek]['id']);
        if($jumlah > $produk->stok){
            return back()->with('error','Stok produk tidak mencukupi');
        }
        $keranjang[$cek]['jumlah'] = $jumlah;
        session(['keranjang' => $keranjang]);
        return back()->with('success','Berhasil merubah jumlah produk');
    }

    public function bayar(Request $request){
        $keranjang = (session('keranjang',[]));
        $total = collect($keranjang)->sum(fn($aa) => $aa['jumlah'] * $aa['harga_jual']);
        $bayar = $request->bayar;
        $kembalian = $bayar - $total;
        if($bayar < $total){
            return back()->with('error','Nominal pembayaran kurang');
        }
        $transaksi = new Transaksi();
        $transaksi->kode_transaksi = 'TRX-' . date('Ymdhis');
        $transaksi->id_user = Auth::id();
        $transaksi->tanggal = now();
        $transaksi->subtotal = $total;
        $transaksi->bayar = $bayar;
        $transaksi->kembalian = $kembalian;
        $transaksi->save();
        foreach($keranjang as $item){
            DetailTransaksi::create([
                'id_transaksi'  => $transaksi->id,
                'id_produk'     => $item['id'],
                'jumlah'        => $item['jumlah'],
                'harga_modal'   => Produk::find($item['id'])->harga_modal,
                'harga_jual'    => $item['harga_jual']
            ]);
            $produk = Produk::find($item['id']);
            if($produk){
                $produk->stok -= $item['jumlah'];
                $produk->save();
            }
        }
        session()->forget('keranjang');
        return redirect()->route('transaksi.nota',$transaksi->id);
    }

    public function nota($id){
        $transaksi = Transaksi::with(['DetailTransaksi.produk','users'])->findOrFail($id);
        $konfigurasi = Konfigurasi::first();
        return view('transaksi.nota_transaksi',compact('transaksi','konfigurasi'));
    }
    public function nota_transaksi($id){
        $transaksi = Transaksi::with(['DetailTransaksi.produk','users'])->findOrFail($id);
        $konfigurasi = Konfigurasi::first();
        return view('transaksi.nota',compact('transaksi','konfigurasi'));
    }
}
