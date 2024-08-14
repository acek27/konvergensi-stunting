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
                                        LEGALITAS/PERATURAN</h5></div>
                                <h3 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;"><span>Legalitas/Peraturan</span>
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
                                            <i class="fa fa-file-text mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">PERPRES</span></a>

                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill"
                                           href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                           aria-selected="false">
                                            <i class="fa fa-file-text mr-2"></i>
                                            <span class="font-weight-bold small text-uppercase">PERKA</span></a>

                                        <!--<a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill"-->
                                        <!--   href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"-->
                                        <!--   aria-selected="false">-->
                                        <!--    <i class="fa fa-file-text mr-2"></i>-->
                                        <!--    <span-->
                                        <!--        class="font-weight-bold small text-uppercase">BKKBN</span></a>-->
                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                                           href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                           aria-selected="false">
                                            <i class="fa fa-file-text mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">PERBUP</span></a>
                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-sk-tab" data-toggle="pill"
                                           href="#v-pills-sk" role="tab" aria-controls="v-pills-sk"
                                           aria-selected="false">
                                            <i class="fa fa-file-text mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">SK</span></a>
                                        <!--<a class="nav-link mb-3 p-3 shadow" id="v-pills-perdes-tab" data-toggle="pill"-->
                                        <!--   href="#v-pills-perdes" role="tab" aria-controls="v-pills-perdes"-->
                                        <!--   aria-selected="false">-->
                                        <!--    <i class="fa fa-file-text mr-2"></i>-->
                                        <!--    <span-->
                                        <!--        class="font-weight-bold small text-uppercase">PERDES</span></a>-->

                                        <!--<a class="nav-link mb-3 p-3 shadow" id="v-pills-perkades-tab" data-toggle="pill"-->
                                        <!--   href="#v-pills-perkades" role="tab" aria-controls="v-pills-perkades"-->
                                        <!--   aria-selected="false">-->
                                        <!--    <i class="fa fa-file-text mr-2"></i>-->
                                        <!--    <span-->
                                        <!--        class="font-weight-bold small text-uppercase">PERKADES</span></a>-->
                                    </div>
                                </div>


                                <div class="col-md-9">
                                    <!-- Tabs content -->
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade shadow rounded bg-white show active p-5"
                                             id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <h4 class="font-italic mb-4">PERPRES</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',1) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->nama_peraturan}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <div class="row">
                                                            <p>{{$datum->nama_peraturan}}
                                                                nomor {{$datum->nomor}} tentang {{$datum->tentang}}</p>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted" target="_blank"><i
                                                                        class="fa fa-arrow-circle-right"></i> Lihat </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile"
                                             role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h4 class="font-italic mb-4">PERKA</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',2) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->nama_peraturan}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <div class="row">
                                                            <p>{{$datum->nama_peraturan}}
                                                                nomor {{$datum->nomor}} tentang {{$datum->tentang}}</p>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted" target="_blank"><i
                                                                        class="fa fa-arrow-circle-right"></i> Lihat </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages"
                                             role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <h4 class="font-italic mb-4">BKKBN</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',3) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->nama_peraturan}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <div class="row">
                                                            <p>{{$datum->nama_peraturan}}
                                                                nomor {{$datum->nomor}} tentang {{$datum->tentang}}</p>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted" target="_blank"><i
                                                                        class="fa fa-arrow-circle-right"></i> Lihat </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings"
                                             role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <h4 class="font-italic mb-4">PERBUP</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',4) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->nama_peraturan}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <div class="row">
                                                            <p>{{$datum->nama_peraturan}}
                                                                nomor {{$datum->nomor}} tentang {{$datum->tentang}}</p>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted" target="_blank"><i
                                                                        class="fa fa-arrow-circle-right"></i> Lihat </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-sk"
                                             role="tabpanel" aria-labelledby="v-pills-sk-tab">
                                            <h4 class="font-italic mb-4">SK</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',5) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->nama_peraturan}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <div class="row">
                                                            <p>{{$datum->nama_peraturan}}
                                                                nomor {{$datum->nomor}} tentang {{$datum->tentang}}</p>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted" target="_blank"><i
                                                                        class="fa fa-arrow-circle-right"></i> Lihat </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-perdes"
                                             role="tabpanel" aria-labelledby="v-pills-sk-tab">
                                            <h4 class="font-italic mb-4">PERDES</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',6) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->nama_peraturan}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <div class="row">
                                                            <p>{{$datum->nama_peraturan}}
                                                                nomor {{$datum->nomor}} tentang {{$datum->tentang}}</p>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted" target="_blank"><i
                                                                        class="fa fa-arrow-circle-right"></i> Lihat </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-perkades"
                                             role="tabpanel" aria-labelledby="v-pills-sk-tab">
                                            <h4 class="font-italic mb-4">PERKADES</h4>
                                            <div class="accordion accordion-border mb-0">
                                                @foreach($data->where('kategori',7) as $datum)
                                                    <div class="accordion-header">
                                                        <div class="accordion-icon">
                                                            <i class="accordion-closed icon-ok-circle"></i>
                                                            <i class="accordion-open icon-remove-circle"></i>
                                                        </div>
                                                        <div class="accordion-title">
                                                            {{$datum->nama_peraturan}}
                                                        </div>
                                                    </div>
                                                    <div class="accordion-content">
                                                        <div class="row">
                                                            <p>{{$datum->nama_peraturan}}
                                                                nomor {{$datum->nomor}} tentang {{$datum->tentang}}</p>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
                                                                   class="text-muted " target="_blank"><i
                                                                        class="fa fa-download"></i> Unduh file </a>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="{{route('peraturan.file', $datum->id)}}"
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
        </div>
    </section><!-- #content end -->
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
@endpush
