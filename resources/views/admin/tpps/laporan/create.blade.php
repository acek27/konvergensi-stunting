@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Buat Laporan Baru</h4>
@endsection
@push('css')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
@endpush
@section('content')
    <div class="container clearfix">
        <div class="form-widget">
            <div class="form-result"></div>
            <div class="row">
                <div class="col-lg-10">
                    <form class="row" action="{{route('laporan.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>

                        <div class="col-12 form-group">
                            <label>Keterangan:</label>
                            <input type="text" name="nama_laporan" id="freelance-quote-name"
                                   class="form-control" required>
                        </div>

                        <div class="col-12 form-group">
                            <label>Upload Dokumen:</label>
                            <input type="file" accept=".pdf" id="image" name="path"
                                   class="file-loading" data-show-preview="false" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Pilih Tahun:</label>
                            <select name="tahun" id="tahun" class="form-control">
                                <option value="">--pilih tahun --</option>
                                @php
                                    $tahun = date('Y')+1;
                                    do{
                                       $tahun--;
                                       echo '<option value="'.$tahun.'">'.$tahun.'</option>';
                                    }while ($tahun > 2021)
                                @endphp
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label>Pilih Jenis Renja:</label>
                            <select name="level" id="level" class="form-control">
                                <option value="null">--pilih jeni renja --</option>
                                <option value="1">Kabupaten</option>
                                <option value="2">Kecamatan</option>
                                <option value="3">Desa</option>
                            </select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="input-group nk-int-st">
                                    <select class="form-control select2" id="kec_id" name="kec_id" required>
                                        <option selected="selected" value="">-- Pilih Kecamatan --</option>
                                        @foreach($kecamatan as $kec)
                                            <option value="{{$kec->idkecamatan}}">{{$kec->kecamatan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
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
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            $("#image").fileinput({
                browseClass: "btn btn-secondary",
                browseIcon: "",
                removeClass: "btn btn-danger removefile",
                removeLabel: "",
                removeIcon: "<i class='icon-trash-alt1'></i>",
                showUpload: false
            });

        })
        $('.datepicker').datepicker({
            format: 'yyyy-m-d',
            todayHighlight: 'TRUE',
            autoclose: true,
        });
        $(function () {
            $("#level").change(function () {
                var status = this.value;
                if (status == "1") {
                    $("#kec_id").prop('disabled', true);// hide multiple sections
                } else {
                    $("#kec_id").prop('disabled', false);// hide multiple sections
                }
            });
        });
    </script>
@endpush
