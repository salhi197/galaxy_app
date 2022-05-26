@extends('layouts.app')



@section('content')

					<div class="page-header">
						<h4 class="page-title">{{trans('liste des utilisateurs')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('users')}}</li>
						</ol>

					</div>


                    <div class="row">

                            <div class="card-header">
                                <a class="btn btn-primary text-white" >
                                    <i class="fa fa-plus">

                                    </i>
                                    Ajouter utilisateur
                                </a>

                            </div>
                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Nom Penom</th>
                                                        <th>Email</th>
                                                        <th>telephone</th>
                                                        <th>Balance</th>
                                                        <th>Date Entré</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->id ?? ''}}</td>
                                                            <td>
                                                                {{$user->nom ?? ''}}
                                                                {{$user->prenom ?? ''}}                                                            
                                                            </td>
                                                            <td>
                                                                {{$user->email ?? ''}}                                                            
                                                            </td>
                                                            <td>
                                                                {{$user->telephone ?? ''}}                                                            
                                                            </td>
                                                            <td>
                                                                {{$user->balance ?? ''}}
                                                            </td>

                                                            <td>
                                                                {{$user->created_at ?? ''}}
                                                            </td>

                                                            <td >
                                                                <div class="table-action">  


                                                                </div>
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
