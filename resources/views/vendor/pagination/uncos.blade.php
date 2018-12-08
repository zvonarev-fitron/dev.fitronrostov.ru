@if ($paginator->hasPages())
    <div class="pagination">
        <ul class="uk-pagination">
        @if ($paginator->onFirstPage())
            <li class="prev uk-disabled"><span>«</span></li>
        @else
            <li class="prev"><a href="{{ $paginator->previousPageUrl() }}">«</a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="prev uk-disabled"><span>{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="uk-active"><span>{{ $page }}</span></li>
                    @else

                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="next"><a href="{{ $paginator->nextPageUrl() }}">»</a></li>
        @else
            <li class="next uk-disabled"><span>»</span></li>
        @endif
        </ul>
    </div>
@endif
