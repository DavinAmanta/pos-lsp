<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table = 'barang_masuks';

    protected $fillable = [
        'id_produk',
        'jumlah',
        'tanggal_masuk',
        'harga_beli'
    ];

    public function produk(){
        return $this->belongsTo(Produk::class,'id_produk');
    }
}
