@extends('layouts.master')
@push('css')
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: #45b649;
            background: #fff;
        }


        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: '';
                display: block;
                border-top: 8px solid transparent;
                border-left: 10px solid #fff;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }
    </style>
@endpush
@section('content')
    <!-- Content
    ============================================= -->
    <section id="content" class="bg-white">
        <div class="content-wrap pt-0" style="overflow: visible">
            <div class="position-relative">
                <div class="container">
                    <div class="row py-0 py-lg-12">
                        <div class="col-lg-12 py-5">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <div class="fancy-title title-border mb-3"><h5 class="fw-normal color font-body">
                                        LEGALITAS/PERATURAN</h5></div>
                                <h3 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;"><span>Legalitas/Peraturan</span>
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <!-- Tabs nav -->
                                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab"
                                         role="tablist" aria-orientation="vertical">
                                        <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab"
                                           data-toggle="pill" href="#v-pills-home" role="tab"
                                           aria-controls="v-pills-home" aria-selected="true">
                                            <i class="fa fa-user-circle-o mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">PERPRES</span></a>

                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill"
                                           href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                           aria-selected="false">
                                            <i class="fa fa-calendar-minus-o mr-2"></i>
                                            <span class="font-weight-bold small text-uppercase">PERKA</span></a>

                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill"
                                           href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                           aria-selected="false">
                                            <i class="fa fa-star mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">BKKBN</span></a>
                                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill"
                                           href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                           aria-selected="false">
                                            <i class="fa fa-check mr-2"></i>
                                            <span
                                                class="font-weight-bold small text-uppercase">PERBUP</span></a>
                                    </div>
                                </div>


                                <div class="col-md-9">
                                    <!-- Tabs content -->
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade shadow rounded bg-white show active p-5"
                                             id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <h4 class="font-italic mb-4">Personal information</h4>
                                            <div class="accordion accordion-border mb-0">

                                                <div class="accordion-header">
                                                    <div class="accordion-icon">
                                                        <i class="accordion-closed icon-ok-circle"></i>
                                                        <i class="accordion-open icon-remove-circle"></i>
                                                    </div>
                                                    <div class="accordion-title">
                                                        Peraturan Nomor x
                                                    </div>
                                                </div>
                                                <div class="accordion-content">Nullam id dolor id nibh ultricies
                                                    vehicula ut id elit.
                                                    Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                                    Duis mollis,
                                                    est
                                                    non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                                                </div>

                                                <div class="accordion-header">
                                                    <div class="accordion-icon">
                                                        <i class="accordion-closed icon-ok-circle"></i>
                                                        <i class="accordion-open icon-remove-circle"></i>
                                                    </div>
                                                    <div class="accordion-title">
                                                        Keputusan Nomor x
                                                    </div>
                                                </div>
                                                <div class="accordion-content">Nullam id dolor id nibh ultricies
                                                    vehicula ut id elit.
                                                    Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                                    Duis mollis,
                                                    est
                                                    non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                                                </div>

                                                <div class="accordion-header">
                                                    <div class="accordion-icon">
                                                        <i class="accordion-closed icon-ok-circle"></i>
                                                        <i class="accordion-open icon-remove-circle"></i>
                                                    </div>
                                                    <div class="accordion-title">
                                                        Keputusan x
                                                    </div>
                                                </div>
                                                <div class="accordion-content">Nullam id dolor id nibh ultricies
                                                    vehicula ut id elit.
                                                    Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                                    Duis mollis,
                                                    est
                                                    non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                                                </div>

                                                <div class="accordion-header">
                                                    <div class="accordion-icon">
                                                        <i class="accordion-closed icon-ok-circle"></i>
                                                        <i class="accordion-open icon-remove-circle"></i>
                                                    </div>
                                                    <div class="accordion-title">
                                                        Suat edaran x
                                                    </div>
                                                </div>
                                                <div class="accordion-content">Nullam id dolor id nibh ultricies
                                                    vehicula ut id elit.
                                                    Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                                    Duis mollis,
                                                    est
                                                    non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile"
                                             role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h4 class="font-italic mb-4">Bookings</h4>
                                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est
                                                laborum.</p>
                                        </div>

                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages"
                                             role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <h4 class="font-italic mb-4">Reviews</h4>
                                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est
                                                laborum.</p>
                                        </div>
                                        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings"
                                             role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <h4 class="font-italic mb-4">Confirm booking</h4>
                                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est
                                                laborum.</p>
                                        </div>
                                    </div>
                                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
@endpush
