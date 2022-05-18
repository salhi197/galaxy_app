

<div class="modal fade" id="ClientChauffeur{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Liste des Chauffeurs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
        <ul class="list-group">
            @foreach($client->chauffeurs() as $chauffeur)
                <li class="list-group-item">{{$chauffeur->nom }} {{$chauffeur->prenom }}</li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
