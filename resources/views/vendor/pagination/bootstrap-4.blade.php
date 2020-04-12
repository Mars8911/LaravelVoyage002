@if ($paginator->hasPages())
<ul class="mx-auto">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="" aria-label="@lang('pagination.previous')">

        <a href="#" aria-hidden="true><i class=" fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i>
            <i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev</a>
    </li>
    @else
    <li class="">
        <a class="" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>

    </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <li class=""><a class="">{{ $element }}</a></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="" aria-current="page"><a class="">{{ $page }}</a></li>
    @else
    <li class=""><a class="" href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="page-item">
        <a class="" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next<i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a>
    </li>
    @else
    <li class="" aria-disabled="true" aria-label="@lang('pagination.next')">
        <a class="" aria-hidden="true">Next <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a>
    </li>
    @endif
</ul>
@endif