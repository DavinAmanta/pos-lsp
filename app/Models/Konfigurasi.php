<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    protected $fillable = [
        'nama_toko',
        'biaya_sewa',
        'gaji_karyawan',
        'biaya_lainnya',
    ];
}
