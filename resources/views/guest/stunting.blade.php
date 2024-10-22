@extends('layouts.master')
@push('css')
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: #45b649;
            background: #fff;
        }


        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: '';
                display: block;
                border-top: 8px solid transparent;
                border-left: 10px solid #fff;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }
    </style>
@endpush
@section('content')
    <!-- Content
    ============================================= -->
    <section id="content" class="bg-white">
        <div class="content-wrap pt-0" style="overflow: visible">
            <div class="position-relative">
                <div class="container">
                    <div class="row py-0 py-lg-12">
                        <div class="col-lg-12 py-5">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <div class="fancy-title title-border mb-3"><h5 class="fw-normal color font-body">
                                        DATA STUNTING</h5></div>
                                <h3 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;"><span>Data Stunting</span>
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <!-- Tabs nav -->
                                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab"
                                         role="tablist" aria-orientation="vertical">
                                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab"
                                           data-toggle="pill" href="#v-pills-home" role="tab"
                                           aria-controls="v-pills-home" aria-selected="true">
                                            <i class="fa fa-user-circle-o mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">Jumlah & Prevalensi Stunting</span></a>

                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill"
                                           href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                           aria-selected="false">
                                            <i class="fa fa-calendar-minus-o mr-2"></i>
                                            <span class="font-weight-bold small text-uppercase">Capaian Indikator</span></a>

                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill"
                                           href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                           aria-selected="false">
                                            <i class="fa fa-star mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">Lokus Stunting</span></a>

                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-risiko-tab" data-toggle="pill"
                                           href="#v-pills-risiko" role="tab" aria-controls="v-pills-risiko"
                                           aria-selected="false">
                                            <i class="fa fa-users mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">Keluarga Berisiko Stunting</span></a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <!-- Tabs content -->
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade shadow rounded bg-white show active p-5"
                                             id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <h4 class="font-italic mb-4">Jumlah & Prevalensi Stunting</h4>
                                            <ul class="nav canvas-tabs tabs nav-tabs mb-3" id="canvas-tab"
                                                role="tablist">
                                                @for($i = date('Y');$i >=2022;$i--)
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link @if($i == date('Y')) active @endif"
                                                                id="{{$i}}-tab"
                                                                data-bs-toggle="pill" data-bs-target="#stunting{{$i}}"
                                                                type="button"
                                                                role="tab" aria-controls="canvas-home"
                                                                aria-selected="true">
                                                            {{$i}}
                                                        </button>
                                                    </li>
                                                @endfor
                                            </ul>
                                            <div class="tab-content">
                                                @for($i = date('Y');$i >=2022;$i--)
                                                    <div class="tab-pane fade show @if($i == date('Y')) active @endif"
                                                         id="stunting{{$i}}"
                                                         role="tabpanel"
                                                         aria-labelledby="{{$i}}-tab"
                                                         tabindex="0">
                                                        <div class="accordion accordion-border mb-0">
                                                            @foreach($data->where('kategori',1)->where('tahun', $i) as $datum)
                                                                <div class="accordion-header">
                                                                    <div class="accordion-icon">
                                                                        <i class="accordion-closed icon-ok-circle"></i>
                                                                        <i class="accordion-open icon-remove-circle"></i>
                                                                    </div>
                                                                    <div class="accordion-title">
                                                                        {{$datum->judul}}
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <div class="row">
                                                                        <p>{{$datum->keterangan}}</p>
                                                                        <div class="col-lg-2">
                                                                            <a href="{{route('datastunting.file', $datum->id)}}"
                                                                               class="text-muted " target="_blank"><i
                                                                                    class="fa fa-download"></i> Unduh
                                                                                file
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <a href="{{route('datastunting.file', $datum->id)}}"
                                                                               class="text-muted" target="_blank"><i
                                                                                    class="fa fa-arrow-circle-right"></i>
                                                                                Lihat </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile"
                                             role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h4 class="font-italic mb-4">Capaian Indikator</h4>
                                            <ul class="nav canvas-tabs tabs nav-tabs mb-3" id="canvas-tab"
                                                role="tablist">
                                                @for($i = date('Y');$i >=2022;$i--)
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link @if($i == date('Y')) active @endif"
                                                                id="{{$i}}-tabcapaian"
                                                                data-bs-toggle="pill" data-bs-target="#capaian{{$i}}"
                                                                type="button"
                                                                role="tab" aria-controls="canvas-home"
                                                                aria-selected="true">
                                                            {{$i}}
                                                        </button>
                                                    </li>
                                                @endfor
                                            </ul>
                                            <div class="tab-content">
                                                @for($i = date('Y');$i >=2022;$i--)
                                                    <div class="tab-pane fade show @if($i == date('Y')) active @endif"
                                                         id="capaian{{$i}}"
                                                         role="tabpanel"
                                                         aria-labelledby="{{$i}}-tabcapaian"
                                                         tabindex="0">
                                                        <div class="accordion accordion-border mb-0">
                                                            @if($data->where('kategori',2)->where('tahun', $i)->where('jenis_capaian', 1)->count() != 0)
                                                                <h4 class="text-secondary d-flex justify-content-center mb-0">
                                                                    Data Cakupan</h4>
                                                            @endif
                                                            @foreach($data->where('kategori',2)->where('tahun', $i)->where('jenis_capaian', 1) as $datum)
                                                                <div class="accordion-header">
                                                                    <div class="accordion-icon">
                                                                        <i class="accordion-closed icon-ok-circle"></i>
                                                                        <i class="accordion-open icon-remove-circle"></i>
                                                                    </div>
                                                                    <div class="accordion-title">
                                                                        {{$datum->judul}}
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <div class="row">
                                                                        <p>{{$datum->keterangan}}</p>
                                                                        <div class="col-lg-2">
                                                                            <a href="{{route('datastunting.file', $datum->id)}}"
                                                                               class="text-muted "
                                                                               target="_blank"><i
                                                                                    class="fa fa-download"></i>
                                                                                Unduh
                                                                                file
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <a href="{{route('datastunting.file', $datum->id)}}"
                                                                               class="text-muted" target="_blank"><i
                                                                                    class="fa fa-arrow-circle-right"></i>
                                                                                Lihat </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <hr>
                                                            @if($data->where('kategori',2)->where('tahun', $i)->where('jenis_capaian', 2)->count() != 0)
                                                                <h4 class="text-secondary d-flex justify-content-center mb-0">
                                                                    Data Sasaran</h4>
                                                            @endif
                                                            @foreach($data->where('kategori',2)->where('tahun', $i)->where('jenis_capaian', 2) as $datum)
                                                                <div class="accordion-header">
                                                                    <div class="accordion-icon">
                                                                        <i class="accordion-closed icon-ok-circle"></i>
                                                                        <i class="accordion-open icon-remove-circle"></i>
                                                                    </div>
                                                                    <div class="accordion-title">
                                                                        {{$datum->judul}}
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <div class="row">
                                                                        <p>{{$datum->keterangan}}</p>
                                                                        <div class="col-lg-2">
                                                                            <a href="{{route('datastunting.file', $datum->id)}}"
                                                                               class="text-muted "
                                                                               target="_blank"><i
                                                                                    class="fa fa-download"></i>
                                                                                Unduh
                                                                                file
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <a href="{{route('datastunting.file', $datum->id)}}"
                                                                               class="text-muted" target="_blank"><i
                                                                                    class="fa fa-arrow-circle-right"></i>
                                                                                Lihat </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <hr>
                                                            @if($data->where('kategori',2)->where('tahun', $i)->where('jenis_capaian', 3)->count() != 0)
                                                                <h4 class="text-secondary d-flex justify-content-center mb-0">
                                                                    Data Supply</h4>
                                                            @endif
                                                            @foreach($data->where('kategori',2)->where('tahun', $i)->where('jenis_capaian', 3) as $datum)
                                                                <div class="accordion-header">
                                                                    <div class="accordion-icon">
                                                                        <i class="accordion-closed icon-ok-circle"></i>
                                                                        <i class="accordion-open icon-remove-circle"></i>
                                                                    </div>
                                                                    <div class="accordion-title">
                                                                        {{$datum->judul}}
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-content">
                                                                    <div class="row">
                                                                        <p>{{$datum->keterangan}}</p>
                                                                        <div class="col-lg-2">
                                                                            <a href="{{route('datastunting.file', $datum->id)}}"
                                                                               class="text-muted "
                                                                               target="_blank"><i
                                                                                    class="fa fa-download"></i>
                                                                                Unduh
                                                                                file
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <a href="{{route('datastunting.file', $datum->id)}}"
                                                                               class="text-muted" target="_blank"><i
                                                                                    class="fa fa-arrow-circle-right"></i>
                                                                                Lihat </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages"
                                             role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <h4 class="font-italic mb-4">Lokus Stunting</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',3) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->judul}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <p>{{$datum->keterangan}}</p>
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <a href="{{route('datastunting.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('datastunting.file', $datum->id)}}"
                                                                   class="text-muted" target="_blank"><i
                                                                        class="fa fa-arrow-circle-right"></i> Lihat </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-risiko"
                                             role="tabpanel" aria-labelledby="v-pills-risiko-tab">
                                            <h4 class="font-italic mb-4">Keluarga Berisiko Stunting</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',4) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->judul}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <p>{{$datum->keterangan}}</p>
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <a href="{{route('datastunting.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('datastunting.file', $datum->id)}}"
                                                                   class="text-muted" target="_blank"><i
                                                                        class="fa fa-arrow-circle-right"></i> Lihat </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
@endpush
