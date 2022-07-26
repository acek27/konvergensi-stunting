@extends('layouts.master')
@section('content')
    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper min-vh-100" data-effect="fade">
        <div class="slider-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide hero-diagonal dark bg-color"
                         style="background: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0, 0.1)), url('canvas/demos/yoga/images/slider/hero-1.jpg') no-repeat center right / auto 100%;">
                        <div class="container" style="z-index: 2;">
                            <div class="row h-100 align-items-center py-5">
                                <div class="col-md-6">
                                    <div class="heading-block border-bottom-0 bottommargin-sm">
                                        <h5 class="text-uppercase ls4 fw-light mb-2 text-white-50"
                                            data-animate="fadeInUp" data-delay="100">Yoga &amp; Meditation</h5>
                                        <h2 class="fw-bold nott ls0" data-animate="fadeInUp" data-delay="200"
                                            style="font-size: 46px;">Yoga is the perfect opportunity to be curious about
                                            who you are.</h2>
                                    </div>
                                    <p class="mb-5 fw-normal lead" data-animate="fadeInUp" data-delay="400"
                                       style="line-height: 1.6;">Monotonectally pursue intuitive catalysts for change
                                        for extensible materials. Intrinsicly fabricate principle-centered web-readiness
                                        with virtual.</p>
                                    <a href="#" data-scrollto="#section-about" data-offset="70" data-animate="fadeInUp"
                                       data-delay="600"
                                       class="btn rounded bg-white color text-uppercase fw-semibold ls1 py-3 px-4">Get
                                        Started <i class="icon-line-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide hero-diagonal dark bg-color"
                         style="background: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0, 0.1)), url('canvas/demos/yoga/images/slider/hero-2.jpg') no-repeat bottom right / auto 100%;">
                        <div class="container" style="z-index: 2;">
                            <div class="row h-100 align-items-center py-5">
                                <div class="col-md-6">
                                    <div class="heading-block border-bottom-0 bottommargin-sm">
                                        <h5 class="text-uppercase ls4 fw-light mb-2 text-white-50"
                                            data-animate="fadeInUp" data-delay="100">Yoga &amp; Meditation</h5>
                                        <h2 class="fw-bold nott ls0" data-animate="fadeInUp" data-delay="200"
                                            style="font-size: 42px;">Yoga is the perfect opportunity to be curious about
                                            who you are.</h2>
                                    </div>
                                    <p class="mb-5 fw-normal lead" data-animate="fadeInUp" data-delay="400"
                                       style="line-height: 1.6;">Monotonectally pursue intuitive catalysts for change
                                        for extensible materials. Intrinsicly fabricate principle-centered web-readiness
                                        with virtual.</p>
                                    <a href="#" data-scrollto="#section-about" data-offset="70" data-animate="fadeInUp"
                                       data-delay="600"
                                       class="btn rounded bg-white color text-uppercase fw-semibold ls1 py-3 px-4">Get
                                        Started <i class="icon-line-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div class="slide-number">
                    <div class="slide-number-current"></div>
                    <span>/</span>
                    <div class="slide-number-total"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content" class="bg-white">
        <div class="content-wrap pt-0" style="overflow: visible">

            <div class="position-relative">
                <div class="container">
                    <div class="row py-0 py-lg-5">
                        <div class="col-lg-5 py-5">
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
                <div class="section-img"
                     style="background: radial-gradient(ellipse at center, rgba(255,221,148,.7),rgba(255,221,148,1)), url('/canvas/demos/yoga/images/yoga-about.jpg') no-repeat center center / cover">
                    <img class="section-img-sm" src="canvas/demos/yoga/images/yoga-about-sm.jpg" alt="Section Img">
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

            <div class="section bg-transparent my-0 pb-1">
                <div class="container">
                    <div class="heading-block" style="max-width: 500px">
                        <h3 class="fw-bold nott mb-4" style="font-size: 42px; letter-spacing: -1px;">Certified Yoga
                            <span>Teachers</span>.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta nesciunt tenetur iste odit
                            animi mollitia amet autem alias ea dicta!</p>
                    </div>
                </div>
                <div id="oc-teachers" class="owl-carousel owl-carousel-full image-carousel carousel-widget customjs">
                    <div class="oc-item">
                        <div class="jumbotron m-0 dark p-5 d-flex justify-content-center align-items-md-end flex-column"
                             style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('demos/yoga/images/teacher/1.jpg') no-repeat center center / cover;">
                            <div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
                                <div class="col-md-8">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <h2 class="mb-1">Ruby Von Rails</h2>
                                        <div class="testi-meta ls1 mb-4 text-light fw-normal"> Professional Trainer
                                        </div>
                                        <div class="testi-content">
                                            <p>Assertively leverage existing integrated communities after turnkey
                                                quality vectors. Assertively coordinate sustainable quality.</p>
                                        </div>
                                    </div>
                                    <div class="social-icons topmargin-sm">
                                        <a href="https://www.facebook.com/semicolonweb/" target="_blank"
                                           class="social-icon si-facebook si-small si-light">
                                            <i class="icon-facebook"></i><i class="icon-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com/semicolonweb/" target="_blank"
                                           class="social-icon si-instagram si-small si-light">
                                            <i class="icon-instagram"></i><i class="icon-instagram"></i>
                                        </a>
                                        <a href="#" target="_blank" class="social-icon si-youtube si-small si-light">
                                            <i class="icon-youtube"></i><i class="icon-youtube"></i>
                                        </a>
                                        <a href="#" target="_blank" class="social-icon si-dribbble si-small si-light">
                                            <i class="icon-dribbble"></i><i class="icon-dribbble"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-md-center mt-3 mt-md-0">
                                    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                       class="play-icon"><i class="icon-play1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="jumbotron m-0 dark p-5 d-flex justify-content-center align-items-md-end flex-column"
                             style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('demos/yoga/images/teacher/2.jpg') no-repeat center center / cover;">
                            <div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
                                <div class="col-md-8">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <h2 class="mb-1">Theodore Handle</h2>
                                        <div class="testi-meta ls1 mb-4 text-light fw-normal"> International Trainer
                                        </div>
                                        <div class="testi-content">
                                            <p>Assertively leverage existing integrated communities after turnkey
                                                quality vectors. Assertively coordinate sustainable quality.</p>
                                        </div>
                                    </div>
                                    <div class="social-icons topmargin-sm">
                                        <a href="https://www.facebook.com/semicolonweb/" target="_blank"
                                           class="social-icon si-facebook si-small si-light">
                                            <i class="icon-facebook"></i><i class="icon-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com/semicolonweb/" target="_blank"
                                           class="social-icon si-instagram si-small si-light">
                                            <i class="icon-instagram"></i><i class="icon-instagram"></i>
                                        </a>
                                        <a href="#" target="_blank" class="social-icon si-youtube si-small si-light">
                                            <i class="icon-youtube"></i><i class="icon-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-md-center mt-3 mt-md-0">
                                    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                       class="play-icon"><i class="icon-play1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="jumbotron m-0 dark p-5 d-flex justify-content-center align-items-md-end flex-column"
                             style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('demos/yoga/images/teacher/3.jpg') no-repeat center center / cover;">
                            <div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
                                <div class="col-md-8">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <h2 class="mb-1">Norman Gordon</h2>
                                        <div class="testi-meta ls1 mb-4 text-light fw-normal"> Professional Trainer
                                        </div>
                                        <div class="testi-content">
                                            <p>Assertively leverage existing integrated communities after turnkey
                                                quality vectors. Assertively coordinate sustainable quality.</p>
                                        </div>
                                    </div>
                                    <div class="social-icons topmargin-sm">
                                        <a href="https://www.facebook.com/semicolonweb/" target="_blank"
                                           class="social-icon si-facebook si-small si-light">
                                            <i class="icon-facebook"></i><i class="icon-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com/semicolonweb/" target="_blank"
                                           class="social-icon si-instagram si-small si-light">
                                            <i class="icon-instagram"></i><i class="icon-instagram"></i>
                                        </a>
                                        <a href="#" target="_blank" class="social-icon si-dribbble si-small si-light">
                                            <i class="icon-dribbble"></i><i class="icon-dribbble"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-md-center mt-3 mt-md-0">
                                    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                       class="play-icon"><i class="icon-play1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="jumbotron m-0 dark p-5 d-flex justify-content-center align-items-md-end flex-column"
                             style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('demos/yoga/images/teacher/4.jpg') no-repeat center center / cover;">
                            <div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
                                <div class="col-md-8">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <h2 class="mb-1">Jason Response</h2>
                                        <div class="testi-meta ls1 mb-4 text-light fw-normal"> International Trainer
                                        </div>
                                        <div class="testi-content">
                                            <p>Assertively leverage existing integrated communities after turnkey
                                                quality vectors. Assertively coordinate sustainable quality.</p>
                                        </div>
                                    </div>
                                    <div class="social-icons topmargin-sm">
                                        <a href="https://www.facebook.com/semicolonweb/" target="_blank"
                                           class="social-icon si-facebook si-small si-light">
                                            <i class="icon-facebook"></i><i class="icon-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com/semicolonweb/" target="_blank"
                                           class="social-icon si-instagram si-small si-light">
                                            <i class="icon-instagram"></i><i class="icon-instagram"></i>
                                        </a>
                                        <a href="#" target="_blank" class="social-icon si-dropbox si-small si-light">
                                            <i class="icon-dropbox"></i><i class="icon-dropbox"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-md-center mt-3 mt-md-0">
                                    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                       class="play-icon"><i class="icon-play1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="jumbotron m-0 dark p-5 d-flex justify-content-center align-items-md-end flex-column"
                             style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('demos/yoga/images/teacher/5.jpg') no-repeat center center / cover;">
                            <div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
                                <div class="col-md-8">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <h2 class="mb-1">Abraham Pigeon</h2>
                                        <div class="testi-meta ls1 mb-4 text-light fw-normal"> Professional Trainer
                                        </div>
                                        <div class="testi-content">
                                            <p>Assertively leverage existing integrated communities after turnkey
                                                quality vectors. Assertively coordinate sustainable quality.</p>
                                        </div>
                                    </div>
                                    <div class="social-icons topmargin-sm">
                                        <a href="https://www.facebook.com/semicolonweb/" target="_blank"
                                           class="social-icon si-facebook si-small si-light">
                                            <i class="icon-facebook"></i><i class="icon-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com/semicolonweb/" target="_blank"
                                           class="social-icon si-instagram si-small si-light">
                                            <i class="icon-instagram"></i><i class="icon-instagram"></i>
                                        </a>
                                        <a href="#" target="_blank" class="social-icon si-email3 si-small si-light">
                                            <i class="icon-email3"></i><i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-md-center mt-3 mt-md-0">
                                    <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe"
                                       class="play-icon"><i class="icon-play1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-schedule"
                 style="background: linear-gradient(to bottom, rgba(126, 150, 128, 0) 0%, rgba(126, 150, 128, 0.8) 70%) left top; padding: 100px 0; background-size: 100% 100%">
                <div class="container">
                    <div class="heading-block border-bottom-0 bottommargin-lg" style="max-width: 700px">
                        <h2 class="fw-bold mb-2 nott" style="font-size: 42px; letter-spacing: -1px">Yoga
                            <span>Schedule</span>.</h2>
                        <p class="lead">Energistically syndicate team building synergy after efficient human capital.
                            Assertively underwhelm sticky solutions.</p>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-5 mt-4 mt-md-0 sticky-sidebar-wrap">
                            <div class="sticky-sidebar">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <a class="nav-link active" id="sc-mon-tab" data-bs-toggle="pill" href="#sc-mon"
                                       role="tab" aria-controls="sc-mon" aria-selected="true">Monday</a>
                                    <a class="nav-link" id="sc-tue-tab" data-bs-toggle="pill" href="#sc-tue" role="tab"
                                       aria-controls="sc-tue" aria-selected="false">Tuesday</a>
                                    <a class="nav-link" id="sc-wed-tab" data-bs-toggle="pill" href="#sc-wed" role="tab"
                                       aria-controls="sc-wed" aria-selected="false">Wednesday</a>
                                    <a class="nav-link" id="sc-thu-tab" data-bs-toggle="pill" href="#sc-thu" role="tab"
                                       aria-controls="sc-thu" aria-selected="false">Thursday</a>
                                    <a class="nav-link" id="sc-fri-tab" data-bs-toggle="pill" href="#sc-fri" role="tab"
                                       aria-controls="sc-fri" aria-selected="false">Friday</a>
                                    <a class="nav-link" id="sc-sat-tab" data-bs-toggle="pill" href="#sc-sat" role="tab"
                                       aria-controls="sc-sat" aria-selected="false">Saturday</a>
                                    <a class="nav-link mb-0" id="sc-sun-tab" data-bs-toggle="pill" href="#sc-sun"
                                       role="tab" aria-controls="sc-sun" aria-selected="false">Sunday</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 mt-5 mt-md-0">
                            <h5 id="week-details" class="font-body text-black-50 d-inline-block">Date</h5><span
                                class="text-black-50"> (Monday - Sunday)</span>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane schedule-wrap fade show active" id="sc-mon" role="tabpanel"
                                     aria-labelledby="sc-mon-tab">
                                    <dl class="row g-0 table mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">8:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Namaste Yoga<small>- Ruby Vov
                                                    Rails</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/1.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">9.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Vrikshasana (Tree Pose)<small>-
                                                    Thodore Handle</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/2.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Naukasana (Boat Pose)<small>- Norman
                                                    Gordon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/3.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">11:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Lunch Break</div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">12.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Paschimottanasana<small>- Jason
                                                    Response</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/4.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">2.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Bandha Sarvangasana Yoga<small>-
                                                    Abraham Piegon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/5.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">4.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Vrikshasana (Tree Pose)<small>-
                                                    Thodore Handle</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/2.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                    </dl>
                                </div>

                                <div class="tab-pane schedule-wrap fade" id="sc-tue" role="tabpanel"
                                     aria-labelledby="sc-tue-tab">
                                    <dl class="row table mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">9.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Vrikshasana (Tree Pose)<small>-
                                                    Thodore Handle</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/2.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Naukasana (Boat Pose)<small>- Norman
                                                    Gordon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/3.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">12.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Paschimottanasana<small>- Jason
                                                    Response</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/4.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">2.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Bandha Sarvangasana Yoga<small>-
                                                    Abraham Piegon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/5.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                    </dl>
                                </div>

                                <div class="tab-pane schedule-wrap fade" id="sc-wed" role="tabpanel"
                                     aria-labelledby="sc-wed-tab">
                                    <dl class="row table mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">8:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Namaste Yoga<small>- Ruby Vov
                                                    Rails</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/1.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">9.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Vrikshasana (Tree Pose)<small>-
                                                    Thodore Handle</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/2.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Naukasana (Boat Pose)<small>- Norman
                                                    Gordon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/3.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">11:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Lunch Break</div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">12.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Paschimottanasana<small>- Jason
                                                    Response</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/4.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">2.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Bandha Sarvangasana Yoga<small>-
                                                    Abraham Piegon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/5.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                    </dl>
                                </div>

                                <div class="tab-pane schedule-wrap fade" id="sc-thu" role="tabpanel"
                                     aria-labelledby="sc-thu-tab">
                                    <dl class="row table mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Naukasana (Boat Pose)<small>- Norman
                                                    Gordon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/3.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">11:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Lunch Break</div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">12.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Paschimottanasana<small>- Jason
                                                    Response</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/4.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">3.00 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Bandha Sarvangasana Yoga<small>-
                                                    Abraham Piegon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/5.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                    </dl>
                                </div>
                                <div class="tab-pane schedule-wrap fade" id="sc-fri" role="tabpanel"
                                     aria-labelledby="sc-fri-tab">
                                    <dl class="row table mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">6.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Paschimottanasana<small>- Jason
                                                    Response</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/4.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">8:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Namaste Yoga<small>- Ruby Vov
                                                    Rails</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/1.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">9.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Vrikshasana (Tree Pose)<small>-
                                                    Thodore Handle</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/2.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Naukasana (Boat Pose)<small>- Norman
                                                    Gordon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/3.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">2.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Bandha Sarvangasana Yoga<small>-
                                                    Abraham Piegon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/5.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                    </dl>
                                </div>

                                <div class="tab-pane schedule-wrap fade" id="sc-sat" role="tabpanel"
                                     aria-labelledby="sc-sat-tab">
                                    <dl class="row table mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">7.20 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Naukasana (Boat Pose)<small>- Norman
                                                    Gordon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/3.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">8:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Namaste Yoga<small>- Ruby Vov
                                                    Rails</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/1.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">9.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Vrikshasana (Tree Pose)<small>-
                                                    Thodore Handle</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/2.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Naukasana (Boat Pose)<small>- Norman
                                                    Gordon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/3.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">2.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Bandha Sarvangasana Yoga<small>-
                                                    Abraham Piegon</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/5.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                    </dl>
                                </div>
                                <div class="tab-pane schedule-wrap fade" id="sc-sun" role="tabpanel"
                                     aria-labelledby="sc-sun-tab">
                                    <dl class="row table mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">6.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Paschimottanasana<small>- Jason
                                                    Response</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/4.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">8:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary">Namaste Yoga<small>- Ruby Vov
                                                    Rails</small></div>
                                            <a href="#"><img src="demos/yoga/images/teacher/thumbs/1.jpg" alt=""
                                                             class="schedule-teacher"></a>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary color">- Closed -</div>
                                        </dt>
                                        <dd class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="schedule-desc font-primary color">Rest of the Time</div>
                                        </dd>

                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-price bg-transparent">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center bottommargin-lg">
                        <div class="heading-block border-bottom-0 mb-0" style="max-width: 700px">
                            <div class="fancy-title title-border mb-3"><h5
                                    class="fw-normal color font-body text-uppercase ls1">Best Price for Everyone</h5>
                            </div>
                            <h2 class="fw-bold mb-2 nott" style="font-size: 42px; letter-spacing: -1px">Your
                                <span>Yoga</span> Plan.</h2>
                            <p class="lead mb-0">Energistically syndicate team building synergy after efficient human
                                capital. Assertively underwhelm sticky solutions.</p>
                        </div>
                        <img src="demos/yoga/images/yoga-img.svg" alt="Yoga Image" class="d-none d-sm-flex" width="300">
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h2 class="fw-normal">
                                1 Free Class.<br>
                                Free Diet Plan.<br>
                                All Classes.<br>
                                24x7 Available.
                            </h2>
                            <p class="text-black-50">Sign up and Get your free 1 Day Trial Class.</p>
                            <a href="#"
                               class="btn rounded bg-color text-white shadow text-uppercase fw-semibold ls1 py-3 px-4">Start
                                Class Today</a>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card pricing border-0 shadow text-center">
                                <div class="card-body rounded pt-5 pb-0">
                                    <img src="demos/yoga/images/yoga-icons/color/svg/mudra_surya.svg" class="mb-3"
                                         alt="" height="40">
                                    <h3>Monthly Subscription</h3>
                                    <ul class="list-unstyled">
                                        <li class="text-black-50 my-1">New Classes Included</li>
                                        <li class="text-black-50 my-1">Any Studio Accessable</li>
                                        <li class="text-black-50 my-1">cancel Any Time</li>
                                    </ul>
                                    <h3 class="mb-3 h2 color">$19.99</h3>
                                    <a href="#"
                                       class="btn rounded bg-color text-white text-uppercase fw-semibold ls1 py-2 px-4">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card pricing border-0 shadow text-center">
                                <div class="card-body rounded pt-5 pb-0">
                                    <img src="demos/yoga/images/yoga-icons/color/svg/mudra_anjali.svg" class="mb-3"
                                         alt="" height="40">
                                    <h3>Annual Subscription</h3>
                                    <ul class="list-unstyled">
                                        <li class="text-black-50 my-1">1 Month Free</li>
                                        <li class="text-black-50 my-1">New Classes Included</li>
                                        <li class="text-black-50 my-1">Any Studio Accessable</li>
                                        <li class="text-black-50 my-1">Free Towel and Juices</li>
                                        <li class="text-black-50 my-1">24x7 Accesable</li>
                                        <li class="text-black-50 my-1">cancel Any Time</li>
                                    </ul>
                                    <h3 class="mb-3 h2">$219.99</h3>
                                    <a href="#"
                                       class="btn rounded bg-dark text-white text-uppercase fw-semibold ls1 py-2 px-4">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear bottommargin"></div>

                    <div class="center text-title"><h3><img src="demos/yoga/images/yoga-icons/outlined/svg/sahasara.svg"
                                                            alt="" width="20" height="20">Additional Features For Annual
                            Subscriber</h3></div>
                    <div class="price-features">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="iconlist mb-0">
                                    <li><i class="icon-line-circle-check color"></i> 24x7 Available</li>
                                    <li><i class="icon-line-circle-check color"></i> Free Lunch Per Day</li>
                                    <li><i class="icon-line-circle-check color"></i> All Classes in One Price</li>
                                    <li><i class="icon-line-circle-check color"></i> Special Event Access</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="iconlist mb-0">
                                    <li><i class="icon-line-circle-check color"></i> Free Towel Provide</li>
                                    <li><i class="icon-line-circle-check color"></i> Free Lockers</li>
                                    <li><i class="icon-line-circle-check color"></i> Free Lockers</li>
                                    <li><i class="icon-line-circle-check color"></i> Free Yoga Mat*</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="iconlist mb-0">
                                    <li><i class="icon-line-circle-check color"></i> 1 Month Free</li>
                                    <li><i class="icon-line-circle-check color"></i> Any Studio Accessable</li>
                                    <li><i class="icon-line-circle-check color"></i> Cancel Anytime</li>
                                    <li><i class="icon-line-circle-check color"></i> No Hidden Charges</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="section bg-transparent border-top mb-0">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="heading-block border-bottom-0 mb-0" style="max-width: 700px">
                            <div class="fancy-title title-border mb-3"><h5
                                    class="fw-normal color font-body text-uppercase ls1">Beautiful Captured</h5></div>
                            <h2 class="fw-bold mb-2 nott" style="font-size: 42px; letter-spacing: -1px">Our
                                <span>Yoga</span> Gallery.</h2>
                            <p class="lead mb-0">Energistically syndicate team building synergy after efficient human
                                capital. Assertively underwhelm sticky solutions.</p>
                        </div>
                        <img src="{{asset('canvas/demos/yoga/images/yoga-2.svg')}}" alt="Yoga Image"
                             class="d-none d-sm-flex" width="300">
                    </div>
                </div>
            </div>
            <div class="section p-0 m-0">
                <div class="masonry-thumbs grid-container grid-2 grid-sm-3 grid-md-4" data-lightbox="gallery">
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/1.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/1.jpg')}}"
                                                         alt="Gallery Thumb 1"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/2.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/2.jpg')}}"
                                                         alt="Gallery Thumb 2"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/3.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/3.jpg')}}"
                                                         alt="Gallery Thumb 3"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/4.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/4.jpg')}}"
                                                         alt="Gallery Thumb 4"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/5.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/5.jpg')}}"
                                                         alt="Gallery Thumb 5"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/6.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/6.jpg')}}"
                                                         alt="Gallery Thumb 6"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/7.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/7.jpg')}}"
                                                         alt="Gallery Thumb 7"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/8.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/8.jpg')}}"
                                                         alt="Gallery Thumb 8"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/9.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/9.jpg')}}"
                                                         alt="Gallery Thumb 9"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/10.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/10.jpg')}}"
                                                         alt="Gallery Thumb 10"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/11.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/11.jpg')}}"
                                                         alt="Gallery Thumb 11"></a>
                    <a class="grid-item" href="{{asset('canvas/demos/yoga/images/gallery/12.jpg')}}"
                       data-lightbox="gallery-item"><img src="{{asset('canvas/demos/yoga/images/gallery/12.jpg')}}"
                                                         alt="Gallery Thumb 12"></a>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

@endsection
