<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan Bulanan</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
        }

        h2,
        h3,
        p {
            text-align: center;
            margin: 0;
        }

        h2 {
            font-size: 18px;
        }

        h3 {
            font-size: 13px;
            font-weight: normal;
        }

        hr {
            border: none;
            border-top: 1px solid #999;
            margin: 10px 0 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        th,
        td {
            border: 1px solid #999;
            padding: 6px 5px;
            vertical-align: top;
            word-wrap: break-word;
        }

        th {
            background: #f2f2f2;
            text-align: center;
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .summary th {
            width: 45%;
            text-align: left;
        }

        .summary td {
            width: 55%;
            text-align: right;
            font-weight: bold;
        }

        .no-data {
            text-align: center;
            font-style: italic;
        }
    </style>
</head>

<body>

    <h2>Laporan Penjualan Bulanan</h2>
    <h3>{{ $konfigurasi->nama_toko }}</h3>
    <p>{{ $namaBulan }} {{ $tahun }}</p>

    <hr>

    <table class="summary">
        <tr>
            <th>Total Penjualan</th>
            <td>Rp {{ number_format($totalPenjualan, 0, ',', '.') }}</td>
        </tr>

        @if (auth()->user()->level == 'admin' || auth()->user()->level == 'manajer')
            <tr>
                <th>Total Modal</th>
                <td>Rp {{ number_format($totalModal, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Laba Kotor</th>
                <td>Rp {{ number_format($labaKotor, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Biaya Operasional</th>
                <td>Rp {{ number_format($biayaOperasional, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Laba Bersih</th>
                <td>Rp {{ number_format($labaBersih, 0, ',', '.') }}</td>
            </tr>
        @endif
    </table>

    <br>

    <table>
        <thead>
            <tr>
                <th style="width: 4%;">No</th>
                <th style="width: 20%;">Kode</th>
                <th style="width: 15%;">Tanggal</th>
                <th style="width: 10%;">Kasir</th>
                <th style="width: 13%;">Total</th>
                <th style="width: 20%;">Produk</th>
                <th style="width: 10%;">Qty</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transaksi as $i => $trx)
                @foreach ($trx->DetailTransaksi as $j => $d)
                    <tr>
                        @if ($j == 0)
                            <td rowspan="{{ count($trx->DetailTransaksi) }}" class="text-center">
                                {{ $i + 1 }}
                            </td>
                            <td rowspan="{{ count($trx->DetailTransaksi) }}">
                                {{ $trx->kode_transaksi }}
                            </td>
                            <td rowspan="{{ count($trx->DetailTransaksi) }}" class="text-center">
                                {{ \Carbon\Carbon::parse($trx->tanggal)->format('d-m-Y H:i') }}
                            </td>
                            <td rowspan="{{ count($trx->DetailTransaksi) }}">
                                {{ $trx->users->nama ?? '-' }}
                            </td>
                            <td rowspan="{{ count($trx->DetailTransaksi) }}" class="text-right">
                                Rp {{ number_format($trx->subtotal, 0, ',', '.') }}
                            </td>
                        @endif

                        <td>{{ $d->produk->nama }}</td>
                        <td class="text-center">{{ $d->jumlah }}</td>
                    </tr>
                @endforeach
            @empty
                <tr>
                    <td colspan="7" class="no-data">
                        Tidak ada data penjualan pada periode ini
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>
