@extends('layouts.master')
@push('css')
    <link href="{{asset('assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
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
                            <h2 class="text-gradient-success">Agenda Stuntig</h2>
                        </div>
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

        $('#calendar').fullCalendar({
            locale: 'id',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek'
            },
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            droppable: false, // this allows things to be dropped onto the calendar !!!
            events: [
                    @foreach($data as $agenda)
                {
                    title: '{{$agenda->nama_agenda}}',
                    start: '{{$agenda->tgl_mulai}}',
                    end: '{{$agenda->selesai}}',
                    className: 'bg-gradient4',
                },
                @endforeach
            ]
        });

    </script>
@endpush
