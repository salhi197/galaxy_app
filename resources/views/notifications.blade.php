@extends('layouts.app')

@section('content')
                    <div class="page-header">
						<h4 class="page-title">
                            Notifications
                        </h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page">Notifications</li>
						</ol>                        
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12">
                            <div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="datatable-5" class="table table-bordered key-buttons text-nowrap" >
											<thead>
												<tr>
                                                    <th class="border-bottom-0">Id</th>
                                                    <th class="border-bottom-0">Nom Client</th>
													<th class="border-bottom-0">Nom Chauffeur</th>
                                                    <th class="border-bottom-0">Type de papier</th>
                                                    <th class="border-bottom-0">Date Expirations</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach($chauffeurs as $chauffeur)
												<tr>
                                                    <td>
                                                        {{$chauffeur->id}}
                                                    </td>
                                                    <td>
                                                        {{$chauffeur->client()['nom']}}

                                                    </td>
                                                    <td>
                                                        {{$chauffeur->nom}}
                                                    </td>
                                                    <td>
                                                        permis
                                                    </td>
                                                    <td>
                                                        {{$chauffeur->expiration}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @foreach($expirationCamionsScanners as $camion)
												<tr>
                                                    <td>
                                                        {{$camion->id}}
                                                    </td>
                                                    <td>
                                                        {{$camion->client()['nom']}}
                                                    </td>
                                                    <td>
                                                        VIDE
                                                    </td>
                                                    <td>
                                                        Scanner Camion
                                                    </td>
                                                    <td>
                                                        {{$camion->expiration_scanner}}
                                                    </td>
                                                </tr>

                                                @endforeach
                                                @foreach($expirationCamionsAssurances as $camion)
												<tr>
                                                    <td>
                                                        {{$camion->id}}
                                                    </td>
                                                    <td>
                                                        {{$camion->client()['nom']}}
                                                    </td>
                                                    <td>
                                                        VIDE
                                                    </td>
                                                    <td>
                                                        Assurance Camion
                                                    </td>
                                                    <td>
                                                        {{$camion->expiration_assurance}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @foreach($expirationRemorquesScanners as $remorque)
                                                    <tr>
                                                        <td>
                                                            {{$remorque->id}}
                                                        </td>
                                                        <td>
                                                            {{$remorque->client()['nom']}}
                                                        </td>
                                                        <td>
                                                            VIDE
                                                        </td>
                                                        <td>
                                                            Assurance remorque
                                                        </td>
                                                        <td>
                                                            {{$remorque->expiration_assurance}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @foreach($expirationRemorquesAssurances as $remorque)
                                                    <tr>
                                                        <td>
                                                            {{$remorque->id}}
                                                        </td>
                                                        <td>
                                                            {{$remorque->client()['nom']}}
                                                        </td>
                                                        <td>
                                                            VIDE
                                                        </td>
                                                        <td>
                                                            Assurance remorque
                                                        </td>
                                                        <td>
                                                            {{$remorque->expiration_assurance}}
                                                        </td>
                                                    </tr>
                                                @endforeach
											</tbody>
										</table>


									</div>
								</div>
							</div>
						</div>
					</div>
@endsection

@section('modals')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Joindre fichier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="" method="post" enctype="multipart/form-data">
			@csrf
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="example-file-input-custom">
                <label class="custom-file-label">Choisir fichier</label>
                <br>
            <br>

            </div>
            <button type="submit" class="btn btn-primary">Importer</button>

		</form>
      </div>
    </div>
  </div>
</div>



@endsection
@section('styles')
<!-- TIME PICKER CSS -->


@endsection

@section('scripts')
</script>
@endsection
