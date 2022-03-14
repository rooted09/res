@extends('layouts.app')
@section('content')
@foreach ($restaurant as $rest)
<div class="card" style="width: 18rem;">
   <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <a href="{{route('produitC.show',['id' => $rest->id])}}">   <h4 class="card-title">{{$rest->name}}</h4>
        <p class="card-text">{{$rest->adresse}}</p>
        <h5 class="card-title">{{$rest->tele}}</h5></a> 
    </div>

</div>
@endforeach
@endsection