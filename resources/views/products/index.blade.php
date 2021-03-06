@extends('layouts.app')
@section('hidden')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Produit</h1>
        <p class="lead text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum delectus ad quae cumque voluptates dolorum, neque eveniet, placeat obcaecati magnam vel fugit nulla autem, mollitia consequuntur praesentium sit? Veniam, facere.</p>
    </div>
</section>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produits</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Filtres</div>
                <form action="" method="post">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input type="checkbox" name="color[]" value="bleu" class="form-check-input" id="color-bleu">
                                <label class="form-check-label" for="color-bleu">Bleu</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input type="checkbox" name="color[]" value="rouge" class="form-check-input" id="color-red">
                                <label class="form-check-label" for="color-red">Rouge</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input type="checkbox" name="color[]" value="vert" class="form-check-input" id="color-vert">
                                <label class="form-check-label" for="color-vert">Vert</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <button class="btn btn-primary w-100">Filtrer</button>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Cat??gories</div>
                @foreach ($categories as $category)
                    
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="/categories/{{$category->id}}">{{$category->name}} ({{$category->products->count()}} produits)</a></li>
                    
                </ul>
                @endforeach
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">Dernier produit</div>
                <div class="card-body">

                    <img class="img-fluid" src="{{$last->image}}">
                    <h5 class="card-title mt-3">{{$last->name}}</h5>
                    <p class="card-text">{{$last->description}}</p>

                    <div class="row">
                        <div class="col">
                            <p class="btn btn-danger w-100">{{$last->Promo($last->price,$last->promotion)}} ???</p>
                        </div>
                        <div class="col">
                            <a href="/produits/{{$last->id}}" class="btn btn-success w-100">Voir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            
       
        <div class="col">
           
            <div class="row">
              @foreach ($products as $product)  
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                      
                        <img class="img-fluid" src={{$product->image}} alt={{$product->name}}>
                        <div class="card-body">
                            <h4 class="card-title"> <a href="/produits/{{$product->id}}">{{$product->name}}</a></h4>
                           
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger w-100">{{$product->Promo($product->price,$product->promotion)}} ??? </p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success w-100">Ajouter</a>
                                </div>
                            </div>
                             
                </div> 
                
                 </div>
                 @endforeach  
    
           
                    </div>
                   
                </div> 
                <div>
                    {{$products->links()}}
                </div>
              
        </div>
        
    </div>
</div>
 @endsection