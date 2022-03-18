@extends('backoffice.layouts.app')
@section('content')
{{-- @section('table','restaurants')
@section('subtable','liste') --}}
{{-- <div class="container">
    <a class="btn btn-success mt-5 mb-5 ml-auto" href="{{route('restaurant.add')}}">Ajouter</a>
    
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
        <tr >
        
            <th>id</th>
             <th>name</th>
             <th>adresse</th>
             <th>tele</th>
             <th>Show/Edit/Delete</th>
         </tr>
    </thead>
    <tbody>
        @foreach($restaurants as $restaurant)
        <tr>
           
            <td>{{$restaurant->id}}</td>
            <td>{{$restaurant->name}}</td>
            <td>{{$restaurant->adresse}}</td>
            <td>{{$restaurant->tele}}</td>
            <td> <a class="btn btn-secondary" href="{{route('restaurant.show',['id' => $restaurant->id])}}">show</a>
            <a class="btn btn-primary"  href="{{route('restaurant.edit',['id' => $restaurant->id])}}">Edit</a>
            <a class="btn btn-danger" href="{{route('restaurant.delete',['id' => $restaurant->id])}}">delete</a> </td>
   
          
            <tr>
                @endforeach
    </tbody>
  </table>
    @endsection