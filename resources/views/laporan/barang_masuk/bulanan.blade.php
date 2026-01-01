@extends('layout.main')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3 class="text-primary"><i class="bx bx-package"></i> Laporan Barang Masuk Bulanan</h3>
        <form action="{{ route('laporan.barang_masuk.bulanan.pdf') }}" method="GET" target="_blank">
            <input type="hidden" value="{{ request('tanggal') }}" name="tanggal">
            <button type="submit" class="btn btn-danger"><i class="bx bx-download"></i> Cetak PDF</button>
        </form>
    </div>
    <div class="card">
        <div class="mt-3 mb-3 col-lg-3">
            <form action="{{ route('laporan.barang_masuk.bulanan') }}" method="GET" class="d-flex gap-2">
                @csrf
                <input type="month" name="tanggal" class="form-control"
                    value="{{ request('tanggal', date('Y-m')) }}">
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
    </div>
    <div class="card mt-3">
        <h5 class="card-header">Laporan Barang Masuk Bulanan</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga Beli Per Item</th>
                            <th>Jumlah Barang Masuk</th>
                            <th>Tanggal Masuk</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($barangMasuk as $aa)
                            <tr>
                                <td>{{ $barangMasuk->firstItem() + $loop->index }}</td>
                                <td>{{ $aa->produk->kode_produk }}</td>
                                <td>{{ $aa->produk->nama }}</td>
                                <td>Rp {{ number_format($aa->harga_beli, 0, ',', '.') }}</td>
                                <td>{{ $aa->jumlah }}</td>
                                <td>{{ $aa->tanggal_masuk }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    Belum ada data barang masuk
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-3">
                    {{ $barangMasuk->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
