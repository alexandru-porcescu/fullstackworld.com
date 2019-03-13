@if ($paginator->hasPages())
        {{-- Previous Page Link --}}
        <a href="{{ $paginator->previousPageUrl() }}" class="is-pulled-left button is-primary" {{!$paginator->onFirstPage() ? '': 'disabled'}}><i class="fas fa-angle-double-left"></i>&nbsp; Previous </a>

        {{-- Next Page Link --}}
        <a href="{{ $paginator->nextPageUrl() }}" class="is-pulled-right button is-primary" {{$paginator->hasMorePages() ? '': 'disabled'}}>Next &nbsp;<i class="fas fa-angle-double-right"></i></a>
    </ul>
@endif