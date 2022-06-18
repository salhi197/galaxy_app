@extends('layouts.app')

@section('content')


					<div class="page-header">
						<h4 class="page-title">{{trans('Activer Solde')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('Activer')}}</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->



                    <div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">{{trans('main.votre_balance')}}  : {{Auth::user()->solde}} $</h3>
								</div>  
								<div class="card-body">

                                    <form action="{{route('operation.activer.action')}}" method="post">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>{{trans('main.montant_dinnvestissement')}} :</label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" max="{{Auth::user()->solde}}" min="0"/>
                                                </div>
                                            </div>
	    								</div>
                                        <button class="btn btn-primary btn-lg" type="submit">
                                            {{trans('main.continuer')}}
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