@extends('layout.main')

@section('content')
    <h4 class="fw-bold text-primary mb-3">
        <i class="bx bx-log-in-circle me-1"></i> Kelola Data Barang Masuk
    </h4>

    <div class="mb-3">
        <a href="{{ route('barang_masuk.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tambah Barang Masuk
        </a>
    </div>

    {{-- ALERT --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        {{-- HEADER --}}
        <div class="d-flex justify-content-between align-items-center px-3 pt-3">
            <h3 class="text-primary mb-0">Tabel Data Barang Masuk</h3>

            <form action="{{ route('barang_masuk.index') }}" method="get">
                <div class="mb-1">
                    <label class="form-label mb-1">Pilih Tanggal : </label>
                    <div class="input-group">
                        <input type="date" name="tanggal" class="form-control" value="{{ request('tanggal') }}">
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bx-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        {{-- TABLE --}}
        <div class="table-responsive text-nowrap mt-3">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width:60px">No</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Jumlah Masuk</th>
                        <th>Harga Beli Per Item</th>
                        <th>Tanggal Masuk</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($barangMasuk as $aa)
                        <tr>
                            <td>{{ $barangMasuk->firstItem() + $loop->index }}</td>
                            <td>{{ $aa->produk->kode_produk ?? '-' }}</td>
                            <td>{{ $aa->produk->nama ?? '-' }}</td>
                            <td>{{ $aa->jumlah ?? '-' }}</td>
                            <td>Rp {{ number_format($aa->harga_beli ?? 0, 2, ',', '.') }}</td>
                            <td>{{ $aa->tanggal_masuk ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">
                                Belum ada data barang masuk
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        <div class="card-footer d-flex justify-content-end">
            {{ $barangMasuk->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
