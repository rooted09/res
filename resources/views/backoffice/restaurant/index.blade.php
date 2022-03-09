@extends('backoffice.layouts.app')
@section('content')
<table border=1 >
        <thead >
        
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
            <td> <a href="{{route('edit.client',['id' => $restaurant->id])}}">Edit</a></td>
            <td> <a href="/deleteC/{{$restaurant->id}}">delete</a> </td>
          
            <tr>
                @endforeach
            <tbody>
</table>
@endsection