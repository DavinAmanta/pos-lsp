@extends('layout.main')
@section('content')
<div class="card mb-4">
    <h5 class="card-header">Form Tambah User</h5>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ old('nama') }}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username" value="{{ old('username') }}">
                @error('username')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Level</label>
                <select name="level" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                    <option value="manajer">Manajer</option>
                </select>
                @error('level')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('user.index') }}"><button type="button" class="btn btn-secondary">Kembali</button></a>
            </div>
        </form>
    </div>
</div>
@endsection
