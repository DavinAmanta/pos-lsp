@extends('layout.main')

@section('content')
    <div class="row">

        {{-- KOLOM KIRI --}}
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-3">
                <div class="card border border-primary shadow-sm">
                    <div class="card-header bg-primary text-white ">
                        <h5 class="mb-0 text-white">Scan / Cari produk</h5>
                    </div>
                    <div class="card-body">
                        <div class="mt-3">
                            <form action="{{ route('transaksi.create') }}" method="GET">
                                <div class="input-group"> <input type="text" name="kode_produk" class="form-control"
                                        autofocus placeholder="Masukkan Kode ..."> <button type="submit"
                                        class="btn btn-primary"><i class="bx bx-search"></i></button> </div>
                        </div>
                        </form>
                    </div>
                </div>

                {{-- ALERT --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-0">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mb-0">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

            </div>
        </div>

        {{-- KOLOM KANAN --}}
        <div class="col-lg-8">
            <div class="card border border-secondary shadow-sm">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Daftar Belanja</h5>
                    <span class="badge bg-primary fs-6">
                        Total : Rp {{ number_format($total) }}
                    </span>
                </div>

                {{-- TABLE --}}
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 align-middle">
                            <thead class="table-secondary">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($keranjang as $i => $aa)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $aa['nama'] }}</td>
                                        <td class="text-end">Rp {{ number_format($aa['harga_jual']) }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('transaksi.updateJumlah') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="cek" value="{{ $i }}">
                                                <input type="number" name="jumlah" min="1"
                                                    class="form-control form-control-sm text-center" style="width: 60px"
                                                    value="{{ $aa['jumlah'] }}" onchange="this.form.submit()" min="1">
                                            </form>
                                        </td>
                                        <td class="text-end">
                                            Rp {{ number_format($aa['jumlah'] * $aa['harga_jual']) }}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('transaksi.hapus') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="cek" value="{{ $i }}">
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="bx bx-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">
                                            Belum ada produk
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- BAYAR --}}
                @if (count($keranjang) > 0)
                    <div class="card-footer">
                        <form action="{{ route('transaksi.bayar') }}" method="POST">
                            @csrf
                            <div class="row align-items-end">
                                <div class="col-md-4">
                                    <label class="form-label">Bayar</label>
                                    <input type="number" name="bayar" id="bayar" class="form-control"
                                        placeholder="Masukkan nominal..." required oninput="hitungKembalian()" min="1">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Kembalian</label>
                                    <input type="text" id="kembalian" class="form-control" readonly>
                                </div>

                                <div class="col-md-4 text-end">
                                    <button type="submit" class="btn btn-primary px-4">
                                        Bayar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- SCRIPT HITUNG KEMBALIAN --}}
    <script>
        function hitungKembalian() {
            let total = {{ $total }};
            let bayar = document.getElementById('bayar').value || 0;
            let kembalian = bayar - total;

            let field = document.getElementById('kembalian');

            if (kembalian >= 0) {
                field.value = 'Rp ' + kembalian.toLocaleString('id-ID');
                field.classList.remove('text-danger');
                field.classList.add('text-success');
            } else {
                field.value = 'Rp 0';
                field.classList.remove('text-success');
                field.classList.add('text-danger');
            }
        }
    </script>
@endsection
