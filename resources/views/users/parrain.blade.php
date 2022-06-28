@extends('layouts.app')



@section('content')

					<div class="page-header">
                        <h4 class="page-title">Mon Parrain :</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('partenaire')}}</li>
						</ol>
					</div>


                    <div class="row">
						<div class="col-lg-12">
							
							<div class="card">
								<div class="card-header">
                                    <h4 class="page-title">{{trans('main.liste_partenaires')}}   : </h4>
								</div>
								<div class="card-body"> 
									<div class="panel-group1" id="accordion1">
                                        @foreach($users as $user)
                                            <div class="panel panel-default">
                                                <div class="panel-heading1">
                                                    <h4 class="panel-title1">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">{{$user->nom}} {{$user->name}}</a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body">
                                                        <ul>
                                                            @foreach($user->partenaires() as $partenaire)
                                                                <li>
                                                                    {{$user->nom}} {{$user->name}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>




@endsection


@section('scripts')

@endsection
