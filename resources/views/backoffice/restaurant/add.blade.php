@extends('backoffice.layouts.app')
@section('content')
@section('table','restaurants')
@section('subtable','ajouter')
<form action="{{route('restaurant.insert')}}" method="post">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1"  class="form-label">Name</label>
  <input type="text" class="form-control" name='name' id="name" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Adresse</label>
  <input type="text" class="form-control" name='adresse' id="adresse" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telephone</label>
  <input type="text" class="form-control"name='tele' id="tele" >
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-success" name='btn'id="btn" value="Add" >
</div>
</form>
@endsection
