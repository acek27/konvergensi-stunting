@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                        AKSI KONVERGENSI</h5></div>
                                <h3 class="fw-bold nott" style="font-size: 42px; letter-spacing: -1px;"><span>Program Kegiatan</span>
                                </h3>
                                <div class="col-md-3 col-lg-3">
                                    <select name="tahun" id="tahun" class="form-control">
                                        <option value="">--pilih tahun--</option>
                                        @for($i= date('Y');$i >=2022;$i--)
                                            <option value="{{$i}}">Tahun {{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-center col-mb-50 program">
                                @foreach($data as $datum)
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="feature-box fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><img src="{{asset('event.png')}}" alt="Image"></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h3 class="nott fw-semibold ls0">{{$datum->judul}}</h3>
                                                <p>
                                                    <a href="{{route('kegiatan.file',$datum->id)}}"
                                                       target="_blank"><i
                                                            class="fa fa-download"></i> Unduh file</a> -
                                                    <a href="{{route('kegiatan.file',$datum->id)}}"
                                                       target="_blank">Lihat <i class="fa fa-arrow-right ml-4"></i> </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $("#tahun").change(function () {
                var data = $(this).val();
                $.ajax({
                    type: 'post',
                    data: {
                        tahun: data
                    },
                    url: "{{route('list.program')}}",
                    success: function (data) {
                        // console.log(data)
                        $(".program").html(data);
                    }
                });
            });
        });
    </script>
@endpush
