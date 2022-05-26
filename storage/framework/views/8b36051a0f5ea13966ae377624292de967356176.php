<?php $__env->startSection('content'); ?>

					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('recharger_comtpe')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>


                    <div class="row">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-plus"></i> Add methode
                                </button>
                            </div>

                            <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                    <tr>
                                                        <th>ID methode</th>
                                                        <th>label</th>
                                                        <th>actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $methodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $methode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($methode->id ?? ''); ?></td>
                                                            <td><?php echo e($methode->nom ?? ''); ?></td>
                                                            <td >
                                                                <div class="table-action">  
                                                                        <a class="btn btn-outline btn-danger text-white text-gradient px-3 mb-0" 
                                                                        href="<?php echo e(route('methode.destroy',['methode'=>$methode->id])); ?>"
                                                                        onclick="return confirm('etes vous sure  ?')" >
                                                                            <i class="far fa-trash-alt me-2"></i>
                                                                            Delete
                                                                        </a>
                                                                        <button data-toggle="modal" data-target="#exampleModaledit<?php echo e($methode->id); ?>" class="btn btn-outline btn-outlinez text-dark px-3 mb-0">
                                                                            Modifer
                                                                        </button>       

                                                                    <div class="modal fade" id="exampleModaledit<?php echo e($methode->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier methode</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <form id="methodeFform" action="<?php echo e(route('methode.update',['methode'=>$methode->id])); ?>" method="post" enctype="multipart/form-data">
                                                                                        <?php echo csrf_field(); ?>
                                                                                        <div class="form-group">
                                                                                            <label class="small mb-1" for="inputFirstName">methode: </label>
                                                                                            <input type="text" value="<?php echo e($methode->nom); ?>" name="nom"  class="form-control"/>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="small mb-1" for="inputFirstName">Réference : </label>
                                                                                            <input type="text" value="<?php echo e($methode->reference); ?>" name="reference"  class="form-control"/>
                                                                                        </div>
                                                                                        <button class="btn btn-primary btn-block" type="submit" id="ajax_methode">Modifier methode</button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

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



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter methode</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
            <form id="methodeFform" action="<?php echo e(route('methode.create')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">methode: </label>
                    <input type="text" name="nom"  class="form-control"/>
                </div>

                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Réference : </label>
                    <input type="text" name="reference"  class="form-control"/>
                </div>




                <button class="btn btn-primary btn-block" type="submit" id="ajax_methode">ajouter methode</button>
            </form>
      </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script>
        $(document).ready(function() {
        	var dynamic_form =  $("#dynamic_form").dynamicForm("#dynamic_form","#plus5", "#minus5", {
		        limit:10,
		        formPrefix : "dynamic_form",
		        normalizeFullForm : false
		    });

		    $("#dynamic_form #minus5").on('click', function(){
		    	var initDynamicId = $(this).closest('#dynamic_form').parent().find("[id^='dynamic_form']").length;
		    	if (initDynamicId === 2) {
		    		$(this).closest('#dynamic_form').next().find('#minus5').hide();
		    	}
		    	$(this).closest('#dynamic_form').remove();
		    });

		    $('#methodeFform').on('submit', function(event){
	        	var values = {};
				$.each($('#methodeFform').serializeArray(), function(i, field) {
				    values[field.name] = field.value;
				});
				console.log(values)
        	})
        });



</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>