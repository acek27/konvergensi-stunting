@extends('layouts.master')

@section('content')
    <div class="content-wrap">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="heading-block border-bottom-0 bottommargin-sm">
                    <div class="fancy-title title-border mb-3"><h5 class="fw-normal color font-body">
                            Question & Answer</h5>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="widget">
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <form class="row" action="{{route('faq.store')}}" method="post">
                                    @csrf
                                    @method('POST')
                                    <div class="text-center">
                                        <i class="bi-envelope text-muted mb-3"
                                           style="font-size: 48px;line-height: 1"></i>
                                        <h3 class="h3 mb-3 fw-normal font-primary">Tanyakan Disini</h3>
                                        <p class="font-secondary mb-2">Tanya seputar SIBESTI.</p>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select" name="topik_id" id="topik" required>
                                            <option value="">-- Pilih Topik --</option>
                                            @foreach($topics as $topic)
                                                <option value="{{$topic->id}}">{{$topic->nama_topik}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" name="nama_penanya" id="nama_penanya" class="form-control"
                                               required>
                                        <label for="nama_penanya">Nama Lengkap</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="number" id="telp" class="form-control" name="telp" required>
                                        <label for="telp">Nomor WhatsApp</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="email" id="email" class="form-control" name="email" required>
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-label-group">
                                        <textarea name="pertanyaan" id="pertanyaan" class="form-control"
                                                  required></textarea>
                                        <label for="pertanyaan">Pertanyaan</label>
                                    </div>
                                    <button class="btn btn-lg bg-color text-white w-100 text-uppercase ls-1"
                                            type="submit">Kirim
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
