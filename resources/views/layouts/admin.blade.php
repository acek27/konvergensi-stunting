<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="Mannatthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap File Upload CSS -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset('canvas/css/components/bs-filestyle.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css')}}">
    <link href="{{asset('adminlte/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
    @stack('css')
</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="ion-close"></i>
        </button>

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center bg-logo">
                <a href="#" class="logo"><img src="{{asset('sibesti.png')}}" height="50" alt="logo"></a>
            </div>
        </div>
        <div class="sidebar-user">
            <img src="{{asset('admin.png')}}" alt="user" class="rounded-circle img-thumbnail mb-1">
            <h6 class="">Administrator </h6>
            <ul class="list-unstyled list-inline mb-0 mt-2">
                <li class="list-inline-item">
                    <a href="#" class="" data-toggle="tooltip" data-placement="top" title="Profile"><i
                            class="dripicons-user text-purple"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="{{route('reset.pass', Auth::user()->id)}}" class="" data-toggle="tooltip"
                       data-placement="top" title="Settings"><i
                            class="dripicons-gear text-dark"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('logout') }}" class="" data-toggle="tooltip" data-placement="top" title="Log out"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="dripicons-power text-danger"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    @can('admin')
                        <li class="menu-title">ADMIN</li>

                        <li>
                            <a href="{{route('super.index')}}" class="waves-effect">
                                <i class="dripicons-user"></i>
                                <span> Kelola Pengguna </span>
                            </a>
                        </li>
                    @endcan
                    <li class="menu-title">UTAMA</li>
                    <li>
                        <a href="{{route('index')}}" class="waves-effect" target="_blank">
                            <i class="dripicons-device-desktop"></i>
                            <span> Lihat Website</span>
                        </a>
                    </li>
                    @can('berita')
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-to-do"></i> <span> Berita/Informasi </span>
                                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('posts.index')}}">Data Berita/Informasi</a></li>
                                <li><a href="{{route('posts.create')}}">Buat Baru</a></li>
                            </ul>
                        </li>
                    @endcan
                    @can('peta')
                        <li>
                            <a href="{{route('map.index')}}" class="waves-effect">
                                <i class="dripicons-map"></i>
                                <span> Peta</span>
                            </a>
                        </li>
                    @endcan
                    <li class="menu-title">KOMPONEN</li>
                    @canany(['kpm','tpps','stunting','aksi','legalitas','paparan'])
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-user-group"></i>
                                <span> KPM </span>
                                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('kpmadm.index')}}">SK KPM</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i>
                                <span> TPPS </span>
                                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('tppskec.index')}}">TPPS Kecamatan</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="{{route('tppsdesa.index')}}">TPPS Desa</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i>
                                <span> Data Stunting </span>
                                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('datastunting.index')}}">SK Data Stunting</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="{{route('datastunting.create')}}">Buat Baru</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-user-id"></i>
                                <span> Aksi Konvergensi </span>
                                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('kegiatan.index')}}">Program Kegiatan</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="{{route('rembukstunting.index')}}">Rembuk Stunting</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-trophy"></i>
                                <span> Legalitas/Peraturan </span>
                                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('peraturan.index')}}">Data Legalitas/Peraturan</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="{{route('peraturan.create')}}">Buat Baru</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('paparan.index')}}" class="waves-effect">
                                <i class="fa fa-file-powerpoint"></i>
                                <span> Paparan</span>
                            </a>
                        </li>
                    @endcanany
                    @canany(['galeri','agenda'])
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-image"></i>
                                <span> Galeri </span>
                                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('galeri.index')}}">Gambar</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="{{route('video.index')}}">Video</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-calendar"></i>
                                <span> Agenda </span>
                                <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('agenda.index')}}">Data Agenda</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="{{route('agenda.create')}}">Buat Baru</a></li>
                            </ul>
                        </li>
                    @endcanany
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <!-- language-->
                        <li class="list-inline-item dropdown notification-list hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect text-white"
                               data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right language-switch">
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt=""
                                                                       height="16"/><span> Italian </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt=""
                                                                       height="16"/><span> French </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt=""
                                                                       height="16"/><span> Spanish </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt=""
                                                                       height="16"/><span> Russian </span></a>
                            </div>
                        </li>
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-mail noti-icon"></i>
                                <span class="badge badge-danger noti-icon-badge">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" alt="user-img"
                                                                  class="img-fluid rounded-circle"/></div>
                                    <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy
                                            text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" alt="user-img"
                                                                  class="img-fluid rounded-circle"/></div>
                                    <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have
                                            87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" alt="user-img"
                                                                  class="img-fluid rounded-circle"/></div>
                                    <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a
                                            long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item border-top">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                               role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-success noti-icon-badge">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy
                                            text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details"><b>New Message received</b><small class="text-muted">You
                                            have 87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is
                                            a long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item border-top">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                               href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('admin.png')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome</h5>
                                </div>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fas fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </nav>
            </div>
            <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        @yield('breadcrum')
                                    </ol>
                                </div>
                                <h4 class="page-title">@yield('header')</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    @yield('content')
                    <!-- end row -->

                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        <footer class="footer">
            © {{date('Y')}} Programmer - Dinas Kominfo Situbondo.
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<script src="{{asset('assets/plugins/chart.js/chart.min.js')}}"></script>
<!-- Bootstrap File Upload Plugin -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('canvas/js/components/bs-filestyle.js')}}"></script>

<!-- TinyMCE Plugin -->
<script src="{{asset('canvas/js/components/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>
@stack('js')

</body>
</html>
