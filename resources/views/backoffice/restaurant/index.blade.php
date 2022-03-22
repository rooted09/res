@extends('backoffice.layouts.app')
@section('content')


<div class="card">
    <div class="card-header">
<a class="btn btn-dark mt-5 mb-5 ml-auto rounded-pill " href="{{route('restaurant.add')}}">Add</a>
{{-- <input type="search" class="form-control form-control-sm" placeholder="Search Data..." value=""><button class="btn btn-primary">Search</button> --}}
<table  class="table w-100 thead-primary dataTable no-footer" role="grid"  style="width: 1098px;">
    
<<<<<<< HEAD
    <table class="table table-striped table-bordered text-center">
        <tr >
        
           <th>id</th>
            <th>name</th>
            <th>adresse</th>
            <th>tele</th>
            <th>Details</th>
            <th>MODIFICATION</th>
            <th>SUPPRESSION</th>
        </tr>
            @foreach($restaurants as $restaurant)
        <tr>
           
            <td>{{$restaurant->id}}</td>
            <td>{{$restaurant->name}}</td>
            <td>{{$restaurant->adresse}}</td>
            <td>{{$restaurant->tele}}</td>
            <td> <a class="btn btn-primary" href="{{route('restaurant.show',['id' => $restaurant->id])}}">Details</a></td>
            <td> <a class="btn btn-danger"  href="{{route('restaurant.edit',['id' => $restaurant->id])}}">Edit</a></td>
            <td> <a class="btn btn-secondary" href="{{route('restaurant.delete',['id' => $restaurant->id])}}">delete</a> </td>
          
            <tr>
                @endforeach
</table>
</div> --}}




<a class="btn btn-success mt-5 mb-5 ml-auto" href="{{route('restaurant.add')}}">Add</a>

<table class="table">
    <thead class="table-danger">
        <tr>
        
            <th>id</th>
             <th>name</th>
             <th>adresse</th>
             <th>tele</th>
             <th>Show/Edit/Delete</th>
=======
    <thead class="bg-danger text-white">
        <tr role="row">
        <th> ID</th>
        <th > Name</th>
        <th >Address</th>
        <th >Phone Number</th>
        <th >Action</th>
      
>>>>>>> 076c31f7be8b72b089674405edec2479f363311b
         </tr>
    </thead>
    <tbody>
        @foreach($restaurants as $restaurant)
        <tr>
           
            <td>{{$restaurant->id}}</td>
            <td>{{$restaurant->name}}</td>
            <td>{{$restaurant->adresse}}</td>
            <td>{{$restaurant->tele}}</td>
            <td> <a class="text-danger" href="{{route('restaurant.show',['id' => $restaurant->id])}}"><i class="fa fa-eye"></i></a> 
                <a class="text-danger" href="{{route('restaurant.edit',['id' => $restaurant->id])}}"><i class="fa fa-pen"></i>
                    <a class="text-danger" href="{{route('restaurant.delete',['id' => $restaurant->id])}}"><i class="fa fa-trash"> </i></td>
   
          
            <tr>
                @endforeach
    </tbody>
  </table></div></div>
  
    @endsection