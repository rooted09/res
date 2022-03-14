@extends('backoffice.layouts.app')
@section('content')
@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif
<form action="{{route('produit.insert', ['id'=>$id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <img src="{{asset('img/product.jfif')}}" id="preview" class="img-thumbnail" alt="..." width="300" height="300">
    <div class="mb-3">
      <label for="formFile" class="form-label"></label>
      <input class="form-control" name="image" type="file" onchange="previewImage(event)" id="formFile">
    </div>
<div class="mb-3">
  <label for="exampleFormControlInput1"  class="form-label">Name</label>
  <input type="text" class="form-control" name='name' id="name" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Prix</label>
  <input type="number" class="form-control" name='prix' id="adresse" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Description</label>
  <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="form-check">
    <input class="form-check-input" value="1" type="radio" name="disponibilite" id="disponibilite1">
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
    <input type="time" class="form-control" name='duree' id="adresse" >
  </div>
<div class="mb-3">
  <input type="submit" class="btn btn-success" name='btn'id="btn" value="Add" >
</div>
</form>
@endsection
