<form action="{{route('client.update',['id' =>$client->id])}}" method="post">
    @csrf
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
<div>
  
  <input type="submit" class="form-control" name="btn" value="modifier">
</div>
</form>