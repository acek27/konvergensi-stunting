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
                    <h3 class="display-4 fw-bolder mb-3">Materi Paparan</h3>
                </div>
            </div>
            <div class="mw-md mx-auto">
                <ul class="list-unstyled mb-4">
                    <li>
                        @foreach($data as $datum)
                            <ul class="topic list-unstyled row mx-0 justify-content-between align-items-center">
                                <li class="entry mb-0 col-sm-10">
                                    <h3 class="mb-0"><a href="#"> {{$datum->nama_paparan}}</a></h3>
                                    <div class="entry-meta mt-1">
                                        <ul>
                                            <li><a href="#">{{$datum->created_at}}</a></li>
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="{{route('paparan.file', $datum->id)}}" class="badge bg-info text-white">Download</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>

    </div>
@endsection
