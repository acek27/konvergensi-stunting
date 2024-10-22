@foreach($data as $datum)
    <div class="col-sm-6 col-lg-4">
        <div class="feature-box fbox-plain">
            <div class="fbox-icon">
                <a href="#"><img src="{{asset('event.png')}}" alt="Image"></a>
            </div>
            <div class="fbox-content">
                <h3 class="nott fw-semibold ls0">{{$datum->judul}}</h3>
                <p>
                    <a href="{{route('kegiatan.file',$datum->id)}}"
                       target="_blank"><i
                            class="fa fa-download"></i> Unduh file</a> -
                    <a href="{{route('kegiatan.file',$datum->id)}}"
                       target="_blank">Lihat <i class="fa fa-arrow-right ml-4"></i> </a>
                </p>
            </div>
        </div>
    </div>
@endforeach
