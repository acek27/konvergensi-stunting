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
                            <h4 class="mb-0 pe-2 ls1 text-uppercase fw-bold">Baca Berita</h4>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarToggler1" aria-controls="navbarToggler1"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <i class="icon-line-menu"></i>
                            </button>
                        </nav>

                        <div class="line line-xs line-dark"></div>
                        <div class="entry clearfix">
                            <h2 class="mb-3 fw-bold h1">{{$post->title}}</h2>

                            <div class="entry-meta d-flex justify-content-between mb-4">
                                <ul>
                                    <li><span>by</span> <a href="#">{{$post->editor}}</a></li>
                                    <li><i class="icon-time"></i><a href="#">{{$post->created_at}}</a></li>
                                </ul>

                            </div>

                            <div class="entry-image">
                                <a href="#"><img src="{{route('posts.file',$post->id)}}" alt="Image 3"></a>
                                <div class="entry-categories"><a href="#" class="bg-travel">Berita</a></div>
                            </div>

                            <div class="entry-content mt-0">

                                {!! $post->content !!}
                            </div>

                        </div>
                    </div>

                    <!-- Top Sidebar Area
                    ============================================= -->
                    <div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
                        <div class="sticky-sidebar">
                            <!-- Sidebar Widget 1
                            ============================================= -->
                            <div class="widget clearfix">
                                <h4 class="mb-2 ls1 text-uppercase fw-bold" style="background: #C4DFAA">Informasi
                                    Stunting</h4>
                                <div class="line line-xs line-market"></div>
                                <div class="row center mt-4 clearfix">
                                    <img src="{{asset('info.jpeg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div> <!-- Sidebar End -->
                </div>
            </div> <!-- Container End -->

            <!-- Fullwidth Carousel
            ============================================= -->

            <div class="container clearfix mt-5">

                <div class="row clearfix">
                    <!-- Second Posts Area
                    ============================================= -->
                    <div class="col-lg-8">
                        <!-- Gallery Slider
                        ============================================= -->
                        <div class="clearfix">
                            <h4 style="background: #9ADCFF" class="mb-2 ls1 text-uppercase fw-bold">
                                BERITA/INFORMASI</h4>
                            <div class="line line-xs line-market"></div>
                            <!-- Flex Thumbs Slider
                            ============================================= -->
                            <div class="row col-mb-50 mb-0">
                                @foreach($posts as $post)
                                    <div class="col-md-6 mt-0">
                                        <!-- Post Article -->
                                        <div class="posts-md">
                                            <div class="entry">
                                                <div class="entry-image">
                                                    <a href="#"><img class="img-fit"
                                                                     src="{{route('posts.file', $post->id)}}"
                                                                     alt="Image 3"></a>
                                                    <div class="entry-categories"><a href="#" class="bg-lifestyle">berita
                                                         - {{$post->opds->singkatan}}</a>
                                                    </div>
                                                </div>
                                                <div class="entry-title title-sm nott">
                                                    <h3 class="mb-0"><a href="#">{{$post->title}}</a></h3>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><span>penyunting: </span> <a href="#">{{$post->editor}}</a>
                                                        </li>
                                                        <li><i class="icon-time"></i><a
                                                                href="#">{{$post->created_at}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $posts->links('guest.paginate') }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section><!-- #content end -->
@endsection
