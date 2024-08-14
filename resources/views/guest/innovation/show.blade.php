@extends('layouts.master')
@push('css')
    <style>
        .img-fit {
            display: block;
            max-width: 400px;
            max-height: 200px;
            width: auto;
            height: auto;
            object-fit: cover !important;
        }
    </style>
@endpush
@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row clearfix">

                    <!-- Posts Area
                    ============================================= -->
                    <div class="col-lg-8">

                        <!-- Tab Menu
                        ============================================= -->
                        <nav class="navbar navbar-expand-lg navbar-light p-0" style="background: #ECA6A6">
                            <h4 class="mb-0 pe-2 ls1 text-uppercase fw-bold">Inovasi</h4>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarToggler1" aria-controls="navbarToggler1"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <i class="icon-line-menu"></i>
                            </button>
                        </nav>

                        <div class="line line-xs line-dark"></div>
                        <div class="entry clearfix">
                            <h2 class="mb-3 fw-bold h1">{{$data->nama_inovasi}}</h2>

                            <div class="entry-meta d-flex justify-content-between mb-4">
                                <ul>
                                    <li><a href="#">{{$data->opd->nama_opd}}</a></li>
                                    {{--                                    <li><i class="icon-time"></i><a href="#">{{$post->created_at}}</a></li>--}}
                                </ul>

                            </div>

                            <div class="entry-image">
                                <a href="#"><img src="{{route('innovation.image',$data->id)}}" alt="Image 3"></a>
                                {{--                                <div class="entry-categories"><a href="#" class="bg-travel">Berita</a></div>--}}
                            </div>

                            <div class="entry-content mt-0">
                                <h4>Deskripsi Inovasi</h4>
                                {!! $data->deskripsi !!}
                            </div>
                            <div class="entry-content mt-0">
                                <h4>File Pendukung</h4>
                                <p>- {{$data->nama_pendukung}} <a target="_blank" href="{{route('innovation.file', $data->id)}}"> - Download</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Container End -->
        </div>
    </section><!-- #content end -->
@endsection
