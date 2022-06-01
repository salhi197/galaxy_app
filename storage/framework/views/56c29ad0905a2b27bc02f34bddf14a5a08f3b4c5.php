<?php $__env->startSection('content'); ?>


					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('profile')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">GalaxyApp</a></li>
							<li class="breadcrumb-item active" aria-current="page">setting</li>
						</ol>
					</div>
					<?php if($user->verified == 0): ?>
                    <div class="row">
	                    <div class="col-lg-8">
							<form class="card" action="<?php echo e(route('user.update.profile',['user'=>$user->id])); ?>" enctype="multipart/form-data">
								<div class="card-header">
									<h3 class="card-title">Modifer Porfile </h3>
									<a href="<?php echo e(route('user.demande',['user'=>$user->id])); ?>" class="btn btn-primary" onclick="return confirm('Are you sure?')">
										Envoyer Pour verification
									</a >

								</div>
								<div class="card-body">
                                    <div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">Code Sponsor : </label>
												<input type="text" value="<?php echo e($user->code); ?>" readonly class="form-control" >
											</div>
										</div>
                                    </div>
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">Nom</label>
												<input type="text" class="form-control" value="<?php echo e($user->nom); ?>" name="nom"  placeholder="Nom " >
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="form-group">
												<label class="form-label">Prénom</label>
												<input type="text" class="form-control" value="<?php echo e($user->name); ?>" name="name" placeholder="Prénom" >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Email address</label>
												<input type="email" class="form-control" value="<?php echo e($user->email); ?>" name="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">Country</label>
                                                <select id="country" value="<?php echo e(old('pays')); ?>" value="<?php echo e($user->pays); ?>" name="pays" class="form-control" >
                                                    <?php echo $__env->make('includes.pays',['value'=>$user->pays], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                </select>                                    
											</div>
										</div>

										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Téléphone</label>
												<input type="text" class="form-control" value="<?php echo e($user->telephone); ?>" name="telephone" placeholder="Téléphone">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Pièce d'identité / passport: </label>
												<input type="file" class="form-file"  name="identite" >
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group mb-0">
												<label class="form-label">Photo</label>
												<input class="form-file" type="file" name="photo"/>
											</div>
										</div>
									</div>



									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="form-label">Facebook</label>
												<input type="text" class="form-control" value="<?php echo e($user->facebook); ?>" placeholder="Lien Vers Votre Profile facebook" name="facebook"   >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Telegram</label>
												<input type="text" class="form-control" value="<?php echo e($user->telegram); ?>" placeholder="Lien Vers Votre Profile telegram" name="telegram"  >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Linkedin</label>
												<input type="text" class="form-control" value="<?php echo e($user->linkedin); ?>" placeholder="Lien Vers Votre Profile linkedin" name="linkedin" >
											</div>
										</div>
									</div>

								</div>
								<div class="card-footer text-right">
									<button type="submit" class="btn btn-primary">Update Profile</button>
								</div>
							</form>
                        </div>

                        <!-- <div class="col-lg-4">
							<form class="card" method="post" action="<?php echo e(route('user.password')); ?>" enctype="multipart/form-data">
								<div class="card-header">
									<div class="card-title">Changer le mot de passe</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Mot de passe Actuel</label>
										<input type="password" class="form-control" >
									</div>
									<div class="form-group">
										<label class="form-label">
										Nouveau Mot de passe
										</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
									</div>
								</div>
							</form>
						</div> -->
						<!-- COL END -->

                    </div>
					<?php endif; ?>
					<?php if($user->verified == 1): ?>
                    <div class="row">
	                    <div class="col-lg-8">
							<form class="card" action="<?php echo e(route('user.update.profile',['user'=>$user->id])); ?>">
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

					<?php endif; ?>
					<?php if($user->verified == 2): ?>
                    <div class="row">
	                    <div class="col-lg-8">
							<form class="card" action="<?php echo e(route('user.update.profile',['user'=>$user->id])); ?>">
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

					<?php endif; ?>
            
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>