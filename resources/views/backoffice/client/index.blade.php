@extends('backoffice.layouts.app')
@section('content')
@section('table','clients')
@section('subtable','liste')
{{-- <div class="container">
<a class="btn btn-success m-3 ml-auto" href="{{route('client.add')}}">Ajouter</a> --}}
<div class="card">
    <div class="card-header">
<a class="btn btn-dark mt-5 mb-5 ml-auto rounded-pill " href="{{route('client.add')}}">Add</a>

<table  class="table w-100 thead-primary dataTable no-footer" role="grid"  style="width: 1098px;">
    <thead class="bg-danger text-white">
        <tr role="row">
          
            <th>User Name</th>
            <th>Last Name</th>
            <th>First Name </th>
            <th>_mail</th>
            <th>Phone Number  </th>
            <th>Action</th>

        </tr>
        <tbody>
   @if($clients->count() > 0)
   @foreach($clients as $client)  
           <tr>
              
               <td>{{$client->user->name}}</td>
               <td>{{$client->name}}</td>
               <td>{{$client->prenom}}</td>
               <td>{{$client->user->email}}</td>
               <td>{{$client->tele}}</td>
             
               <td>
              
                <a class="text-danger" href="{{route('client.delete',['id'=>$client->user->id])}}">  <i class="fa-solid fa-trash-alt"></i></a>
               <a class="text-danger" href="{{route('client.edit',['id'=>$client->id])}}"> <i class="fa-solid fa-user"></i></a>
               </td>
        
            </tr>  
     @endforeach
     @else
     <tr>
        <td colspan="7" class="text-center text-danger"> No Data </td>
     </tr>
     @endif
    </tbody>

</table>

</div></div>

@endsection

{{--     
</div> --}}