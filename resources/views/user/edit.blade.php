@extends('layout.main')
@section('content')
<div class="card mb-4">
    <h5 class="card-header">Form Edit User</h5>
    <div class="card-body">
        <form action="{{ route('user.update',$user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $user->nama }}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Level</label>
                <select name="level" class="form-control">
                    <option value="admin" {{ $user->level == 'admin' ? 'selected' : ''  }}>Admin</option>
                    <option value="kasir" {{ $user->level == 'kasir' ? 'selected' : '' }}>Kasir</option>
                    <option value="manajer" {{ $user->level == 'manajer' ? 'selected' : '' }}>Manajer</option>
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
