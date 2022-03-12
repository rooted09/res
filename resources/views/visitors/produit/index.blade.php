@extends('layouts.app')
@section('content')
@foreach ($produits as $prod)
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">{{$prod->name}}</h4>
      <p class="card-text">{{$prod->desc}}</p>
      <h5 class="card-title">{{$prod->prix}}</h5>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  @endforeach

@endsection