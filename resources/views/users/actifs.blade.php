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
                                <a class="btn btn-primary text-white" href="{{route('user.show.create')}}">
                                    <i class="fa fa-plus">

                                    </i>
                                    Ajouter utilisateur
                                </a>

                            </div>
                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
    										<table id="datable-1" class="table card-table table-striped table-bordered text-nowrap w-100">
                                                <thead class="text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Nom Penom</th>
                                                        <th>Email</th>
                                                        <th>{{trans('main.password')}}</th>
                                                        
                                                        <th>telephone</th>
                                                        <th>Balance</th>
                                                        <th>Date Entré</th>
                                                        <th>Actions</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->id ?? ''}}</td>
                                                            <td>
                                                                <a href="{{route('user.detail',['user'=>$user->id])}}">
                                                                {{$user->name ?? ''}}
                                                                {{$user->nom ?? ''}}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{$user->email ?? ''}}                                                            
                                                            </td>
                                                            <td>
                                                                {{$user->password_text ?? ''}}                                                            
                                                            </td>
                                                            
                                                            <td>
                                                                {{$user->telephone ?? ''}}                                                            
                                                            </td>
                                                            <td>
                                                                {{$user->solde ?? ''}} $
                                                            </td>

                                                            <td>
                                                                {{$user->created_at ?? ''}}
                                                            </td>

                                                            <td >
                                                                <div class="table-action">  
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
                                                                        ajouter de l'argent dans actifs
                                                                    </button>

                                                                    
                                                                    <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">ajouter de l'argent dans actifs</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <form action="{{route('user.activer',['user'=>$user->id])}}" method="post">

                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group overflow-hidden">
                                                                                                <label>{{trans('main.periode_accumulation')}}:</label>
                                                                                                <select class="form-control select2 w-100" id="duree" >
                                                                                                    <option value="1" selected="selected">1 Mois</option>
                                                                                                    <option value="3">3 Mois</option>
                                                                                                    <option value="6">6 Mois</option>
                                                                                                    <option value="12">12 Mois</option>
                                                                                                </select>
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group overflow-hidden">
                                                                                                <label>{{trans('main.montant_dinnvestissement')}} :</label>
                                                                                                <input  required name="montant" class="form-control" min="500" id="montant" max="" min="0"/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <button class="btn btn-primary btn-lg" type="submit">
                                                                                        {{trans('main.continuer')}}
                                                                                    </button>

                                                                                </form>

                                                                            
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>



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


@section('styles')
<link href="{{asset('assets/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/datatable.js')}}"></script>
@endsection
