@extends('layout.main')
@section('content')
<div class="card mb-4">
    <h3 class="card-header text-primary"><i class="bx bx-package"></i> Form Tambah Produk</h3>
    <div class="card-body">
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                    value="{{ old('nama') }}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kode Produk</label>
                <input type="text" name="kode_produk" class="form-control" placeholder="Masukkan kode produk"
                    value="{{ old('kode_produk') }}">
                @error('kode_produk')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" placeholder="Masukkan Harga Jual"
                    value="{{ old('harga_jual') }}">
                @error('harga_jual')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('produk.index') }}"><button type="button" class="btn btn-secondary">Kembali</button></a>
            </div>
        </form>
    </div>
</div>
@endsection
