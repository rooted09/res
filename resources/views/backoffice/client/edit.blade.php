@extends('backoffice.layouts.app')
@section('content')
<form action="{{route('client.update',['id' =>$client->id])}}" method="post">
  @if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif  
  @csrf
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Name Utilisateur  :</label>
  <input type="text" class="form-control" name="nameutili" value="{{$client->user->name}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Nom :</label>
  <input type="text" class="form-control" name="name" value="{{$client->name}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Prénom :</label>
  <input type="text" class="form-control" name="prenom" value="{{$client->prenom}}">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Téléphone :</label>
  <input type="text" class="form-control" name="tele" value="{{$client->tele}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Email :</label>
  <input type="email" class="form-control" name="email" value="{{$client->user->email}}">
</div>
<div>
  
  <input type="submit" class="btn btn-secondary" name="btn" value="modifier">
</div>
</form>
@endsection