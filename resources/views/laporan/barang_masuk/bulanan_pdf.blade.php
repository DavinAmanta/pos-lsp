<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Barang Masuk Bulanan</title>

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
            margin-top: 5px;
            font-weight: normal;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #000;
            padding: 6px;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
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

<div class="header">
    <h1>{{ $konfigurasi->nama_toko }}</h1>
    <h3>Laporan Barang Masuk Bulanan</h3>
    <p>Bulan : {{ \Carbon\Carbon::parse($tanggal)->format('F Y') }}</p>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Jumlah</th>
            <th>Tanggal Masuk</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($barangMasuk as $aa)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $aa->produk->kode_produk }}</td>
                <td>{{ $aa->produk->nama }}</td>
                <td class="text-right">Rp {{ number_format($aa->harga_beli, 0, ',', '.') }}</td>
                <td class="text-center">{{ $aa->jumlah }}</td>
                <td class="text-center">{{ \Carbon\Carbon::parse($aa->tanggal_masuk)->format('d-m-Y') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada data</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="footer">
    Dicetak {{ now()->format('d-m-Y H:i') }}
</div>

</body>
</html>
