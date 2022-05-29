@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('liste_trnasfert')}}</h4>
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
                                    <a class="btn btn-primary text-white" href="{{route('operation.transferer.show')}}">
                                        <i class="fa fa-plus">

                                        </i>
                                        Ajouter Transfert
                                    </a>
                                    
								</div>
								<div class="table-responsive">
									<table class="table card-table table-vcenter ">
										<thead >
											<tr>
												<th>ID</th>
												<th>Récepteur</th>
												<th>Montant</th>
												<!-- <th>Méthode</th> -->
												<th>Crée le </th>
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
														{{$operation->receiver()['name']}}
													</a>
												</td>
                                                <td>{{$operation->montant}}</td>
                                                <!-- <td>{{$operation->methode}}</td> -->
												<!-- @if($operation->etat == 1)
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
												@endif -->
                                                <td>{{$operation->created_at}}</td>
												@auth('admin')
                                                            <td >
                                                                <div class="table-action">  
                                                                        <a class="btn btn-outline btn-danger px-3 mb-0" 
                                                                        href="{{route('operation.recharger.valider',['operation'=>$operation->id])}}"
                                                                        onclick="return confirm('etes vous sure  ?')" >
                                                                            <i class="fe fe-check"></i>
                                                                            
                                                                        </a>

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
								<!-- table-responsive -->
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->


@endsection