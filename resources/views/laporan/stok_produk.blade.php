@extends('layout.main')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3 class="text-primary"><i class="bx bx-package"></i> Laporan Stok Produk</h3>
        <form action="{{ route('laporan.stok-pdf') }}" method="GET" target="_blank">
            <input type="hidden" value="{{ request('filter') }}" name="filter">
            <button type="submit" class="btn btn-danger"><i class="bx bx-download"></i> Cetak PDF</button>
        </form>
    </div>
    <div class="card">
        <div class="mt-3 mb-3 col-lg-3">
            <form action="{{ route('laporan.stok') }}" method="GET" class="d-flex gap-2">
                @csrf
                <select name="filter" class="form-control">
                    <option value="semua" {{ request('filter') == 'semua' ? 'selected' : '' }}>Semua</option>
                    <option value="masih" {{ request('filter') == 'masih' ? 'selected' : '' }}>Masih</option>
                    <option value="stok_menipis" {{ request('filter') == 'stok_menipis' ? 'selected' : '' }}>Stok Menipis
                    </option>
                    <option value="habis" {{ request('filter') == 'habis' ? 'selected' : '' }}>Habis</option>
                </select>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
    </div>
    <div class="card mt-3">
        <h5 class="card-header">Laporan Stok Barang</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga Modal</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($produk as $aa)
                            <tr>
                                <td>{{ $produk->firstItem() + $loop->index }}</td>
                                <td>{{ $aa->kode_produk }}</td>
                                <td>{{ $aa->nama }}</td>
                                <td>Rp {{ number_format($aa->harga_modal, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($aa->harga_jual, 0, ',', '.') }}</td>
                                <td>{{ $aa->stok }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    Belum ada data produk
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-3">
                    {{ $produk->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
