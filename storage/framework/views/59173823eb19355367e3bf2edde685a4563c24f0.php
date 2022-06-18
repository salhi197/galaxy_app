<?php $__env->startSection('content'); ?>


                    <div class="page-header">
						<h4 class="page-title"><?php echo e(trans('main.liste_sommes_investes')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><?php echo e(trans('main.liste_sommes_investes')); ?></h3>
								</div>
								<div class="card-body">
								<div class="table-responsive">
							    	<table id="datable-1" class="table card-table table-striped table-bordered text-nowrap w-100">
										<thead >
											<tr>
												<th>ID</th>
												<th><?php echo e(trans('main.type_opration')); ?></th>
												<th><?php echo e(trans('main.actionnaire')); ?></th>
												<th><?php echo e(trans('main.recepteur')); ?></th>
												<th><?php echo e(trans('main.montant')); ?></th>
												<th><?php echo e(trans('main.methode')); ?></th>
												<th><?php echo e(trans('main.etat')); ?></th>												
											</tr>
										</thead>
										<tbody>
                                            <?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($operation->id); ?></td>
												<td>

												<?php if($operation->type==-1): ?>
													Retrait
												<?php endif; ?>

												<?php if($operation->type==1): ?>
													Rechargement
												<?php endif; ?>

												<?php if($operation->type==2): ?>
													Transfert
												<?php endif; ?>
												</td>
                                                <td>
													<?php echo e($operation->user()['name'] ?? ''); ?>

													<?php echo e($operation->user()['nom'] ?? ''); ?>

													
												</td>
                                                <td>
												<?php echo e($operation->receiver()['name'] ?? ''); ?>

												<?php echo e($operation->receiver()['nom'] ?? ''); ?>

												</td>
                                                <td><?php echo e($operation->montant); ?> $ </td>
                                                <td><?php echo e($operation->methode); ?></td>
                                                <td >
													<?php if($operation->etat == 1): ?>
														Confirmé
													<?php else: ?>
														Non Confirmé
													<?php endif; ?>
												</td>


											</tr>                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>

								</div>
								<!-- table-responsive -->
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/datatable/datatable.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>