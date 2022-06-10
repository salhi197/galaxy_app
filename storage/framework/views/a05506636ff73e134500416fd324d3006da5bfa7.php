<?php $__env->startSection('content'); ?>


                    <div class="page-header">
						<h4 class="page-title"><?php echo e(trans('Recharger Comtpe')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->



                    <div class="row">
						<div class="col-xl-12    col-md-12 col-lg-1">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">RECHARGER LE COMPTE</h3>
								</div>
								<div class="card-body">

    									<div class="row">
                                            <div class="col-md-12 text-center" >
                                                
                                                <img src="<?php echo e(asset('img/qr.png')); ?>" />
                                            </div>
	    								</div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h4>
                                                Réapprovisionnement du compte utilisateur <?php echo e(Auth::user()->email); ?>

                                                    <?php echo e($montant); ?> <?php echo e($methode); ?> 

                                                </h4>
                                                <h4>
                                                    Pour payer, scannez ce code QR via votre portefeuille mobile.
                                                </h4>
                                                <h4>
                                                    Ou envoyer <?php echo e($montant); ?> USDT à cette adresse : <?php echo e($adress); ?>

                                                </h4>
                                                </p>
                                            </div>

                                        </div>
								</div>
							</div>
						</div>
						
					</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>