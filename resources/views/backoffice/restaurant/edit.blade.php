@extends('backoffice.layouts.app')
@section('content')
<form action="{{route('restaurant.update',['id' => $restaurant->id])}}" method="post">
    @csrf
    <td><input type="hidden" name="id" value="{{$restaurant->id}}" />
<div class="mb-3">
  <label for="exampleFormControlInput1"  class="form-label">Name</label>
  <input type="text" class="form-control" name='name' id="name"value="{{$restaurant->name}}" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Adresse</label>
  <input type="text" class="form-control" name='adresse' id="adresse" value="{{$restaurant->adresse}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telephone</label>
  <input type="text" class="form-control"name='tele' id="tele" value="{{$restaurant->tele}}">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-success" name='btn'id="btn" value="Modifier" >
</div></form>
@endsection