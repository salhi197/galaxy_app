@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('liste des activations')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('dashboard')}}</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Liste Rechargements : </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="datable-1" class="table  card-table table-striped table-bordered text-nowrap w-100">
											<thead >
												<tr>
													<th>ID</th>
													<th>User</th>
													<th>Montant</th>
													<th>Payé</th>
													<th>Etat</th>
													<th>Crée le </th>

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
													<td>
														{{$operation->created_at->format('m')-date('m')}}/12 <br>	
														Prochain Payment : {{$operation->next_payment_date}}
													</td>
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
