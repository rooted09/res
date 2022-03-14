@extends('backoffice.layouts.app')
@section('content')
@section('table','restaurants')
@section('subtable',$restaurant->name)
    <div class="mt-2">
        <div class="card" style="max-width: 700px; margin: auto">
            <div class="card-header">
              {{$restaurant->created_at->diffForHumans()}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$restaurant->name}}</h5>
              <p class="card-text">{{$restaurant->adresse}}</p>
              <p class="card-text">{{$restaurant->tele}}</p>
              <a href="#" class="btn btn-light">Modifier</a>
            </div>
          </div>
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success mt-3">Ajouter Categorie +</a>
          @foreach ($restaurant->categorie as $item)
        @include('backoffice.restaurant.edit_modal')
          <div class="text-center text-muted p-4">{{$item->name}} 
            <a data-bs-toggle="modal" data-bs-target="#edit_Modal{{$item->id}}" class="ml-4 text-secondary" data-id="{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a> 
            | <a href="{{route('categorie.delete',['categorie'=> $item])}}" class="text-danger"><i class="fa-solid fa-xmark"></i></a></div>
            <br>
            <a href="{{route('produit.add',['id'=>$item])}}" class="btn btn-secondary">Produit +</a>
            <div class="row">
              @foreach ($item->produit as $product)
            <div class="col-sm-4">
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>
                  <p class="card-text">{{$product->prix}}.00 DH</p>
                  <p class="card-text">{{$product->created_at->diffForHumans()}}</p>
                  <a href="#" class="btn btn-danger">Supprimer</a>
                  <a href="#" class="btn btn-light">Modifier</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
              
    @endforeach

    @include('backoffice.restaurant.modal')
@endsection