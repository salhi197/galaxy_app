<?php $__env->startSection('content'); ?>

					<div class="page-header">
                        <h4 class="page-title">Mon Parrain :</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('partenaire')); ?></li>
						</ol>
					</div>


                    <div class="row">
						<div class="col-lg-12">
							
							<div class="card">
								<div class="card-header">
                                    <h4 class="page-title"><?php echo e(trans('main.liste_partenaires')); ?>   : </h4>
								</div>
								<div class="card-body"> 
									<div class="panel-group1" id="accordion1">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading1">
                                                    <h4 class="panel-title1">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false"><?php echo e($user->nom); ?> <?php echo e($user->name); ?></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <?php $__currentLoopData = $user->partenaires(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partenaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                    <?php echo e($user->nom); ?> <?php echo e($user->name); ?>

                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>




<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>