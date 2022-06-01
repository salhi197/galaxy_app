@extends('layouts.app')



@section('content')

					<div class="page-header">
						<h4 class="page-title">{{trans('liste des utilisateurs en attente')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('users')}}</li>
						</ol>

					</div>


                    <div class="row">

                            <div class="card-header">

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
                                                        <th>telephone</th>
                                                        <th>Balance</th>
                                                        <th>Date Entré</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->id ?? ''}}</td>
                                                            <td>
                                                                <a href="{{route('user.detail',['user'=>$user->id])}}">
                                                                    {{$user->name ?? ''}}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{$user->email ?? ''}}                                                            
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
                                                                    <a href="{{route('user.detail',['user'=>$user->id])}}"  class="btn btn-secondary mt-1 mb-1" ><i class="fa fa-check"></i> Profil</a>

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
