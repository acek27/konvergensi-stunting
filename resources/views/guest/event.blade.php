@extends('layouts.master')
@section('content')
    <!-- Content
    ============================================= -->
    <section id="content" class="bg-white">
        <div class="content-wrap">

            <div class="parallax header-stick bottommargin-lg dark"
                 style="background-color: black">

                <div class="container clearfix">

                    <div class="events-calendar">
                        <div class="events-calendar-header clearfix">
                            <h2>Events Overview</h2>
                            <h3 class="calendar-month-year">
                                <span id="calendar-month" class="calendar-month"></span>
                                <span id="calendar-year" class="calendar-year"></span>
                                <nav>
                                    <span id="calendar-prev" class="calendar-prev"><i
                                            class="icon-chevron-left"></i></span>
                                    <span id="calendar-next" class="calendar-next"><i
                                            class="icon-chevron-right"></i></span>
                                    <span id="calendar-current" class="calendar-current" title="Got to current date"><i
                                            class="icon-reload"></i></span>
                                </nav>
                            </h3>
                        </div>
                        <div id="calendar" class="fc-calendar-container"></div>
                    </div>


                </div>

            </div>

        </div>
    </section><!-- #content end -->
@endsection
@push('js')
    <script src="{{asset('canvas/js/jquery.calendario.js')}}"></script>
{{--    <script src="{{asset('canvas/js/events-data.js')}}"></script>--}}
    <script>
        var canvasEvents = {
            @foreach($data as $datum)
            '{{$datum->start}}' : '{{$datum->nama_agenda}}',
            @endforeach
        };
        var cal = $('#calendar').calendario({
                onDayClick: function ($el, $contentEl, dateProperties) {

                    for (var key in dateProperties) {
                        console.log(key + ' = ' + dateProperties[key]);
                    }

                },
                caldata : canvasEvents,
                weeks: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                weekabbrs: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                monthabbrs: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            }),
            $month = $('#calendar-month').html(cal.getMonthName()),
            $year = $('#calendar-year').html(cal.getYear());

        $('#calendar-next').on('click', function () {
            cal.gotoNextMonth(updateMonthYear);
        });
        $('#calendar-prev').on('click', function () {
            cal.gotoPreviousMonth(updateMonthYear);
        });
        $('#calendar-current').on('click', function () {
            cal.gotoNow(updateMonthYear);
        });

        function updateMonthYear() {
            $month.html(cal.getMonthName());
            $year.html(cal.getYear());
        };

    </script>
@endpush
