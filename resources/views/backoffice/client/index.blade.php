@extends('backoffice.layouts.app')
@section('content')
@section('table','clients')
@section('subtable','liste')
<div class="container">
<a class="btn btn-success m-3 ml-auto" href="{{route('client.add')}}">Ajouter</a>

<table class="table table-striped table-bordered text-center">
    
        <tr>
            
            <th>Id </th>
            <th>Nom</th>
            <th>Prenom  </th>
            <th>Telephone  </th>
            <th>Action</th>

        </tr>
   
   @foreach($clients as $client)  
           <tr>
               <td>{{$client->id}}</td>
               <td>{{$client->name}}</td>
               <td>{{$client->prenom}}</td>
               <td>{{$client->tele}}</td>
             
               <td>
                <a class="btn btn-danger" href="{{route('client.delete',['id'=>$client->id])}}">Delete</a>
               <a class="btn btn-secondary" href="{{route('client.edit',['id'=>$client->id])}}">Update</a>
               </td>
        
     </tr>  
     @endforeach


</table>



@endsection

    
</div>