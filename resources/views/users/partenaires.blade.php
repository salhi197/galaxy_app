@extends('layouts.app')



@section('content')

					<div class="page-header">
						<h4 class="page-title">{{trans('main.liste_partenaires')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('partenaire')}}</li>
						</ol>
					</div>


                    <div class="row">

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

                    </div>





@endsection


@section('scripts')

@endsection
