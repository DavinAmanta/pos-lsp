@extends('layout.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center gap-2">
                    <i class="bx bx-barcode text-primary fs-4"></i>
                    <h3 class="mb-0 text-primary">Tambah Barang Masuk</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('barang_masuk.store') }}" method="POST">
                        @csrf

                        {{-- Scan Barcode --}}
                        <div class="mb-3">
                            <label class="form-label">Kode Produk</label>
                            <input type="text" id="barcode" class="form-control" placeholder="Scan barcode produk"
                                autofocus>

                            <input type="hidden" name="id_produk" id="id_produk">

                            <small id="produk-info" class="text-success d-none"></small>

                            @error('id_produk')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Nama Produk --}}
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" id="nama_produk" class="form-control" placeholder="Nama produk otomatis"
                                readonly>
                        </div>

                        {{-- Jumlah --}}
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" min="1"
                                placeholder="Masukkan jumlah" value="{{ old('jumlah') }}">
                            @error('jumlah')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Harga Beli --}}
                        <div class="mb-3">
                            <label class="form-label">Harga Beli Per Item</label>
                            <input type="number" name="harga_beli" class="form-control" min="1"
                                placeholder="Masukkan harga beli" value="{{ old('harga_beli') }}">
                        </div>

                        {{-- Tanggal --}}
                        <div class="mb-4">
                            <label class="form-label">Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" class="form-control" value="{{ date('Y-m-d') }}">
                        </div>

                        {{-- Action --}}
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('barang_masuk.index') }}" class="btn btn-secondary">
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const barcodeInput = document.getElementById('barcode');
            const produkInfo = document.getElementById('produk-info');
            const produkId = document.getElementById('id_produk');
            const namaProduk = document.getElementById('nama_produk');
            const jumlahInput = document.querySelector('[name="jumlah"]');

            barcodeInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();

                    const kode = this.value.trim();
                    if (!kode) return;

                    fetch(`{{ url('/produk/barcode') }}/${kode}`)
                        .then(response => {
                            if (!response.ok) throw new Error();
                            return response.json();
                        })
                        .then(data => {
                            produkId.value = data.id;
                            namaProduk.value = data.nama;

                            produkInfo.textContent = `✔ ${data.kode} - ${data.nama}`;
                            produkInfo.classList.remove('d-none');

                            jumlahInput.focus();
                        })
                        .catch(() => {
                            alert('Produk tidak ditemukan');
                            produkId.value = '';
                            namaProduk.value = '';
                            produkInfo.classList.add('d-none');
                            barcodeInput.value = '';
                            barcodeInput.focus();
                        });
                }
            });
        });
    </script>
@endsection
