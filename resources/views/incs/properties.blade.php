@extends('base')
@section('content')
<!-- @ dump($properties) -->
<!-- @ dump($properties->category->lebel) -->

<div class="jumbotron">
    <h1 class="display-3 text-center m-4">Nos biens</h1>
    <div class="properties row justify-content-center mx-5">
        @foreach($properties as $propertie)
            <div class="col-md-6">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $propertie->title }}</h5> <!--  AJOUTER QUELQUES AUTRE PROPS -->  
                        <span class="badge bg-light my-2">{!! $propertie->category->label !!}</span>                      
                        <p class="card-text">
                            @if(strlen($propertie->description) > 200)                               
                                {!! substr($propertie->description, 0, 199) !!} [...]                                
                            @else 
                                {!! $propertie->description !!}                                
                            @endif
                        </p>
                        <a href="{{route('property', $propertie->id)}}" class="btn btn-primary"><i class="fas fa-arrow-right"></i> Lire la suite</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $properties->links('vendor.pagination.custom') }}   <!--  $articles->links() LOOK BERK Y A UNE MODIF A FAIRE -->
    </div>
</div>
@endsection