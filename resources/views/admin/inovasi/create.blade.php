@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Inovasi Baru</h4>
@endsection
@section('content')
    <div class="container clearfix">
        <div class="form-widget">
            <div class="form-result"></div>
            <div class="row">
                <div class="col-lg-10">
                    <form class="row" action="{{route('inovasi.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Nama Inovasi:</label>
                            <input type="text" name="nama_inovasi" id="freelance-quote-name"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>OPD:</label>
                            <select class="form-control select2" name="opd_id" required>
                                <option value="">--Pilih OPD--</option>
                                @foreach($opds as $opd)
                                    <option
                                        value="{{$opd->kode}}">
                                        {{$opd->nama_opd}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12 form-group">
                            <label>Upload Gambar:</label>
                            <input type="file" accept=".png,.jpg, .jpeg" id="image" name="image"
                                   class="file-loading" data-show-preview="true" required>
                        </div>

                        <div class="col-12 form-group">
                            <label>Konten:</label>
                            <textarea name="deskripsi" id="content-editor"
                                      class="form-control" cols="30" rows="8" required></textarea>
                        </div>
                        <div class="col-12 form-group">
                            <label>Upload Dokumen pendukung: <span class="text-danger">* (PDF)</span></label>
                            <input type="file" class="form-control" accept=".pdf" id="pendukung" name="pendukung">
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
    <script>
        jQuery(document).ready(function () {
            tinymce.init({
                selector: '#content-editor',
                menubar: false,
                setup: function (editor) {
                    editor.on('change', function (e) {
                        editor.save();
                    });
                }
            });

            $("#image").fileinput({
                browseClass: "btn btn-secondary",
                browseIcon: "",
                removeClass: "btn btn-danger removefile",
                removeLabel: "",
                removeIcon: "<i class='icon-trash-alt1'></i>",
                showUpload: false
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

        })
    </script>
@endpush
