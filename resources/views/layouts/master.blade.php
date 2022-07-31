<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Sansita:400,700|Roboto:400,500&display=swap" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/swiper.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/dark.css')}}" type="text/css"/>

    <!-- Yoga Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('canvas/css/colors.php?color=7E9680')}}" type="text/css"/>
    <!-- Yoga Theme Color -->
    <link rel="stylesheet" href="{{asset('canvas/demos/yoga/css/fonts.css')}}" type="text/css"/><!-- Yoga Theme Font -->
    <link rel="stylesheet" href="{{asset('canvas/demos/yoga/yoga.css')}}" type="text/css"/>
    <!-- Yoga Theme Custom CSS -->
    <!-- / -->

    <link rel="stylesheet" href="{{asset('canvas/css/font-icons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/magnific-popup.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('canvas/css/calendar.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/custom.css')}}" type="text/css"/>
    @stack('css')
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <style>
        .img-fit {
            display: block;
            max-width: 400px;
            max-height: 200px;
            width: auto;
            height: auto;
            object-fit: cover;
        }
    </style>
    <!-- Document Title
    ============================================= -->
    @yield('title')

</head>

<body class="stretched sticky-footer">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="border-full-header header-size-custom" data-sticky-shrink="false"
            data-sticky-offset="52">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-lg-between">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo" class="order-lg-2 col-auto px-0 me-lg-0">
                        <a href="#" class="standard-logo"
                           data-dark-logo="{{asset('canvas/demos/yoga/images/logo-dark.png')}}"><img
                                src="{{asset('canvas/demos/yoga/images/logo.png')}}" alt="Canvas Logo"></a>
                        <a href="#" class="retina-logo"
                           data-dark-logo="{{asset('canvas/demos/yoga/images/logo-dark@2x.png')}}"><img
                                src="{{asset('canvas/demos/yoga/images/logo@2x.png')}}" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div class="header-misc order-lg-3 col-auto col-lg-2 px-0 justify-content-end">
                        <a href="{{route('login')}}" class="button-link">
                            <div>Login</div>
                        </a>
                        <a href="https://www.facebook.com/semicolonweb/" target="_blank"
                           class="social-icon si-facebook si-small si-light mb-0"><i class="icon-facebook"></i><i
                                class="icon-facebook"></i></a>
                        <a href="https://www.instagram.com/semicolonweb/" target="_blank"
                           class="social-icon si-instagram si-small si-light mb-0"><i class="icon-instagram"></i><i
                                class="icon-instagram"></i></a>
                        <a href="https://twitter.com/__SemiColon" target="_blank"
                           class="social-icon si-paypal si-small si-light mb-0"><i class="icon-paypal"></i><i
                                class="icon-paypal"></i></a>
                    </div>

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path
                                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path
                                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu order-lg-1 col-lg-8 px-0">

                        <!-- Menu Left -->
                        <ul class="menu-container">
                            <li class="current menu-item"><a class="menu-link" href="{{route('index')}}">
                                    <div>Beranda</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>TPPS</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Kabupaten</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Kecamatan</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="#">
                                            <div>Desa</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="{{route('stunting.index')}}">
                                    <div>Data Stunting</div>
                                </a>
{{--                                <ul class="sub-menu-container">--}}
{{--                                    <li class="menu-item"><a class="menu-link" href="#">--}}
{{--                                            <div>Jumlah & pereverensi Stunting</div>--}}
{{--                                        </a></li>--}}
{{--                                    <li class="menu-item"><a class="menu-link" href="#">--}}
{{--                                            <div>Capaian Indikator</div>--}}
{{--                                        </a></li>--}}
{{--                                    <li class="menu-item"><a class="menu-link" href="#">--}}
{{--                                            <div>Lokus Stunting</div>--}}
{{--                                        </a></li>--}}
{{--                                </ul>--}}
                            </li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>Aksi Konvergensi</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="{{route('program.index')}}">
                                            <div>Program Kegiatan</div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="{{route('rembuk.index')}}">
                                            <div>Rembuk Stunting</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="{{route('media.index')}}">
                                    <div>Galeri</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{route('legalitas.index')}}">
                                    <div>Legalitas/Peraturan</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{route('event.index')}}">
                                    <div>Agenda</div>
                                </a></li>
                        </ul>
                    </nav><!-- #primary-menu end -->
                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

@yield('content')
    <!-- Footer
    ============================================= -->
    <footer id="footer" class="bg-color dark">
        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-6">
                        <a href="#"><img src="{{asset('canvas/demos/yoga/images/logo-dark@2x.png')}}" alt="Logo Footer"
                                         height="80"></a>
                        <p class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus,
                            nesciunt excepturi dolor. Animi, voluptate.</p>
                    </div>

                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="widget clearfix">

                            <h3 class="ls0 h5 mb-4">Features</h3>

                            <ul class="list-unstyled iconlist ms-0">
                                <li class="mb-2"><a href="#" class="text-white-50">All Poses</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">Instructors</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">Gallery</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">Price</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">FAQs</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="widget clearfix">

                            <h3 class="ls0 h5 mb-4">Connect With Us</h3>

                            <ul class="list-unstyled iconlist ms-0">
                                <li class="mb-2"><a href="#" class="text-white-50">Facebook</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">Instagram</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">Twitter</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">Email</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="widget clearfix">

                            <h3 class="ls0 h5 mb-4">Open Hours</h3>

                            <ul class="list-unstyled iconlist ms-0">
                                <li class="mb-2"><a href="#" class="text-white-50">Monday - Saturday</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">6:30 - 20:00</a></li>
                                <li class="mb-2"><a href="#" class="text-white-50">Sunday Closed</a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="widget clearfix">

                            <h3 class="ls0 h5 mb-4">Studio:</h3>

                            <div>
                                <address class="font-primary">
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <h3 class="mb-3"><a href="tel:+01273123456" class="text-white"><i
                                            class="icon-call me-1 position-relative"
                                            style="font-size: 22px; top:2px;"></i> +111 22-33-44</a></h3>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights" class="center dark">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <p class="mb-2 text-white-50">Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.</p>
                        <div class="copyright-links text-white-50"><a href="#" class="text-white-50">Terms of Use</a> /
                            <a href="#" class="text-white-50">Privacy Policy</a></div>
                    </div>
                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="{{asset('canvas/js/jquery.js')}}"></script>
<script src="{{asset('canvas/js/plugins.min.js')}}"></script>

<!-- For Countdown -->
<script src="{{asset('canvas/js/components/moment.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('canvas/js/functions.js')}}"></script>
@stack('js')
<script>
    // Owl Carousel Scripts
    jQuery(window).on('pluginCarouselReady', function () {
        $('#oc-teachers').owlCarousel({
            items: 1,
            margin: 30,
            nav: true,
            navText: ['<i class="icon-line-arrow-left"></i>', '<i class="icon-line-arrow-right"></i>'],
            dots: false,
            smartSpeed: 300,
            stagePadding: 60,
            responsive: {
                768: {stagePadding: 100, margin: 30, items: 1},
                991: {stagePadding: 100, margin: 40, smartSpeed: 400, items: 2},
                1200: {stagePadding: 100, margin: 40, smartSpeed: 400, items: 2}
            },
        });
    });

    //Current Week
    Date.prototype.getWeek = function (start) {
        //Calcing the starting point
        start = start || 0;
        var today = new Date(this.setHours(0, 0, 0, 0));
        var day = today.getDay() - start;
        var date = today.getDate() - day;

        // Grabbing Start/End Dates
        var StartDate = new Date(today.setDate(date));
        var EndDate = new Date(today.setDate(date + 6));
        return [StartDate, EndDate];
    }
    var Dates = new Date().getWeek();
    $("#week-details").text(Dates[0].toLocaleDateString() + ' - ' + Dates[1].toLocaleDateString());
</script>

</body>
</html>
