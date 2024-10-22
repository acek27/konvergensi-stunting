<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="{{url('https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css')}}">
    <link href="{{asset('adminlte/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
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
                    <a href="/" class="standard-logo"><img class="mx-auto"
                                                           src="{{asset('sibesti.png')}}"
                                                           alt="Canvas Logo"></a>
                    <a href="/" class="retina-logo"><img class="mx-auto" src="{{asset('sibesti.png')}}"
                                                         alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="w-100 d-block d-md-none"></div>

                <div
                    class="col-12 col-sm-6 col-md-4 justify-content-center justify-content-sm-start d-flex order-md-1 mb-4 mb-sm-0">
                    <a href="{{url('https://situbondokab.go.id')}}" class="text-uppercase badge py-2 px-3 fw-medium">
                        <img style="width: 100%;height: 64px;" src="{{asset('preloader.png')}}" alt="Canvas Logo">
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-md-4 order-md-3 mb-4 mb-md-0">
                    <ul class="nav align-items-center justify-content-center justify-content-sm-end">
                        <li class="nav-item">
                            <a href="#" class="text-uppercase badge py-2 px-3 fw-medium">
                                <img style="width: 100%;height: 64px;" src="{{asset('pakem.png')}}" alt="Canvas Logo">
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
                    <nav class="primary-menu order-lg-1 col-lg-12 px-0">

                        <!-- Menu Left -->
                        <ul class="menu-container navbar navbar-expand-md navbar-fixed-top main-nav"
                            style="background: #FFF89A">
                            <li class="current menu-item"><a class="menu-link" href="{{route('index')}}">
                                    <div>Beranda</div>
                                </a></li>
                            {{--                            <li class="menu-item"><a class="menu-link" href="{{route('kpm.data')}}">--}}
                            {{--                                    <div>KPM</div>--}}
                            {{--                                </a></li>--}}
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>TPPS</div>
                                </a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item">
                                        <a class="menu-link" href="#">
                                            <div>Kabupaten</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('tpps.kab')}}">
                                                    <div>SK TPPS</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('renja.tpps', ['id' => 1])}}">
                                                    <div>Rencana Kerja</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('laporan.tpps', ['id' => 1])}}">
                                                    <div>Laporan</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="#">
                                            <div>Kecamatan</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('tpps.kec')}}">
                                                    <div>SK TPPS</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('renja.tpps', ['id' => 2])}}">
                                                    <div>Rencana Kerja</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('laporan.tpps', ['id' => 2])}}">
                                                    <div>Laporan</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="#">
                                            <div>Desa</div>
                                        </a>
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('tpps.desa')}}">
                                                    <div>SK TPPS</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('renja.tpps', ['id' => 3])}}">
                                                    <div>Rencana Kerja</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{route('laporan.tpps', ['id' => 3])}}">
                                                    <div>Laporan</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
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
                                    <div>Legalitas</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{route('materi.index')}}">
                                    <div>Materi</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{route('event.index')}}">
                                    <div>Agenda</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{route('innovation.index')}}">
                                    <div>Inovasi</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{route('statistik.index')}}">
                                    <div>Statistik</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{route('faq.index')}}">
                                    <div>Q&A</div>
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

        <div class="container">
            <div class="footer-widgets-wrap" style="padding-top: 20px;padding-bottom: 10px">
                <h1 class="text-center">Layanan Bantuan <i>(Hotline)</i></h1>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row col-mb-50">
                            <div class="col-md-8">
                                <div class="widget">
                                    <p class="mb-0">Pemerintah Kabupaten Situbondo</p>
                                    <h2 class="mt=0">Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah</h2>
                                    <div>
                                        <address>
                                            <strong>Alamat:</strong><br>
                                            Jl. Moch Seruji Nomor 3, Patokan, Situbondo, Jawa Timur 68312
                                        </address>
                                        <abbr title="Phone Number"><strong>Telepon :</strong></abbr> (0338) 678774<br>
                                        <abbr title="Fax"><strong>Laman :</strong></abbr> <a
                                            href="{{url('https://bappeda.situbondokab.go.id')}}">https://bappeda.situbondokab.go.id</a><br>
                                        <abbr title="Email Address"><strong>Email:</strong></abbr> bappedasit@gmail.com
                                        <hr>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget widget_links">
                                    <h4 class="mb-3 mb-sm-4 text-transform-none ls-0">Dapatkan informasi disini:</h4>
                                    <ul>
                                        <li class="menu-item"><a class="menu-link" href="#">
                                                <div>TPPS</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Kabupaten</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="{{route('tpps.kab')}}">
                                                                <div>SK TPPS</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                               href="{{route('renja.tpps', ['id' => 1])}}">
                                                                <div>Rencana Kerja</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                               href="{{route('laporan.tpps', ['id' => 1])}}">
                                                                <div>Laporan</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Kecamatan</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="{{route('tpps.kec')}}">
                                                                <div>SK TPPS</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                               href="{{route('renja.tpps', ['id' => 2])}}">
                                                                <div>Rencana Kerja</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                               href="{{route('laporan.tpps', ['id' => 2])}}">
                                                                <div>Laporan</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <div>Desa</div>
                                                    </a>
                                                    <ul class="sub-menu-container">
                                                        <li class="menu-item">
                                                            <a class="menu-link" href="{{route('tpps.desa')}}">
                                                                <div>SK TPPS</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                               href="{{route('renja.tpps', ['id' => 3])}}">
                                                                <div>Rencana Kerja</div>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="menu-link"
                                                               href="{{route('laporan.tpps', ['id' => 3])}}">
                                                                <div>Laporan</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="{{route('stunting.index')}}">
                                                <div>Data Stunting</div>
                                            </a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">
                                                <div>Aksi Konvergensi</div>
                                            </a>
                                            <ul class="sub-menu-container">
                                                <li class="menu-item"><a class="menu-link"
                                                                         href="{{route('program.index')}}">
                                                        <div>Program Kegiatan</div>
                                                    </a></li>
                                                <li class="menu-item"><a class="menu-link"
                                                                         href="{{route('rembuk.index')}}">
                                                        <div>Rembuk Stunting</div>
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="{{route('media.index')}}">
                                                <div>Galeri</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="{{route('legalitas.index')}}">
                                                <div>Legalitas</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="{{route('materi.index')}}">
                                                <div>Materi</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="{{route('event.index')}}">
                                                <div>Agenda</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link" href="{{route('innovation.index')}}">
                                                <div>Inovasi</div>
                                            </a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <div class="copyright-links"><a href="#">Bidang TIK</a> / <a href="#">DISKOMINFO Situbondo</a>
                        </div>
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

{{--<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->--}}
{{--<script src="{{asset('include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>--}}

{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>--}}
{{--<script src="{{asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>--}}
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('adminlte/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<script !src="">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('js')
<!-- ADD-ONS JS FILES -->
<script>
    var tpj = jQuery;
    var revapi19;
    var $ = jQuery.noConflict();

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
