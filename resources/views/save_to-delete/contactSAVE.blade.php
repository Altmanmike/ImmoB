@extends('base')

@section('content')

    <h1 class="mx-auto w-50">Contactez nos agents!</h1> 
    <h2 class="mx-auto my-4 w-50">Veuillez remplir et envoyer le formulaire</h2>
    <form class="mx-auto my-4 w-50" action="send.php" method="POST">        
        <div class="form-group row">
            <div class="col">
                <div class="form-group mb-4">
                    <label for="">Nom</label>
                    <input class="form-control" type="text" name="nom" placeholder="Entrez votre nom"/>
                </div>
            </div>
            <div class="col">
                <div class="form-group mb-4">
                    <label for="">Prénom</label>
                    <input class="form-control" type="text" name="prenom" placeholder="Entrez votre prénom"/>
                </div>
            </div>
        </div>        
        <div class="form-group mb-4">
            <label for="">Mail</label>
            <input class="form-control" type="text" name="mail" placeholder="Entrez votre mail"/>
        </div>
        <div class="form-group mb-4">
            <label for="">Message</label>
            <textarea class="form-control" name="message" rows="5" cols="33" placeholder="Entrez votre message"></textarea>
        </div> 
        <button type="submit" class="btn btn-primary mb-4">Soumettre</button>
    </form>
    
@endsection