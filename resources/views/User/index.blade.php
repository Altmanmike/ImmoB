@extends('base')

@section('content')
<!-- @ dd($users) -->

<div class="container justify-content-center mt-3">
    <h1 class="display-3 text-center my-5">Agents d'ImmoB</h1>

    <h2 class="display-4 text-center my-4">Liste de nos agents</h2>

    <table class="table table-light text-center">
        <thead>
            <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Rôle</th> 
                <th scope="col">Crée le</th>                
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->created_at}}</td>                 
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection