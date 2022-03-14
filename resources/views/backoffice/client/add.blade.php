@extends('backoffice.layouts.app')
@section('content')
@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif
<form action="{{route('client.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"> Nom Utilisateur :</label>
        <input type="text" class="form-control" value="{{old('nameutili')}}" autocomplete="false" name="nameutili">
      </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Nom :</label>
  <input type="text" class="form-control" value="{{old('name')}}" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Prénom :</label>
  <input type="text" class="form-control" value="{{old('prenom')}}" name="prenom">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Téléphone :</label>
  <input type="text" class="form-control" value="{{old('tele')}}" name="tele">
</div>

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label"> Email  :</label>
    <input type="email" class="form-control" value="{{old('email')}}" name="email">
  </div>
  
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label"> Password :</label>
    <input type="password" class="form-control" name="password">
  </div>
<div>
  <input type="submit" class="btn btn-success" name="btn" value="ajouter">
</div>
</form>

    
@endsection
