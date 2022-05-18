@extends('layouts.app')

@section('content')


<div class="page-header">
						<h4 class="page-title">{{trans('recharger_comtpe')}}</h4>
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
									<h3 class="card-title">RECHARGER LE COMPTE</h3>
								</div>
								<div class="card-body">

                                    <form action="{{route('operation.recharger.action')}}" method="post">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Entrez le montant de la recharge, €:</label>
                                                    <input  name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Entrez la méthode de recharge:</label>
                                                        <select name="methode" class="form-control select2 w-100" >
                                                        <option selected="selected">BTC</option>
                                                        <option selected="selected">ETH</option>
                                                        <option selected="selected">USDT</option>
                                                        <option selected="selected">Payer</option>
                                                        <option selected="selected">BTC</option>
                                                        <option selected="selected">BTC</option>
                                                    </select>
                                                </div>       
                                            </div>
	    								</div>
                                        <button class="btn btn-primary btn-lg" type="submit">
                                            Continuer
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