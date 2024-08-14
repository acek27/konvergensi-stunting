@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Buat Berita/Informasi Baru</h4>
@endsection
@section('content')
    <div class="container clearfix">
        <div class="form-widget">
            <div class="form-result"></div>
            <div class="row">
                <div class="col-lg-10">
                    <form class="row" action="{{route('posts.update',$data->id)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Judul:</label>
                            <input type="text" name="title" value="{{$data->title}}" id="freelance-quote-name"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Editor:</label>
                            <input type="text" name="editor" value="{{$data->editor}}" id="freelance-quote-email"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>Konten:</label>
                            <textarea name="content" id="content-editor"
                                      class="form-control" cols="30" rows="8" required>{{$data->content}}</textarea>
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
