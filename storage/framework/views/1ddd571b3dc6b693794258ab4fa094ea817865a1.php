<?php $__env->startSection('content'); ?>


                    <div class="page-header">
						<h4 class="page-title"><?php echo e(trans('liste_retirer')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('retirer')); ?></li>
						</ol>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Liste</h3>
								</div>
								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap">
										<thead >
											<tr>
												<th>ID</th>
												<th>User</th>
												<th>Montant</th>
												<th>Méthode</th>
												<th>Etat</th>
												<?php if(auth()->guard('admin')->check()): ?>
												<th>Action</th>
												<?php endif; ?>

											</tr>
										</thead>
										<tbody>
                                            <?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($operation->id); ?></td>
												<td>
													<a href="<?php echo e(route('user.detail',['user'=>$operation->user()['id']])); ?>">
														<?php echo e($operation->user()['name']); ?>

													</a>
												</td>
                                                <td><?php echo e($operation->montant); ?></td>
                                                <td><?php echo e($operation->methode); ?></td>
												<?php if($operation->etat == 1): ?>
                                                <td class="badge badge-success">
													<span class="">Confirmé</span>
												</td>
												<?php endif; ?>
												<?php if($operation->etat == -1): ?>
                                                <td >
													<span class="badge badge-anger">Annulé</span>
												</td>
												<?php endif; ?>
												<?php if($operation->etat == 0): ?>
                                                <td >
													<span class="badge badge-anger">Non Confirmé (en attente)</span>
												</td>
												<?php endif; ?>

												<?php if(auth()->guard('admin')->check()): ?>
                                                            <td >
                                                                <div class="table-action">  
                                                                        <a class="btn btn-outline btn-danger px-3 mb-0" 
                                                                        href="<?php echo e(route('operation.recharger.valider',['operation'=>$operation->id])); ?>"
                                                                        onclick="return confirm('etes vous sure  ?')" >
                                                                            <i class="far fa-trash-alt me-2"></i>
                                                                            Approuver
                                                                        </a>

                                                                        <a class="btn btn-outline btn-danger px-3 mb-0" 
                                                                        href="<?php echo e(route('operation.recharger.annuler',['operation'=>$operation->id])); ?>"
                                                                        onclick="return confirm('etes vous sure  ?')" >
                                                                            <i class="far fa-trash-alt me-2"></i>
                                                                            Annuler
                                                                        </a>
                                                                </div>
                                                            </td>

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