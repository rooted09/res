@extends('backoffice.layouts.app')
@section('content')
@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
  </div>
@endif
<div class="row">
  <div class="col-sm-6">
<div class="col-xl-12 col-md-12">
 <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-header ">
        <strong> <h6> <i class="fa fa-plus"></i> Add <span class='text-danger '> Product</span></h6></strong> 
        </div>
  <div class="ms-panel-body">
          
        <form action="{{route('produit.insert', ['id'=>$id])}}" method="post" enctype="multipart/form-data">
          @csrf
         
          <div class="form-row">
                  <div class="col-md-9 mb-3">
                      <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong>Name :</strong></label>
                    <div class="input-group">
                      <input type="text" class="form-control rounded-pill" value="{{old('name')}}" name='name' id="name">
                    </div>
                  </div>
                  <div class="col-md-9 mb-3">
                    <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Price :</strong></label>
                  <div class="input-group">
                    <input type="text" class="form-control rounded-pill" value="{{old('prix')}}"  name='prix' id="prix">
                  </div>
                </div>

                  <div class="col-md-9 mb-3">
                    <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Description :</strong></label>
                    <div class="input-group">
                      <textarea name="description" id="" cols="30" rows="10" class="form-control ">{{old('description')}}</textarea>
                    </div>
                  </div> </div>
                  
                    <div class="col-md-6 mb-3">
                    <input type="submit" class="btn btn-danger  text-white rounded-pill" name='btn'id="btn" value="Add" >
                  </div></div></div>          
</div></div>
                  {{--  --}}
                  <div class="col-sm-6">
                 
                  <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                      <div class="ms-panel-header">
                        <div class="d-flex justify-content-between">
                          {{-- <div class="align-self-center align-left">
                            <h6>Recent Orders Requested</h6>
                          </div> --}}
                          {{-- <button type="button" class="btn btn-primary">View All</button>  --}}
                         
                          <div class="col-md-12 mb-3">
                            
                          </div>
                        </div>
                      </div>
                      <div class="ms-panel-body">
                        <div class="table-responsive">
                          <label for="formFile" class="form-label"></label>
                            <input class="form-control" name="image"  type="file" onchange="previewImage(event)" id="formFile"><br>
                          <img src="{{asset('img/product.jfif')}}" id="preview" class="img-thumbnail" alt="..." width="500" height="100">
                          <div class="col-md-6 mb-3">
                            <div class="form-check">
                              <br> <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> State :</strong></label>
                              <br>
                              
                                 <input class="form-check-input" {{old('disponibilite')=='1'?'checked':''}} value="1" type="radio" name="disponibilite" id="disponibilite1">
                              <label class="form-check-label" for="disponibilite1">
                              Available
                              </label>   
                            </div>
                            <div class="form-check">
                              
                              <input class="form-check-input" {{old('disponibilite')=='0'?'checked':''}} value="0" type="radio" name="disponibilite" id="disponibilite2">
                              <label class="form-check-label" for="disponibilite2">
                            Not Available
                              </label>
                            </div>    
                           </div>
                            <div class="col-md-6 mb-3">
                              <label for="exampleFormControlInput1"  class="form-label font-truncate text-dark "><strong> Runtime:</strong></label>
                              <div class="input-group">
                                <input type="time" class="form-control rounded-pill" value="{{old('duree')}}" name='duree' id="duree" >
                          </div> 
                        </div> 
                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></div>
                </div>
                </form>   
@endsection
