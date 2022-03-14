@extends('backoffice.layouts.app')
@section('content')
<form action="{{route('produit.update',['id' => $produit->id])}}" method="post">
    @csrf
    <td><input type="hidden" name="id" value="{{$produit->id}}" />
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Name</label>
            <input type="text" class="form-control" value="{{$produit->name}}" name='name' id="name" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prix</label>
            <input type="number" class="form-control" value="{{$produit->prix}}" name='prix' id="adresse" >
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{$produit->desc}}</textarea>
          </div>
          <div class="form-check">
              <input class="form-check-input" checked value="1" type="radio" name="disponibilite" id="disponibilite1">
              <label class="form-check-label" for="disponibilite1">
               Disponible
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" value="0" type="radio" name="disponibilite" id="disponibilite2" checked>
              <label class="form-check-label" for="disponibilite2">
             Pas Disponible
              </label>
            </div>
          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Durée</label>
              <input type="time" class="form-control" value="{{$produit->duree_preparation}}" name='duree' id="duree" >
            </div>
<div class="mb-3">
  <input type="submit" class="btn btn-success" name='btn'id="btn" value="Modifier" >
</div></form>
@endsection