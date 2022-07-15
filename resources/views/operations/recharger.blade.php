@extends('layouts.app')

@section('content')


					<div class="page-header">
						<h4 class="page-title">{{ trans('main.recharger_comtpe') }}</h4>
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
									<h3 class="card-title">{{trans('main.recharger_comtpe')}}</h3>
								</div>
								<div class="card-body">

                                    <form action="{{route('operation.recharger.action')}}" method="post">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>{{trans('main.montant_recharge')}} :</label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>{{trans('main.methode_recharge')}}:</label>
                                                        <select name="methode" class="form-control select2 w-100" >
                                                        <option value="btc">BTC</option>
                                                        <option value="payeer">Payeer</option>
                                                        <option value="usdt_trc20">USDT TRC20</option>
                                                        <option value="usdt_erc20">USDT ERC20</option>
														<option value="usdt_erc20">Transfert Bancaire</option>
														
                                                    </select>
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
									<h3 class="card-title">
										{{trans('main.instruction')}} :
									</h3>
								</div>
							</div>
						</div>
					</div>



@endsection