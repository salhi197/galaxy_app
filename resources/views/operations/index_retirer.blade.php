@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('liste_retirer')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('retirer')}}</li>
						</ol>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Liste</h3>
								</div>
								<div class="table-responsive">
									<table id="datable-1" class="table card-table table-vcenter text-nowrap">
										<thead >
											<tr>
												<th>ID</th>
												<th>User</th>
												<th>Montant</th>
												<th>Méthode</th>
												<th>Crée le </th>
												@auth('admin')
												<th>Action</th>
												@endif

											</tr>
										</thead>
										<tbody>
                                            @foreach($operations as $operation)
											<tr>
												<td>
													{{$operation->id}}
														@if($operation->etat == 1)
															Confirmé
														@endif
														@if($operation->etat == -1)
															Annulé
														@endif
														@if($operation->etat == 0)
															Non Confirmé (en attente)
														@endif

												</td>
												<td>
													<a href="{{route('user.detail',['user'=>$operation->user()['id']])}}">
														{{$operation->user()['name']}}
													</a>
												</td>
                                                <td>{{$operation->montant}}</td>
                                                <td>{{$operation->methode}}</td>
                                                <td>{{$operation->created_at}}</td>

												@auth('admin')
													@if($operation->confirmed == 0 and $operation->etat == 0)
                                                            <td >
                                                                <div class="table-action">  
                                                                        <a class="btn btn-outline btn-danger px-3 mb-0"  href="{{route('operation.retirer.valider',['operation'=>$operation->id])}}" onclick="return confirm('etes vous sure  ?')" >
                                                                            <i class="fe fe-check"></i>           
                                                                        </a>
                                                                </div>
                                                            </td>
													@endif
												@endif


											</tr>                                            
                                            @endforeach
										</tbody>
									</table>
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
