@extends('base')

@section('content')
<!-- @ dd($categories) -->

<div class="container justify-content-center mt-3">
    <h1 class="display-3 text-center my-5">Catégories de biens</h1>

    <h2 class="display-4 text-center my-4">Nos catégories de biens</h2>

    <table class="table table-light text-center">
        <thead>
            <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">Label</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $categorie)
                <tr>
                    <th>{{$categorie->id}}</th>
                    <td>{{$categorie->label}}</td>                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection