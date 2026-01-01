<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $judul = 'Aplikasi Penjualan Barang | Kelola Data Produk';
        $search = $request->search;

        $produk = Produk::select('id', 'nama', 'kode_produk', 'harga_modal', 'harga_jual', 'stok')
            ->when($search, function ($query) use ($search) {
                $query->where('nama', 'like', "%$search%")
                    ->orWhere('kode_produk', 'like', "%$search%");
            })
            ->paginate(10);

        return view('produk.produk', compact('judul', 'produk'));
    }

    public function create()
    {
        $judul = 'Aplikasi Penjualan Barang | Tambah Data Produk';
        return view('produk.create', compact('judul'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required',
            'kode_produk'   => 'required|unique:produks,kode_produk',
            'harga_jual'    => 'required',
        ], [
            'nama.required'         => 'Nama wajib di isi',
            'kode_produk.required'  => 'Kode Produk wajib di isi',
            'kode_produk.unique'    => 'Kode Produk sudah digunakan',
            'harga_jual.required'   => 'Harga Jual wajib di isi',
        ]);

        Produk::create([
            'nama'          => $request->nama,
            'kode_produk'   => $request->kode_produk,
            'harga_modal'   => 0,
            'harga_jual'    => $request->harga_jual,
            'stok'          => 0,
        ]);

        return redirect()->route('produk.index')->with('success', 'Berhasil menambah data Produk');
    }

    public function edit(string $id)
    {
        $judul = 'Aplikasi Penjualan Barang | Tambah Data Produk';
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('judul', 'produk'));
    }

    public function update(Request $request, string $id)
    {
        $produk = Produk::findOrFail($id);
        $request->validate([
            'nama'          => 'required',
            'kode_produk'   => 'required|unique:produks,kode_produk,' . $produk->id,
            'harga_modal'   => 'required',
            'harga_jual'    => 'required',
            'stok'          => 'required',
        ], [
            'nama.required'         => 'Nama wajib di isi',
            'kode_produk.required'  => 'Kode Produk wajib di isi',
            'kode_produk.unique'    => 'Kode Produk sudah digunakan',
            'harga_modal.required'  => 'Harga Modal wajib di isi',
            'harga_jual.required'   => 'Harga Jual wajib di isi',
            'stok.required'         => 'Stok wajib di isi',
        ]);
        if ($produk->harga_modal > $request->harga_jual) {
            return redirect()->back()->withErrors(['harga_jual' => 'Harga Jual harus lebih besar dari Harga Modal'])->withInput();
        }
        $produk->update($request->all());
        return redirect()->route('produk.index')->with('success', 'Berhasil mengubah data Produk');
    }

    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Berhasil menghapus data Produk');
    }

    public function getByBarcode($kode)
    {
        $produk = Produk::where('kode_produk', $kode)->first();

        if (!$produk) {
            return response()->json(null, 404);
        }

        return response()->json([
            'id'   => $produk->id,
            'nama' => $produk->nama,
            'kode' => $produk->kode_produk,
        ]);
    }
}
