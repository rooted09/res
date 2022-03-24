
@extends('layouts.app')
@section('content')
@foreach ($restaurant as $rest)
{{-- <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('img/rest.jpg')}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <a href="{{route('produitC.show',['id' => $rest->id])}}"> 
                <h4 class="card-title">{{$rest->name}}</h4>
          <h5 class="card-title">{{$rest->adresse}}</h5>
          <p class="card-text">{{$rest->tele}}</p>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('img/rest.jpg')}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$rest->name}}</h5>
          <p class="card-text">{{$rest->adresse}}</p>
          <p class="card-text"><small class="text-muted">{{$rest->tele}}</small></p>
          <a class="d-inline" href="{{route('rest.show',['restaurant'=>$rest])}}">Details</a>
          <a class="d-inline" href="{{route('produitC.show',['id' => $rest->id])}}">Menu</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection