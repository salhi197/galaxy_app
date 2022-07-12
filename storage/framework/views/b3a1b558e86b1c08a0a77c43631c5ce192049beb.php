<?php $__env->startSection('content'); ?>


					<div class="page-header">
						<h4 class="page-title"><?php echo e(trans('main.dashboard')); ?></h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">GalaxyApp</a></li>
							<li class="breadcrumb-item active" aria-current="page">Acceuil</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->

                    <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="row">
									<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-3"> 
											<?php echo e(trans('main.votre_actif')); ?>

											</h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#f5334f">
												<div class="chart-circle-value text-center ">
													<h6 class="mb-0">
													<i class="fa fa-line-chart" style="font-size:20px;">
													</i>													
													</h6>
											</div>
											</div>
											<h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark"><?php echo e(Auth::user()->solde_actif); ?> $</h2>
											<p class="mb-3 text-muted"> </p>
										</div>
									</div>

									
									<div class="col-xl-3 col-lg-6 col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-3">
											<?php echo e(trans('main.benefice_total')); ?>

											</h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#564ec1">
												<div class="chart-circle-value text-center "><h6 class="mb-0">
													<i class="fa fa-money" style="font-size:20px;">

													</i>
												</h6></div>
											</div>
											<h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark">$0</h2>
											<p class="mb-3 text-muted"> </p>
										</div>
									</div>

									<!-- <div class="col-xl-3 col-lg-6  col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-3">Votre rang <?php echo e(Auth::user()->rang() ?? ""); ?> </h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#f7b731">
												<div class="chart-circle-value text-center "><h6 class="mb-0">
													<i class="fa fa-tasks" style="font-size:20px;"></i>													
												</h6></div>
											</div>
											<h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark"><?php echo e($soldeTotal*100/10000); ?>%</h2>
											<p class="mb-3 text-muted"> Il Vous reste : <?php echo e(10000-$soldeTotal); ?>$</p>
										</div>
									</div> -->
									<div class="col-xl-3 col-lg-6  col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-3">
											<?php echo e(trans('main.votre_balance')); ?>												
											</h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#f7b731">
												<div class="chart-circle-value text-center "><h6 class="mb-0">
													<i class="fa fa-tasks" style="font-size:20px;"></i>													
												</h6></div>
											</div>
											<h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark"><?php echo e(Auth::user()->solde); ?> $  </h2>
										</div>
									</div>

									<div class="col-xl-3 col-lg-6  col-sm-6 border-right">
										<div class="card-body text-center">
											<h6 class="mb-3">
											<?php echo e(trans('main.votre_partenaires')); ?>

											</h6>
											<div class="chart-circle chart-circle-md" data-value="100" data-thickness="10" data-color="#04cad0">
												<div class="chart-circle-value text-center "><h6 class="mb-0">

												<i class="fa fa-users" style="font-size:20px;">
												</i>													

												</h6></div>
											</div>
											<h2 class="mb-1 mt-3 display-4 font-weight-semibold text-dark"> <?php echo e(count(Auth::user()->partenaires())); ?> </h2>
											<p class="mb-3 text-muted"> </p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>


                    <div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">
										<?php echo e(trans('main.ordinateur_de_profit')); ?>

									</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-8">
                                            <div class="form-group overflow-hidden">
												<label><?php echo e(trans('main.periode_accumulation')); ?>:</label>
												<select class="form-control select2 w-100" id="duree" >
													<option value="1" selected="selected">1 Mois</option>
													<option value="3">3 Mois</option>
													<option value="6">6 Mois</option>
													<option value="12">12 Mois</option>
												</select>
											</div>
										</div>
									</div>

                                    <br>
									
									<div class="row">
										<div class="col-md-8">
                                            <div class="form-group overflow-hidden">
												<label><?php echo e(trans('main.montant_dinnvestissement')); ?> : </label>
												<input name="montant" class="form-control" min="500" id="montant" min="0"/>
											</div>                                              
										</div>
									</div>
									<button class="btn btn-primary"><?php echo e(trans('main.calculer')); ?></button>

								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">
									<?php echo e(trans('main.rentabilite')); ?>

									</h3>
								</div>
								<div class="card-body">
                                    <ul class="list-group list-group-flush">
										<li class="list-group-item">Bénéfice par 1 Mois (min/max) :<span id="gain1min"></span> / <span id="gain1max"></span> $ </li>
										<li class="list-group-item">Bénéfice par 3 Mois (min/max) :<span id="gain3min"></span> / <span id="gain3max"></span> $ </li>
                                        <li class="list-group-item">Bénéfice par 6 Mois (min/max) :<span id="gain6min"></span> / <span id="gain6max"></span> $ </li>
										<li class="list-group-item">Bénéfice par 12 Mois (min/max) :<span id="gain12min"></span> / <span id="gain12max"></span> $ </li>
                                    </ul>                                    
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Lien De Réference</h3>
								</div>
								<div class="card-body">
									<a href="#" id="mylink">

									https://app.mygalaxy.world/register?code=<?php echo e(Auth::user()->code); ?>

									</a>
									
									<button onclick="myFunction()" class="btn btn-primary btn-sm">Copy text</button>

								</div>
							</div>

						</div>
					</div>


					<!-- <div class="row">
						<div class="col-xl-12 col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Graphe de Partenaire</h3>
								</div>
								<div class="card-body">
									<div id="map"></div>
								</div>
							</div>
						</div>
					</div> -->

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title"><?php echo e(trans('main.partenaire_par_region')); ?></div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-6">
											<div id="world-map-markers" class="worldh h-270" ></div>
										</div>
										<div class="col-lg-6">
											<div class="table-responsive">
												<table class="table border table-bordered text-nowrap border-0 mb-0">
													<thead>
														<tr>
															<th>Country</th>
															<th scope="col">Regions</th>
															<th scope="col">Nomrbe </th>
														</tr>
													</thead>
													<tbody>
														<?php $__currentLoopData = $partenaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partenaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<tr>
																<td><img src="<?php echo e(asset('assets/images/flags/'.strtolower($partenaire->pays).'.svg')); ?>" class="w-5 h-5 text-center mx-auto d-block border p-0" alt=""></td>
																<td><?php echo e($partenaire->pays); ?></td>
																<td><?php echo e($partenaire->nbr); ?></td>
															</tr>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Graphe des Partenaires</h3>
								</div>
								<div class="card-body">
									<canvas id="myChart" width="600" height="250"  ></canvas>	
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-md-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><?php echo e(trans('main.votre_rang')); ?></h3>
								</div>
								<div class="card-body" width="200" height="250">									
									<h6 class="mb-3 text-center"><?php echo e(trans('main.votre_rang')); ?> <?php echo e(Auth::user()->rang() ?? ""); ?> </h6>
									<div class="chart-circle chart-circle-md" data-value="<?php echo e(($soldeTotal*100/10000)/100); ?>" data-thickness="10" data-color="#04cad0">
										<div class="chart-circle-value text-center ">
											<h6 class="mb-0"><i class="fa fa-tasks" style="font-size:20px;"></i></h6>
										</div>
									</div>
									<h2 class="text-center mb-1 mt-3  display-4 font-weight-semibold text-dark"><?php echo e($soldeTotal*100/10000); ?>%</h2>
									<p  class="text-center mb-3 text-muted"> <?php echo e(trans('main.reste')); ?> : <?php echo e(10000-$soldeTotal); ?>$</p>
									
								</div>
							</div>
						</div>
						

					</div>


					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title"><?php echo e(trans('main.liste_partenaires')); ?> : </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="datable-1" class="table  card-table table-striped table-bordered text-nowrap w-100">
											<thead >
												<tr>
													<th>ID <?php echo e(trans('main.user')); ?></th>
													<th><?php echo e(trans('main.user')); ?></th>
													<th><?php echo e(trans('main.date_entrer')); ?></th>
													<th><?php echo e(trans('main.solde_actif')); ?></th>
												</tr>
											</thead>
											<tbody>
												<?php $__currentLoopData = $mesPartenaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partenaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td>
														<?php echo e($partenaire->id); ?>

													</td>
													<td>
													<?php echo e($partenaire->name); ?> 
													 
 													<?php echo e($partenaire->nom); ?>

															
													</td>
													<td>
														<?php echo e($partenaire->created_at->format('Y-m-d')); ?><br>	
													</td>													
													<td class="text-center"><?php echo e($partenaire->solde_actif); ?> $ </td>

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



<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/leaflet.css')); ?>"  />
<script src="<?php echo e(asset('js/leaflet.js')); ?>"></script>
<style>#map { height: 480px; }	</style>
<!-- <link href="../../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" /> -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script src="<?php echo e(asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/jvectormap/gdp-data.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/jvectormap.js')); ?>"></script>

<script>



var options = {
  type: 'line',
  data: {
	labels: ["Jan", "Fev", "Mars", "Avril", "Mail", "Juin","Juillet","Aout","Septembre","Octobre","Nov","Dec"],
	datasets: [
			{
				label: 'Nombre Des Partenaires Par Mois',
				data: [
					<?php $__currentLoopData = $userArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php echo e($u); ?>,
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			  
				],
				borderColor: 'rgb(75, 192, 192)',		
				borderWidth: 5
			}
		]
  },
  options: {
	animation :true,
  	scales: {
		y: {
                suggestedMin: 0,
                suggestedMax: 20
        }
    }
  }
}

var ctx = document.getElementById('myChart').getContext('2d');
new Chart(ctx, options);

$('#duree ,#montant').on('change',function(){

	var selectedValue = $("#duree").val();
	var montant = $('#montant').val()
	console.log(montant,selectedValue)
	if(montant!=0){
		console.log("sa")
		if(selectedValue==1) {
			var gain1max = 0.2*montant 						
			var gain1min = 0.16*montant

			var gain3max = gain1max*3 						
			var gain3min = gain1min*3

			var gain6max = gain1max*6 						
			var gain6min = gain1min*6


			var gain12max = 2.4*montant 						
			var gain12min  = 1.92*montant
		}

		if(selectedValue==3){
			var gain1max = 0.2*montant 						
			var gain1min = 0.16*montant  						
			
			var gain3max = gain1max*3 						
			var gain3min = gain1min*3

			var gain6max = gain1max*6 						
			var gain6min = gain1min*6

			
			var gain12max = 2.4*montant 						
			var gain12min  = 1.92*montant
			console.log(gain1max,gain1min,gain12max,gain12min)

		}

		if(selectedValue==6){
			var gain1max = 0.2*montant 						
			var gain1min = 0.16*montant  	

			var gain3max = gain1max*3 						
			var gain3min = gain1min*3

			var gain6max = gain1max*6 						
			var gain6min = gain1min*6
			
			var gain12max = 2.4*montant 						
			var gain12min  = 1.92*montant
		}
		if(selectedValue==12){
			var gain1max = 0.2*montant 						
			var gain1min = 0.16*montant  	
			

			var gain3max = gain1max*3 						
			var gain3min = gain1min*3

			var gain6max = gain1max*6 						
			var gain6min = gain1min*6
			

			var gain12max = 2.4*montant 						
			var gain12min  = 1.92*montant
		}
		$('#gain1min').html(gain1min)
		$('#gain1max').html(gain1max)		

		$('#gain3min').html(gain3min)
		$('#gain3max').html(gain3max)		

		$('#gain6min').html(gain6min)
		$('#gain6max').html(gain6max)		

		$('#gain12min').html(gain12min)
		$('#gain12max').html(gain12max)

	}
		
})
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("mylink");

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.text);
  
  /* Alert the copied text */
  toastr.success('Lien Copié')
}




</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>