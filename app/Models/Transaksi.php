<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'id_user',
        'tanggal',
        'subtotal',
        'bayar',
        'kembalian',
    ];

    public function users(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function DetailTransaksi(){
        return $this->hasMany(DetailTransaksi::class,'id_transaksi');
    }
}
