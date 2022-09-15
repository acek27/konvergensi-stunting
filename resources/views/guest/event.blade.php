@extends('layouts.master')
@push('css')
    <link href="{{asset('assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <style>
        .fc-left h2 {
            margin: 0;
            margin-top: 10px;
            color: #000;
        }

        .fc-month-button {
            background-color: #C1EFFF;
        }

        .fc-basicWeek-button {
            background-color: #FFB3B3;
        }

        .fc-basicDay-button {
            background-color: #FFE9AE;
        }

        .fc-widget-content {
            background-color: #CDF0EA;
        }

        .fc-sun {
            background-color: #FFB3B3;
        }
    </style>
@endpush
@section('content')
    <!-- Content
    ============================================= -->
    <section id="content" class="bg-white">
        <div class="content-wrap">
            <div class="parallax header-stick bottommargin-lg dark">
                <div class="container clearfix">
                    <div class="events-calendar">
                        <div class="events-calendar-header clearfix">
                            <h2 class="text-gradient-success">Agenda Stunting</h2>
                        </div>
                        {{--                        <div class="card-body">--}}
                        {{--                            <h4 class="mt-0 header-title text-black">Keterangan:</h4>--}}
                        {{--                            <div class="">--}}
                        {{--                                <button class="btn bg-gradient4"></button>--}}
                        {{--                                <span class="text-black">Berlangung dalam sehari</span>--}}
                        {{--                                <button class="btn bg-gradient2" style="margin-left: 10px!important;"></button>--}}
                        {{--                                <span class="text-black">Berlangsung lebih dari sehari</span>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div id="calendar" class="fc-calendar-container text-muted bold"></div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #content end -->
@endsection
@push('js')
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.5/dist/fullcalendar.min.js'></script>
    <script src={{url('https://cdn.jsdelivr.net/npm/fullcalendar@3.10.5/dist/locale-all.min.js')}}></script>
    {{--    <script src="{{asset('assets/pages/calendar-init.js')}}"></script>--}}
    <script>
        function random_item(items) {

            return items[Math.floor(Math.random() * items.length)];
        }

        var bg = ['bg-gradient1', 'bg-gradient2', 'bg-gradient3', 'bg-gradient4'];
        $('#calendar').fullCalendar({
            locale: 'id',
            header: {
                center: 'prev,next today',
                right: 'month,basicWeek,basicDay',
                left: 'title',
            },
            height: 800,
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            droppable: false, // this allows things to be dropped onto the calendar !!!
            events: [
                    @foreach($data as $agenda)
                {
                    id: '{{$agenda->id}}',
                    title: '{{$agenda->nama_agenda}}',
                    start: '{{$agenda->tgl_mulai}}',
                    end: '{{$agenda->tgl_selesai}}',
                    className: random_item(bg),
                },
                @endforeach
            ],
            selectHelper: true,
            eventClick: function (calEvent) {
                var swal_html = '<table class="table table-bordered">' +
                    '<thead><tr><th>Nama Event</th><th>Tanggal</th></tr>' +
                    '<thead><tbody>';
                var isi = '<tr><td style="text-align: left">' + calEvent.title + '</td>' +
                    '<td>' + calEvent.start._i + '</td></tr>';
                swal({
                    title: "Informasi Agenda",
                    html: swal_html + isi + '</tbody></table>',
                    type: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#28a745",
                    confirmButtonText: "OK",
                })
                console.log(calEvent)
            },
        });

    </script>
@endpush
