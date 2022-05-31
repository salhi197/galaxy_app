<?php $__env->startSection('content'); ?>


					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('retirer_comtpe')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->



                    <div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">RETIRER LE COMPTE</h3>
								</div>
								<div class="card-body">
									<?php if($countOperations>0): ?>
									<div class="row">
										<div class="col-md-12">
											<h4>
												Vous avez Déja une demande de retrait , vous devriez attendre jusqu'à sa validation
											</h4>
										</div>
									</div>


									<?php endif; ?>
									<?php if(Auth::user()->solde == 0): ?>
									<div class="row">
										<div class="col-md-12">
											<div class="alert alert-success" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												Vous ne pouvez pas effectuer cette action avec votre Solde . 
											</div>
											
										</div>
									</div>
									<?php endif; ?>
									<?php if(Auth::user()->solde > 0 and $countOperations==0): ?>

                                    <form action="<?php echo e(route('operation.retirer.action')); ?>" method="post">
    									<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Entrez le montant que vous voulez retirer:</label>
                                                    <input  required name="montant" class="form-control" min="500" id="montant" min="0"/>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label>Entrez la méthode de recharge:</label>
                                                        <select name="methode" class="form-control select2 w-100" >
                                                        <option value="btc">BTC</option>
                                                        <option value="prefectmoney">Perfect Money</option>
                                                        <option value="usdt_trc20">USDT TRC20</option>
                                                        <option value="usdt_erc20">USDT ERC20</option>
														<option value="usdt_erc20">Transfert Banquaire</option>
														
                                                    </select>
                                                </div>       
                                            </div>
	    								</div>
                                        <button class="btn btn-primary btn-lg" type="submit">
                                            Continuer
                                        </button>

                                    </form>
									<?php endif; ?>

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