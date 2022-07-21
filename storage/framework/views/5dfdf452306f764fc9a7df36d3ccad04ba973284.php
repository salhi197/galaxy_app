<?php 
	use App\Notification;
	if (Auth::check()) {
		$notifications = Notification::where('user',Auth::user()->id)->orderBy('created_at','desc')->get();            
	}
?>
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="In a world that is constantly changing,we are the best and the most reliable partners.you are a person or company Galaxy is the privileged place for great achievements our specilized team focuses on using the best technology to achieve your dreqms and make them a reality." name="description">

		<!--favicon -->
		<link rel="icon" href="<?php echo e(asset('img/logos.ico')); ?>" type="image/x-icon"/>
		<link rel="shortcut icon" href="<?php echo e(asset('img/logos.ico')); ?>" type="image/x-icon"/>
		<!-- TITLE -->
		<title>Galaxy App</title>

		<!-- DASHBOARD CSS -->
		<link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet"/>
		<link href="<?php echo e(asset('assets/css/style-modes.css')); ?>" rel="stylesheet"/>
		<!-- LEFT-MENU CSS -->
		<link href="<?php echo e(asset('assets/css/sidemenu/closed-sidemenu.css')); ?>" rel="stylesheet">
		<!--C3.JS CHARTS PLUGIN -->

		<!-- TABS CSS -->
		<link href="<?php echo e(asset('assets/plugins/tabs/style-2.css')); ?>" rel="stylesheet" type="text/css">

		<!-- PERFECT SCROLL BAR CSS-->
		<link href="<?php echo e(asset('assets/plugins/pscrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet"/>

		<!-- Skin css-->
		<link href="<?php echo e(asset('assets/skins/skins-modes/color22.css')); ?>"  id="theme" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo e(asset('assets/skins/skins-modes/color19.css')); ?>"  id="theme" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo e(asset('css/toastr.css')); ?>" rel="stylesheet"/>
		<link href="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.css')); ?>" rel="stylesheet" />
		<link href="<?php echo e(asset('assets/css/dashboard-dark.css')); ?>" rel="stylesheet">		
		<?php echo $__env->yieldContent('styles'); ?>
	</head>

	<body class="app sidebar-mini dark-mode default-header">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!-- HEADER -->
				<div class="header app-header" style="background-color:#41413f;">
					<div class="container-fluid">
						<div class="d-flex">
						   <a class="header-brand" href="<?php echo e(route('home')); ?>">
								<img src="<?php echo e(asset('img/logos/logo.png')); ?>" class="header-brand-img desktop-logo" />
							   <img src="<?php echo e(asset('img/logos/logo2.png')); ?>" class="header-brand-img mobile-view-logo" height="100px" alt="Galaxy logo">							   
							</a>
							
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
							    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"></a>
								<div class="header-brand-img desktop-logo">
								</div>

								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="fa fa-usd"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 ">
												<?php echo e(trans('main.balance')); ?>: <?php echo e(Auth::user()->solde ?? ''); ?>$												</h5>
											</div>
										</div>
									</div>
								</div>


								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="fa fa-money"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 ">
												<?php echo e(trans('main.solde_actif')); ?> : <?php echo e(Auth::user()->solde_actif ?? ''); ?>$
												</h5>
											</div>
										</div>
									</div>
								</div>

								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="fe fe-pie-chart "></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 ">
												<?php echo e(trans('main.monthly_revenue')); ?> : <?php echo e(Auth::user()->solde_retrait ?? ''); ?>$												</h5>
											</div>
										</div>
									</div>
								</div>

							
								<div class="dropdown d-md-flex">
								</div>
								<?php if(auth()->guard()->check()): ?>
								<div class="dropdown d-md-flex notifications">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="pulse bg-warning"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 text-dark">Notifications</h5>
												<span class="badge badge-danger ml-auto  brround"><?php echo e(count($notifications)); ?></span>
											</div>
										</div>
										<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg bg-danger-transparent">
													<i class="fa fa-cogs text-danger"></i>
												</div>
												<div>
													<strong> Server Rebooted.</strong>
													<div class="small text-muted">45 mintues ago</div>
												</div>
											</a>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<div class="dropdown-divider mb-0"></div>
										<div class=" text-center p-2">
											<!-- <a href="<?php echo e(route('notification.index')); ?>" class="text-dark pt-0">View All Notifications</a> -->
										</div>
									</div>
								</div>	
								<?php endif; ?>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										<?php if(auth()->guard()->check()): ?>
											<?php if(strlen(Auth::user()->photo)>0): ?>
											<span><img src="<?php echo e(asset('storage/app/'.Auth::user()->photo)); ?>" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
											<?php else: ?>
											<span><img src="<?php echo e(asset('assets/images/users/male/32.png')); ?>" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
											<?php endif; ?>
										<?php endif; ?>
										<?php if(auth()->guard('admin')->check()): ?>
											<span><img src="<?php echo e(asset('assets/images/users/male/32.png')); ?>" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
										<?php endif; ?>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											<?php if(auth()->guard('admin')->check()): ?>
											<h5 class="text-dark mb-1">Admin</h5>
											<?php endif; ?>
											<?php if(auth()->guard()->check()): ?>
											<h5 class="text-dark mb-1"><?php echo e(Auth::user()->nom ?? ''); ?> <?php echo e(Auth::user()->name ?? ''); ?>   </h5>
											<?php endif; ?>

											
											<small class="text-muted">
												<?php if(auth()->guard()->check()): ?>
													<?php echo e(Auth::user()->rangName()); ?>

												<?php endif; ?>
											</small>
										</div>
										<div class="drop-heading  border-bottom row text-muted row">
											<?php if(auth()->guard()->check()): ?>
											<div class="row align-center">
												<div class="col-4">
													<a href="<?php echo e(route('lang',['lang'=>'fr'])); ?>">
														<img src="<?php echo e(asset('assets/images/flags/fr.svg')); ?>" class="w-5 h-5  d-block"/>
													</a>
												</div>

												<div class="col-4">
													<a href="<?php echo e(route('lang',['lang'=>'en'])); ?>">
														<img src="<?php echo e(asset('assets/images/flags/us.svg')); ?>" class="w-5 h-5 d-block"/>
													</a>
												</div>

												<div class="col-4">
													<a href="<?php echo e(route('lang',['lang'=>'ar'])); ?>">
														<img src="<?php echo e(asset('assets/images/flags/sa.svg')); ?>" class="w-5 h-5  d-block"/>
													</a>
												</div>
											</div>
											<?php endif; ?>
										</div>
										

										<a class="dropdown-item" href="<?php echo e(route('user.profile')); ?>"><i class="mdi mdi-account-outline mr-2"></i> <span>Profile</span></a>
										<!-- <a class="dropdown-item" href="<?php echo e(route('setting')); ?>"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a> -->
										<a class="dropdown-item" href="<?php echo e(route('operation.recharger.index.actif')); ?>"><i class="fe fe-list mr-2"></i> <span>Actif</span></a>
										<a class="dropdown-item" href="<?php echo e(route('support')); ?>"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
										<a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Déconexion</span></a>
										<a class="dropdown-item" >
											<?php echo e(trans('main.mode_sombre')); ?>

											<div class="material-switch pull-right">
												<input id="someSwitchOptionDefault" onchange="DarkMode()" name="someSwitchOption001" type="checkbox">
												<label for="someSwitchOptionDefault" class="label-default"></label>
											</div>
										</a>
										<a class="dropdown-item" >
											<?php echo e(trans('main.mode_claire')); ?>

											<div class="material-switch pull-right">
												<input id="someSwitchOptionDefault2" onchange="LightMode()" name="someSwitchOption002" type="checkbox">
												<label for="someSwitchOptionDefault2" class="label-default"></label>
											</div>
										</a>

									</div>
								</div>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										<span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											<?php if(auth()->guard('admin')->check()): ?>
											<h5 class="text-dark mb-1">Admin</h5>
											<?php endif; ?>
											<?php if(auth()->guard()->check()): ?>
											<h5 class="text-dark mb-1"><?php echo e(Auth::user()->nom ?? ''); ?> <?php echo e(Auth::user()->name ?? ''); ?>   </h5>
											<?php endif; ?>

											<small class="text-muted">Investor</small>
										</div>
										<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
										<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
										<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
										<a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<!-- HEADER END -->

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar left-menu2">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body text-center">
							<br>
							<div class="user-pic">
										<?php if(auth()->guard()->check()): ?>
											<?php if(strlen(Auth::user()->photo)>0): ?>
											<img src="<?php echo e(asset('storage/app/'.Auth::user()->photo)); ?>" alt="user-img" class="avatar avatar-lg brround">
											<?php else: ?>
											<img src="<?php echo e(asset('assets/images/users/male/32.png')); ?>" alt="user-img" class="avatar avatar-lg brround">
											<?php endif; ?>


										<?php endif; ?>

							</div>
							

							<div class="user-info">
								<h2><?php echo e(Auth::user()->name ?? ''); ?> <?php echo e(Auth::user()->nom ?? ''); ?>    </h2>
							
								<?php if(auth()->guard()->check()): ?>
								<img src="<?php echo e(asset('assets/images/flags/'.strtolower(Auth::user()->pays).'.svg')); ?>" class="w-5 h-5 text-center mx-auto d-block"/>
								<?php endif; ?>
								<!-- <span><?php echo e(Auth::user()->telephone ?? 'Investor'); ?><span> -->
							</div>
							<br>
							<div class="sidebar-navs text-center">
								<?php if(auth()->guard()->check()): ?>
								<ul class="nav nav-pills nav-pills-circle text-center"
								style="justify-content: center;"
								id="tabs_2" role="tablist">
									<li class="nav-item">
										<a class="nav-link border text-center m-2">
											<i class="fa fa-facebook" style="color:blue;"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link border  m-2">
											<i class="fa fa-telegram"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link border text-center m-2">
											<i class="fa fa-linkedin" style="color:#0072b1;"></i>
										</a>
									</li>

								</ul>
								<?php endif; ?>
							</div>

						</div>
					</div>
					<ul class="side-menu">
						<?php if(auth()->guard('admin')->check()): ?>
						<li>
							<a class="side-menu__item" href="<?php echo e(route('admin')); ?>"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label"><?php echo e(trans('Admin')); ?></span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label"><?php echo e(trans('Utilisateur')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('user.index')); ?>" class="slide-item"><?php echo e(trans('Tous les utilisateur')); ?> </a>
								</li>

								<li>
									<a href="<?php echo e(route('user.actif')); ?>" class="slide-item"><?php echo e(trans('Comptes')); ?> </a>
								</li>

								
								<li>
									<a href="<?php echo e(route('user.pending')); ?>" class="slide-item"><?php echo e(trans('En Attente de vérification')); ?> </a>
								</li>

							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label"><?php echo e(trans('main.finance')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('operation.recharger.index')); ?>" class="slide-item"><?php echo e(trans('main.rechargements')); ?> </a>
								</li>
								<li>
									<a href="<?php echo e(route('operation.actif.index')); ?>" class="slide-item"><?php echo e(trans('main.actif')); ?> </a>
								</li>

								<li>
									<a href="<?php echo e(route('operation.retrait.index')); ?>" class="slide-item"><?php echo e(trans('main.retrait')); ?> </a>
								</li>
								<li>
									<a href="<?php echo e(route('operation.index')); ?>" class="slide-item"><?php echo e(trans('main.operations')); ?> </a>
								</li>


							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-list"></i><span class="side-menu__label">Payment</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('payment.rechargements.month')); ?>" class="slide-item">Payments Ce Mois </a>
								</li>

								<li>
									<a href="<?php echo e(route('payment.rechargements')); ?>" class="slide-item">Paiment Prochain Payments </a>
								</li>
								<li>
									<a href="<?php echo e(route('payment.rechargements.paye')); ?>" class="slide-item">Paiments </a>
								</li>
							</ul>
						</li>

						<!-- <li>
							<a class="side-menu__item" href="<?php echo e(route('payment.rechargements')); ?>"><i class="side-menu__icon fa fa-cash"></i><span class="side-menu__label"><?php echo e(trans('paiements')); ?></span></a>
						</li> -->
						<li>
							<a class="side-menu__item" href="<?php echo e(route('operation.index')); ?>"><i class="side-menu__icon fe fe-list"></i><span class="side-menu__label"><?php echo e(trans('Transactions')); ?></span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label"><?php echo e(trans('main.setting')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('methode.index')); ?>" class="slide-item"><?php echo e(trans('methode de paiment')); ?> </a>
								</li>	

							</ul>
						</li>


						<?php endif; ?>

						<?php if(auth()->guard()->check()): ?>
						<li>
							<a class="side-menu__item" href="<?php echo e(route('home')); ?>"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label"><?php echo e(trans('main.dashboard')); ?></span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label"><?php echo e(trans('main.finance')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('operation.recharger.show')); ?>" class="slide-item"><?php echo e(trans('main.recharger')); ?> </a>
								</li>
								<li>
									<a href="<?php echo e(route('operation.retirer.show')); ?>" class="slide-item"><?php echo e(trans('main.retirer')); ?> </a>
								</li>

								<li>
									<a href="<?php echo e(route('operation.activer.show')); ?>" class="slide-item"><?php echo e(trans('main.actif')); ?> </a>
								</li>

								<li>
									<a href="<?php echo e(route('operation.transferer.show')); ?>" class="slide-item"><?php echo e(trans('main.transferer')); ?> </a>
								</li>
								<li>
									<a href="<?php echo e(route('operation.index')); ?>" class="slide-item"><?php echo e(trans('main.operations')); ?> </a>
								</li>
								<li>
									<a href="<?php echo e(route('operation.recharger.index')); ?>" class="slide-item"><?php echo e(trans('main.rechargements')); ?> </a>
								</li>
								
								<li>
									<a href="<?php echo e(route('user.methodes')); ?>" class="slide-item"><?php echo e(trans('main.methode_paiment')); ?> </a>
								</li>
							</ul>
						</li>


						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label"><?php echo e(trans('main.partenaires')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('user.partenaire')); ?>" class="slide-item"><?php echo e(trans('main.partenaires')); ?> </a>
								</li>	
								
							</ul>
						</li>


						<li>
							<a class="side-menu__item" href="<?php echo e(route('operation.actif.index')); ?>"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label"><?php echo e(trans('main.actif')); ?></span></a>
						</li>
						<li>
							<a class="side-menu__item" href="<?php echo e(route('user.profile')); ?>"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label"><?php echo e(trans('main.profile')); ?></span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label"><?php echo e(trans('main.acedemie')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('comingsoon')); ?>" class="slide-item"><?php echo e(trans('main.video')); ?> </a>
								</li>	
								<li>
									<a href="<?php echo e(route('comingsoon')); ?>" class="slide-item"><?php echo e(trans('main.livre')); ?> </a>
								</li>	
								<li>
									<a href="<?php echo e(route('comingsoon')); ?>" class="slide-item"><?php echo e(trans('main.documentation')); ?> </a>
								</li>	
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="<?php echo e(route('faq')); ?>"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label"><?php echo e(trans('main.faq')); ?></span></a>
						</li>
						<li>
							<a class="side-menu__item" href="<?php echo e(route('support')); ?>"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label"><?php echo e(trans('main.support')); ?></span></a>
						</li>
						<?php endif; ?>

						<li>
							<a class="side-menu__item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="side-menu__icon fe fe-lock"></i><span class="side-menu__label"><?php echo e(trans('main.deconnexion')); ?></span></a>
						</li>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo e(csrf_field()); ?>

						</form>
                        
                    </ul>
				</aside>

				<!-- CONTAINER -->
				<div class="app-content">
					<?php if(auth()->guard()->check()): ?>
						<?php if(Auth::user()->email_verified==0): ?>
						<div class="page-header">
							<div class="col-md-12">
								<div class="alert alert-success" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<?php echo e(trans('main.email_confirm_msg')); ?>

								</div>
							</div>
						</div>
						<?php endif; ?>

					<?php endif; ?>
					<br>

                    <?php echo $__env->yieldContent('content'); ?>
					<!-- PAGE-HEADER -->

				</div>
				<!-- CONTAINER END -->
            </div>

			<!-- SIDE-BAR -->
			<!-- SIDE-BAR CLOSED -->

			<!-- FOOTER -->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 text-center">
							Copyright © <?php echo e(date('Y')); ?> | Galaxy Investissement  
							<span id="date-part"></span>
						</div>
						<div class="col-md-6 col-sm-6 text-center">
							<a href="https://t.me/GALAXY_Invest_Support" target="_blank"><i class="fa fa-telegram" style="font-size:20px;"></i></a>
						</div>

					</div>
				</div>
			</footer>
			<!-- FOOTER END -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

		<!-- JQUERY SCRIPTS -->
		<script src="<?php echo e(asset('assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src="<?php echo e(asset('assets/js/vendors/bootstrap.bundle.min.js')); ?>"></script>

		<!-- SPARKLINE -->
		<script src="<?php echo e(asset('assets/js/vendors/jquery.sparkline.min.js')); ?>"></script>

		<!-- CHART-CIRCLE -->
		<script src="<?php echo e(asset('assets/js/vendors/circle-progress.min.js')); ?>"></script>

		<!-- RATING STAR -->
		<script src="<?php echo e(asset('assets/plugins/rating/jquery.rating-stars.js')); ?>"></script>

		<!-- SELECT2 JS -->
		<!-- <script src="<?php echo e(asset('assets/plugins/select2/select2.full.min.js')); ?>"></script> -->
		<!-- <script src="<?php echo e(asset('assets/js/select2.js')); ?>"></script> -->

		<script src="../../assets/plugins/charts-c3/d3.v5.min.js"></script>
		<script src="../../assets/plugins/charts-c3/c3-chart.js"></script>


		<!-- CHARTJS CHART -->

		<!-- PIETY CHART -->
		<!-- LEFT-MENU -->
		<script src="<?php echo e(asset('assets/plugins/sidemenu-toggle/sidemenu-toggle.js')); ?>"></script>

		<!-- PERFECT SCROLL BAR JS-->

		<!-- SIDEBAR JS -->
		<script src="<?php echo e(asset('assets/plugins/sidebar/sidebar.js')); ?>"></script>

		<!-- APEX-CHARTS JS -->

		<!-- INDEX-SCRIPTS  -->
		<script src="<?php echo e(asset('assets/js/index.js')); ?>"></script>

		
		<!-- CUSTOM JS -->
		<script src="<?php echo e(asset('js/chart.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/moment.min.js')); ?>"></script>
				
		<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
        <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>	
		<script src="<?php echo e(asset('assets/plugins/sweet-alert/sweetalert.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/sweet-alert.js')); ?>"></script>

        <script>
        <?php if(session('error')): ?>
        	$(function(){
                toastr.error('<?php echo e(Session::get("error")); ?>')
            })

        <?php endif; ?>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(Session::get("success")); ?>')
        <?php endif; ?>
            

        </script>

	<script>	
		$(document).ready(function() {

			var theme = localStorage.getItem('theme');
			if(theme==null){
				localStorage.setItem('theme', 'dark');
			}
			if(theme=="dark"){
				$('#someSwitchOptionDefault').prop( "checked", true );
				$('#someSwitchOptionDefault2').prop( "checked", false );
				$("body").removeClass("light-mode");
				$("body").addClass("dark-mode");
			}
			if(theme=="light"){

				$('#someSwitchOptionDefault2').prop( "checked", true );
				$('#someSwitchOptionDefault').prop( "checked", false );

				$("body").addClass("light-mode");
				$("body").removeClass("dark-mode");
			}
			var interval = setInterval(function() {
				var momentNow = moment();
				$('#date-part').html(moment().format('MMMM Do YYYY, h:mm:ss a'));
				$('#time-part').html(momentNow.format('A hh:mm:ss'));
			}, 100);
		});

		function DarkMode()
		{
			localStorage.setItem('theme', 'dark');
			$("body").addClass("dark-mode");
			window.location.reload();

		}
		function LightMode()
		{
			localStorage.setItem('theme', 'light');
			$("body").removeClass("dark-mode");
			window.location.reload();

		}


	</script>
	<?php echo $__env->yieldContent('scripts'); ?>
	</body>
</html>