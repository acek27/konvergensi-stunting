<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/dark.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/font-icons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css"/>

    <!-- Range Slider CSS -->
    <link rel="stylesheet" href="{{asset('canvas/css/components/ion.rangeslider.css')}}" type="text/css"/>

    <!-- Bootstrap File Upload CSS -->
    <link rel="stylesheet" href="{{asset('canvas/css/components/bs-filestyle.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('canvas/css/custom.css')}}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>Freelance Quote - Forms | Canvas</title>

    <style>
        .file-caption.icon-visible .file-caption-name {
            font-family: 'Lato', sans-serif;
            color: #666;
        }
    </style>

</head>


<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header" data-sticky-logo-height="74" data-menu-padding="32">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img
                                src="images/logo.png" alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img
                                src="images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div class="header-misc">

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                    class="icon-line-cross"></i></a>
                        </div><!-- #top-search end -->

                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                    class="top-cart-number">5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="images/shop/small/1.jpg"
                                                             alt="Blue Round-Neck Tshirt"/></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <div class="top-cart-item-desc-title">
                                                <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                                <span class="top-cart-item-price d-block">$19.99</span>
                                            </div>
                                            <div class="top-cart-item-quantity">x 2</div>
                                        </div>
                                    </div>
                                    <div class="top-cart-item">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="images/shop/small/6.jpg"
                                                             alt="Light Blue Denim Dress"/></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <div class="top-cart-item-desc-title">
                                                <a href="#">Light Blue Denim Dress</a>
                                                <span class="top-cart-item-price d-block">$24.99</span>
                                            </div>
                                            <div class="top-cart-item-quantity">x 3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action">
                                    <span class="top-checkout-price">$114.95</span>
                                    <a href="#" class="button button-3d button-small m-0">View Cart</a>
                                </div>
                            </div>
                        </div><!-- #top-cart end -->

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
                    <nav class="primary-menu sub-title">
                        <ul class="menu-container">
                            <li class="menu-item">
                                <a class="menu-link" href="{{route('landing.page')}}">
                                    <div>BERANDA</div>
                                    <span>Home</span></a>
                            </li>
                            @guest
                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>INFORMASI</div>
                                        <span>Information</span></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>UNDUHAN</div>
                                        <span>Download</span></a>
                                </li>
                            @endguest
                            @auth
                                <li class="menu-item">
                                    <a class="menu-link" href="{{route('posts.index')}}">
                                        <div>INFORMASI</div>
                                        <span>Information</span></a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{route('files.index')}}">
                                        <div>UNDUHAN</div>
                                        <span>Download</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('logout')}}" class="menu-link"
                                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
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
    @yield('page-title')
    @yield('carousel')

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            @yield('content')
        </div>
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap">

                <div class="row col-mb-50">
                    <div class="col-lg-8">

                        <div class="row col-mb-50">
                            <div class="col-md-4">

                                <div class="widget clearfix">

                                    <img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">

                                    <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong>
                                        Design Standards.</p>

                                    <div
                                        style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                        <address>
                                            <strong>Headquarters:</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                        </address>
                                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
                                        <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="widget widget_links clearfix">

                                    <h4>Blogroll</h4>

                                    <ul>
                                        <li><a href="https://codex.wordpress.org/">Documentation</a></li>
                                        <li>
                                            <a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a>
                                        </li>
                                        <li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
                                        <li><a href="https://wordpress.org/support/">Support Forums</a></li>
                                        <li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
                                        <li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
                                        <li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="widget clearfix">
                                    <h4>Recent Posts</h4>

                                    <div class="posts-sm row col-mb-30" id="post-list-footer">
                                        <div class="entry col-12">
                                            <div class="grid-inner row">
                                                <div class="col">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>10th July 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row">
                                                <div class="col">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>10th July 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="entry col-12">
                                            <div class="grid-inner row">
                                                <div class="col">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>10th July 2021</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="row col-mb-50">
                            <div class="col-md-4 col-lg-12">
                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">
                                        <div class="col-lg-6 bottommargin-sm">
                                            <div class="counter counter-small"><span data-from="50" data-to="15065421"
                                                                                     data-refresh-interval="80"
                                                                                     data-speed="3000"
                                                                                     data-comma="true"></span></div>
                                            <h5 class="mb-0">Total Downloads</h5>
                                        </div>

                                        <div class="col-lg-6 bottommargin-sm">
                                            <div class="counter counter-small"><span data-from="100" data-to="18465"
                                                                                     data-refresh-interval="50"
                                                                                     data-speed="2000"
                                                                                     data-comma="true"></span></div>
                                            <h5 class="mb-0">Clients</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-5 col-lg-12">
                                <div class="widget subscribe-widget clearfix">
                                    <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing
                                        Offers &amp; Inside Scoops:</h5>
                                    <div class="widget-subscribe-form-result"></div>
                                    <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                          class="mb-0">
                                        <div class="input-group mx-auto">
                                            <div class="input-group-text"><i class="icon-email2"></i></div>
                                            <input type="email" id="widget-subscribe-form-email"
                                                   name="widget-subscribe-form-email"
                                                   class="form-control required email" placeholder="Enter your Email">
                                            <button class="btn btn-success" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-12">
                                <div class="widget clearfix" style="margin-bottom: -20px;">

                                    <div class="row">
                                        <div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
                                            <a href="#" class="social-icon si-dark si-colored si-facebook mb-0"
                                               style="margin-right: 10px;">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like
                                                        us</strong><br>on Facebook</small></a>
                                        </div>
                                        <div class="col-6 col-md-12 col-lg-6 clearfix">
                                            <a href="#" class="social-icon si-dark si-colored si-rss mb-0"
                                               style="margin-right: 10px;">
                                                <i class="icon-rss"></i>
                                                <i class="icon-rss"></i>
                                            </a>
                                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                                    RSS Feeds</small></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">
            <div class="container">

                <div class="row col-mb-30">

                    <div class="col-md-6 text-center text-md-start">
                        Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>

                    <div class="col-md-6 text-center text-md-end">
                        <div class="d-flex justify-content-center justify-content-md-end">
                            <a href="#" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>

                        <div class="clear"></div>

                        <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i
                            class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i
                            class="icon-skype2"></i> CanvasOnSkype
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

<!-- Range Slider Plugin -->
<script src="{{asset('canvas/js/components/rangeslider.min.js')}}"></script>

<!-- Bootstrap File Upload Plugin -->
<script src="{{asset('canvas/js/components/bs-filestyle.js')}}"></script>

<!-- TinyMCE Plugin -->
<script src="{{asset('canvas/js/components/tinymce/tinymce.min.js')}}"></script>

<!-- Footer Scripts
============================================= -->

@stack('js')
</body>
</html>
