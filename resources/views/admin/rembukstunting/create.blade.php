@extends('layouts.admin')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
@endpush
@section('header')
    <h4 class="m-0">Buat Rembuk Stunting Baru</h4>
@endsection
@section('content')
    <div class="container clearfix">
        <div class="form-widget">
            <div class="form-result"></div>
            <div class="row">
                <div class="col-lg-10">
                    <form class="row" action="{{route('rembukstunting.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Nama Data Stunting:</label>
                            <input type="text" name="judul" id="freelance-quote-name"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Kategori:</label>
                            <select class="form-control" name="kategori" id="kategori" required>
                                <option value="">--pilih kategori--</option>
                                <option value="1">Kabupaten</option>
                                <option value="3">Kecamatan</option>
                                <option value="2">Desa</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label>Upload Dokumen:</label>
                            <input type="file" accept=".pdf" id="image" name="path"
                                   class="file-loading" data-show-preview="false" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Keterangan:</label>
                            <textarea name="keterangan" class="form-control" rows="4" required></textarea>
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
