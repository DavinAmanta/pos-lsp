<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    public function index()
    {
        $judul = 'Aplikasi Penjualan Barang | Operasional Toko';
        $konfigurasi = Konfigurasi::first();
        return view('konfigurasi.konfigurasi',compact('judul','konfigurasi'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $konfigurasi = Konfigurasi::FindOrFail($id);
        $request->validate([
            'nama_toko'      => 'required',
            'biaya_sewa'     => 'required',
            'gaji_karyawan'  => 'required',
            'biaya_lainnya'  => 'required',
        ],[
            'nama_toko.required'        => 'Nama Toko wajib di isi',
            'biaya_sewa.required'       => 'Biaya Sewa wajib di isi',
            'gaji_karyawan.required'    => 'Gaji Karyawan wajib di isi',
            'biaya_lainnya.required'    => 'Biaya Lainnya wajib di isi',
        ]);
        $konfigurasi->update($request->all());
        return redirect()->route('konfigurasi.index')->with('success','Berhasil mengubah data konfigurasi toko');
    }

    public function destroy(string $id)
    {
        //
    }
}
