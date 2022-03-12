@extends('backoffice.layouts.app')
@section('content')
<div class="container">
<a class="btn btn-success mt-5 mb-5 ml-auto" href="{{route('client.add')}}">Ajouter</a>

<table class="table table-striped table-bordered text-center">
    
        <tr>
            <th>Id </th>
            <th>Nom Utilisateur</th>
            <th>Nom</th>
            <th>Prenom </th>
            <th>Email</th>
            <th>Telephone  </th>
            <th>Action</th>

        </tr>
   @if($clients->count() > 0)
   @foreach($clients as $client)  
           <tr>
               <td>{{$client->id}}</td>
               <td>{{$client->user->name}}</td>
               <td>{{$client->name}}</td>
               <td>{{$client->prenom}}</td>
               <td>{{$client->user->email}}</td>
               <td>{{$client->tele}}</td>
             
               <td>
                <a class="btn btn-danger" href="{{route('client.delete',['id'=>$client->user->id])}}">Delete</a>
               <a class="btn btn-secondary" href="{{route('client.edit',['id'=>$client->id])}}">Update</a>
               </td>
        
            </tr>  
     @endforeach
     @else
     <tr>
        <td colspan="7" class="text-center text-danger"> Pas données </td>
     </tr>
     @endif


</table>



@endsection

    
</div>