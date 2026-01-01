<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $judul = 'Aplikasi Penjualan Barang | Dashboard';

        $produk = Produk::count();
        $user   = User::count();

        $today      = now()->toDateString();
        $startMonth = now()->startOfMonth();
        $endMonth   = now()->endOfMonth();
        $startYear  = now()->startOfYear();
        $endYear    = now()->endOfYear();

        $transaksiQuery = Transaksi::query();

        if (Auth::user()->level == 'kasir') {
            $transaksiQuery->where('id_user', Auth::id());
        }

        $transaksiHariIni = (clone $transaksiQuery)
            ->whereDate('tanggal', $today)
            ->sum('subtotal');

        $transaksiBulanIni = (clone $transaksiQuery)
            ->whereBetween('tanggal', [$startMonth, $endMonth])
            ->sum('subtotal');

        $penjualanBulanan = (clone $transaksiQuery)
            ->selectRaw('MONTH(tanggal) as bulan, SUM(subtotal) as total')
            ->whereBetween('tanggal', [$startYear, $endYear])
            ->groupByRaw('MONTH(tanggal)')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');

        return view('home', compact(
            'judul',
            'produk',
            'user',
            'transaksiHariIni',
            'transaksiBulanIni',
            'penjualanBulanan'
        ));
    }
}
