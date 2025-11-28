@if ($paginator->hasPages())
    <nav>
        <ul class="pagination" style="display:flex; gap:5px; list-style:none; margin-top:15px;">

            {{-- Botón Anterior --}}
            @if ($paginator->onFirstPage())
                <li><span style="padding:6px 12px; border:1px solid #ccc; color:#aaa;">‹</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" style="padding:6px 12px; border:1px solid #ccc; text-decoration:none;">‹</a></li>
            @endif

            {{-- Números --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><span style="padding:6px 12px; border:1px solid #ccc;">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span style="padding:6px 12px; border:1px solid #333; background:#eee;">{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" style="padding:6px 12px; border:1px solid #ccc; text-decoration:none;">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Botón Siguiente --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" style="padding:6px 12px; border:1px solid #ccc; text-decoration:none;">›</a></li>
            @else
                <li><span style="padding:6px 12px; border:1px solid #ccc; color:#aaa;">›</span></li>
            @endif

        </ul>
    </nav>
@endif
