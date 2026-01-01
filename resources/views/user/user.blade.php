@extends('layout.main')

@section('content')
    <h4 class="fw-bold text-primary mb-3">
        <i class="bx bx-user me-1"></i> Kelola Data User
    </h4>

    <div class="mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i> Tambah User
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
            <h3 class="text-primary mb-0">Tabel Data User</h3>

            <form action="{{ route('user.index') }}" method="get" class="d-flex" style="max-width: 280px;">
                <input type="text" class="form-control" name="search" placeholder="Cari user..."
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
                        <th>Nama</th>
                        <th>Username</th>
                        <th style="width:120px">Level</th>
                        <th style="width:150px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($user as $aa)
                        <tr>
                            <td>{{ $user->firstItem() + $loop->index }}</td>
                            <td class="fw-semibold">{{ $aa->nama }}</td>
                            <td>{{ $aa->username }}</td>
                            <td>
                                <span class="badge bg-label-primary">
                                    {{ ucfirst($aa->level) }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('user.edit', $aa->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <form action="{{ route('user.destroy', $aa->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                Belum ada data user
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        <div class="card-footer d-flex justify-content-end">
            {{ $user->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
