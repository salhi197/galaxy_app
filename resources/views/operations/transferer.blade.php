@extends('layouts.app')

@section('content')


<div class="page-header">
						<h4 class="page-title">{{trans('main.transferer_comtpe')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('dashboard')}}</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->



                    <div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">{{trans('main.compte_compte')}}</h3>
								</div>
								<div class="card-body">

                                    <form action="{{route('operation.transferer.action')}}" method="post" id="transfer_form">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group d-none">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="identifiant"  value="email" checked="true"> <span class="custom-control-label">Email</span>
												</label>													

                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-group ">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="identifiant" value="telephone" checked=""> <span class="custom-control-label">Téléphone</span>
												</label>													

                                                </div>
                                            </div> -->

	    								</div>


										<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group overflow-hidden">
                                                    <label>Email:</label>
                                                    <input  required name="email_or_telephone" class="form-control" id="identifiant" min="0"/>
                                                </div>
                                            </div>

	    								</div>

    									<!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label> Entrez le montant :</label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>

	    								</div> -->
    									<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group overflow-hidden">
                                                    <label>Motif ( optional ) :</label>
													<textarea class="form-control">

													</textarea>
                                                    <!-- <input  required name="motif" class="form-control" min="500" id="motif" min="0"/> -->
                                                </div>
                                            </div>
	    								</div>


    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>{{trans('main.montant_transfert')}} :
													</label>
													<i class="fa fa-cash"></i>
                                                    <input  type="number" required name="montant" class="form-control" min="0" placeholder="000.000" id="montant" min="0"/>
													<span>
														{{trans('main.max_autorise')}} : {{Auth::user()->solde}} $ 
													</span>
                                                </div>
                                            </div>
	    								</div>
										<input type="button" class="btn btn-primary btn-block" value="Confirmer" id="confirm">
                                    </form>


								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Instruction :</h3>
								</div>
							</div>
						</div>
					</div>



@endsection
@section('scripts')
<script>
$( document ).ready(function() {
		$("#confirm").on("click", function(e) {
		swal({
			title: "Etes Vous Sure ?",
			text: "Confirmer La demande de transfert ",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: '#DD6B55',
			confirmButtonText: 'Oui',
			cancelButtonText: "Annuler",
			closeOnConfirm: false,
			closeOnCancel: false		
		},
		function(isConfirm){
			if (isConfirm){
				console.log(document.getElementById('transfer_form'))
				document.getElementById('transfer_form').submit();
				swal.close()
					
			 } else {
			   swal("Cancelled", "Your imaginary file is safe :)", "error");
				  e.preventDefault();
			 }
		});		 
	});
})



</script>
@endsection