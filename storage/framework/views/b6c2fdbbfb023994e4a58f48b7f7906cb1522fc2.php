<?php $__env->startSection('content'); ?>


<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('transferer_comtpe')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('dashboard')); ?></li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->



                    <div class="row">
						<div class="col-xl-12 col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Pour Compléter le transfert , Vous devez Vérfier votre Identié , Un code a été envoyé à votre compte :</h3>
								</div>
								<div class="card-body">

                                    <form action="<?php echo e(route('operation.transferer.confirmer.action',['operation'=>$operation->id])); ?>" method="post" id="transfer_form">

										<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group overflow-hidden">
                                                    <label> Entrer Le Code envoyer à votre Email :</label>
                                                    <input  required name="code_confirmation" class="form-control" id="code_confirmation" min="0"/>
                                                </div>
                                            </div>

	    								</div>



										<input type="submit" class="btn btn-primary btn-block" value="Confirmer" >
                                    </form>


								</div>
							</div>
						</div>
					</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
$( document ).ready(function() {
		$("#confirm").on("click", function(e) {
		swal({
			title: "Etes Vous Sure ?",
			text: "Confirmer La demande de transfert ",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: '#DD6B55',
			confirmButtonText: 'Oui',
			cancelButtonText: "Annuler",
			closeOnConfirm: false,
			closeOnCancel: false		
		},
		function(isConfirm){
			if (isConfirm){
				console.log(document.getElementById('transfer_form'))
				document.getElementById('transfer_form').submit();
				swal.close()
					
			 } else {
			   swal("Cancelled", "Your imaginary file is safe :)", "error");
				  e.preventDefault();
			 }
		});		 
	});
})



</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>