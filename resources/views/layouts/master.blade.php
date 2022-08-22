<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('canvas/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/dark.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('canvas/css/font-icons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/one-page/css/et-line.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/magnific-popup.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('canvas/css/custom.css')}}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Theme Color Stylesheet -->
    <link rel="stylesheet" href="{{asset('canvas/css/colors.php?color=FF8600')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/demos/news/css/fonts.css')}}" type="text/css"/>

    <!-- News Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('canvas/demos/news/news.css')}}" type="text/css"/>
    <!-- / -->

    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('canvas/include/rs-plugin/css/settings.css')}}"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{asset('canvas/include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('canvas/include/rs-plugin/css/navigation.css')}}">

{{--    new--}}
    <link rel="stylesheet" href="{{asset('canvas/css/colors.php?color=7E9680')}}" type="text/css"/>
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

    <!-- Document Title
    ============================================= -->
    <title>SIBESTI - Konvergensi Stunting</title>

    <style>

        /* Revolution Slider Styles */
        .hesperiden .tp-tab {
            border-bottom: 0;
        }

        .hesperiden .tp-tab:hover,
        .hesperiden .tp-tab.selected {
            background-color: #E5E5E5;
        }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="header-size-sm" data-sticky-shrink="false" style="background: #9ADCFF">
        <div class="container">
            <div class="header-row justify-content-between">

                <!-- Logo
                ============================================= -->
                <div id="logo" class="col-auto ms-auto ms-mb-0 me-mb-0 order-md-2">
                    <a href="demo-news.html" class="standard-logo"><img class="mx-auto"
                                                                        src="{{asset('Sibesti-01.png')}}"
                                                                        alt="Canvas Logo"></a>
                    <a href="demo-news.html" class="retina-logo"><img class="mx-auto" src="{{asset('Sibesti-01.png')}}"
                                                                      alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="w-100 d-block d-md-none"></div>

                <div
                    class="col-12 col-sm-6 col-md-4 justify-content-center justify-content-sm-start d-flex order-md-1 mb-4 mb-sm-0">
                    <a href="#"
                       class="social-icon mb-0 border-0"><img style="height: 100%"
                                                              src="{{asset('preloader.png')}}"
                                                              alt="Canvas Logo">
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 order-md-3 mb-4 mb-md-0">
                    <ul class="nav align-items-center justify-content-center justify-content-sm-end">
                        <li class="nav-item">
                            <a href="#"
                               class="social-icon si-large mb-0 border-0"><img style="width: 100%"
                                                                      src="{{asset('pakem.png')}}"
                                                                      alt="Canvas Logo">
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="text-uppercase badge bg-dark rounded-pill py-2 px-3 fw-medium">
                                {{Carbon\Carbon::parse(date('Y-m-d'))->isoFormat('D MMMM Y')}}
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div id="header-wrap" class="border-top border-f5">
            <div class="container">
                <div class="header-row justify-content-between flex-row-reverse flex-lg-row">

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu order-lg-1 col-lg-12 px-0">

                        <!-- Menu Left -->
                        <ul class="menu-container" style="background: #FFF89A">
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

                    <form class="top-search-form" action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.."
                               autocomplete="off">
                    </form>

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    <!-- Content
    ============================================= -->
    @yield('content')
    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark" style="background-color: #1f2024;">



        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">
                <div class="row left-content-center">
                    <div class="col-md-6 align-self-center">
                        <a href="#"
                           class="social-icon mt-2 mb-0 border-0"><img style="height: 100%"
                                                                  src="{{asset('preloader.png')}}"
                                                                  alt="Canvas Logo">
                        </a>
                        Copyrights &copy; {{date('Y')}} Pemerintah Kabupaten Situbondo.<br>
                        <div class="copyright-links"><a href="#">Bidang TIK</a> / <a href="#">DISKOMINFO Situbondo</a></div>
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
<script src="{{asset('canvas/js/plugins.infinitescroll.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('canvas/js/functions.js')}}"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="{{asset('include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
@stack('js')
<!-- ADD-ONS JS FILES -->
<script>
    var tpj = jQuery;
    var revapi19;
    var $ = jQuery.noConflict();
    tpj(document).ready(function () {
        if (tpj("#rev_slider_19_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_19_1");
        } else {
            revapi19 = tpj("#rev_slider_19_1").show().revolution({
                sliderType: "carousel",
                jsFileLocation: "include/rs-plugin/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 7000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    tabs: {
                        style: "hesperiden",
                        enable: true,
                        width: 260,
                        height: 80,
                        min_width: 260,
                        wrapper_padding: 25,
                        wrapper_color: "#F5F5F5",
                        wrapper_opacity: "1",
                        {{--tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title font-secondary">{{title}}</span> <span class="tp-tab-date tp-tab-para">{{param2}}</span></div><div class="tp-tab-image"></div>',--}}
                        visibleAmount: 9,
                        hide_onmobile: false,
                        hide_under: 480,
                        hide_onleave: false,
                        hide_delay: 200,
                        direction: "horizontal",
                        span: true,
                        position: "outer-bottom",
                        space: 0,
                        h_align: "left",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 0
                    }
                },
                carousel: {
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "on",
                    vary_fade: "on",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: 0,
                    stretch: "off",
                    showLayersAllTime: "off",
                    easing: "Power3.easeInOut",
                    speed: "800"
                },
                responsiveLevels: [1140, 992, 768, 576],
                visibilityLevels: [1140, 992, 768, 576],
                gridwidth: [850, 700, 400, 300],
                gridheight: [580, 600, 500, 400],
                lazyType: "single",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });	/* Revolution Slider End */

    // Navbar on hover
    $('.nav.tab-hover a.nav-link').hover(function () {
        $(this).tab('show');
    });

    // Current Date
    var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        a = new Date();

    jQuery('.date-today').html(weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate());

    // Infinity Scroll
    jQuery(window).on('load', function () {

        var $container = $('.infinity-wrapper');

        $container.infiniteScroll({
            path: '.load-next-portfolio',
            button: '.load-next-portfolio',
            scrollThreshold: false,
            history: false,
            status: '.page-load-status'
        });

        $container.on('load.infiniteScroll', function (event, response, path) {
            var $items = $(response).find('.infinity-loader');
            // append items after images loaded
            $items.imagesLoaded(function () {
                $container.append($items);
                $container.isotope('insert', $items);
                setTimeout(function () {
                    SEMICOLON.widget.loadFlexSlider();
                }, 1000);
            });
        });

    });

    $(window).on('pluginCarouselReady', function () {
        $('#oc-news').owlCarousel({
            items: 1,
            margin: 20,
            dots: false,
            nav: true,
            navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>'],
            responsive: {
                0: {items: 1, dots: true,},
                576: {items: 1, dots: true},
                768: {items: 2, dots: true},
                992: {items: 2},
                1200: {items: 3}
            }
        });
    });

</script>

</body>
</html>
