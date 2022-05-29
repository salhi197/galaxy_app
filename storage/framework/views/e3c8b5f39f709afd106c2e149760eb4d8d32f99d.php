<?php $__env->startSection('content'); ?>

					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('liste des utilisateurs')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('users')); ?></li>
						</ol>

					</div>


                    <div class="row">

                            <div class="card-header">
                                <a class="btn btn-primary text-white" href="<?php echo e(route('user.show.create')); ?>">
                                    <i class="fa fa-plus">

                                    </i>
                                    Ajouter utilisateur
                                </a>

                            </div>
                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Nom Penom</th>
                                                        <th>Email</th>
                                                        <th>telephone</th>
                                                        <th>Balance</th>
                                                        <th>Date Entré</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($user->id ?? ''); ?></td>
                                                            <td>
                                                                <a href="<?php echo e(route('user.detail',['user'=>$user->id])); ?>">
                                                                    <?php echo e($user->name ?? ''); ?>

                                                                </a>
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->email ?? ''); ?>                                                            
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->telephone ?? ''); ?>                                                            
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->solde ?? ''); ?> $
                                                            </td>

                                                            <td>
                                                                <?php echo e($user->created_at ?? ''); ?>

                                                            </td>

                                                            <td >
                                                                <div class="table-action">  


                                                                </div>
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