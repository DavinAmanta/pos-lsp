@extends('layout.main')

@section('content')
    <div class="container-fluid">
        @if (Auth::user()->level == 'admin')
            <div class="row g-3 mb-4">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="text-muted">Jumlah User</h5>
                            <h2 class="text-primary fw-bold mb-0">{{ $user }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="text-muted">Jumlah Produk</h5>
                            <h2 class="text-primary fw-bold mb-0">{{ $produk }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="text-muted">Penjualan Hari Ini</h5>
                            <h2 class="text-primary fw-bold mb-0">
                                Rp {{ number_format($transaksiHariIni) }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="text-muted">Penjualan Bulan Ini</h5>
                            <h2 class="text-primary fw-bold mb-0">
                                Rp {{ number_format($transaksiBulanIni) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row g-3 mb-4">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="text-muted">Penjualan Hari Ini</h5>
                            <h2 class="text-primary fw-bold mb-0">
                                Rp {{ number_format($transaksiHariIni) }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="text-muted">Penjualan Bulan Ini</h5>
                            <h2 class="text-primary fw-bold mb-0">
                                Rp {{ number_format($transaksiBulanIni) }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Grafik Penjualan Bulanan {{ date('Y') }}</h5>
            </div>
            <div class="card-body">
                <canvas id="chartPenjualan" height="120"></canvas>
            </div>
        </div>

    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const penjualanBulanan = @json($penjualanBulanan ?? []);

        const labels = [
            'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
            'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
        ];

        const data = labels.map((_, index) => {
            return penjualanBulanan[index + 1] ?? 0;
        });

        const ctx = document.getElementById('chartPenjualan');

        if (ctx) {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total Penjualan',
                        data: data,
                        borderColor: '#696cff',
                        backgroundColor: 'rgba(105,108,255,0.3)',
                        borderWidth: 3,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true
                        }
                    },
                    scales: {
                        y: {
                            ticks: {
                                callback: function(value) {
                                    return 'Rp ' + value.toLocaleString('id-ID');
                                }
                            }
                        }
                    }
                }
            });
        }

    });
</script>
