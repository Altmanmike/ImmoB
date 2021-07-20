<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <!-- FONT AWESOME -->    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="https://kit.fontawesome.com/d40df77f00.js" crossorigin="anonymous"></script> 

    <!-- TINY MCE --> 
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>   
    <script>tinymce.init({selector: '#tinymce-editor'});</script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>    
    
    <!-- CSS -->
    <!--<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />-->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- JAVASCRIPT -->    
    <!--<script type="text/javascript" src="js/to-top.js"></script>-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Site de la fake agence ImmoB</title>

</head>
<body style="background: url('/img/post04.jpg');">
    @include('incs.navbar')

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#446e9b" fill-opacity="1" d="M0,32L120,69.3C240,107,480,181,720,181.3C960,181,1200,107,1320,69.3L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>    
    
    @yield('content')

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#446e9b" fill-opacity="1" d="M0,224L120,186.7C240,149,480,75,720,74.7C960,75,1200,149,1320,186.7L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
   
    <footer class="bg-primary text-white text-center text-lg-start">        
        <div class="container text-center px-4 pb-4">                   
            <div class="row"> 
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">            
                    <h5 class="text-uppercase">Site</h5>            
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="{{ url('/') }}" class="text-white text-decoration-none">Accueil</a>
                        </li>
                        <li>
                            <a href="{{ url('/biens') }}" class="text-white text-decoration-none">Biens</a>
                        </li>
                        <li>
                            <a href="{{ url('/à-propos') }}" class="text-white text-decoration-none">À propos</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="text-white text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8 col-md-12 mb-4 mb-md-0">            
                    <h5 class="display-6 text-uppercase">IMMO22 site map</h5>
                    <p class="col-lg-12 col-md-12 mb-4 mb-md-0">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                    voluptatem veniam, est atque cumque eum delectus sint!
                    </p>              
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">                    
                    <h5 class="text-uppercase">Biens</h5>            
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ url('/biens') }}" class="text-white text-decoration-none">Locations</a>
                        </li>
                        <li>
                            <a href="{{ url('/biens') }}" class="text-white text-decoration-none">Ventes</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}" class="text-white text-decoration-none">Recherche</a>
                        </li>
                        <li>
                            <a href="{{ url('/register') }}" class="text-white text-decoration-none">S'inscrire</a>
                        </li>
                    </ul>                    
                </div>

            </div>
        </div>

        <div class="text-center py-3"  style="background-color: rgba(0, 0, 0, 0.4)">
            <button type="button" class="btn btn-light btn-floating mx-1">
                <a href="https://www.facebook.fr/pages/immob/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </button>
        
            <button type="button" class="btn btn-light btn-floating mx-1">
                <a href="https://google.com/immob/" target="_blank"><i class="fab fa-google"></i></a>
            </button>
        
            <button type="button" class="btn btn-light btn-floating mx-1">
                <a href="https://www.twitter.com/fr/immobagence/" target="_blank"><i class="fab fa-twitter"></i></a>
            </button>        
        </div>            
           
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.7)">
            © 2021 Copyright -
            <a class="text-white text-decoration-none" href="https://agence-immob.fr/">Agence ImmoB</a>
        </div>
</footer>
</body>
</html>
