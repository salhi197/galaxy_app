<?php $__env->startSection('content'); ?>

					<div class="page-header">
                        <h4 class="page-title"><?php echo e(trans('main.liste_partenaires')); ?></h4>
                        <h4 class="page-title">Mon Parrain : <?php echo e(Auth::user()->parrain()); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('partenaire')); ?></li>
						</ol>
					</div>


                    <div class="row">

                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Utilisateur</th>
                                                        <th>Date Entré</th>
                                                        <th>identité</th>
                                                        
                                                        <th>Solde Actif</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($user->id ?? ''); ?></td>
                                                            <td>
                                                                <?php if(auth()->guard('admin')->check()): ?>
                                                                    <a href="<?php echo e(route('user.detail',['user'=>$user['id']])); ?>">
                                                                        <?php echo e($user['name']); ?> <?php echo e($user['nom']); ?>

                                                                        
                                                                    </a>
                                                                <?php endif; ?>
                                                                <?php if(auth()->guard()->check()): ?>
                                                                    <a href="#">
                                                                        <?php echo e($user['name']); ?> <?php echo e($user['nom']); ?>                                                                    
                                                                    </a>
                                                                <?php endif; ?>
                                                                <br>
                                                                <a href="#">                                                                                                                                        <br>
                                                                    <?php echo e($user['email']); ?>

                                                                </a>

                                                            </td>

                                                            <td>
                                                                <?php echo e($user->created_at ?? ''); ?>

                                                            </td>
                                                            <td class="">
                                                                <?php if($user->verified == 1): ?>
                                                                    <i class="fa fa-check"></i>
                                                                <?php else: ?>
                                                                    <i class="fa fa-close"> </i>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->solde_actif ?? ''); ?>

                                                            </td>
                                                        </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                    </div>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>