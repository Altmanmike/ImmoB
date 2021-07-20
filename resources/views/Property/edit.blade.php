@extends('base')

@section('content')

<!-- @ dd($property->id) -->
<!-- @ dd($property) -->
<!-- @ dump($property) -->
<!-- @ dd($categories) -->
<!-- @ dump(Auth::user()) -->
<!-- @ dump($errors->all()) -->

<div class="container bg-light rounded my-5">
    <h1 class="text-center mt-5 pt-5">Éditer le bien</h1>

    <form method="POST" action="{{ route('properties.update', $property->id) }}">
        @method('PUT')
        @csrf
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Titre</strong></label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$property->title}}">  
                @error('title')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Catégorie</strong></label>
                <select type="text" name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="{{$property->category_id}}" selected>{{$property->category_id}}</option>
                    @foreach($categories as $categorie) 
                        <option value="{{$categorie->id}}">{{$categorie->label}}</option> 
                    @endforeach
                </select>
                @error('category_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Type (T1, T2..)</strong></label>                 
                <select type="text" name="type" class="form-control @error('type') is-invalid @enderror">
                    <option value="{{$property->type}}" selected>{{$property->type}}</option>
                    <option value="">--Type du bien (T1, T2..)--</option>
                    <option value="T1">T1</option>
                    <option value="T2">T2</option>
                    <option value="T3">T3</option> 
                    <option value="T4">T4</option> 
                    <option value="T5">T5</option> 
                    <option value="T6">T6</option>  
                </select>
                @error('type')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Meublé?</strong></label>                
                <select type="text" name="furnished" class="form-control @error('furnished') is-invalid @enderror">
                    <option value="{{$property->furnished}}" selected>{{$property->furnished}}</option>
                    <option value="">--Définir meublé ou pas--</option>
                    <option value="Non meublé!">Non meublé!</option>
                    <option value="Meublé!">Meublé!</option>
                </select> 
                @error('furnished')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>        
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Photo</strong></label>
                <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" value="{{$property->photo}}">  
                @error('photo')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Pièces</strong></label>                
                <select type="text" name="rooms" class="form-control @error('rooms') is-invalid @enderror">
                    <option value="{{$property->rooms}}" selected>{{$property->rooms}}</option>
                    <option value="">--Nombre de pièces--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>   
                @error('rooms')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Aire totale</strong></label>
                <input type="text" name="area" class="form-control @error('area') is-invalid @enderror" value="{{$property->area}}">  
                @error('area')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Description</strong></label>
                <textarea id="tinymce-editor" name="description" class="form-control @error('description') is-invalid @enderror w-100">{!!$property->description!!}</textarea> 
                @error('description')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror                
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Agent</strong></label>
                <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{Auth::user()->id}}">  
                @error('user_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Téléphone</strong></label>
                <input type="text" name="user_phone" class="form-control @error('user_phone') is-invalid @enderror" value="{{Auth::user()->phone}}">  
                @error('user_phone')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Mail</strong></label>
                <input type="text" name="user_mail" class="form-control @error('user_mail') is-invalid @enderror" value="{{Auth::user()->email}}">  
                @error('user_mail')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label class="my-2"><strong>Prix</strong></label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{$property->price}}">  
                @error('price')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary mb-5">Mettre à jour le bien</button>
        </div>
    </form>
</div>
 
@endsection