@extends('backoffice.layouts.app')
@section('content')
{{-- @section('table','restaurants')
@section('subtable',$restaurant->name) --}}

@if(Session::has('success'))
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>
  <div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        {{Session::get('success')}}
    </div>
  </div>
@endif
    <div class="mt-9">
        <div class="card mb-4" style="max-width: 500px; margin: auto ">
            <div class="card-header text-white bg-danger">
              <i class="fa fa-clock-rotate-left text-white"></i>  <strong>{{$restaurant->created_at->diffForHumans()}} </strong>
            </div>
            <div class="card-body">
              <h5 class="card-title text-center"> <strong> {{$restaurant->name}} <strong> </h5>
              <p class="card-text ml-5">  <i class="fa fa-location-dot text-danger"></i>  {{$restaurant->adresse}}</p>
              <p class="card-text ml-5">  <i class="fa-solid fa-phone text-success"></i>   {{$restaurant->tele}}</p>
             
            </div>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success ">Add Category ({{$restaurant->categorie->count()}}) +</a>
          </div>
          <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
            <option value="AL">Alabama</option>
          
            <option value="WY">Wyoming</option>
          </select>
          <script>
            $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
          </script>
          @foreach ($restaurant->categorie as $item)
        @include('backoffice.restaurant.edit_modal')
        <div class="shadow p-3 ml-0 mr-0 bg-body rounded  mb-2 row" style="position: relative;overflow: hidden"> 
          <div class="col-sm-6">
            <h4 class="d-inline"> {{$item->name}}  </h4>
            <a data-bs-toggle="modal" data-bs-target="#edit_Modal{{$item->id}}" class="ml-4 text-secondary d-inline" data-id="{{$item->id}}"><i class="fa-solid fa-pen"></i></a> 
            | <a href="{{route('categorie.delete',['categorie'=> $item])}}" class="text-danger d-inline"><i class="fa-solid fa-trash text-danger"></i></a>
          </div>
          <div class="col-sm-6 text-right">
            <h4 class="d-inline bg-success" 
            style="position: absolute;right: -34px;bottom: -32px;padding: 20px 27px;border-top-left-radius: 84px;"
            ><a href="{{route('produit.add',['id'=>$item])}}" class="text-light rounded-pill d-inline">Product  <i class="fa-solid fa-circle-plus"></i></a></h4>
          </div>
        </div>

          <div class="row">
            @foreach ($item->produit as $product)
            <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="ms-card"> 
              <div class="ms-card-img">
                <img src="{{asset('products/'.$product->image)}}" alt="card_img">
              </div>
              <div class="ms-card-body ">
                <div class="wrapper-new2">
                  <h6>{{$product->name}}</h6>
                  <span class="white">{{$product->created_at->diffForHumans()}}</span>
                 
                </div>
                <div class="wrapper-new1">
                  <span>Prix :<strong class="color-red">{{$product->prix}}.00 DH</strong> </span>
                
                </div>
                <div class="wrapper-new2">
                <a href="{{route('produit.delete',['id'=>$product->id])}}" class="btn btn-primary btn-block col-md-6">Delete</a> 
                <a href="{{route('produit.edit',['id'=>$product->id])}}" class="btn btn-primary btn-dark">Modify</a>
              </div>
              </div> 
            </div>
          </div>  @endforeach  </div>
          
    @endforeach

    @include('backoffice.restaurant.modal')
@endsection