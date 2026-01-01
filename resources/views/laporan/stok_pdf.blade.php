<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Stok Produk</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 18px;
            margin: 0;
        }

        .header h3 {
            font-size: 13px;
            margin: 5px 0 0 0;
            font-weight: normal;
        }

        .info {
            margin-bottom: 10px;
            font-size: 11px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            background-color: #f2f2f2;
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
            font-weight: bold;
        }

        tbody td {
            border: 1px solid #000;
            padding: 6px;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .footer {
            margin-top: 20px;
            font-size: 10px;
            text-align: right;
        }
    </style>
</head>

<body>

    {{-- HEADER --}}
    <div class="header">
        <h1>{{ $konfigurasi->nama_toko }}</h1>
        <h3>Laporan Stok Produk ({{ ucfirst($filter) }})</h3>
    </div>

    {{-- INFO --}}
    <div class="info">
        Tanggal Cetak : {{ date('d-m-Y H:i') }}
    </div>

    {{-- TABLE --}}
    <table>
        <thead>
            <tr>
                <th style="width: 40px;">No</th>
                <th style="width: 120px;">Kode Produk</th>
                <th>Nama Produk</th>
                <th style="width: 120px;">Harga Modal</th>
                <th style="width: 120px;">Harga Jual</th>
                <th style="width: 70px;">Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produk as $aa)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $aa->kode_produk }}</td>
                    <td>{{ $aa->nama }}</td>
                    <td class="text-right">Rp {{ number_format($aa->harga_modal, 0, ',', '.') }}</td>
                    <td class="text-right">Rp {{ number_format($aa->harga_jual, 0, ',', '.') }}</td>
                    <td class="text-center">{{ $aa->stok }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        Belum ada data produk
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer">
        Dicetak oleh sistem • {{ $konfigurasi->nama_toko }}
    </div>

</body>

</html>
