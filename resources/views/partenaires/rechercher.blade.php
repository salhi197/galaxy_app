@extends('layouts.app')

@section('content')


<div class="page-header">
						<h4 class="page-title">{{trans('rechercher')}} ** Page EN Construction **</h4>
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
									<h3 class="card-title">RECHERCHER</h3>
								</div>
								<div class="card-body">

                                    <form  method="post">
    									<div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group overflow-hidden">
                                                    <label>Email:</label>
                                                    <input  name="email" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group overflow-hidden">
                                                    <label>Téléphone:</label>
                                                    <input  name="telephone" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group overflow-hidden">
                                                    <label>Prénom:</label>
                                                    <input  name="prenom" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>
	    								</div>
                                        <button class="btn btn-primary btn-lg">
                                                Appliquer
                                        </button>

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