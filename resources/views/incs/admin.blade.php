@extends('base')
@section('content')

<div class="jumbotron">

    <h1 class="display-3 text-center m-4">Panneau Admin</h1>

    <div class="container row mx-auto w-50">

        <a href="{{route('users.index')}}" class="btn btn-primary mb-4" style="height:5rem;!important"><h2 style="padding: 1rem;"><i class="far fa-eye"></i> Les agents</h2></a> 

        <a href="{{route('properties.index')}}" class="btn btn-primary mb-4" style="height:5rem;!important"><h2 style="padding: 1rem;"><i class="far fa-eye"></i> Les biens</h2></a>  

        <a href="{{route('categories.index')}}" class="btn btn-primary" style="height:5rem;!important"><h2 style="padding: 1rem;"><i class="far fa-eye"></i> Les catégories</h2></a> 
    </div>
</div>

@endsection