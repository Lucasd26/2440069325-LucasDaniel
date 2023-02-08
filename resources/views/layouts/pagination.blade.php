@if ($paginator->hasPages())
    <nav class="d-flex justify-content-center">
        <ul class="pagination">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item bg-dark border border-light border-2 rounded"><a
                            class="page-link text-light active" href="{{ $url }}">{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item rounded"><a
                                    class="page-link disabled">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item bg-dark border border-light border-2 rounded"><a
                                    class="page-link text-light" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>
@endif
