@extends('layouts.admin')
@section('content')

<h1>Créer un produit</h1>

@if ($errors->any()) 
    <div class="alert alert-danger">
        <ul class="mb-0 list-unstyled">
        @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
         </ul>
    </div>
    
@endif
  
    
    <form action="/produits/creer" method="post" enctype="multipart/form-data">
        @csrf
      
        
        <div class="mb-3"> <label for="name">Nom</label> 
            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
        </div>
        <div class="mb-3">
             <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
        </div>
        <div class='mb-3'>
            <label for="price">prix</label>
            <input name="price"type="number" value="{{old('price')}}" id="price" class="form-control" >
        </div>
        <div class='mb-3'>
            <label for="price">Promotion</label>
            <input name="promotion"type="number" value="{{old('promotion')}}" id="promotion" class="form-control" >
        </div>
        <div class="mb-3">
             <label for="image">Image</label>
              <input type="file" name="image" id="image" class="form-control">
        </div>
       



        <button class="btn btn-primary mt-3">Ajouter</button>
    </form>
   
@endsection