@extends('layout.main')
@section('content')
@if (session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card">
    <h3 class="card-header text-primary">Operasional Toko</h3>
    <div class="card-body">
        <form action="{{ route('konfigurasi.update',$konfigurasi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Toko</label>
                <input type="text" class="form-control" name="nama_toko" value="{{ $konfigurasi->nama_toko }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Biaya Sewa Toko</label>
                <input type="number" class="form-control" name="biaya_sewa" value="{{ $konfigurasi->biaya_sewa }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Total Gaji Karyawan</label>
                <input type="number" class="form-control" name="gaji_karyawan" value="{{ $konfigurasi->gaji_karyawan }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Total Biaya Lainnya (Air, Listrik, dan Lain lain)</label>
                <input type="number" class="form-control" name="biaya_lainnya" value="{{ $konfigurasi->biaya_lainnya }}">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
