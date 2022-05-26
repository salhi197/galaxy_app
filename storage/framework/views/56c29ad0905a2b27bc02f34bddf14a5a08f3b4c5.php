<?php $__env->startSection('content'); ?>


					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('profile')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">GalaxyApp</a></li>
							<li class="breadcrumb-item active" aria-current="page">setting</li>
						</ol>
					</div>

                    <div class="row">
                    <div class="col-lg-8">
							<form class="card" action="<?php echo e(route('user.update.profile',['user'=>$user->id])); ?>">
								<div class="card-header">
									<h3 class="card-title">Modifer Porfile :</h3>
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
												<input type="text" class="form-control" name="nom  placeholder="Nom " >
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="form-group">
												<label class="form-label">Prénom</label>
												<input type="text" class="form-control" name="prenom" placeholder="Prénom" >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Email address</label>
												<input type="email" class="form-control" name="email" placeholder="Email">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Téléphone</label>
												<input type="text" class="form-control" name="telephone" placeholder="Téléphone">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Pièce d'identité / passport: </label>
												<input type="file" class="form-control" name="identite" name="identite">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<input type="text" class="form-control" name="adress" placeholder="Address" >
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">Country</label>
                                                <select id="country" value="<?php echo e(old('pays')); ?>" name="pays" class="form-control" >
                                                    <?php echo $__env->make('includes.pays',['value'=>$user->pays], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                </select>                                    
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group mb-0">
												<label class="form-label">Photo</label>
												<input class="form-control" type="file" name="photo"/>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer text-right">
									<button type="submit" class="btn btn-primary">Update Profile</button>
								</div>
							</form>
                        </div>

                        <div class="col-lg-4">
							<form class="card" method="post" action="<?php echo e(route('user.password')); ?>">
								<div class="card-header">
									<div class="card-title">Login to your account</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Mot de passe Actuel</label>
										<input type="password" class="form-control" >
									</div>
									<div class="form-group">
										<label class="form-label">
										Nouveau Mot de passe
										<!-- <a href="forgot-password.html" class="float-right small">I forgot password</a> -->
										</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									<!-- <div class="form-group">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" />
											<span class="custom-control-label">Remember me</span>
										</label>
									</div> -->
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
									</div>
								</div>
							</form>
							<div class="card">
								<div class="card-body">
									<div class="text-center text-muted">
										Don't have account yet? <a href="register.html">Sign up</a>
									</div>
									<form class="" method="post">
										<div class="mt-4">
											<div class="card-title">Forgot password</div>
											<p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
											<div class="form-group">
												<label class="form-label" for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
											</div>
											<div class="form-footer">
												<button type="submit" class="btn btn-primary btn-block">Send me new password</button>
											</div>
										</div>
									</form>
									<div class="text-center text-muted mt-3 ">
										Forget it, <a href="login.html">send me back</a> to the sign in screen.
									</div>
								</div>
							</div>
						</div><!-- COL END -->

                    </div>
            
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>