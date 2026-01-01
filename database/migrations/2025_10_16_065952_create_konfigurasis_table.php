<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konfigurasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko');
            $table->integer('biaya_sewa');
            $table->integer('gaji_karyawan');
            $table->integer('biaya_lainnya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfigurasis');
    }
};
