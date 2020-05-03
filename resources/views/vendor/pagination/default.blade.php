@if ($paginator->hasPages())
    <nav>
        <ul class="page-numbers">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="previous page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"><a class="previous page-numbers">
                        <span aria-label="true"><i class="fa fa-angle-left"></i></span>
                    </a>
                </li>
            @else
                <li>
                    <a class="previous page-numbers"  href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a>
                </li>

            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="page-numbers current">{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}"><span class="page-numbers current">{{ $page }}</span></a> </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
            @else
                <li><a class="next page-numbers disabled"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>

            @endif
        </ul>
    </nav>
@endif


