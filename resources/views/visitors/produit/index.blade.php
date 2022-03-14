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
@foreach ($data->categorie as $categ)
<div class="card">
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
              <h5 class="card-title">{{$item->prix}}</h5>
              <a href="#" class="btn btn-primary">+</a>
            </div>
        </div>
        </div>
        @endforeach
        </div>
    </div>
  </div>
  @endforeach

    
</div>
@endsection