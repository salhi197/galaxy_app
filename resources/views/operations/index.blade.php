@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('liste de tout les sommes investé')}}</h4>
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
									<h3 class="card-title">Basic Table</h3>
								</div>
								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap">
										<thead >
											<tr>
												<th>ID</th>
												<th>Montant</th>
												<th>Méthode</th>
												<th>Etat</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($operations as $operation)
											<tr>
                                                <td>{{$operation->id}}</td>
                                                <td>{{$operation->montant}}</td>
                                                <td>{{$operation->methode}}</td>
												@if($operation->etat == 1)
                                                <td >Confirmé</td>
												@else
                                                <td >Non Confirmé</td>
												@endif
												@auth('admin')
                                                            <td >
                                                                <div class="table-action">  
                                                                        <a class="btn btn-outline btn-danger text-danger text-gradient px-3 mb-0" 
                                                                        href="{{route('operation.approuver',['operation'=>$operation->id])}}"
                                                                        onclick="return confirm('etes vous sure  ?')" >
                                                                            <i class="far fa-trash-alt me-2"></i>
                                                                            Approuver
                                                                        </a>

                                                                        <a class="btn btn-outline btn-danger text-danger text-gradient px-3 mb-0" 
                                                                        href="{{route('operation.annuler',['operation'=>$operation->id])}}"
                                                                        onclick="return confirm('etes vous sure  ?')" >
                                                                            <i class="far fa-trash-alt me-2"></i>
                                                                            Annuler
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