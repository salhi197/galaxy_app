<?php $__env->startSection('content'); ?>


					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('Activer Solde')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('Activer')); ?></li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->



                    <div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Votre Balance est : <?php echo e(Auth::user()->solde); ?> $</h3>
								</div>  
								<div class="card-body">

                                    <form action="<?php echo e(route('operation.activer.action')); ?>" method="post">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Entrez le montant que vous voulez activer :</label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" max="<?php echo e(Auth::user()->solde); ?>" min="0"/>
                                                </div>
                                            </div>
	    								</div>
                                        <button class="btn btn-primary btn-lg" type="submit">
                                            Continuer
                                        </button>

                                    </form>


								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Instruction :</h3>
								</div>
							</div>
						</div>
					</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>