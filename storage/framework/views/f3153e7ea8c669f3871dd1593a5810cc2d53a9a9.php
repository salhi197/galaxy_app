<?php $__env->startSection('content'); ?>


                    <div class="page-header">
						<h4 class="page-title"><?php echo e(trans('liste de tout les sommes investé')); ?></h4>
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
									<h3 class="card-title">Basic Table</h3>
								</div>
								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap">
										<thead >
											<tr>
												<th>ID</th>
												<th>Montant</th>
												<th>Méthode</th>
												<th>Etat</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
                                                <td><?php echo e($operation->id); ?></td>
                                                <td><?php echo e($operation->montant); ?></td>
                                                <td><?php echo e($operation->methode); ?></td>
												<?php if($operation->etat == 1): ?>
                                                <td >Confirmé</td>
												<?php else: ?>
                                                <td >Non Confirmé</td>

												<?php endif; ?>
											</tr>                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
								<!-- table-responsive -->
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>