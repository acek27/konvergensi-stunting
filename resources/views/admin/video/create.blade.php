@extends('layouts.admin')
@section('header')
    <h1 class="m-0">Buat Video Baru</h1>
@endsection
@section('content')
    <div class="container clearfix">
        <div class="form-widget">
            <div class="form-result"></div>
            <div class="row">
                <div class="col-lg-10">
                    <form class="row" action="{{route('video.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-process">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label>Judul:</label>
                            <input type="text" name="judul" id="freelance-quote-name"
                                   class="form-control" required>
                        </div>
                        <div class="col-12 form-group">
                            <label>URL:</label>
                            <input type="text" name="url" id="freelance-quote-name"
                                   class="form-control" required>
                        </div>

                        <div class="col-12 form-group">
                            <label>ID Thumbnail:</label>
                            <input type="text" name="thumbnail" id="freelance-quote-name"
                                   class="form-control" required>
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
