@extends('backoffice.layouts.app')
@section('content')
<form action="route({{restaurant.index}})" method="post">
    @csrf
<table>
        <thead style='background:#FF4B2B' >
        
           <th>id</th>
            <th>name</th>
            <th>adresse</th>
            <th>tele</th>
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
            <td> <button><a href="/editC/{{$restaurant->id}}">Edit</a></button></td>
            <td> <button><a href="/deleteC/{{$restaurant->id}}">delete</a> </button> </td>
          
            <tr>
                @endforeach
            <tbody>
            </table>

        </form>
@endsection