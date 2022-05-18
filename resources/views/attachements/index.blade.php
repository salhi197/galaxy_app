@extends('layouts.app')

@section('content')

                    <div class="page-header">
						<h4 class="page-title">
                            Tables Attachements
                        </h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page">Attachements</li>
						</ol>
					</div>
                    <div class="container-fluid">

                    <div class="card">
                                    <div class="card-header">
                                        <div class="col-md-12 col-lg-12">                                            
                                                <div class="col-md-2">
                                                    <a class="text-white btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fa fa-plus"></i> Importer Excel 
                                                    </a>
                                                </div>
                                                <br>
                                        </div> 
                                    </div>
                                    <div class="card-body">

                                            <table id="datatable-5" class="table table-bordered key-buttons text-nowrap" >
                                                <thead>
                                                    <tr>
                                                        <td>Site_chargement</td>
                                                        <td>Wilaya</td>
                                                        <td>Mois</td>
                                                        <td>Year</td>
                                                        <td>Categorie</td>
                                                        <td>Quantite</td>
                                                        <td>Cout</td>
                                                        <td>Chauffeur</td>
                                                        <td>Camion</td>
                                                        <td>Numero_mission</td>
                                                        <td>Numero_reservation</td>
                                                        <td>Date_facture</td>
                                                        <td>Categorie</td>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                @foreach($attachements as $key=>$attachement)
                                                    <tr>
                                                    <?php $index = $key+1; ?>
                                                        <td>{{$attachement->site_chargement}}</td>
                                                        <td>{{$attachement->wilaya}}</td>
                                                        <td>{{$attachement->mois}}</td>
                                                        <td>{{$attachement->year}}</td>
                                                        <td>{{$attachement->categorie}}</td>
                                                        <td>{{$attachement->quantite}}</td>
                                                        <td>{{$attachement->cout}}</td>
                                                        <td>{{$attachement->chauffeur}}</td>
                                                        <td>{{$attachement->camion}}</td>
                                                        <td>{{$attachement->numero_mission}}</td>
                                                        <td>{{$attachement->numero_reservation}}</td>
                                                        <td>{{$attachement->date_facture}}</td>
                                                        <td>{{$attachement->categorie}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                    </div>
                                </div>


                    </div>




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
		<form action="{{route('attachement.create')}}" method="post" enctype="multipart/form-data">
			@csrf
            
            <div class="custom-file">
                <label >Choisir Lieu de Chargemet / Déchargement :</label>
                <select name="port" class="form-control">
                    @foreach($wilayas as $wilaya)
                        <option value="{{$wilaya->id}}"> {{$wilaya->name }}//{{$wilaya->name2 }}</option>
                    @endforeach
                </select>
                <br>
            </div>


            <div class="custom-file">
                <input type="file" class="custom-file-input" name="example-file-input-custom">
                <label class="custom-file-label">Choisir fichier</label>
                <br>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Importer</button>

		</form>
      </div>
    </div>
  </div>
</div>
					
@endsection




@section('styles')
<!-- TIME PICKER CSS -->
<link href="{{asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet"/>
<!-- DATE PICKER CSS -->
<link href="{{asset('assets/plugins/date-picker/spectrum.css')}}" rel="stylesheet"/>


@endsection

@section('scripts')
<script src="{{asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
<script src="{{asset('assets/plugins/time-picker/toggles.min.js')}}"></script>
<script src="{{asset('assets/plugins/date-picker/spectrum.js')}}"></script>
<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>
<script>
$(document).ready(function() {
    $( "#generate" ).on('click',function(e){
        e.preventDefault()
        console.log('te')
        $('#formgenerate').submit();//('test');
    });

    $( "#filter" ).on('click',function(e){
        e.preventDefault()
        $('#formfilter').submit();//('test');
    });

    $('.custom-file-input').change(function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        });


});
</script>
@endsection
