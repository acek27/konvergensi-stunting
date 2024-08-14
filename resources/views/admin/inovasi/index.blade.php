@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Berita/Informasi</h4>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Berita/Informasi</h3>
                    <a class="btn btn-primary" href="{{route('inovasi.create')}}">Tambah baru</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-head-fixed text-nowrap" id="posts">
                        <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Inovasi</th>
                            <th>OPD</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            var dt = $('#posts').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('inovasi.data')}}',
                columns: [
                    {data: 'created_at', name: 'created_at', orderable: false, searchable: false, visible: false,},
                    {data: 'nama_inovasi', name: 'nama_inovasi'},
                    {data: 'opd.nama_opd', name: 'opd.nama_opd'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, align: 'center'},
                ],
            });
            var del = function (id) {
                swal({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat mengembalikan data yang sudah terhapus!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Iya!",
                    cancelButtonText: "Tidak!",
                }).then(
                    function (result) {
                        $.ajax({
                            url: "{{route('inovasi.index')}}/" + id,
                            method: "DELETE",
                        }).done(function (msg) {
                            dt.ajax.reload();
                            swal("Deleted!", "Data sudah terhapus.", "success");
                        }).fail(function (textStatus) {
                            alert("Request failed: " + textStatus);
                        });
                    }, function (dismiss) {
                        // dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
                        swal("Cancelled", "Data batal dihapus", "error");
                    });
            };
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
            });
        });

    </script>
@endpush
