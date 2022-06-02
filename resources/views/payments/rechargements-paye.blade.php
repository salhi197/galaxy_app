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
														<option @if($interval==1) selected @endif value="1"> Entre le 1-9</option>
														<option @if($interval==2) selected @endif value="2"> Entre le 11-20</option>
														<option @if($interval==3) selected @endif value="3"> Entre le 21-31</option>
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
													<th>Prochain Date de Paiment</th>

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
													<td>{{$operation->next_payment_date}}</td>
													


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
