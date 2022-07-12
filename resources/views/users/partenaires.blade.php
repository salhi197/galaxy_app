@extends('layouts.app')



@section('content')

					<div class="page-header">
                        <h4 class="page-title">{{trans('main.liste_partenaires')}}</h4>
                        <h4 class="page-title">Mon Parrain : {{Auth::user()->parrain()['nom'] ?? ""}} {{Auth::user()->parrain()['name'] ?? ""}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('partenaire')}}</li>
						</ol>
					</div>


                    <!-- <div class="row">

                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Utilisateur</th>
                                                        <th>Date Entré</th>
                                                        <th>identité</th>
                                                        
                                                        <th>Solde Actif</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->id ?? ''}}</td>
                                                            <td>
                                                                @auth('admin')
                                                                    <a href="{{route('user.detail',['user'=>$user['id']])}}">
                                                                        {{$user['name']}} {{$user['nom']}}
                                                                        
                                                                    </a>
                                                                @endif
                                                                @auth
                                                                    <a href="#">
                                                                        {{$user['name']}} {{$user['nom']}}                                                                    
                                                                    </a>
                                                                @endif
                                                                <br>
                                                                <a href="#">                                                                                                                                        <br>
                                                                    {{$user['email']}}
                                                                </a>

                                                            </td>

                                                            <td>
                                                                {{$user->created_at ?? ''}}
                                                            </td>
                                                            <td class="">
                                                                @if($user->verified == 1)
                                                                    <i class="fa fa-check"></i>
                                                                @else
                                                                    <i class="fa fa-close"> </i>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{$user->solde_actif ?? ''}}
                                                            </td>
                                                        </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                    </div> -->


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
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive{{$user->id}}" aria-expanded="false">{{$user->nom}} {{$user->name}}</a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive{{$user->id}}" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body">
                                                        <h4 class="page-title">Liste des Partenaires Niveau 1 : </h4>
                                                            
                                                        <ul>
                                                            @foreach($user->partenaires() as $partenaire)
                                                                <li>
                                                                    <a href="#">
                                                                        {{$partenaire['name']}} {{$partenaire['nom']}}                                                                        
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    {{$partenaire['email']}}
                                                                </li>
                                                                <li>
                                                                    Inscrit le : {{$partenaire->created_at ?? ''}}
                                                                </li>
                                                                <li>
                                                                    Solde Actif : {{$partenaire->solde_actif ?? ''}} $ 
                                                                </li>
                                                                <ul>
                                                                    @foreach($partenaire->partenaires() as $partenaire2)
                                                                        <li>
                                                                            <a href="#">
                                                                                {{$partenaire2['name']}} {{$partenaire2['nom']}}                                                                        
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            {{$partenaire2['email']}}
                                                                        </li>
                                                                        <li>
                                                                        Inscrit le :{{$partenaire2->created_at ?? ''}}
                                                                        </li>
                                                                        <li>
                                                                            Solde Actif : {{$partenaire2->solde_actif ?? ''}}
                                                                        </li>                                                                   
                                                                    @endforeach
                                                                </ul>

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
