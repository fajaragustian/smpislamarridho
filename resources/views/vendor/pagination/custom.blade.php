@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="next page-numbers" aria-hidden="true" ><i class="ti-arrow-left"></i></a>
                </li>
            @else
                <li>
                    <a class="next page-numbers" href="{{ $paginator->previousPageUrl() }}"  rel="prev" aria-label="@lang('pagination.previous')"><i class="ti-arrow-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <li><a  class="active page-numbers current" aria-current="page"><span>{{ $page }}</span></a></li>
                            {{-- <li class="page-numbers" aria-current="page"><span>{{ $page }}</span></li> --}}
                        @else
                            <li><a  class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="ti-arrow-right"></i></a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="next page-numbers" aria-hidden="true" ><i class="ti-arrow-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
