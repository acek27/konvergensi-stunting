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
                            <h4 class="mb-0 pe-2 ls1 text-uppercase fw-bold">Pengertian Stunting</h4>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarToggler1" aria-controls="navbarToggler1"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <i class="icon-line-menu"></i>
                            </button>
                        </nav>

                        <div class="line line-xs line-dark"></div>
                        <div class="col-lg-12 py-12">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <h3 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;">Apa itu <span>Stunting</span>
                                    ?</h3>
                            </div>
                            <p class="mb-2">Kondisi dimana seseorang kekurangan gizi kronis (dalam jangka waktu yang
                                lama) Terutama pada Seribu Hari Pertama Kehidupan (1000 HPK) ibu hamil (270 hari) sampai
                                anak usia 2 tahun (730 hari) Sehingga tinggi badannya dibanding usia nya terlihat LEBIH
                                PENDEK dari SEBAYA nya.</p>
                        </div>
                        <!-- Articles
                        ============================================= -->
                        <div class="row align-items-center mt-5">
                            <div class="col-md-12">
                                <div class="heading-block border-bottom-0 bottommargin-sm">
                                    <div class="fancy-title title-border mb-3"><h5
                                            class="fw-normal color font-body text-uppercase ls1">8 Aksi Konvergensi</h5>
                                    </div>
                                    <h2 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;">8 Aksi
                                        Konvergensi</h2>
                                </div>
                                <p class="mb-5 lead mb-0" style="line-height: 1.7;">Instrument dalam bentuk kegiatan
                                    Pemerintah Kabupaten/Kota untuk memperbaiki manajemen penyelenggaraan pelayanan
                                    dasar
                                    agar lebih terpadu dan tepat sasaran.</p>
                            </div>
                            <div class="col-md-12 mb-12 mb-md-0">
                                <div class="yoga-video position-relative">
                                    <img src="{{asset('8aksi.png')}}" alt="Yoga Image">
                                </div>
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
                                <div class="row center clearfix">
                                    <img src="{{asset('bupati.png')}}" data-index="0" alt="Alt 1">
                                </div>
                                <h4 class="mt-4 mb-2 ls1 text-uppercase fw-bold" style="background: #C4DFAA">Informasi
                                    Stunting</h4>
                                <div class="line line-xs line-market"></div>

                                <div class="owl-carousel">
                                    @php
                                        $alt = 1;
                                    @endphp
                                    @foreach($sidebar as $bar)
                                        <div class="row center mt-4 clearfix item">
                                            <img src="{{route('sidebar.file',$bar->id)}}" data-index="{{$alt-1}}"
                                                 alt="Alt {{$alt}}">
                                        </div>
                                        @php
                                            $alt++
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div> <!-- Sidebar End -->
                </div>
            </div> <!-- Container End -->

            <!-- Fullwidth Carousel
            ============================================= -->
            <div class="section bg-transparent m-0">
                <div class="container clearfix">
                    <div class="fancy-title title-border mb-3">
                        <h2 class="fw-bold mb-2 nott" style="font-size: 30px; letter-spacing: -1px">
                            <span>Sebaran</span> dan
                            <span> Capaian</span></h2>
                    </div>

                    <!-- Owl Carousel
                    ============================================= -->
                    <div class="col-lg-12 col-md-12 d-none d-md-block px-0">
                        <div class="col-3 form-group" style="float: right">
                            <label>Lihat sebaran berdasarkan tahun</label>
                            <select class="form-select required valid" name="event-registration-interests" id="maplist">
                                <option value="">-- Pilih Tahun --</option>
                                @php
                                    $tahun = date('Y')+1;
                                    do{
                                       $tahun--;
                                       echo '<option value="'.$tahun.'">'.$tahun.'</option>';
                                    }while ($tahun > 2020)
                                @endphp
                            </select>
                        </div>
                        <img id="map" src="{{route('map.file',$map->id)}}" alt="">
                    </div>
                </div>
            </div> <!-- Container End -->

            <div class="container clearfix">

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
                                                    <h3 class="mb-0"><a
                                                            href="{{route('berita.show', $post->id)}}">{{$post->title}}</a>
                                                    </h3>
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

                    <!-- Second Sidebar
                    ============================================= -->
                    <div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
                        <div class="sticky-sidebar">

                            <!-- Sidebar Widget 3
                            ============================================= -->
                            <div class="widget clearfix">
                                <h4 style="background: #FFB2A6" class="mb-2 ls1 text-uppercase fw-bold">Video</h4>
                                <div class="line line-xs line-travel"></div>

                                <div class="owl-carousel fixed-nav carousel-widget posts-md" data-margin="0"
                                     data-nav="true" data-pagi="false" data-items="1">
                                    @foreach($videos as $video)
                                        <div class="oc-item">
                                            <div class="portfolio-item">
                                                <div class="portfolio-image">
                                                    <a href="portfolio-single-video.html">
                                                        <img
                                                            src="http://img.youtube.com/vi/{{$video->thumbnail}}/maxresdefault.jpg"
                                                            alt="Backpack Contents">
                                                    </a>
                                                    <div class="bg-overlay">
                                                        <div class="bg-overlay-content dark"
                                                             data-hover-animate="fadeIn">
                                                            <a href="{{$video->url}}"
                                                               class="overlay-trigger-icon bg-light text-dark"
                                                               data-hover-animate="fadeInDownSmall"
                                                               data-hover-animate-out="fadeOutUpSmall"
                                                               data-hover-speed="350" data-lightbox="iframe"><i
                                                                    class="icon-line-play"></i></a>
                                                        </div>
                                                        <div class="bg-overlay-bg dark"
                                                             data-hover-animate="fadeIn"></div>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3>{{$video->judul}}</h3>
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
    </section><!-- #content end -->
@endsection
@push('js')
    <script>
        $('#maplist').change(function () {
            var id = $(this).val();
            document.getElementById("map").src = "{{url('peta/sebaran')}}/" + id;
        });

        $(document).ready(function () {
            //show all title in one place..
            $(".item").each(function (i) {
                //you can manipulate..this html generated according to your need...
                //add `<a>` if needed
                $(".titles ul").append(`<li data-index="${i}">${$(this).find("img").attr("title")}</li>`)
            })
            $(".titles ul li:first").addClass("active");
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                autoplay: true,
                items: 1,
            });

            owl.on('translated.owl.carousel', function (event) {
                //get data-index..
                var index_ = $(this).find('.active').find("img").data("index")
                $(".titles li").removeClass("active")
                //for making active
                $("li[data-index=" + index_ + "]").addClass("active");

            });
        })
    </script>
@endpush
