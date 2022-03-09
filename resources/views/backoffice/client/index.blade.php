
<center>
<table>
    <head>
    
        <tr>
            
            <th>Id </th>
            <th>Nom</th>
            <th>Prenom  </th>
            <th>Telephone  </th>
            <th>Login User  </th>

        </tr>
   </head>
   <tbody>
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
  <tbody>

</table>
<a class="btn btn-secondary" href="{{route('client.add')}}">Ajouter</a>



</center>