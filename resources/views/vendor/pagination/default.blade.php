<nav class="pagination is-centered">
@if ($paginator->hasPages())
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{-- <li class="disabled"><span>&laquo;</span></li> --}}
            <a class="pagination-previous is-disabled">Anterior</a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous">Anterior</a>
            {{-- <li><a >&laquo;</a></li> --}}
        @endif

    <ul class="pagination-list">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                {{-- <li class="disabled"><span>{{ $element }}</span></li> --}}
                <li><span class="pagination-ellipsis">&hellip;</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- <li class="active"><span>{{ $page }}</span></li> --}}
                        <li><a class="pagination-link is-current">{{ $page }}</a></li>
                    @else
                        {{-- <li><a ></a></li> --}}
                        <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            {{-- <li><a >&raquo;</a></li> --}}
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-next">Próxima</a>
        @else
            <a class="pagination-next is-disabled">Próxima</a>
        @endif
@endif
</nav>

  
  
  



    


