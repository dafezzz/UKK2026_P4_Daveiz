@if ($paginator->hasPages())
<nav class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-2">

    <!-- INFO -->
    <div class="small text-muted">
        Menampilkan 
        <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
        -
        <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
        dari 
        <span class="fw-semibold">{{ $paginator->total() }}</span> data
    </div>

    <!-- PAGINATION -->
    <ul class="pagination custom-pagination mb-0">

        <!-- PREV -->
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">&lt;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">&lt;</a>
            </li>
        @endif

        <!-- NUMBER -->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">
                    <span class="page-link">...</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <span class="page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- NEXT -->
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">&gt;</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">&gt;</span>
            </li>
        @endif

    </ul>

</nav>
@endif