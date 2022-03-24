@extends('backoffice.layouts.app')
@section('content')
@section('table','restaurants')
@section('subtable','ajouter')
{{-- <form action="{{route('restaurant.insert')}}" method="post">
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
</form> --}}

@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif

<div class="col-xl-6 col-md-12">
  <div class="ms-panel ms-panel-fh">
    <div class="ms-panel-header ">
     <strong> <h6> <i class="fa fa-plus"></i> Add <span class='text-danger '> Restaurant</span></h6></strong> 
    </div>
    <div class="ms-panel-body">
      <form action="{{route('restaurant.insert')}}" method="post">
        @csrf
        <div class="form-row">
          <div class="col-md-7 mb-3">
            
              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong>Name</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" name='name' id="name" >
            
            </div>
          </div>

          <div class="col-md-7 mb-3">
            <label for="exampleFormControlInput1" class="form-label font-truncate text-dark"><strong>Address</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" name='adresse' id="adresse" >
            </div>
          </div>
          <div class="col-md-7 mb-3">
            <label for="exampleFormControlInput1" class="form-label font-truncate text-dark"><strong>Telephone</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill"name='tele' id="tele" >
              
            </div>
          </div>
          <div class="col-md-7 mb-3">
            <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Add" >
          </div>
          </div>
        </div>




      </form>
@endsection
