@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('main.liste_sommes_investes')}}</h4>
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
									<h3 class="card-title">{{trans('main.liste_sommes_investes')}}</h3>
								</div>
								<div class="card-body">
								<div class="table-responsive">
							    	<table id="datable-1" class="table card-table table-striped table-bordered text-nowrap w-100">
										<thead >
											<tr>
												<th>ID</th>
												<th>{{trans('main.type_opration')}}</th>
												<th>{{trans('main.actionnaire')}}</th>
												<th>{{trans('main.recepteur')}}</th>
												<th>{{trans('main.montant')}}</th>
												<th>{{trans('main.methode')}}</th>
												<th>{{trans('main.etat')}}</th>												
											</tr>
										</thead>
										<tbody>
                                            @foreach($operations as $operation)
											<tr>
												<td>{{$operation->id}}</td>
												<td>

												@if($operation->type==-1)
													Retrait
												@endif

												@if($operation->type==1)
													Rechargement
												@endif

												@if($operation->type==2)
													Transfert
												@endif
												</td>
                                                <td>
													{{$operation->user()['name'] ?? ''}}
													{{$operation->user()['nom'] ?? ''}}
													
												</td>
                                                <td>
												{{$operation->receiver()['name'] ?? ''}}
												{{$operation->receiver()['nom'] ?? ''}}
												</td>
                                                <td>{{$operation->montant}} $ </td>
                                                <td>{{$operation->methode}}</td>
                                                <td >
													@if($operation->etat == 1)
														Confirmé
													@else
														Non Confirmé
													@endif
												</td>


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
