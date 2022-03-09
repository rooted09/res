@extends('backoffice.layouts.app')
@section('content')

    <div class="container">
        <div class="card">
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
          <div class="text-center text-muted p-4">les salades <a href="" class="ml-4 text-primary"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="" class="text-danger"><i class="fa-solid fa-xmark"></i></a></div>
          <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Saldes fruit</h5>
              <p class="card-text">20.00 DH</p>
              <p class="card-text">il ya 5 jours</p>
              <a href="#" class="btn btn-danger">Supprimer</a>
              <a href="#" class="btn btn-light">Modifier</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Saldes fruit</h5>
                <p class="card-text">20.00 DH</p>
                <p class="card-text">il ya 5 jours</p>
                <a href="#" class="btn btn-danger">Supprimer</a>
                <a href="#" class="btn btn-light">Modifier</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Saldes fruit</h5>
                <p class="card-text">20.00 DH</p>
                <p class="card-text">il ya 5 jours</p>
                <a href="#" class="btn btn-danger">Supprimer</a>
                <a href="#" class="btn btn-light">Modifier</a> | <a href="#" class="btn btn-light">Modifier</a>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection