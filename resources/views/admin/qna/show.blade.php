@extends('layouts.admin')

@section('header')
    <h4 class="m-0">Q&A</h4>
@endsection
@section('content')
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card main-content-body-profile">
                <div class="tab-content">
                    <div class="main-content-body tab-pane p-4 border-top-0 active" id="about">
                        <div class="card-body p-0 border p-0 rounded-10">
                            <div class="p-4">
                                <div class="">
                                    <p class="text-right">Tanggal: <b>{{$data->tanggal}}</b></p>
                                    <h4 class="tx-15 text-uppercase mt-3">#{{$data->tiket}}</h4>
                                    <div class=" p-t-10">

                                        <h5 class="text-primary m-b-5 tx-14">Topik</h5>
                                        <p class="">{{$data->topik->nama_topik}}</p>
                                        <hr>
                                    </div>

                                    <div class="">
                                        <h5 class="text-primary m-b-5 tx-14">Pertanyaan</h5>
                                        <p class="">{{$data->pertanyaan}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top"></div>
                            <div class="p-3 p-sm-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="main-content-label tx-13 mg-b-20">Pengirim</label>
                                        <p>{{$data->nama_penanya}}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="main-content-label tx-13 mg-b-20">No. WhatsApp: <b>{{$data->telp}}</b>
                                        </p>
                                        <p class="main-content-label tx-13 mg-b-20">Email: <b>{{$data->email}}</b></p>
                                    </div>
                                </div>
                                <div class="border-top"></div>
                                <h4 class="tx-15 mt-3">Status:
                                    @if($data->status == 1)
                                        <span class="text-success">Selesai</span>
                                    @else
                                        <span class="text-danger">Belum Selesai</span>
                                    @endif
                                </h4>
                                @if($data->status == 1)
                                    <p>Diselesaikan oleh : <b>{{$data->opd->nama_opd}}</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
