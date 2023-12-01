@push('head')
<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
@endpush

@if ($paginator->hasPages())
    <nav class="pagination-container">
    <div class="pagination-desktop">
        <div class="pagination-info">
            {!! __('Showing') !!}
            <div class="fw-semibold">{{ $paginator->firstItem() }}</div>
            {!! __('to') !!}
            <div class="fw-semibold">{{ $paginator->lastItem() }}</div>
            {!! __('of') !!}
            <div class="fw-semibold">{{ $paginator->total() }}</div>
            {!! __('results') !!}
        </div>

        <ul class="pagination">
            {{-- First Page Link --}}
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}"
                    aria-label="@lang('pagination.first')">&laquo;&laquo;</a>
            </li>

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @php
            $halfTotal = floor(5 / 2);
            $start = max(1, $paginator->currentPage() - $halfTotal);
            $end = min($start + 4, $paginator->lastPage());
            @endphp

            @for ($i = $start; $i <= $end; $i++) @if ($i==$paginator->currentPage())
                <li class="page-item active" aria-current="page"><span class="page-link">{{ $i }}</span></li>
                @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
                @endfor

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                        aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
                @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
                @endif

                {{-- Last Page Link --}}
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}"
                        aria-label="@lang('pagination.last')">&raquo;&raquo;</a>
                </li>
        </ul>
    </div>

    <!-- Mobile View Pagination -->
    <div class="pagination-mobile">
        <div class="pagination-info">
            {!! __('Showing') !!}
            <div class="fw-semibold">{{ $paginator->firstItem() }}</div>
            {!! __('to') !!}
            <div class="fw-semibold">{{ $paginator->lastItem() }}</div>
            {!! __('of') !!}
            <div class="fw-semibold">{{ $paginator->total() }}</div>
            {!! __('results') !!}
        </div>

        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @php
            $halfTotal = floor(5 / 2);
            $start = max(1, $paginator->currentPage() - $halfTotal);
            $end = min($start + 2, $paginator->lastPage());
            @endphp

            @for ($i = $start; $i <= $end; $i++) @if ($i==$paginator->currentPage())
                <li class="page-item active" aria-current="page"><span class="page-link">{{ $i }}</span></li>
                @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
                @endfor

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                        aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
                @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
                @endif
        </ul>
    </div>
    </nav>
@endif