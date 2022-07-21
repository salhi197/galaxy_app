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
    										<table id="datable-1" class="table card-table table-striped table-bordered text-nowrap w-100">
                                                <thead class="text-primary">
                                                    <tr>
                                                        <th>ID User</th>
                                                        <th>Nom Penom</th>
                                                        <th>Email</th>
                                                        <th><?php echo e(trans('main.password')); ?></th>
                                                        
                                                        <th>telephone</th>
                                                        <th>Balance</th>
                                                        <th>Date Entré</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td>
                                                            <?php echo e($user->id ?? ''); ?>

                                                            <?php if($user->type == 0): ?>
                                                                <span class="badge badge-danger">Déactivé</span>
                                                            <?php else: ?>
                                                                <span class="badge badge-primary">Activé</span>
                                                            <?php endif; ?>

                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(route('user.detail',['user'=>$user->id])); ?>">
                                                                <?php echo e($user->name ?? ''); ?>

                                                                <?php echo e($user->nom ?? ''); ?>

                                                                </a>
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->email ?? ''); ?>                                                            
                                                            </td>
                                                            <td>
                                                                <?php echo e($user->password_text ?? ''); ?>                                                            
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
                                                                <a class="btn btn-primary text-white" href="<?php echo e(route('user.edit',['user'=>$user->id])); ?>">
                                                                        Edit
                                                                    </a>

                                                            <?php if($user->type == 0): ?>
                                                                    <a class="btn btn-success text-white" href="<?php echo e(route('user.ActiverDesactiver',['user'=>$user->id])); ?>">
                                                                        Activer
                                                                    </a>
                                                            <?php else: ?>
                                                                    <a class="btn btn-danger text-white" href="<?php echo e(route('user.ActiverDesactiver',['user'=>$user->id])); ?>">
                                                                        Désactiver
                                                                    </a>

                                                            <?php endif; ?>
                                                                    

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


<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('assets/plugins/datatable/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/plugins/datatable/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/datatable/datatable.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>