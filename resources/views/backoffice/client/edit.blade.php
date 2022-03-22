@extends('backoffice.layouts.app')
@section('content')
{{-- <form action="{{route('client.update',['id' =>$client->id])}}" method="post">
  @if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif  
  @csrf
  <div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Modifier Client</h3>
    </div>
    <div class="card-body col-sm-6 m-auto">
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
</div>
</div> 
</div>
</form> --}}

 
<div class="col-xl-6 col-md-12">
  <div class="ms-panel ms-panel-fh">
    <div class="ms-panel-header ">
     <strong> <h6> <i class="fa fa-edit"></i> Edit <span class='text-danger '> Customer</span></h6></strong> 
    </div>
    <div class="ms-panel-body">
      <form action="{{route('client.update',['id' =>$client->id])}}" method="post">
        @if($errors->any())
      <div class="alert alert-danger" role="alert">
          @foreach($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
        </div>
      @endif  
        @csrf
        <div class="form-row">
          <div class="col-md-6 mb-3">
              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> User Name :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" value="{{$client->user->name}}" name="nameutili">
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Last Name :</strong></label>
          <div class="input-group">
            <input type="text" class="form-control rounded-pill" value="{{$client->name}}" name="name">
          </div>
        </div>

          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> First Name :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill"name='prenom' value="{{$client->prenom}}"  >
              
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Phone Number :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill"name='tele'  value="{{$client->tele}}"  >
        </div>
          </div>
          <div class="col-md-6 mb-3 ">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> E_mail :</strong></label>
            <div class="input-group ">
              <input type="text" class="form-control rounded-pill " name='email'  value="{{$client->user->email}}"  >
        </div>
          </div>
         
          <div class="col-md-7 mb-3 ">
            <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Edit" >
          </div>
          </div>
        </div>




      </form>   
@endsection