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
                                    class="fw-normal color font-body text-uppercase ls1">GALERI</h5></div>
                            <h2 class="fw-bold mb-2 nott" style="font-size: 42px; letter-spacing: -1px">Galeri</h2>
                                                        <p class="lead mb-0">Media & Dokumentasi Kegiatan.</p>
                        </div>
                        <img src="{{asset('gebyar1.png')}}" alt="Yoga Image"
                             class="d-none d-sm-flex" width="300">
                    </div>
                        <hr>
                </div>
            </div>
            <div class="section p-0 m-0">
                <div class="masonry-thumbs grid-container grid-2 grid-sm-3 grid-md-4" data-lightbox="gallery">
                    @php($no = 1)
                    @foreach($data as $datum)
                        <a class="grid-item" href="{{route('galeri.file',$datum->id)}}"
                           data-lightbox="gallery-item"><img src="{{route('galeri.file',$datum->id)}}"
                                                             alt="Gallery Thumb {{$no}}"></a>
                        @php($no++)
                    @endforeach
                </div>
            </div>
        </div>
         {{ $data->links('guest.paginate') }}
    </section><!-- #content end -->
@endsection
