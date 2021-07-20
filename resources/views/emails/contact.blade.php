@extends('base')

@section('content')
  <div class="container-fluid text-center mx-auto my-3">
    <h1 class="mx-auto mt-5">Contactez nos agents!</h1>
    <h2 class="mx-auto my-4">Venez nous rencontrer</h2>
    <div class="d-flex justify-content-center my-5">
      <div class="card"> 
        <div class="card-body d-flex">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.425827110144!2d4.834615309913514!3d45.75665458195561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea537bdc5ab3%3A0x5d9d9385f58b2047!2sPlace%20Bellecour!5e0!3m2!1sfr!2sfr!4v1626103699458!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <div class="mx-5" style="text-align:justify;">
            <h3>IMMOB Lyon</h3>
            <a href="tel:+3377777777">+33 77 77 77 77</a><br>
            <a href="mailto:contact@immob.fr" target="_blank">contact@immob.fr</a><br><br>
            <label>Adresse de l'agence sur Lyon:</label><br>
            <address>Place Bellecour, 69002 LYON</address>           
          </div>
        </div>
    </div>
  </div>
@endsection