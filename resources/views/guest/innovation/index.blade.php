@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{asset('canvas/demos/forum/forum.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('canvas/demos/forum/css/fonts.css')}}" type="text/css"/>

@endpush
@section('content')
    <div class="content-wrap">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-xl-6 col-lg-8">
                    <h6 class="display-6 fw-bolder mb-3">Inovasi</h6>
                </div>
            </div>
            <div class="mw-md mx-auto">
                @foreach($data as $datum)
                    <div class="feature-box fbox-plain mb-4">
                        <div class="fbox-icon">
                            <img src="{{route('innovation.image', $datum->id)}}" alt="">
                        </div>
                        <div class="fbox-content">
                            <h3 class="fw-normal text-transform-none">
                                <a href="{{route('innovation.show',$datum->id)}}">{{$datum->nama_inovasi}}</a></h3>
                            <h5 class="text-muted">{{$datum->opd->nama_opd}}</h5>
                        </div>
                            <h6 class="text-muted fst-italic"> {{Carbon\Carbon::parse($datum->created_at)->isoFormat('dddd, D MMMM Y')}}</h6>
                    </div>
                    <hr>
                @endforeach
                {{ $data->links('guest.paginate') }}
            </div>
        </div>

    </div>
@endsection
