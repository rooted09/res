@extends('backoffice.layouts.app')
@section('content')
<div class="container">
    <a class="btn btn-success mt-5 mb-5 ml-auto" href="{{route('restaurant.add')}}">Ajouter</a>
    
    <table class="table table-striped table-bordered text-center">
        <thead >
        
           <th>id</th>
            <th>name</th>
            <th>adresse</th>
            <th>tele</th>
            <th>Details</th>
            <th>MODIFICATION</th>
            <th>SUPPRESSION</th>
        </thead>
        
        <tbody>
            @foreach($restaurants as $restaurant)
        <tr>
           
            <td>{{$restaurant->id}}</td>
            <td>{{$restaurant->name}}</td>
            <td>{{$restaurant->adresse}}</td>
            <td>{{$restaurant->tele}}</td>
            <td> <a  class="btn btn-primary" href="{{route('restaurant.show',['id' => $restaurant->id])}}">Details</a></td>
            <td> <a class="btn btn-danger"  href="{{route('restaurant.edit',['id' => $restaurant->id])}}">Edit</a></td>
            <td> <a class="btn btn-secondary" href="{{route('restaurant.delete',['id' => $restaurant->id])}}">delete</a> </td>
          
            <tr>
                @endforeach
            <tbody>
</table>
@endsection