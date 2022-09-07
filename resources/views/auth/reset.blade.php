@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Pengaturan</h4>
@endsection
@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-self-center">
                    <img src="assets/images/widgets/code.svg" alt="" class="" height="100">
                    <div class="media-body ml-3">
                        <h6>Atur Ulang Kata Sandi</h6>
                        <p class="text-muted font-13 ">Untuk meningkatkan keamanan, gunakanlah password yang terdiri
                            dari
                            huruf, angka dan simbol.</p>
                        <form action="{{route('reset.submit',Auth::user()->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{Auth::user()->name}}"
                                           id="username" readonly disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password"
                                           id="password">
                                </div>
                            </div>
                            <div class="form-group row">

                                <button type="submit" class="btn btn-gradient-secondary">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
