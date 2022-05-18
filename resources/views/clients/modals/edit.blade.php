<div class="modal fade" id="EditClient{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
        <form role="form" action="{{route('client.update',['client'=>$client->id])}}" method="post" id="formpost">
            @csrf
            <div class="row">
                @foreach(
                    [
                        [
                            'label'=>'nom',
                            'name'=>'nom',
                            'value'=>$client->nom,
                            'type'=>'text'
                        ],
                        [
                            'label'=>'prénom',
                            'name'=>'prenom',
                            'value'=>$client->prenom,
                            'type'=>'text'
                        ],
                        [
                            'label'=>'Adress',
                            'name'=>'adress',
                            'value'=>$client->adress,
                            'type'=>'text'
                        ],
                        [
                            'label'=>'Rib',
                            'name'=>'rib',
                            'value'=>$client->rib,
                            'type'=>'text'
                        ],
                        [
                            'label'=>'Téléphone',
                            'name'=>'telephone',
                            'value'=>$client->telephone,
                            'type'=>'text'
                        ],
                    ]
                    as $input
                )
                <div class="col-md-6">
                    <div class="form-group">
                        <label style="font-size:15px;" >{{$input['label']}}</label>
                        @if($input['type'] == "select")
                            <select class="form-control" name="secteur">
                            @foreach($input['options'] as $option)
                                <option value="{{$secteur->id}}" 
                                @if($option->id == $input['name'])
                                    selected
                                @endif
                                >{{$option ?? ''}}</option>	
                            @endforeach
                            </select>
                        @else
                            <input type="{{$input['type']}}"  value="{{$input['value']}}" name="{{$input['name']}}" class="form-control">
                        @endif
                    </div>
                </div>            
                @endforeach
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <button id="valider"  class="btn btn-info btn-block">Valider</button>
                </div>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>
