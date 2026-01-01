@extends('layout.main')

@section('content')
    <h4 class="fw-bold text-primary mb-3">
        <i class="bx bx-box me-1"></i> Kelola Data Produk
    </h4>

    <div class="mb-3">
        <a href="{{ route('produk.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tambah Produk
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
            <h3 class="text-primary mb-0">Tabel Data Produk</h3>

            <form action="{{ route('produk.index') }}" method="get" class="d-flex" style="max-width: 280px;">
                <input type="text" class="form-control" name="search" placeholder="Cari Produk..."
                    value="{{ request('search') }}">
                <button class="btn btn-primary ms-1" type="submit">
                    <i class="bx bx-search"></i>
                </button>
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
                        <th>Harga Modal</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($produk as $aa)
                        <tr>
                            <td>{{ $produk->firstItem() + $loop->index }}</td>
                            <td>{{ $aa->kode_produk }}</td>
                            <td>{{ $aa->nama }}</td>
                            <td>Rp {{ number_format($aa->harga_modal, 2, ',', '.') }}</td>
                            <td>Rp {{ number_format($aa->harga_jual, 2, ',', '.') }}</td>
                            <td>{{ $aa->stok }}</td>
                            <td>
                                <a href="{{ route('produk.edit', $aa->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bx bx-edit"></i>
                                </a>
                                <form action="{{ route('produk.destroy', $aa->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">
                                Belum ada data produk
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        <div class="card-footer d-flex justify-content-end">
            {{ $produk->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
