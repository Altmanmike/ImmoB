@if($paginator->hasPages())
    <!-- @ dd($element); -->    
    <ul class="pagination">        
        @foreach($elements as $element)                       
            @if(is_string($element))                
                <li class="page-item disabled">
                    <span class="page-link">{{ $element }}</span>
                </li>
            @endif
            @if(is_array($element))
                @if($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Précédent</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fa-arrow-left"></i> Précédent</a>
                    </li>
                @endif
                @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <li class="page-item">
                            <span class="page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
                @if($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-arrow-right"></i> Suivant</a>
                    </li>
                @else
                    <li class="page-item">
                        <span class="page-link disabled">Suivant</span>
                    </li>
                @endif
            @endif            
        @endforeach        
    </ul>
@endif