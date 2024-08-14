@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{asset('canvas/demos/forum/forum.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/demos/forum/css/fonts.css')}}" type="text/css"/>

@endpush
@section('content')
    <div class="content-wrap">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="heading-block border-bottom-0 bottommargin-sm">
                    <div class="fancy-title title-border mb-3"><h5 class="fw-normal color font-body">
                            STATISTIK</h5></div>
                    <h3 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;"><span>Statistik Prevalensi Stunting</span>
                    </h3>
                </div>
            </div>
          <div class="row">
                <div class="col-md-6">
                    <canvas id="prevalensi"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="timbang"></canvas>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script>
           $(document).ready(function () {
               const ctx = document.getElementById('prevalensi');
            new Chart(ctx, {
                plugins: [ChartDataLabels],
                type: 'line',
                data: {
                    labels: ['2018', '2019', '2021', '2022', '2023',],
                    datasets: [{
                        label: 'Prevalensi Stunting Kabupaten Situbondo Tahun 2018 - 2023',
                        data: [30.66, 26.74, 23.7, 30.09, 4.1],
                        borderWidth: 1,
                        borderColor: 'rgba(201,50,133,0.86)',
                        backgroundColor: '#25eae7',
                    }],
                },

                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            min: 0,
                            max: 35,
                        }
                    }
                }
            });
            const tmb = document.getElementById('timbang');
            new Chart(tmb, {
                plugins: [ChartDataLabels],
                type: 'line',
                data: {
                    labels: ['Agustus 2018', 'Agustus 2019', 'Agustus 2020', 'Agustus 2021', 'Agustus 2022', 'Agustus 2023',],
                    datasets: [{
                        label: 'Prevalensi Stunting Berdasarkan Bulantimbang Agustus 2018 - 2023',
                        data: [18.3, 18.05, 12.5, 9.28, 7.08, 5.55],
                        borderWidth: 1,
                        borderColor: 'rgb(224, 17, 95)',
                        backgroundColor: '#50C878',
                    }],
                },

                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            min: 0,
                            max: 35,
                        }
                    }
                }
            });
        });
    </script>
@endpush
