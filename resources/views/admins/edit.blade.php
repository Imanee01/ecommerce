@extends('layouts.admin')
@section('content')
@if ($errors->any()) 
<div class="alert alert-danger">
    <ul class="mb-0 list-unstyled">
    @foreach ($errors->all() as $error)
        <li> {{$error}} </li>
    @endforeach
     </ul>
</div>

@endif

<h1>Modifier {{$category->name}}</h1>
<form action="/admin/produits/{{$product->id}}" method="post">
    @csrf 
    @method('put')
    {{-- Ajouter @method pour qu'il prenne en compte le put --}}
    <input type="text"name="name"placeholder="Nom..." class="form-control" value="{{old('name', $product->name)}}">
    <textarea name="description" id="description" class="form-control">{{old('description',$product->description)}}</textarea>
    <input name="price"type="number" value="{{old('price',$product->price)}}" id="price" class="form-control" >
    <input name="promotion"type="number" value="{{old('promotion',$product->promotion)}}" id="promotion" class="form-control" >
    <input type="file" name="image" id="image" class="form-control">

    {{-- <input type="text"name="email"placeholder="Email..."> --}}


    <button class="btn btn-primary mt-3">Modifier</button>
</form>
@endsection