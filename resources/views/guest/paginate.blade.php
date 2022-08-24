@if ($paginator->hasPages())
        <ul class="pagination justify-content-center pagination-circle pagination-sm">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"> <span
                            aria-hidden="true" tabindex="-1">«</span></a></li>
            @else
                <li class="page-item"><a class="page-link"
                                         href="{{ $paginator->previousPageUrl() }}">
                        «</a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link"
                                   href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><span aria-hidden="true">»</span></a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" href="#">»</a>
                </li>
            @endif
        </ul>
@endif
