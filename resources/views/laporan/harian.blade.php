@extends('layout.main')
@section('content')
    <div class="d-flex justify-content-between">
        <h3 class="text-primary"><i class="bx bx-receipt"></i> Laporan Penjualan Harian</h3>
        <a href="{{ route('laporan.harian.pdf', ['tanggal' => request('tanggal', date('Y-m-d'))]) }}" target="_blank"><button
                class="btn btn-danger"><i class="bx bx-download"></i> PDF</button></a>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <div class="col-md-4">
                    <label class="form-label">Pilih Tanggal</label>
                    <form action="{{ route('laporan.harian') }}" method="GET">
                        <div class="d-flex gap-2">
                            <input type="date" name="tanggal" class="form-control"
                                value="{{ request('tanggal', date('Y-m-d')) }}">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <p><strong>Tanggal : </strong>{{ date_format($tanggal, 'd F Y') }}</p>
                <table class="table table-bordered">
                    <thead>
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
                        @endif
                    </thead>
                </table>
            </div>
        </div>
        <div class="card mt-3">
            <h5 class="card-header">Tabel Transaksi Harian</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode Transaksi</td>
                                <td>Kasir</td>
                                <td>Tanggal dan Waktu</td>
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
                                            <td rowspan="{{ count($trx->DetailTransaksi) }}" class="fw-bold">
                                                {{ $trx->kode_transaksi }}
                                            </td>
                                            <td rowspan="{{ count($trx->DetailTransaksi) }}">
                                                {{ $trx->users->nama ?? '-' }}</td>
                                            <td rowspan="{{ count($trx->DetailTransaksi) }}">{{ $trx->tanggal }}</td>
                                            <td rowspan="{{ count($trx->DetailTransaksi) }}">Rp
                                                {{ number_format($trx->subtotal) }}</td>
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
