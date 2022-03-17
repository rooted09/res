  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Authentification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('authc.edit')}}" method="post">
                @csrf
            <div class="mb-3">
              <label for="exampleFormControlInput1"  class="form-label">Nouveau Mot de Pass :</label>
              <input type="password" class="form-control" name='password' id="password" value="">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1"  class="form-label">Confirm Mot de Pass</label>
                <input type="password" class="form-control" name='confirmed' id="name" value="">
            </div>
            
          <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>