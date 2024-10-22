@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Edit Pengguna</h4>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Form Biodata Pengguna</h4>
                    <p class="text-muted mb-4 font-13">Isi data yang ingin diubah sesuai dengan format.</p>

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
                            <form action="{{route('super.update',$data->id)}}" method="POST">
                                @method('PUT')
                                @csrf
                                <h6 class=" input-title mt-0">Nama Pengguna</h6>
                                <input type="text" class="form-control" value="{{$data->name}}"
                                       name="name"
                                       id="name">
                                <div class="mt-3">
                                    <h6 class=" input-title mt-lg-3">Username</h6>
                                    <input type="text" name="username" class="form-control"
                                           value="{{$data->username}}"
                                           id="username" required>
                                </div>
                                <div class="mt-3">
                                    <h6 class=" input-title mt-lg-3">E-Mail</h6>
                                    <input type="email" value="{{$data->email}}" name="email"
                                           class="form-control"
                                           id="email" required>
                                </div>
                                <div class="mt-3">
                                    <h6 class=" input-title">Password</h6>
                                    <input type="password" class="form-control" name="password"
                                           id="password">
                                </div>
                                <p class="text-danger mb-4 font-13">Abaikan kolom password jika tidak ingin mengubah
                                    password.</p>
                                <div class="mt-3">
                                    <h6 class=" input-title">OPD</h6>
                                    <select class="form-control select2" name="opd_id" required>
                                        <option value="">--Pilih OPD--</option>
                                        @foreach($opds as $opd)
                                            <option
                                                value="{{$opd->kode}}" {{$data->opd_id == $opd->kode ? 'selected' : ''}}>
                                                {{$opd->nama_opd}}</option>
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
        <div class="col-xl-6  col-lg-6">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted">Hak Akses untuk <strong>{{$data->name}}</strong></p>
                    <div class="row mb-3">
                        @foreach($data->roles as $role)
                            <div class="col-sm-6">
                                <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-warning"></i>
                                    {{$role->name}}
                                </p>
                                <form action="{{route('super.delRole', $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" value="{{$role->id}}" name="role_id">
                                    <button type="submit" class="btn btn-link"><i class="fa fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <form action="{{route('super.addRole', $data->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mt-3">
                            <h6 class=" input-title">Tambah Role</h6>
                            <select class="form-control" name="role_id" required>
                                <option value="">--Pilih Role--</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-danger btn-sm btn-block text-white mt-2" type="submit">Simpan</button>
                    </form>
                </div>

            </div>
            <div class="card timeline-card">
                <div class="card-body p-0">
                    <div class="bg-gradient2 text-white text-center py-3 mb-4">
                        <p class="mb-0 font-18"><i class="mdi mdi-lock font-20"></i> Pembagian Role/Hak Akses</p>
                    </div>
                </div>
                <div class="card-body boxscroll" tabindex="5001" style="overflow: hidden; outline: none;">
                    <div class="timeline">

                        <div class="entry">
                            <div class="title">
                                <h6>SUPERADMIN</h6>
                            </div>
                            <div class="body">
                                <p>Mengelola pengguna</p>
                            </div>
                        </div>

                        <div class="entry">
                            <div class="title">
                                <h6>BAPPEDA</h6>
                            </div>
                            <div class="body">
                                <p>Mengelola berita/informasi, mengelola galeri, mengelola KPM, mengelola peta sebaran &
                                    capaian mengelola agenda, mengelola TPPS, mengelola data stunting, mengelola aksi
                                    konvergensi, mengelola legalitas/peraturan, mengelola materi paparan
                                </p>
                            </div>
                        </div>

                        <div class="entry">
                            <div class="title">
                                <h6>DP3AP2KB</h6>
                            </div>
                            <div class="body">
                                <p>Mengelola agenda, mengelola TPK, mengelola galeri, mengelola berita/informasi</p>
                            </div>
                        </div>
                        <div class="entry">
                            <div class="title">
                                <h6>OPD</h6>
                            </div>
                            <div class="body">
                                <p>Mengelola agenda, mengelola galeri, mengelola berita/informasi</p>
                            </div>
                        </div>
                        <div class="entry">
                            <div class="title">
                                <h6>KECAMATAN</h6>
                            </div>
                            <div class="body">
                                <p>Mengelola Aksi Konvergensi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
