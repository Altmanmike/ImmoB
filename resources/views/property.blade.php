@extends('base')

@section('content')

<!-- @ d d($property->category->label)           @ dd($category) -->
<!-- @ dd($property->photo) -->
<!-- @ dd(public_path().'\\'.'img\\'.$property->photo) -->
<!-- @ dd(file_exists(public_path().'\\'.'img\\'.$property->photo)) -->
<!-- @ dd($property) -->
<!-- @ dump(Auth::user()) -->

<div class="jumbotron">
    <h2 class="display-3 text-center my-4">{{ $property->title }}</h2>
    <div class="d-flex justify-content-center my-4">
        <h1><span class="badge large bg-light">{!! $property->category->label !!}</span></h1>
    </div> 
    <div class="d-flex justify-content-center mx-5">
        <a class="btn btn-primary" href="{{route('properties')}}"><i class="fas fa-arrow-left"></i> Retour</a>
    </div>   
</div>

<div class="container text-center w-50 mx-auto my-5 bg-light rounded">    
    <h5 class="my-3 pt-3">Détails du bien immobilier n°{{ $property->category_id }}</h5>
    <h5 class="text-center my-3 pt-3">{{ $property->type }}</h5>    
    <h5 class="my-3 pt-3">Nombre de pièces: {{ $property->rooms }}</h5>
    <h5 class="my-3 pt-3">Aire: {{ $property->area }}</h5>
    <p class="my-3 pt-3">{!! $property->description !!}</p> <!-- TINYMCE PRODUCTION MODIF DE { { $property->description } } -->
    @if(file_exists(public_path().'\\'.'img\\'.$property->photo))          
        <img src="/img/<?= $property->photo ?>" alt="" style="max-width:400px;" />   
    @else
        <img class="my-3 pt-3" src="{{ $property->photo }}" alt=""/>
    @endif
    <h5 class="my-3 pt-3">Prix: {{ $property->price }}</h5>
    <h5 class="my-3 py-3">Mise en ligne: {{date('d-m-Y', strtotime($property->created_at))}}</h5>
</div>

@endsection