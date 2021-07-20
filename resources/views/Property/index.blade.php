@extends('base')

@section('content')
<div class="container justify-content-center text-center mt-3">
    <h1 class="display-3 my-5">Liste de nos récentes trouvailles</h1>

    <h2 class="display-4 my-4">Nos biens à vendre et à louer</h2>    
<!-- @ dump($properties) -->
<!-- @ dump(Auth::user()) -->
    
    @include('incs.flash')    
    
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-5" href="{{route('properties.create')}}"><i class="fas fa-plus me-2"></i>Ajouter un nouveau bien</a>
    </div>
    <table class="table table-light text-center">
        <thead>
            <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Crée le</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $propertie)
                <tr>
                    <th>{{$propertie->id}}</th>
                    <td>{{$propertie->title}}</td>
                    <td>{{date('d-m-Y', strtotime($propertie->created_at))}}</td>
                    <td class="d-flex">
                        <a href="{{ route('properties.edit', $propertie->id) }}" class="btn btn-warning mx-3"><i class="fas fa-pen me-2"></i>Editer</a>
                        <form action="{{ route('properties.delete', $propertie->id) }}" method="POST">  <!-- ATTENTION SLUG DOIT AVOIR ETE MIS EN PLACE -->
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger mx-3"><i class="fas fa-minus me-2"></i>Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $properties->links('vendor.pagination.custom') }}   <!--  $articles->links() LOOK BERK Y A UNE MODIF A FAIRE -->
    </div>
</div>


</div>
@endsection