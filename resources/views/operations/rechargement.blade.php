@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('Recharger Comtpe')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('dashboard')}}</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->



                    <div class="row">
						<div class="col-xl-12    col-md-12 col-lg-1">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">RECHARGER LE COMPTE</h3>
								</div>
								<div class="card-body">

    									<div class="row">
                                            <div class="col-md-12 text-center" >
                                                
                                                <img src="{{asset('img/qr.png')}}" />
                                            </div>
	    								</div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h4>
                                                Réapprovisionnement du compte utilisateur {{Auth::user()->email}}
                                                    {{$montant}} {{$methode}} 

                                                </h4>
                                                <h4>
                                                    Pour payer, scannez ce code QR via votre portefeuille mobile.
                                                </h4>
                                                <h4>
                                                    Ou envoyer {{$montant}} USDT à cette adresse : {{$adress}}
                                                </h4>
                                                </p>
                                            </div>

                                        </div>
								</div>
							</div>
						</div>
						
					</div>



@endsection