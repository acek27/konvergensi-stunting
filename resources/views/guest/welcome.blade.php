@extends('layouts.master')
@section('content')
    <!-- Content
    ============================================= -->
    <section id="content" class="bg-white">
        <div class="content-wrap pt-0" style="overflow: visible">

            <div class="position-relative">
                <div class="container">
                    <div class="row py-0 py-lg-8">
                        <div class="col-lg-8 py-5">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <div class="fancy-title title-border mb-3"><h5 class="fw-normal color font-body">
                                        Stunting</h5></div>
                                <h3 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;">Apa itu <span>Stuntig</span>
                                    ?</h3>
                            </div>
                            <p class="mb-5">Monotonectally pursue intuitive catalysts for change for extensible
                                materials intrinsicly fabricate.</p>

                            <div class="feature-box fbox-plain bottommargin-sm">
                                <div class="fbox-icon">
                                    <i class="icon-line-circle-check text-primary"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="fw-normal nott">Classes Every Week.</h3>
                                    <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
                                        Background.</p>
                                </div>
                            </div>

                            <div class="feature-box fbox-plain bottommargin-sm">
                                <div class="fbox-icon">
                                    <i class="icon-line-circle-check text-warning"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="fw-normal nott">10+ Years Experienced.</h3>
                                    <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
                                        Background.</p>
                                </div>
                            </div>

                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <i class="icon-line-circle-check text-info"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="fw-normal nott">2100+ Members Active.</h3>
                                    <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
                                        Background.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{--                <div class="section-img"--}}
                {{--                     style="background: radial-gradient(ellipse at center, rgba(255,221,148,.7),rgba(255,221,148,1)), url('/canvas/demos/yoga/images/yoga-about.jpg') no-repeat center center / cover">--}}
                {{--                    <img class="section-img-sm" src="canvas/demos/yoga/images/yoga-about-sm.jpg" alt="Section Img">--}}
                {{--                </div>--}}
            </div>
            <div id="section-contact" class="page-section pt-0"
                 data-onepage-settings="{&quot;offset&quot;:65,&quot;speed&quot;:&quot;1250&quot;,&quot;easing&quot;:&quot;easeInOutExpo&quot;}"
                 data-scrollto-settings="{&quot;offset&quot;:70,&quot;speed&quot;:&quot;1250&quot;,&quot;easing&quot;:&quot;easeInOutExpo&quot;}">
                <div class="row mx-0 bottommargin-lg align-items-stretch">
                    <div class="col-lg-8 col-md-6 d-none d-md-block px-0">
                        <img src="{{asset('map.jpeg')}}" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6" style="background-color: #F5F5F5;">
                        <div class="col-padding">
                            <h2 class="fw-bold mb-2 nott" style="font-size: 30px; letter-spacing: -1px">
                                <span>Sebaran</span> dan
                                <span> Capaian</span></h2>
                            <p>Peta sebaran dan capaian konvergensi stunting di Kabupaten Situbondo</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section mb-0 bg-transparent">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <div class="yoga-video position-relative">
                                <img src="canvas/demos/yoga/images/yoga-video.svg" alt="Yoga Image">
                                <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                   class="play-icon"><i class="icon-play1"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <div class="fancy-title title-border mb-3"><h5
                                        class="fw-normal color font-body text-uppercase ls1">8 Aksi Konvergensi</h5>
                                </div>
                                <h2 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;">8 Aksi
                                    Konvergensi</h2>
                            </div>
                            <p class="mb-5 lead mb-0" style="line-height: 1.7;">Monotonectally pursue intuitive
                                catalysts for change for extensible materials. Intrinsicly fabricate principle-centered
                                web-readiness with virtual.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-yogas mb-0" style="background-color: rgba(126, 150, 128,0.2);">
                <div class="container">
                    <div class="row">
                        <h3 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;">High<span>light</span>
                        </h3>
                        @foreach($posts as $post)
                            <div class="col-md-4 mt-0 mb-4">
                                <div class="card">
                                    <div class="posts-md">
                                        <div class="entry">
                                            <div class="entry-image">
                                                <a href="demo-news-single.html"><img class="img-fit"
                                                                                     src="{{route('posts.file', $post->id)}}"
                                                                                     alt="Image 3"></a>
                                            </div>
                                            <div class="entry-title title-sm nott">
                                                <h3><a href="demo-news-single.html">{{$post->title}}</a>
                                                </h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>by</span> <a href="#">{{$post->editor}}</a></li>
                                                    <li><i class="icon-time"></i><a href="#">{{$post->created_at}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry-content clearfix">
                                                <a href="#">selengkapnya..</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
