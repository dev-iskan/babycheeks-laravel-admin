@if ($paginator->hasPages())
  <div id="typo" class="product-filter__pagination mh-3">
      <nav class="pagination is-rounded" role="navigation" aria-label="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
          <a class="pagination-previous" disabled>Предыдущая</a>
        @else
          <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}">Предыдущая</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
          <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}">Следующая</a>
        @else
          <a class="pagination-next" disabled>Следующая</a>
        @endif

        <ul class="pagination-list">
          @if ($paginator->onFirstPage())
            <li><a class="pagination-link is-current">1</a></li>
          @else
            <li><a class="pagination-link" href="{{$paginator->url(1)}}">1</a></li>
          @endif

          @if($paginator->lastPage() > 2)
            @if ($paginator->onFirstPage())
              <li><a class="pagination-link" href="{{$paginator->nextPageUrl()}}">2</a></li>
            @elseif(!$paginator->hasMorePages())
              <li><a class="pagination-link" href="{{$paginator->url($paginator->lastPage() - 1)}}">{{$paginator->lastPage() - 1}}</a></li>
            @else
              <li><a class="pagination-link is-current">{{$paginator->currentPage()}}</a></li>
            @endif
          @endif

          {{-- "Three Dots" Separator --}}
          <li><span class="pagination-ellipsis">&hellip;</span></li>

          @if ($paginator->hasMorePages())
            <li><a class="pagination-link" href="{{$paginator->url($paginator->lastPage())}}">{{$paginator->lastPage()}}</a></li>
          @else
          <li><a class="pagination-link is-current">{{$paginator->lastPage()}}</a></li>
          @endif
        </ul>
      </nav>
    </div>
@endif
