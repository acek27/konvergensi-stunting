@extends('layouts.admin')
@section('header')
    <h4 class="m-0">Q&A</h4>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Pengajuan Pertanyaan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-head-fixed text-nowrap" id="posts">
                        <thead>
                        <tr>
                            <th>Tiket</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Topik</th>
                            <th>No. WhatsApp</th>
                            <th>Status</th>
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
                ajax: '{{route('qna.index')}}',
                columns: [
                    {data: 'tiket', name: 'tiket'},
                    {data: 'nama_penanya', name: 'nama_penanya'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'topik.nama_topik', name: 'topik.nama_topik'},
                    {data: 'telp', name: 'telp', orderable: false, searchable: false, align: 'center'},
                    {data: 'status', name: 'status', orderable: false, searchable: false, align: 'center'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, align: 'center'},
                ],
            });
            var del = function (id) {
                swal({
                    title: "Selesaikan?",
                    text: "Anda tidak dapat mengembalikan data yang sudah diselesaikan!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#46a955",
                    confirmButtonText: "Iya!",
                    cancelButtonText: "Tidak!",
                }).then(
                    function (result) {
                        $.ajax({
                            url: "{{route('qna.index')}}/" + id,
                            method: "PUT",
                        }).done(function (msg) {
                            dt.ajax.reload();
                            swal("Tersimpan!", "Data sudah diselesaikan.", "success");
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
