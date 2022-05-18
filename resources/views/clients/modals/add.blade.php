<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">      
        <form role="form" action="{{route('client.store')}}" method="post" id="formpost">
            @csrf
            <div class="row">
                @foreach(
                    [
                        [
                            'label'=>'nom',
                            'name'=>'nom',
                            'type'=>'text'
                        ],
                        [
                            'label'=>'prénom',
                            'name'=>'prenom',
                            'type'=>'text'
                        ],
                        [
                            'label'=>'Adress',
                            'name'=>'adress',
                            'type'=>'text'
                        ],
                        [
                            'label'=>'Rib',
                            'name'=>'rib',
                            'type'=>'text'
                        ],
                        [
                            'label'=>'Téléphone',
                            'name'=>'telephone',
                            'type'=>'text'
                        ],
                    ]
                    as $input
                )
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="font-size:15px;" >{{$input['label']}}</label>
                        @if($input['type'] == "select")
                            <select class="form-control" name="secteur">
                            @foreach($input['options'] as $option)
                                <option value="{{$secteur->id}}" >{{$option ?? ''}}</option>	
                            @endforeach
                            </select>
                        @else
                            <input type="{{$input['type']}}"  value="" name="{{$input['name']}}" class="form-control">
                        @endif
                    </div>
                </div>            
                @endforeach
            </div>

            <div class="form-group" id="dynamic_form">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Matricule Remorque</label>
                                <input type="text" name="matricule_remorque" id="matricule_remorque" placeholder="Matricule Camion ..." class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Carte Grise Remorque</label>
                                <input type="file" name="carte_grise_remorque" id="carte_grise_remorque" class="form-file">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Assurance Remorque</label>
                                <input type="file" name="assurance_remorque" id="assurance_remorque" class="form-file">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Scanner Remorque</label>
                                <input type="file" name="scanner_remorque" id="scanner_remorque" class="form-file">
                            </div>


                            <div class="button-group">
                                <a href="javascript:void(0)" class="btn btn-primary" style="margin:27px;" id="plus5"><i class="fa fa-plus"></i></a>
                                <a href="javascript:void(0)" class="btn btn-danger" style="margin:27px;" id="minus5"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
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
