@extends('layouts.app')
@section('content')
<div class="container">

<div class="card mt-3 mb-3">
    <div class="card-body">
      <h4 class="card-title">{{$data->name}}</h4>
      <p class="card-text">{{$data->adresse}}</p>
      <h5 class="card-title">{{$data->tele}}</h5>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
@foreach ($data->categorie as $categ)
<div class="card mt-3">
    <div class="card-header" style="background: #fff">
        <h3>{{$categ->name}}</h3>
    </div>
    <div class="card-body">
        <div class="row">
        @foreach ($categ->produit as $item)
        <div class="col-md-3">
        <div class="card mt-3">
            <img src="{{asset('products/'.$item->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">{{$item->name}}</h4>
              <p class="card-text">{{$item->desc}}</p>
              <h5 class="card-title"> {{$item->prix}}, 00DH</h5>
              <small><i class="far fa-clock"></i> {{$item->duree_preparation}} min</small>
              <br>
              <a href="{{route('AddToCart',['produit'=>$item])}}" class="btn btn-primary add-commande text-center mt-3">+</a>
            </div>
        </div>
        </div>
        @endforeach
        </div>
    </div>
  </div>
  @endforeach


</div>
<div class="col-md-3">
    <div class="card mt-3" style="border:solid #00a082 1px;">
        <div class="card-header" style="background:#00a082;">
            <h5 class="text-light">Commandes Lits</h5>
        </div>
        <div class="card-body" id="panel">
            @if($card->getDetails()->get('items')->count() > 0)
            @foreach($card->getDetails()->get('items') as $cart)
            <p>({{$cart->get('quantity')}} x ) | {{$cart->get('title')}}</p>
            @endforeach
            <p>{{$card->getItemsSubtotal()}} DH</p>
            <a class="btn btn-success" href="{{route('c_insert',['id'=>$data->id])}}">Commander</a>
            <a class="btn btn-dark" href="{{route('deleteCard')}}">Annuler</a>
            @else
            <p>Choisir un produit</p>
            @endif
        </div>
    </div>
</div>
</div>
    
</div>
@endsection
