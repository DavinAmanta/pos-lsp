<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'nama',
        'kode_produk',
        'harga_modal',
        'harga_jual',
        'stok',
    ];

    public function DetailTransaksi(){
        return $this->hasMany(Produk::class,'id_produk');
    }

    public function barangMasuk(){
        return $this->hasMany(BarangMasuk::class,'id_produk');
    }
}
