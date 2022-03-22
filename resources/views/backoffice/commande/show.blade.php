<div class="modal fade" id="exampleModal{{$commande->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                        <h3><i class="fa fa-utensils text-danger"></i>Restaurant</h3>
                        </div>
                    <div class="card-body">
                        <h5 class="card-title"></i>{{$commande->restaurant->name}}</h5>
                        <div class="card-text"><i class="fa fa-location-dot text-danger"> </i> {{$commande->restaurant->adresse}}</div>
                        <div class="card-text"><i class="fa-solid fa-phone text-success"></i> {{$commande->restaurant->tele}}</div>
                    </div>     
                </div> 
              </div>
              <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                    <h3><i class="fa fa-user text-danger"></i> Customer</h3>
                    </div>
                <div class="card-body">
                    <h5 class="card-title">{{$commande->client->name}}</h5>
                    <div class="card-text"><i class="fa-solid fa-phone text-success"></i>{{$commande->client->tele}}</div>
                </div>  
              </div>
              </div>
          </div>  

          {{-- <div class="row">
             @foreach($commande->produit as $prod)
              <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Product</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$prod->name}}</h3>  
                        <div class="card-text">{{$prod->desc}}</div> 
                        <div class="card-text">{{$prod->prix}}</div>   
                    </div> 
                </div>         
                </div>
              @endforeach
          </div> --}}






        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>