<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nota Transaksi</title>

    <style>
        body {
            font-family: 'Courier New', monospace;
            font-size: 12px;
            width: 280px; /* cocok thermal 58mm */
            margin: auto;
            color: #000;
        }

        .center {
            text-align: center;
        }

        .line {
            display: flex;
            justify-content: space-between;
        }

        .bold {
            font-weight: bold;
        }

        .divider {
            border-top: 1px dashed #000;
            margin: 6px 0;
        }

        .small {
            font-size: 11px;
        }

        .item {
            margin-bottom: 4px;
        }
    </style>
</head>
<body>

    <div class="center bold">
        {{ $konfigurasi->nama_toko }}
    </div>
    <div class="center small">
        NOTA TRANSAKSI
    </div>

    <div class="divider"></div>

    <div class="small">
        <div>Kode : {{ $transaksi->kode_transaksi }}</div>
        <div>Tanggal : {{ \Carbon\Carbon::parse($transaksi->tanggal)->format('d-m-Y H:i') }}</div>
    </div>

    <div class="divider"></div>

    @foreach ($transaksi->DetailTransaksi as $detail)
        <div class="item">
            <div>{{ $detail->produk->nama }}</div>
            <div class="line small">
                <span>{{ $detail->jumlah }} x Rp {{ number_format($detail->harga_jual) }}</span>
                <span>Rp {{ number_format($detail->jumlah * $detail->harga_jual) }}</span>
            </div>
        </div>
    @endforeach

    <div class="divider"></div>

    <div class="line bold">
        <span>Subtotal</span>
        <span>Rp {{ number_format($transaksi->subtotal) }}</span>
    </div>
    <div class="line">
        <span>Bayar</span>
        <span>Rp {{ number_format($transaksi->bayar) }}</span>
    </div>
    <div class="line bold">
        <span>Kembali</span>
        <span>Rp {{ number_format($transaksi->kembalian) }}</span>
    </div>

    <div class="divider"></div>

    <div class="center small">
        Terima kasih 🙏<br>
        Barang yang sudah dibeli<br>
        tidak dapat dikembalikan
    </div>

    <script>
        window.onload = function () {
            window.print();
            setTimeout(() => {
                window.location.href = "{{ route('transaksi.create') }}";
            }, 1000);
        }
    </script>

</body>
</html>
