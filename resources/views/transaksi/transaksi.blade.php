@extends('layout.main')
@section('content')
<div class="container-fluid">
    <div class="justify-content-between d-flex">
        <h3 class="text-primary"><i class="bx bx-receipt"></i> Halaman Transaksi Penjualan</h3>
        <a href="{{ route('transaksi.create') }}"><button class="btn btn-primary"><i class="bx bx-plus"></i>Tambah
                Transaksi</button></a>
    </div>
    <div class="card mt-3">
        <h5 class="card-header">Tabel Data Transaksi</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>NO</td>
                            <td>Kode Transaksi</td>
                            <td>Tanggal dan Waktu</td>
                            <td>Kasir</td>
                            <td>Aksi</td>
                        </tr> 
                    </thead>
                    <tbody>
                        @forelse ($transaksi as $aa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $aa->kode_transaksi }}</td>
                            <td>{{ Carbon\Carbon::parse($aa->tanggal)->format('d-m-Y H:i') }}</td>
                            <td>{{ $aa->users->nama }}</td>
                            <td>
                                <a href="{{ route('transaksi.nota_transaksi',$aa->id) }}">
                                    <button class="btn btn-sm btn-primary"><i class="bx bx-show"></i> Nota</button>
                                </a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Belum ada data transaksi</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
