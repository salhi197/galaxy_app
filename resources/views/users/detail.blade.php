@extends('layouts.app')

@section('content')

<div class="page-header">
						<h4 class="page-title">Profile</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Pages</a></li>
							<li class="breadcrumb-item active" aria-current="page">Profile</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

			        <!-- ROW-1 OPEN -->
					<div class="row" id="user-profile">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<div class="wideget-user">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wideget-user-desc d-flex">
													<div class="wideget-user-img">
														<img class="" src="../../assets/images/users/male/32.jpg" alt="img">
													</div>
													<div class="user-wrap">
														<h4>{{$user->name}}</h4>
														<h6 class="text-muted mb-3">Member Since: {{$user->created_at->format('M')}} {{$user->created_at->format('Y')}}</h6>
														<a href="#" class="btn btn-primary mt-1 mb-1"><i class="fa fa-cash"></i> {{$user->solde}} $</a>
														<a href="#" class="btn btn-secondary mt-1 mb-1"><i class="fa fa-envelope"></i> E-mail</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="border-top">
									<div class="wideget-user-tab">
										<div class="tab-menu-heading">
											<div class="tabs-menu1">
												<ul class="nav">
													<li class=""><a href="#tab-51" class="active show" data-toggle="tab">Profile</a></li>
													<li><a href="#tab-61" data-toggle="tab" class="">Friends</a></li>
													<li><a href="#tab-71" data-toggle="tab" class="">Gallery</a></li>
													<li><a href="#tab-81" data-toggle="tab" class="">Followers</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>

@endsection

@section('modals')



@endsection


