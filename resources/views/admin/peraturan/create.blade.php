@extends('layouts.admin')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
@endpush
@section('header')
    <h4 class="m-0">Buat Peraturan/Legalitas Baru</h4>
@endsection
@section('content')
    <div class="container clearfix">
        <div class="form-widget">
            <div class="form-result"></div>
            <div class="row">
                <div class="col-lg-10">
                    <form class="row" action="{{route('peraturan.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Legalitas/Peraturan:</label>
                            <input type="text" name="nama_peraturan" id="freelance-quote-name"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Nomor:</label>
                            <input type="text" name="nomor" id="freelance-quote-email"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Kategori:</label>
                            <select class="form-control" name="kategori" id="kategori" required>
                                <option value="">--pilih kategori--</option>
                                <option value="1">Perpres</option>
                                <option value="2">Perka</option>
                                <option value="3">BKKBN</option>
                                <option value="4">Perbup</option>
                                <option value="5">SK</option>
                                <option value="6">PERDES</option>
                                <option value="7">PERKADES</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label>Taggal Penetapan:</label>
                            <input type="text" name="tanggal_penetapan" class="form-control datepicker"/>
                        </div>
                        <div class="col-12 form-group">
                            <label>Upload Dokumen:</label>
                            <input type="file" accept=".pdf" id="image" name="path"
                                   class="file-loading" data-show-preview="false" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>tentang:</label>
                            <textarea name="tentang" class="form-control" rows="4" required></textarea>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
            todayHighlight:'TRUE',
            autoclose: true,
        });
    </script>
@endpush
