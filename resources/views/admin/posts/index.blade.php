@extends('layouts.master')
@section('page-title')
    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>POSTING BERITA/INFORMASI</h1>
            <span>Form berita/informasi</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Widgets</a></li>
                <li class="breadcrumb-item active" aria-current="page">Freelance Quote Form</li>
            </ol>
        </div>

    </section><!-- #page-title end -->
@endsection
@section('content')
    <div class="container clearfix">
        <div class="form-widget">
            <div class="form-result"></div>
            <div class="row">
                <div class="col-lg-10">
                    <form class="row" action="{{route('posts.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Judul:</label>
                            <input type="text" name="title" id="freelance-quote-name"
                                   class="form-control required">
                        </div>
                        <div class="col-12 form-group">
                            <label>Editor:</label>
                            <input type="text" name="editor" id="freelance-quote-email"
                                   class="form-control required">
                        </div>

                        <div class="col-12 form-group">
                            <label>Upload Gambar:</label>
                            <input type="file" accept=".png,.jpg, .jpeg" id="image" name="image"
                                   class="file-loading" data-show-preview="false"/>
                        </div>
                        <div class="col-sm-6 col-md-4 divpreview" style="display: none">
                            <div class="card-box">
                                <div class="img-container">
                                    <img id="preview" src="http://via.placeholder.com/1028x760" alt=""
                                         style="width:100%;max-width: 100%;max-height: 100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Konten:</label>
                            <textarea name="content" id="content-editor"
                                      class="form-control" cols="30" rows="8"></textarea>
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

            $('#image').change(function () {
                $('.divpreview').fadeIn();
                readURL(this);
            });
            $('.removefile').click(function () {
                $('.divpreview').fadeOut();
            });
        })
    </script>
@endpush
