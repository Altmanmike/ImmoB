@extends('base')

@section('content')
<!-- @ dump($properties) -->
<!-- @ dump(Session::all()) -->
<!-- @ dump($errors->all()) -->

<div class="container">
    <h1 class="text-center mt-5">Poster un nouveau bien</h1>

    <form method="POST" action="{{ route('properties.store') }}">
        @csrf
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Titre</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Titre de votre article">  
                @error('title')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Catégorie</label>
                <select type="text" name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="">--Catégorie du bien--</option>
                    @foreach($properties as $propertie) 
                        <option value="{{$propertie->category_id}}">{{$propertie->category_id}}</option> 
                    @endforeach
                </select>
                @error('category_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Type (T1, T2..)</label>                 
                <select type="text" name="type" class="form-control @error('type') is-invalid @enderror">
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
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Meublé?</label>                
                <select type="text" name="type" class="form-control @error('type') is-invalid @enderror">
                    <option value="">--Définir meublé ou pas--</option>
                    <option value="non">non</option>
                    <option value="oui">oui</option>
                </select> 
                @error('furnished')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>        
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Photo</label>
                <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Photo du bien">  
                @error('photo')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Pièces</label>                
                <select type="text" name="rooms" class="form-control @error('rooms') is-invalid @enderror">
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
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Aire totale</label>
                <input type="text" name="area" class="form-control @error('area') is-invalid @enderror" placeholder="Aire totale du bien en m²">  
                @error('area')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Étage</label>                
                <select type="text" name="floor" class="form-control @error('floor') is-invalid @enderror">
                    <option value="">--Étage--</option>
                    <option value="RDC">RDC</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>   
                @error('floor')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Terrasse</label>                
                <select type="text" name="terrace" class="form-control @error('terrace') is-invalid @enderror">
                    <option value="">--Définir terrasse ou pas--</option>
                    <option value="non">non</option>
                    <option value="oui">oui</option>
                </select> 
                @error('terrace')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Parking</label>                
                <select type="text" name="car_park" class="form-control @error('car_park') is-invalid @enderror">
                    <option value="">--Définir parking ou pas--</option>
                    <option value="non">non</option>
                    <option value="sous-terrain">sous-terrain</option>
                    <option value="privé">privé</option>
                </select> 
                @error('terrace')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>        
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Quartier</label>
                <input type="text" name="district" class="form-control @error('district') is-invalid @enderror" placeholder="Quartier où se situe le bien">  
                @error('district')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Description</label>
                <textarea id="tinymce-editor" name="description" class="form-control @error('description') is-invalid @enderror w-100">Description de votre bien</textarea> 
                @error('description')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror                
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">État</label>
                <select type="text" name="state" class="form-control @error('state') is-invalid @enderror">
                    <option value="">--État du bien--</option>
                    @foreach($properties as $propertie) 
                        <option value="{{$propertie->state}}">{{$propertie->state}}</option> 
                    @endforeach
                </select>
                @error('state')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Agent</label>
                <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{Session->user_id}}">  
                @error('user_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Téléphone</label>
                <input type="text" name="user_phone" class="form-control @error('user_phone') is-invalid @enderror" value="{{Session->user_phone}}">  
                @error('user_phone')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Mail</label>
                <input type="text" name="user_mail" class="form-control @error('user_mail') is-invalid @enderror" value="{{Session->user_mail}}">  
                @error('user_mail')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="form-group">
                <label class="my-2">Prix</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Prix total du bien en euros">  
                @error('price')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror              
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn btn-primary mb-5">Poster le bien</button>
        </div>
    </form>
</div>
 
@endsection
