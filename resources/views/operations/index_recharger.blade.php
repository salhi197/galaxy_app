@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('main.liste_rechargement')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('dashboard')}}</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">{{trans('main.liste_rechargement')}} : </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="datable-1" class="table  card-table table-striped table-bordered text-nowrap w-100">
											<thead >
												<tr>
													<th>ID</th>
													<th>{{trans('main.user')}}</th>
													<th>{{trans('main.montant')}}</th>
													<th>{{trans('main.etat')}}</th>													
													<th>{{trans('main.created_at')}}</th>
													<th>{{trans('main.certificat')}}</th>
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
													<td>
														<a href="{{route('operation.certificat',['operation'=>$operation])}}" class="btn btn-primary">
															Télécharger
														</a>
													</td>
													@auth('admin')
																<td >
																	<div class="table-action">  
																			@if($operation->confirmed == 0 and $operation->etat == 0)
																				<a class="btn btn-outline btn-danger px-3 mb-0" 
																				href="{{route('operation.recharger.valider',['operation'=>$operation->id])}}"
																				onclick="return confirm('etes vous sure  ?')" >
																					<i class="fe fe-check"></i>																				
																				</a>
																			@endif

																			<a class="btn btn-outline btn-danger px-3 mb-0" 
																			href="{{route('operation.recharger.annuler',['operation'=>$operation->id])}}"
																			onclick="return confirm('etes vous sure  ?')" >
																				<i class="fe fe-trash"></i>
																				
																			</a>

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
