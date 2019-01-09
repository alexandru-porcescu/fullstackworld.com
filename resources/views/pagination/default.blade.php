@if ($paginator->hasPages())
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" class="is-pulled-left button is-primary"><i class="fas fa-angle-double-left"></i>&nbsp; Previous </a>
        @endif


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="is-pulled-right button is-primary">Next &nbsp;<i class="fas fa-angle-double-right"></i></a>
        @endif
    </ul>
@endif