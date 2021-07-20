@extends('base')

@section('content')
  <div class="container-fluid text-center mx-auto my-3">
    <h1 class="mx-auto mt-5">Contactez nos agents!</h1> 
    <h2 class="mx-auto my-4">Prise de contact sur mon beau site</h2>   
    <p class="mx-auto">Réception d'une prise de contact avec les éléments suivants :</p>
    <ul class="mx-auto mt-4 mb-0 w-25" style="text-align: justify;">
      <li><strong>Nom</strong> : {{ $contact['nom'] }}</li>
      <li><strong>Email</strong> : {{ $contact['email'] }}</li>
      <li><strong>Message</strong> : {{ $contact['message'] }}</li>
    </ul>
  </div>
@endsection