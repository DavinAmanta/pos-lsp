<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangMasukController;
use Illuminate\Support\Facades\Route;

Route::get('/auth', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login_aksi'])->name('login.aksi');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('produk')->name('produk.')->group(function () {
        Route::get('/', [ProdukController::class, 'index'])->name('index');
        Route::get('/create', [ProdukController::class, 'create'])->name('create');
        Route::post('/store', [ProdukController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ProdukController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [ProdukController::class, 'destroy'])->name('destroy');
        Route::get('/barcode/{kode}', [ProdukController::class, 'getByBarcode'])
            ->name('barcode');
    });

    Route::prefix('konfigurasi')->name('konfigurasi.')->group(function () {
        Route::get('/', [KonfigurasiController::class, 'index'])->name('index');
        Route::put('/update/{id}', [KonfigurasiController::class, 'update'])->name('update');
    });

    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('/stok', [LaporanController::class, 'stok'])->name('stok');
        Route::get('/stok-pdf', [LaporanController::class, 'stok_pdf'])->name('stok-pdf');

        Route::get('/harian', [LaporanController::class, 'harian'])->name('harian');
        Route::get('/harian/pdf', [LaporanController::class, 'harian_pdf'])->name('harian.pdf');

        Route::get('/bulanan', [LaporanController::class, 'bulanan'])->name('bulanan');
        Route::get('/bulanan/pdf', [LaporanController::class, 'bulanan_pdf'])->name('bulanan.pdf');

        Route::get('/barang_masuk/harian', [LaporanController::class, 'barang_masuk_harian'])->name('barang_masuk.harian');
        Route::get('/barang_masuk/harian/pdf', [LaporanController::class, 'barang_masuk_harian_pdf'])->name('barang_masuk.harian.pdf');
        Route::get('/barang_masuk/bulanan', [LaporanController::class, 'barang_masuk_bulanan'])->name('barang_masuk.bulanan');
        Route::get('/barang_masuk/bulanan/pdf', [LaporanController::class, 'barang_masuk_bulanan_pdf'])->name('barang_masuk.bulanan.pdf');
    });

    Route::prefix('transaksi')->name('transaksi.')->group(function () {
        Route::get('/', [TransaksiController::class, 'index'])->name('index');
        Route::get('/create', [TransaksiController::class, 'create'])->name('create');
        Route::post('/hapus', [TransaksiController::class, 'hapus'])->name('hapus');
        Route::post('/bayar', [TransaksiController::class, 'bayar'])->name('bayar');
        Route::post('/updateJumlah', [TransaksiController::class, 'updateJumlah'])->name('updateJumlah');
        Route::get('/nota/{id}', [TransaksiController::class, 'nota'])->name('nota');
        Route::get('/nota_transaksi/{id}', [TransaksiController::class, 'nota_transaksi'])->name('nota_transaksi');
    });

    Route::prefix('barang_masuk')->name('barang_masuk.')->group(function () {
        Route::get('/', [BarangMasukController::class, 'index'])->name('index');
        Route::get('/create', [BarangMasukController::class, 'create'])->name('create');
        Route::post('/store', [BarangMasukController::class, 'store'])->name('store');
    });
});
