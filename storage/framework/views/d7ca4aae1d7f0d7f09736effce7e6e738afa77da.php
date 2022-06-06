<?php $__env->startSection('content'); ?>
					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('Contatcer Support')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('support')); ?></li>
						</ol>

					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Contacter Support</div>
								</div>
								<div class="card-body">
                                    <form action="<?php echo e(route('support.email')); ?>" method="post">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Nom :</label>
                                                    <input  required name="nom" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Prénom: </label>
                                                    <input  required name="prenom" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>

	    								</div>
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Téléphone : </label>
                                                    <input  required name="telephone" class="form-control" min="500" id="montant" min="0"/>
                                                </div>
                                            </div>

	    								</div>
    									<div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group overflow-hidden">
                                                    <label>Message : </label>
                                                    <textarea class="form-control"  name="message">

                                                    </textarea>
                                                </div>
                                            </div>

	    								</div>

										<input type="submit" class="btn btn-primary btn-block" value="Confirm" >
                                    </form>

								</div>
							</div>
						</div>
					</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>