@extends('backoffice.layouts.app')
@section('content')

@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif
{{-- <form action="{{route('client.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"> User Name :</label>
        <input type="text" class="form-control" value="{{old('nameutili')}}" autocomplete="false" name="nameutili">
      </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Last Name :</label>
  <input type="text" class="form-control" value="{{old('name')}}" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> First Name  :</label>
  <input type="text" class="form-control" value="{{old('prenom')}}" name="prenom">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> Phone Number :</label>
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
</form> --}}

 
<div class="col-xl-6 col-md-12">
  <div class="ms-panel ms-panel-fh">
    <div class="ms-panel-header ">
     <strong> <h6> <i class="fa fa-plus"></i> Add <span class='text-danger '> Customer</span></h6></strong> 
    </div>
    <div class="ms-panel-body">
      <form action="{{route('client.store')}}" method="post">
        @csrf
        <div class="form-row">
          <div class="col-md-6 mb-3">
              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> User Name :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" value="{{old('nameutili')}}" autocomplete="false" name="nameutili">
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Last Name :</strong></label>
          <div class="input-group">
            <input type="text" class="form-control rounded-pill" value="{{old('name')}}" name="name">
          </div>
        </div>

          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> First Name :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill"name='prenom' id="prenom" value="{{old('prenom')}}" name="prenom" >
              
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Phone Number :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill"name='tele' id="tele" value="{{old('tele')}}" name="prenom" >
        </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> E_mail :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill"name='email' id="email"value="{{old('email')}}" name="email" >
        </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> PassWord :</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill"name='password' id="password" name="password">
        </div>
          </div>
          <div class="col-md-7 mb-3">
            <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Add" >
          </div>
          </div>
        </div>




      </form>   
@endsection
