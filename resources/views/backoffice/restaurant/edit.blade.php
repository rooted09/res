@extends('backoffice.layouts.app')
@section('content')
@section('table','restaurants')
@section('subtable','modifier')

@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif
<form action="{{route('restaurant.update',['id' => $restaurant->id])}}" method="post">
    @csrf
   

<div class="col-xl-6 col-md-12">
  <div class="ms-panel ms-panel-fh">
    <div class="ms-panel-header ">
     <strong> <h6> <i class="fa fa-pen"></i> Edit <span class='text-danger '> Restaurant</span></h6></strong> 
    </div>
    <div class="ms-panel-body ">
      <form action="{{route('restaurant.update',['id' => $restaurant->id])}}" method="post">
        @csrf
        <div class="form-row">
          <div class="col-md-7 mb-3 ">
            <td><input type="hidden" name="id" value="{{$restaurant->id}}" />
            <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong>Name</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" name='name' id="name"value="{{$restaurant->name}}" >
            
            </div>
          </div>

          <div class="col-md-7 mb-3">
            <label for="exampleFormControlInput1" class="form-label font-truncate text-dark"><strong>Address</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill" name='adresse' id="adresse" value="{{$restaurant->adresse}}">
            </div>
          </div>
          <div class="col-md-7 mb-3">
            <label for="exampleFormControlInput1" class="form-label font-truncate text-dark"><strong>Telephone</strong></label>
            <div class="input-group">
              <input type="text" class="form-control rounded-pill"name='tele' id="tele" value="{{$restaurant->tele}}">
              
            </div>
          </div>
          <div class="col-md-7 mb-3">
            <input type="submit" class="btn btn-danger text-white rounded-pill" name='btn'id="btn" value="Modify" >
          </div>
          </div>
        </div>




      </form>
{{-- 
    </div>
  </div>

</div> --}}
@endsection