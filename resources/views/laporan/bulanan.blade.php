@extends('layout.main')
@section('content')
    <div class="justify-content-between d-flex">
        <h3 class="text-primary"><i class="bx bx-receipt"></i> Laporan Penjualan Bulanan</h3>
        <a href="{{ route('laporan.bulanan.pdf', ['tanggal' => request('tanggal', date('Y-m'))]) }}" target="_blank"><button
                class="btn btn-danger"><i class="bx bx-download"></i> PDF</button></a>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('laporan.bulanan') }}" method="GET">
                    <label class="form-label">Pilih Bulan :</label>
                    <div class="col-lg-5 d-flex gap-3">
                        <input type="month" name="tanggal" class="form-control"
                            value="{{ request('tanggal', date('Y-m')) }}">
                        <input type="hidden" name="page" value="1">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        @if (auth()->user()->level == 'kasir')
                            <tr>
                                <th>Total Penjualan</th>
                                <td>Rp {{ number_format($totalPenjualan) }}</td>
                            </tr>
                        @endif
                        @if (auth()->user()->level == 'admin' || auth()->user()->level == 'manajer')
                            <tr>
                                <th>Total Penjualan</th>
                                <td>Rp {{ number_format($totalPenjualan) }}</td>
                            </tr>
                            <tr>
                                <th>Total Modal</th>
                                <td>Rp {{ number_format($totalModal) }}</td>
                            </tr>
                            <tr>
                                <th>Laba Kotor</th>
                                <td>Rp {{ number_format($labaKotor) }}</td>
                            </tr>
                            <tr>
                                <th>Biaya Operasional</th>
                                <td>Rp {{ number_format($biayaOperasional) }}</td>
                            </tr>
                            <tr>
                                <th>Laba Bersih</th>
                                <td>Rp {{ number_format($labaBersih) }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Transaksi</td>
                                <td>Tanggal dan Waktu</td>
                                <td>Kasir</td>
                                <td>Total</td>
                                <td>Detail Barang</td>
                                <td>Qty</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transaksi as $i => $trx)
                                @foreach ($trx->DetailTransaksi as $j => $d)
                                    <tr>
                                        @if ($j == 0)
                                            <td rowspan="{{ $trx->DetailTransaksi->count() }}">
                                                {{ $transaksi->firstItem() + $i }}
                                            </td>
                                            <td rowspan="{{ count($trx->DetailTransaksi) }}">{{ $trx->kode_transaksi }}
                                            </td>
                                            <td rowspan="{{ count($trx->DetailTransaksi) }}">{{ $trx->tanggal }}</td>
                                            <td rowspan="{{ count($trx->DetailTransaksi) }}">{{ $trx->users->nama }}</td>
                                            <td rowspan="{{ count($trx->DetailTransaksi) }}">{{ $trx->subtotal }}</td>
                                        @endif
                                        <td>{{ $d->produk->nama }}</td>
                                        <td>{{ $d->jumlah }}</td>
                                    </tr>
                                @endforeach
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">Belum ada data transaksi</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="card-footer d-flex justify-content-end">
                        {{ $transaksi->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
