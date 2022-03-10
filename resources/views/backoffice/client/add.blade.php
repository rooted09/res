@extends('backoffice.layouts.app')
@section('content')
<form action="{{route('client.store')}}" method="post">
    @csrf
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Nom :</label>
  <input type="text" class="form-control" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Prénom :</label>
  <input type="text" class="form-control" name="prenom">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Téléphone :</label>
  <input type="text" class="form-control" name="tele">
</div>
<div>
  
  <input type="submit" class="btn btn-success" name="btn" value="ajouter">
</div>
</form>

    
@endsection
