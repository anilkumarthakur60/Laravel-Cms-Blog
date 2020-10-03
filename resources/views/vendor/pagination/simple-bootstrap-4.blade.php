

@if ($paginator->hasPages())
    <nav class="flexbox mt-30">
        @if ($paginator->onFirstPage())
             <a class="btn btn-primary disabled "><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>

        @else
             <a class="btn btn-primary   " href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>

        @endif

        @if ($paginator->hasMorePages())

             <a class="btn btn-primary"  href="{{ $paginator->nextPageUrl() }}">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

        @else 

              <a class="btn btn-primary disabled" href="#">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

        @endif


    </nav>

@endif




