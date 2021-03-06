@extends('layouts.app')
@section('hidden')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Accueil</h1>
        <p class="lead text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum delectus ad quae cumque voluptates dolorum, neque eveniet, placeat obcaecati magnam vel fugit nulla autem, mollitia consequuntur praesentium sit? Veniam, facere.</p>
    </div>
</section>
@endsection
@section('content')
   
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    
                        {{-- @foreach ($products as $product) --}}
                    
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=""></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=""></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            
                            <img class="d-block w-100" src="{{$rand->image}}" alt="First slide">
                        </div>
                       
                         <div class="carousel-item">
                            <img class="d-block w-100" src="{{$rand2->image}}" alt="Second slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{$rand3->image}}" alt="Third slide">
                        </div> 
                  
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                         {{-- @endforeach   --}}
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card h-100">
                    <div class="card-header bg-success text-white text-uppercase">
                        <i class="fa fa-heart"></i> Coup de coeur
                        
                    </div>
                   
                    <img class="img-fluid border-0" src="{{$favorite->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center"><a href="product.html" title="View Product">{{$favorite->name}}</a></h4>
                        <p class="card-text">{{$favorite->description}}</p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-danger w-100">{{$favorite->Promo($favorite->price,$favorite->promotion)}} ???</p>
                            </div>
                            <div class="col">
                                <a href="produits/{{$favorite->id}}" class="btn btn-success w-100">Voir</a> 
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection

@section('content2')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-star"></i> Derniers produits
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($lasts as $last)
                            
                       
                        <div class="col-sm">
                            <div class="card">
                                <img class="card-img-top" src="{{$last->image}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="product.html" title="View Product">{{$last->name}}</a></h4>
                                    <p class="card-text">{{$last->description}}</p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="btn btn-danger w-100"> {{$last->Promo($last->price,$last->promotion)}}???</p>
                                        </div>
                                        <div class="col">
                                            <a href="cart.html" class="btn btn-success w-100">Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content3')
<div class="container mt-3 mb-4">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-trophy"></i> Meilleurs produits
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($rands as $rand)
                            {{--Quand model reviews fait : afficher par rapport aux reviews et non random  --}}
                      
                        <div class="col-sm">
                            <div class="card">
                                <img class="card-img-top" src="{{$rand->image}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="product.html" title="View Product">{{$rand->name}}</a></h4>
                                    <p class="card-text">{{$rand->description}}</p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="btn btn-danger w-100"> {{$rand->Promo($rand->price,$rand->promotion)}}???</p>
                                        </div>
                                        <div class="col">
                                            <a href="cart.html" class="btn btn-success w-100">Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                         @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

