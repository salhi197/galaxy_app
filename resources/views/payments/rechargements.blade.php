@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('liste_recharger')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('dashboard')}}</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
									<form class="card-header" method="post" action="{{route('payment.filter')}}">
											<div class="col-md-4">
                                                <div class="form-group overflow-hidden">
													<select class="form-control" name="interval">
														<option value=""> Séléctionner L'interval </option>
														<option value="1"> Entre le 1-9</option>
														<option value="2"> Entre le 11-20</option>
														<option value="3"> Entre le 21-31</option>
													</select>
                                                </div>
                                            </div>
											<div class="col-md-4">
                                                <div class="form-group overflow-hidden">
													<button class="btn btn-primary btn-lg" type="submit">
														Filtrer
													</button>													
                                                </div>
											</div>


									</form>

								<div class="card-body">
									<div class="table-responsive">
										<table id="datable-1" class="table  card-table table-striped table-bordered text-nowrap w-100">
											<thead >
												<tr>
													<th>ID</th>
													<th>User</th>
													<th>Montant</th>
													<th>Etat</th>
													<th>Crée le </th>
													<th>Validé le </th>
													@auth('admin')
													<th>Action</th>
													@endif

												</tr>
											</thead>
											<tbody>
												@foreach($operations as $operation)
												<tr>
													<td>{{$operation->id}}</td>
													<td>
														<a href="{{route('user.detail',['user'=>$operation->user()['id']])}}">
															{{$operation->user()['name']}}
														</a>
													</td>
													<td class="text-center">{{$operation->montant}} $ </td>
													<!-- <td>
														{{$operation->created_at->format('m')-date('m')}}/12 <br>	
														Prochain Payment : {{$operation->next_payment_date}}
													</td> -->
													@if($operation->etat == 1)
													<td>
														Confirmé
													</td>
													@endif
													@if($operation->etat == -1)
													<td >
														Annulé
													</td>
													@endif
													
													@if($operation->etat == 0)
													<td >
														Non Confirmé (en attente)
													</td>
													@endif
													<td>{{$operation->created_at}}</td>
													<td>{{$operation->validated_date}}</td>
													@auth('admin')
																<td >
																	<div class="table-action">  
																		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$operation->id}}">
																			Payer
																		</button>

																		<div class="modal fade" id="exampleModal{{$operation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																			<div class="modal-dialog" role="document">
																				<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title" id="exampleModalLabel">Payer</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				<div class="modal-body">
																					<form method="post" action="{{route('payment.store',['operation'=>$operation->id])}}">
																						<div class="col-md-12">
																							<div class="form-group overflow-hidden">
																								<label>Entrez le pourcentage :</label>
																								<input  required name="pourcentage" class="form-control" max="100" min="10" id="montant" min="0"/>
																							</div>
																						</div>
																						<div class="col-md-4">
																							<div class="form-group overflow-hidden">
																							</div>
																						</div>

																					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																					<button type="submit" class="btn btn-primary">Enregistrer</button>

																					</form>
																				</div>
																				</div>
																			</div>
																		</div>

																	</div>
																</td>

													@endif


												</tr>                                            
												@endforeach
											</tbody>
										</table>
									</div>

								</div>
								<!-- table-responsive -->
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->


@endsection
@section('styles')
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/datatable.js')}}"></script>

@endsection
