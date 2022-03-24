@extends('backoffice.layouts.app')
@section('content')
{{-- <div class="container">

<table class="table table-striped table-bordered text-center">
    
        <tr>
            
            <th>Id </th>
            <th>Client</th>
            <th>Restaurant </th>
            <th>Etat</th>
            <th>Prix</th>
            <th>Action</th>
           

        </tr>
   
   @foreach($commandes as $commande)  
           <tr>
               <td>{{$commande->id}}</td>
               <td>{{$commande->client->name}}</td>
               <td>{{$commande->restaurant->name}}</td>
               @if($commande->etat == "commande")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-secondary"> {{$commande->etat}} ...</a></td>
               @endif
               @if($commande->etat == "prepare")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-warning"> {{$commande->etat}} ...</a></td>
               @endif
               @if($commande->etat == "delivrer")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-info"> {{$commande->etat}} ...</a></td>
               @endif
               @if($commande->etat == "confirmer")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-success"><i class="fa fa-check"></i> {{$commande->etat}} </a></td>
               @endif
               <td>{{$commande->prix}}</td>             
               <td>
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$commande->id}}">Details</a>
                <a class="btn btn-danger" href="{{route('commande.delete',['id'=>$commande->id])}}" onclick="return confirm('Are you sur ??')">Delete</a>
                </td>
               @include('backoffice.commande.show')
            </tr>  
     @endforeach

</table> --}}


<div class="card">
    <div class="card-header">
        <form action="{{route('commande.filter')}}" class="ms-form" method="post">
            @csrf
        <div class="row">
            <div class="col-sm-3 ">
                <div class="input-group">
                    <input type="search" class="form-control form-control-lg rounded-pill p-3" name='name' placeholder="Search here ..." >
                </div> 
            </div>
            <div class="col-sm-3 ">
                <div class="input-group">
                    <select class="form-select form-select-lg rounded-pill" name="etat">
                        <option disabled selected>Orders Etat</option>
                        {{-- @foreach ($collection as $item) --}}
                        <option value="commande">Order</option> 
                        <option value="prepare">Prepare</option> 
                        <option value="delivrer">Delivery</option> 
                        <option value="confirmer">Confirmed</option> 
                        {{-- @endforeach  --}}
                    </select>
                </div> 
            </div>
            <div class="col-sm-3 ">
                <div class="input-group">
                    <select class="form-select form-select-lg rounded-pill" name="restaurant_id">
                        <option disabled selected>Restaurants</option>
                        @foreach ($restaurants as $rest)
                        <option value="{{$rest->id}}">{{$rest->name}}</option> 
                        @endforeach 
                    </select>
                    
                </div> 
            </div>
            <div class="col-sm-3 mt-0">
                <button type="submit" class="btn btn-light" id="basic-addon2">info</button>
            </div>
        </div>
        </form>
    </div>
        
<table  class="table w-100 thead-primary dataTable no-footer" role="grid"  style="width: 1098px;">
    <thead class="bg-danger text-white">
        <tr role="row">
            <th>Id </th>
            <th>Customer</th>
            <th>Restaurant </th>
            <th>State</th>
            <th>Price</th>
            <th>Action</th>
           

        </tr>
   <tbody>
   @foreach($commandes as $commande)  
           <tr>
               <td>{{$commande->id}}</td>
               <td>{{$commande->client->name}}</td>
               <td>{{$commande->restaurant->name}}</td>
               @if($commande->etat == "commande")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-secondary"> <i class="fa fa-info"></i>  {{$commande->etat}} </a></td>
               @endif
               @if($commande->etat == "prepare")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-warning"><i class="fa fa-recycle"></i>  {{$commande->etat}}</a></td>
               @endif
               @if($commande->etat == "delivrer")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-info"><i class="fa fa-moped"></i>  {{$commande->etat}} </a></td>
               @endif
               @if($commande->etat == "confirmer")
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-success"><i class="fa fa-check"></i> {{$commande->etat}} </a></td>
               @endif
               <td>{{$commande->prix}}</td>             
               <td>
                <a class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$commande->id}}"><i class="fa fa-eye"></i></a>
                <a class="text-danger" href="{{route('commande.delete',['id'=>$commande->id])}}"><i class="fa fa-trash"></i></a>
            </td>
               @include('backoffice.commande.show')
        
     </tr>  
     @endforeach
    </tbody>
</table>
</div>
@endsection  
