@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Tambah Pengguna</h4>
@endsection
@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Form Biodata Pengguna</h4>
                <p class="text-muted mb-4 font-13">Isi data sesuai dengan format. </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('super.store')}}" method="POST">
                            @csrf
                            <h6 class=" input-title mt-0">Nama Pengguna</h6>
                            <input type="text" class="form-control" maxlength="25" name="name" id="name">
                            <div class="mt-3">
                                <h6 class=" input-title mt-lg-3">Username</h6>
                                <input type="text" maxlength="25" name="username" class="form-control"
                                       id="username" required>
                            </div>
                            <div class="mt-3">
                                <h6 class=" input-title mt-lg-3">E-Mail</h6>
                                <input type="email" maxlength="25" name="email" class="form-control"
                                       id="email" required>
                            </div>
                            <div class="mt-3">
                                <h6 class=" input-title">Password</h6>
                                <input type="password" class="form-control" maxlength="25" name="password"
                                       id="password" required>
                            </div>
                            <div class="mt-3">
                                <h6 class=" input-title">Role</h6>
                                <select class="form-control" required>
                                    <option value="" name="role_id">--Pilih Role--</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3">
                                <button type="submitF" class="btn btn-primary btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
