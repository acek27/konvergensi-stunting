@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Buat Agenda Baru</h4>
@endsection
@push('css')
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.9/datepicker.min.css')}}">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
@endpush

@section('content')
    <div class="container clearfix">
        <div class="form-widget">
            <div class="form-result"></div>
            <div class="row">
                <div class="col-lg-10">
                    <form class="row" action="{{route('agenda.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Nama Agenda:</label>
                            <input type="text" name="nama_agenda" id="freelance-quote-name"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Sasaran:</label>
                            <input type="text" name="sasaran"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Agenda Dimulai:</label>
                            <div class="input-group">
                                <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="text" name="tgl_mulai" class="form-control datetimepicker-input"
                                           id="tanggal_mulai">
                                    <div class="input-group-append" data-target="#tanggal_mulai"
                                         data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Agenda Selesai:</label>
                            <div class="input-group">
                                <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input name="tgl_selesai" type="text" class="form-control datetimepicker-input"
                                           id="tanggal_selesai">
                                    <div class="input-group-append" data-target="#tanggal_selesai"
                                         data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 form-group">
                            <label>Kategori:</label>
                            <select class="form-control select2" name="opd_id" required>
                                <option value="">--pilih OPD--</option>
                                @foreach($opds as $opd)
                                    <option value="{{$opd->kode}}">{{$opd->nama_opd}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary">Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
@push('js')
    {{--    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>--}}
    <script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <script
        src="{{url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#tanggal_mulai').datetimepicker({
                Format: 'yyyy-mm-dd hh:ii',
            });
            $('#tanggal_selesai').datetimepicker({
                Format: 'yyyy-mm-dd hh:ii',
            });
        })
    </script>
@endpush
