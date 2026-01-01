@extends('layout.main')
@section('content')
<div class="card mb-4">
    <h5 class="card-header">Form Edit Produk</h5>
    <div class="card-body">
        <form action="{{ route('produk.update',$produk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                    value="{{ $produk->nama }}">
                @error('nama')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kode Produk</label>
                <input type="text" name="kode_produk" class="form-control" placeholder="Masukkan kode produk"
                    value="{{ $produk->kode_produk }}">
                @error('kode_produk')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Modal</label>
                <input type="text" name="harga_modal" class="form-control" placeholder="Masukkan Harga Modal"
                    value="{{ $produk->harga_modal }}" readonly>
                @error('harga_modal')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" placeholder="Masukkan Harga Jual"
                    value="{{ $produk->harga_jual }}">
                @error('harga_jual')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control" placeholder="Masukkan Stok"
                    value="{{ $produk->stok }}" readonly>
                @error('stok')
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
