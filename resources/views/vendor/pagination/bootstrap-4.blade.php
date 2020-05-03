@if ($paginator->hasPages())
        <ul class="page-numbers">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="previous page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                </li>

            @else
                <li>
                    <a class="previous page-numbers" {{ $paginator->previousPageUrl() }}><span aria-label="@lang('pagination.previous')"><i class="fa fa-angle-left"></i></span></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- Array Of Links --}}

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page"><span class="page-numbers current">{{ $page }}</span></li>
                        @else
                            <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>

                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a>
                </li>
            @else
                <li class="next page-numbers" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </li>

            @endif
        </ul>
@endif
