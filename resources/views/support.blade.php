@extends('layouts.app')

@section('content')

<div class="app-content">

				    <!-- PAGE-HEADER -->
					<div class="page-header">
						<h4 class="page-title">Support</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Pages</a></li>
							<li class="breadcrumb-item active" aria-current="page">Support</li>
						</ol>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Contacter Support</div>
								</div>
								<div class="card-body">
                                    <form action="{{route('operation.transferer.action')}}" method="post" id="transfer_form">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Nom :</label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Prénom: </label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>

	    								</div>
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Téléphone : </label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>

	    								</div>
    									<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group overflow-hidden">
                                                    <label>Message : </label>
                                                    <textarea class="form-control">

                                                    </textarea>
                                                </div>
                                            </div>

	    								</div>

										<input type="button" class="btn btn-primary btn-block" value="Confirm" id="confirm">
                                    </form>

								</div>
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->
				</div>


@endsection