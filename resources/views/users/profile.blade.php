@extends('layouts.app')

@section('content')


					<div class="page-header">
						<h4 class="page-title">{{trans('profile')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">GalaxyApp</a></li>
							<li class="breadcrumb-item active" aria-current="page">setting</li>
						</ol>
					</div>
					@if($user->verified == 0 || $user->verified == 1)
                    <div class="row">
	                    <div class="col-lg-8">
							<form class="card" action="{{route('user.update.profile',['user'=>$user->id])}}" method="post" enctype="multipart/form-data">
								<div class="card-header">
									<h3 class="card-title">{{trans('main.edit_profile')}} </h3>
									&nbsp;
									@if($user->verified == 1)
										<a href="{{route('user.demande',['user'=>$user->id])}}" class="btn btn-primary" onclick="return confirm('Etes Vous sure ?')">
											{{trans('main.envoyer_verification')}}
										</a>
									@endif

								</div>
								<div class="card-body">
                                    <div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">{{trans('main.code_sponsor')}}: </label>
												<input type="text" value="{{$user->code}}" readonly class="form-control" >
											</div>
										</div>
                                    </div>
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">{{trans('main.nom')}}</label>
												<input type="text" class="form-control" value="{{$user->nom}}" name="nom"  placeholder="Nom " >
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="form-group">
												<label class="form-label">{{trans('main.prenom')}}</label>
												<input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Prénom" >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">{{trans('main.email')}}</label>

												<input type="email" readonly class="form-control" value="{{$user->email}}" name="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">{{trans('main.country')}}</label>
                                                <select id="country" value="{{old('pays')}}" value="{{$user->pays}}" name="pays" class="form-control" >
                                                    @include('includes.pays',['value'=>$user->pays])
                                                </select>                                    
											</div>
										</div>

										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">{{trans('main.telephone')}}</label>
												<input type="text" class="form-control" value="{{$user->telephone}}" name="telephone" placeholder="Téléphone">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">{{trans('main.piece_identité')}} / {{trans('main.passport')}}: </label>
												<input type="file" class="form-file"  name="identite" >
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group mb-0">
												<label class="form-label">{{trans('main.photo')}}</label>
												<input class="form-file" type="file" name="photo"/>
											</div>
										</div>
									</div>



									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">{{trans('main.facebook')}}</label>
												<input type="text" class="form-control" value="{{$user->facebook}}" placeholder="Lien Vers Votre Profile facebook" name="facebook"   >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">{{trans('main.telegram')}}</label>
												<input type="text" class="form-control" value="{{$user->telegram}}" placeholder="Lien Vers Votre Profile telegram" name="telegram"  >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">{{trans('main.linkedin')}}</label>
												<input type="text" class="form-control" value="{{$user->linkedin}}" placeholder="Lien Vers Votre Profile linkedin" name="linkedin" >
											</div>
										</div>
									</div>

								</div>
								<div class="card-footer text-right">
									<button type="submit" class="btn btn-primary">{{trans('main.update_profile')}}</button>
								</div>
							</form>
                        </div>

                        <div class="col-lg-4">
							<form class="card" method="post" action="{{route('user.password')}}" enctype="multipart/form-data">
								<div class="card-header">
									<div class="card-title">{{trans('main.changer_password')}}</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">{{trans('main.mot_de_passe_actuel')}}</label>
										<input name="password" type="password" class="form-control" >
									</div>
									<div class="form-group">
										<label class="form-label">

										{{trans('main.nouveau_mot_passe')}}
										</label>
										<input type="password" class="form-control" id="exampleInputPassword1" name="new_password" required placeholder="Password">
									</div>
									
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
									</div>
								</div>
							</form>
						</div>
						<!-- COL END -->

                    </div>
					@endif
					<!-- @if($user->verified == 1)
                    <div class="row">
	                    <div class="col-lg-8">
							<form class="card" action="{{route('user.update.profile',['user'=>$user->id])}}">
								<div class="card-header">
									<h3 class="card-title">Modifer Porfile </h3>
								</div>
								<div class="card-body">
                                    <div class="row">
										<div class="col-md-12">
										<div class="alert alert-success" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											La vérification a réussi , Merci !
										</div>
										</div>
                                    </div>
								</div>
                        </div>


                    </div>

					@endif -->
					@if($user->verified == 2)
                    <div class="row">
	                    <div class="col-lg-8">
							<form class="card" action="{{route('user.update.profile',['user'=>$user->id])}}">
								<div class="card-header">
									<h3 class="card-title">Modifer Porfile </h3>
								</div>
								<div class="card-body">
                                    <div class="row">
										<div class="col-md-12">
										<div class="alert alert-warning" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											En attente de vérification
										</div>
										</div>
                                    </div>
								</div>
                        </div>


                    </div>

					@endif
            
@endsection
