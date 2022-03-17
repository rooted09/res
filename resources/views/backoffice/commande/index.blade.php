@extends('backoffice.layouts.app')
@section('content')
<div class="container">

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
               <td><a href="{{route('commande.etat',['commande' => $commande])}}" class="btn btn-secondary"> {{$commande->etat}} </a></td>
               <td>{{$commande->prix}}</td>             
               <td>
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$commande->id}}">Details</a>
                <a class="btn btn-danger" href="{{route('commande.delete',['id'=>$commande->id])}}">Delete</a>
            </td>
               @include('backoffice.commande.show')
        
     </tr>  
     @endforeach

</table>
@endsection  
</div>