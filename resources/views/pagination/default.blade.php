@if ($paginator->hasPages())
        {{-- Previous Page Link --}}
        <a href="{{ $paginator->previousPageUrl() }}" class="is-pulled-left button {{!$paginator->onFirstPage() ? 'is-primary': ''}}" {{!$paginator->onFirstPage() ? '': 'disabled'}}><i class="fas fa-angle-double-left"></i>&nbsp; Newer Posts </a>

        {{-- Next Page Link --}}
        <a href="{{ $paginator->nextPageUrl() }}" class="is-pulled-right button {{$paginator->hasMorePages() ? 'is-primary': ''}}" {{$paginator->hasMorePages() ? '': 'disabled'}}>OLDER POSTS &nbsp;<i class="fas fa-angle-double-right"></i></a>
    </ul>
@endif