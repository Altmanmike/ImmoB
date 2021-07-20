@extends('base')

@section('content')
    <div class="container g-0 text-center" style="padding-top:200px;"">
        <h1 class="display-3 my-4">À propos de nous!</h1>        
    </div>
    <div class="container pb-5">
        <div class="row text-center">
            <div class="col-lg-10 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <i class="fab fa-searchengin fa-5x"></i>
                                <h2 class="h5 mt-5 mb-2">Voir nos récentes trouvailles</h2>
                                <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                            <div class="col-lg-4 mb-4 mb-lg-0">  
                                <i class="fas fa-stream fa-5x"></i>                              
                                <h2 class="h5 mt-5 mb-2">Faîtes votre choix</h2>
                                <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                            <div class="col-lg-4">
                                <i class="far fa-address-card fa-5x"></i>
                                <h2 class="h5 mt-5 mb-2">Veuillez nous contacter</h2>
                                <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <div class="container-fluid g-0 text-center">        
        <h1 class="display-4 my-4">Un agent vous répondra le plus rapidement possible!</h2>
    </div>
    <div class="container pb-5">
        <div class="card bg-dark border-0 shadow">
            <div class="card-body p-5">
                <div class="px-4 py-5 my-5 text-center">            
                    <h1 class="display-5 fw-bold">Des demandes personnalisées?</h1>
                    <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, et voluptatibus magnam nulla aspernatur odio temporibus inventore eaque voluptas quam. Inventore cumque repellendus ex consequuntur id consequatur ad labore rem?</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Faire une demande</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">FAQ des questions</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection