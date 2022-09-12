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
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            locale: 'id',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            droppable: false, // this allows things to be dropped onto the calendar !!!
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1),
                className: 'bg-gradient2',
            },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    className: 'bg-gradient1',
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false,
                    className: 'bg-gradient2',
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d + 4, 16, 0),
                    allDay: false,
                    className: 'bg-gradient3',
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    className: 'bg-gradient1',
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    className: 'bg-gradient2',
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    className: 'bg-gradient3',
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/',
                    className: 'bg-gradient2',
                }]
        });

    </script>
@endpush
