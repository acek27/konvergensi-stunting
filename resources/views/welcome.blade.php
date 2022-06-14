@extends('layouts.master')
@section('carousel')
    <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100">
        <div class="slider-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-animate="fadeInUp">Welcome to Canvas</h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just what
                                    you need for your Perfect Website. Choose from a wide range of Elements &amp; simply
                                    put them on our Canvas.</p>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url('images/slider/swiper/1.jpg');"></div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks beautiful
                                    &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive
                                    functionality that can be adapted to any screen size.</p>
                            </div>
                        </div>
                        <div class="video-wrap">
                            <video poster="images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
                                <source src='images/videos/explore.mp4' type='video/mp4'/>
                                <source src='images/videos/explore.webm' type='video/webm'/>
                            </video>
                            <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="slider-caption">
                                <h2 data-animate="fadeInUp">Great Performance</h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be
                                    surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                            </div>
                        </div>
                        <div class="swiper-slide-bg"
                             style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;"></div>
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
@endsection

@section('content')
    <div class="section header-stick">
        <div class="container clearfix">
            <div class="row">

                <div class="col-lg-9">
                    <div class="heading-block bottommargin-sm">
                        <h3>We specialize in Robust Software Solutions</h3>
                    </div>

                    <p class="mb-0">Lasting change, stakeholders development Angelina Jolie world problem
                        solving progressive. Courageous; social entrepreneurship change; accelerate resolve
                        pursue these aspirations asylum.</p>
                </div>

                <div class="col-lg-3">
                    <a href="#" class="button button-3d button-dark button-large w-100 center"
                       style="margin-top: 30px;">Check our Services</a>
                </div>

            </div>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row justify-content-center col-mb-50">
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box media-box">
                    <div class="fbox-media">
                        <img src="images/services/1.jpg" alt="Why choose Us?">
                    </div>
                    <div class="fbox-content px-0">
                        <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis
                            voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="feature-box media-box">
                    <div class="fbox-media">
                        <img src="images/services/2.jpg" alt="Why choose Us?">
                    </div>
                    <div class="fbox-content px-0">
                        <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                        <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque
                            tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="feature-box media-box">
                    <div class="fbox-media">
                        <img src="images/services/3.jpg" alt="Why choose Us?">
                    </div>
                    <div class="fbox-content px-0">
                        <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                        <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore
                            totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="section parallax bottommargin-lg"
         style="background-image: url('images/parallax/3.jpg'); padding: 100px 0;"
         data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
        <div class="heading-block center border-bottom-0 mb-0">
            <h2>"Everything is designed, but some things are designed well."</h2>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row gutter-40 mb-0">

            <div class="col-lg-5">

                <div class="accordion accordion-border mb-0">

                    <div class="accordion-header">
                        <div class="accordion-icon">
                            <i class="accordion-closed icon-ok-circle"></i>
                            <i class="accordion-open icon-remove-circle"></i>
                        </div>
                        <div class="accordion-title">
                            Our Company's Values
                        </div>
                    </div>
                    <div class="accordion-content">Nullam id dolor id nibh ultricies vehicula ut id elit.
                        Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est
                        non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                    </div>

                    <div class="accordion-header">
                        <div class="accordion-icon">
                            <i class="accordion-closed icon-ok-circle"></i>
                            <i class="accordion-open icon-remove-circle"></i>
                        </div>
                        <div class="accordion-title">
                            How to get Support?
                        </div>
                    </div>
                    <div class="accordion-content">Nullam id dolor id nibh ultricies vehicula ut id elit.
                        Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est
                        non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                    </div>

                    <div class="accordion-header">
                        <div class="accordion-icon">
                            <i class="accordion-closed icon-ok-circle"></i>
                            <i class="accordion-open icon-remove-circle"></i>
                        </div>
                        <div class="accordion-title">
                            Where can you find us?
                        </div>
                    </div>
                    <div class="accordion-content">Nullam id dolor id nibh ultricies vehicula ut id elit.
                        Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est
                        non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                    </div>

                    <div class="accordion-header">
                        <div class="accordion-icon">
                            <i class="accordion-closed icon-ok-circle"></i>
                            <i class="accordion-open icon-remove-circle"></i>
                        </div>
                        <div class="accordion-title">
                            Why you choose our Company?
                        </div>
                    </div>
                    <div class="accordion-content">Nullam id dolor id nibh ultricies vehicula ut id elit.
                        Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est
                        non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="fancy-title title-border">
                    <h4>Our Skills</h4>
                </div>

                <ul class="skills">
                    <li data-percent="80">
                        <span>Wordpress</span>
                        <div class="progress">
                            <div class="progress-percent">
                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                           data-to="80"
                                                                                           data-refresh-interval="30"
                                                                                           data-speed="1000"></span>%
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-percent="60">
                        <span>CSS3</span>
                        <div class="progress">
                            <div class="progress-percent">
                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                           data-to="60"
                                                                                           data-refresh-interval="30"
                                                                                           data-speed="1000"></span>%
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-percent="90">
                        <span>HTML5</span>
                        <div class="progress">
                            <div class="progress-percent">
                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                           data-to="90"
                                                                                           data-refresh-interval="30"
                                                                                           data-speed="1000"></span>%
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-percent="85">
                        <span>PHP</span>
                        <div class="progress">
                            <div class="progress-percent">
                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                           data-to="85"
                                                                                           data-refresh-interval="30"
                                                                                           data-speed="1000"></span>%
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-percent="70">
                        <span>jQuery</span>
                        <div class="progress">
                            <div class="progress-percent">
                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                           data-to="70"
                                                                                           data-refresh-interval="30"
                                                                                           data-speed="1000"></span>%
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="col-lg-4 col-md-6">

                <div class="fancy-title title-border">
                    <h4>Recently Posted</h4>
                </div>

                <div class="posts-sm row col-mb-30" id="home-recent-news">
                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-auto">
                                <div class="entry-image">
                                    <a href="#"><img src="images/magazine/small/5.jpg" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="entry-title">
                                    <h4><a href="#">A Baseball Team Blew Up A Bunch Of Justin Bieber And Miley
                                            Cyrus Merch</a></h4>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th July 2021</li>
                                        <li><a href="#"><i class="icon-comments"></i> 43</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-auto">
                                <div class="entry-image">
                                    <a href="#"><img src="images/magazine/small/6.jpg" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="entry-title">
                                    <h4><a href="#">Want To Know The New 'Star Wars' Plot? Then This Is The Post
                                            For You</a></h4>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th July 2021</li>
                                        <li><a href="#"><i class="icon-comments"></i> 43</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-auto">
                                <div class="entry-image">
                                    <a href="#"><img src="images/magazine/small/movie/4.jpg" alt="Image"></a>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="entry-title">
                                    <h4><a href="#">Planes: Fire And Rescue</a></h4>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li class="color"><i class="icon-star3"></i><i class="icon-star3"></i><i
                                                class="icon-star-empty"></i><i class="icon-star-empty"></i><i
                                                class="icon-star-empty"></i></li>
                                        <li><i class="icon-heart3 text-warning"></i> 45%</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section topmargin-sm footer-stick">

        <h4 class="text-uppercase text-center">What <span>Clients</span> say?</h4>

        <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
            <div class="flexslider">
                <div class="slider-wrap">
                    <div class="slide">
                        <div class="testi-image">
                            <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                        </div>
                        <div class="testi-content">
                            <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia
                                eaque. Repellendus, vero numquam?</p>
                            <div class="testi-meta">
                                Steve Jobs
                                <span>Apple Inc.</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="testi-image">
                            <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                        </div>
                        <div class="testi-content">
                            <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos
                                obcaecati id culpa corporis molestias.</p>
                            <div class="testi-meta">
                                Collis Ta'eed
                                <span>Envato Inc.</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="testi-image">
                            <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                        </div>
                        <div class="testi-content">
                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam
                                cum libero illo rerum!</p>
                            <div class="testi-meta">
                                John Doe
                                <span>XYZ Inc.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('js')
    <script src="{{asset('canvas/js/functions.js')}}"></script>
@endpush
