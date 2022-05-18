<div class="modal fade" id="ClientDetail{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Détail client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">      
              <div class="row">
                  <div class="card" >
                      <div class="card-body">
                          <h3> Les Informations Personnels: </h3>
                              @foreach(
                                  ['id','nom','prenom','telephone','rib','adress']
                                  as 
                                  $item
                              )
                              <li class="list-group-item">{{$item}} :  {{$client[$item] }}</li>
                              @endforeach
                      </div>
                  </div>
              </div>
  
              <div class="row">
                  <div class="card" >
                      <div class="card-body">
                          <h3> Chauffeurs : </h3>
                          @foreach($client->chauffeurs() as $chauffeur)
                              <li class="list-group-item">{{$chauffeur->nom }} {{$chauffeur->prenom }}</li>
                          @endforeach
                      </div>
                  </div>
              </div>
  
              <div class="row">
                  <div class="card" >
                      <div class="card-body">
                          <h3> Les Camions : </h3>
                          @foreach($client->camions() as $key=>$camion)
                              <li class="list-group-item">
                                Camion {{$key+1}}: <span class="btn btn-info">{{$camion->matricule}}</span>
                                  <a class="btn btn-info" href="/storage/app/public/{{$camion->carte_grise}}">carte_grise</a>
                                  <a class="btn btn-info" href="/storage/app/public/{{$camion->assurance}}">assurance</a>
                                  <a class="btn btn-info" href="/storage/app/public/{{$camion->scanner}}">scanner</a>
                                    @if(!is_null($camion->gps))
                                        <span class="btn btn-success">
                                            Gps Activé
                                        </span>
                                    @else
                                        <span class="btn btn-danger">
                                            Gps Désactivé
                                        </span>
                                    @endif
                                  
                              </li>
                          @endforeach
                      </div>
                  </div>
              </div>
  
  
              <div class="row">
                  <div class="card" >
                      <div class="card-body">
                          <h3> Les Remorques : </h3>
                          @foreach($client->remorques() as $key=>$remorque)
                              <li class="list-group-item"> Remorque {{$key+1}}: {{$remorque->matricule}}
                                <a class="btn btn-info" href="@if(strlen($remorque->carte_grise)>0)/storage/app/public/{{$remorque->carte_grise}} @endif">carte_grise</a>,
                                <a class="btn btn-info" href="@if(strlen($remorque->assurance)>0)/storage/app/public/{{$remorque->assurance}} @endif">assurance</a>,
                                <a class="btn btn-info" href="@if(strlen($remorque->scanner)>0)/storage/app/public/{{$remorque->scanner}} @endif">scanner</a>,

                              </li>
                          @endforeach
                      </div>
                  </div>
              </div>
  
  
  
        </div>
      </div>
    </div>
  </div>
  