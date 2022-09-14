@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Tambah Pengguna</h4>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-6">
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
                                <input type="text" class="form-control" name="name" id="name">
                                <div class="mt-3">
                                    <h6 class=" input-title mt-lg-3">Username</h6>
                                    <input type="text" name="username" class="form-control"
                                           id="username" required>
                                </div>
                                <div class="mt-3">
                                    <h6 class=" input-title mt-lg-3">E-Mail</h6>
                                    <input type="email" name="email" class="form-control"
                                           id="email" required>
                                </div>
                                <div class="mt-3">
                                    <h6 class=" input-title">Password</h6>
                                    <input type="password" class="form-control" name="password"
                                           id="password" required>
                                </div>
                                <div class="mt-3">
                                    <h6 class=" input-title">OPD</h6>
                                    <select class="form-control select2" name="opd_id" required>
                                        <option value="">--Pilih OPD--</option>
                                        @foreach($opds as $opd)
                                            <option value="{{$opd->kode}}">{{$opd->nama_opd}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <h6 class=" input-title">Role</h6>
                                    <select class="form-control" name="role_id" required>
                                        <option value="">--Pilih Role--</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    <p class="text-danger mb-4 font-13">Pembagian Role/Hak Akses dapat dilihat pada
                                        penjelasan di samping. </p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
