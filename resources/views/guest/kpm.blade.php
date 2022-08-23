@extends('layouts.master')
@section('content')
    <div class="section topmargin-lg footer-stick">
        <div class="container center clearfix">
            <div class="heading-block bottommargin-sm border-bottom-0">
                <span class="before-heading color">Tabel KPM</span>
                <h2>Data KPM</h2>
            </div>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table class="table table-head-fixed text-nowrap" id="posts" style="text-align: left">
                        <thead>
                        <tr>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th>KPM</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            var dt = $('#posts').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('kpm.data')}}',
                columns: [
                    {data: 'desa.namadesa', name: 'desa.namadesa'},
                    {
                        data: 'desa.kecamatan.kecamatan',
                        name: 'desa.kecamatan.kecamatan',
                        orderable: false,
                        searchable: false,
                        align: 'center'
                    },
                    {data: 'nama_kpm', name: 'nama_kpm'},
                    {data: 'tahun', name: 'tahun'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, align: 'center'},
                ],
            });
        });

    </script>
@endpush
