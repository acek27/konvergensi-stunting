@extends('layouts.admin')
@section('header')
    <h1 class="m-0">Agenda</h1>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Agenda</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-head-fixed text-nowrap" id="posts">
                        <thead>
                        <tr>
                            <th>Nama Agenda</th>
                            <th>Sasaran</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
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
                ajax: '{{route('agenda.data')}}',
                columns: [
                    {data: 'nama_agenda', name: 'nama_agenda'},
                    {data: 'sasaran', name: 'sasaran'},
                    {data: 'tgl_mulai', name: 'tgl_mulai'},
                    {data: 'tgl_selesai', name: 'tgl_selesai'},
                    {data: 'opd_id', name: 'opd_id'},
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
                            url: "{{route('agenda.index')}}/" + id,
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
