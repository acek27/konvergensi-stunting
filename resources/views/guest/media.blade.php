@extends('layouts.master')
@section('content')
    <!-- Content
    ============================================= -->
    <section id="content" class="bg-white">
        <div class="content-wrap pt-0" style="overflow: visible">
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
