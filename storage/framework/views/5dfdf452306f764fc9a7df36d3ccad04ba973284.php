<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin dashboard template, admin panel template, bootstrap 4 admin template, bootstrap 4 dashboard, bootstrap admin, bootstrap admin panel, admin template, bootstrap admin template, dashboard template, bootstrap admin template, premium admin templates, html admin template, ecommerce dashboard, admin panel template, bootstrap admin theme, bootstrap admin panel"  />

		<!--favicon -->
		<link rel="icon" href="<?php echo e(asset('assets/images/brand/favicon.ico')); ?>" type="image/x-icon"/>
		<link rel="shortcut icon" href="<?php echo e(asset('assets/images/brand/favicon.ico')); ?>" type="image/x-icon"/>

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

	</head>

	<body class="app sidebar-mini default-header">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="<?php echo e(asset('assets/images/svgs/loader.svg')); ?>" class="loader-img" alt="Loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!-- HEADER -->
				<div class="header app-header">
					<div class="container-fluid">
						<div class="d-flex">
						   <a class="header-brand" href="/home" class="text-white">
                                <img src="<?php echo e(asset('logo-galaxy.png')); ?>" width="40px"/>
							</a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
							    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="fa fa-search"></i></a>
								<div class="text-white " style="font-size:20px;padding:8px;">
										<p id="date-part">
										
										</p>
								</div>
								<div class="text-white " style="font-size:20px;padding:8px;">
										<p id="time-part"></p>
								</div>
								<div class="dropdown d-md-flex notifications"></div>
								<div class="">
									<h3 class="breadcrumb-item text-white" style="padding:15px;">
										<?php echo e(Auth::user()->solde ?? ''); ?> $
									</h3>
								</div><!-- NOTIFICATIONS -->

								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										<span><img src="<?php echo e(asset('assets/images/users/male/32.jpg')); ?>" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											<h5 class="text-dark mb-1"><?php echo e(Auth::user()->name ?? ''); ?></h5>
											<small class="text-muted">Investor</small>

										</div>
										<a class="dropdown-item" href="#"><i class="mdi mdi-account-outline mr-2"></i> <span>profile</span></a>
										<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
										<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
										<a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Déconnexion</span></a>
									</div>
								</div><!-- SIDE-MENU -->
								<div class="sidebar-link">
									<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-align-right" ></i>
									</a>
								</div><!-- FULL-SCREEN -->
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
							<div class="user-pic">
								<img src="<?php echo e(asset('assets/images/users/male/32.jpg')); ?>" alt="user-img" class="avatar avatar-lg brround">
							</div>
							<div class="user-info">
								<h2><?php echo e(Auth::user()->name ?? ''); ?></h2>
								<!-- <span><?php echo e(Auth::user()->telephone ?? 'Investor'); ?><span> -->
								<?php if(auth()->guard()->check()): ?>
								<img width="20px" class="flag-img" src="<?php echo e(asset('flags/1x1/'.Auth::user()->pays.'.svg')); ?>" alt="Flag of Uruguay">
								<?php endif; ?>

							</div>
							<div class="sidebar-navs mt-2">
								<ul class="nav nav-pills nav-pills-circle" id="tabs_3" role="tablist">
								</ul>
							</div>							
						</div>
					</div>
					<ul class="side-menu">
						<li class="border-0"><h3>Personal</h3><li>
						<?php if(auth()->guard('admin')->check()): ?>
							<li>
								<a class="side-menu__item" href="<?php echo e(route('user.index')); ?>"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label"><?php echo e(trans('liste utilisateurs')); ?></span></a>
							</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label"><?php echo e(trans('finance')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('operation.recharger.index')); ?>" class="slide-item"><?php echo e(trans('rechargements')); ?> </a>
								</li>
								<li>
									<a href="<?php echo e(route('operation.retrait.index')); ?>" class="slide-item"><?php echo e(trans('retrait')); ?> </a>
								</li>


							</ul>
						</li>

						<?php endif; ?>

						<?php if(auth()->guard()->check()): ?>
						<li>
							<a class="side-menu__item" href="<?php echo e(route('home')); ?>"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label"><?php echo e(trans('acceuil')); ?></span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label"><?php echo e(trans('finance')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('operation.recharger.show')); ?>" class="slide-item"><?php echo e(trans('recharger')); ?> </a>
								</li>
								<li>
									<a href="<?php echo e(route('operation.retirer.show')); ?>" class="slide-item"><?php echo e(trans('retirer')); ?> </a>
								</li>

								<li>
									<a href="<?php echo e(route('operation.transferer.show')); ?>" class="slide-item"><?php echo e(trans('transfert')); ?> </a>
								</li>
								<li>
									<a href="<?php echo e(route('operation.index')); ?>" class="slide-item"><?php echo e(trans('opérations')); ?> </a>
								</li>

							</ul>
						</li>


						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label"><?php echo e(trans('partenaires')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('user.partenaire')); ?>" class="slide-item"><?php echo e(trans('partenaires')); ?> </a>
								</li>	

							</ul>
						</li>


						<li>
							<a class="side-menu__item" href="<?php echo e(route('faq')); ?>"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label"><?php echo e(trans('Faq')); ?></span></a>
						</li>
						<li>
							<a class="side-menu__item" href="<?php echo e(route('operation.recharger.index.actif')); ?>"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label"><?php echo e(trans('actif')); ?></span></a>
						</li>
						<li>
							<a class="side-menu__item" href="<?php echo e(route('user.profile')); ?>"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label"><?php echo e(trans('profile')); ?></span></a>
						</li>

						<!-- <li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label"><?php echo e(trans('setting')); ?></span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo e(route('methode.index')); ?>" class="slide-item"><?php echo e(trans('methode de paiment')); ?> </a>
								</li>	

							</ul>
						</li> -->



						<li>
							<a class="side-menu__item" href="<?php echo e(route('home')); ?>"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label"><?php echo e(trans('support')); ?></span></a>
						</li>
						<?php endif; ?>

						<li>
							<a class="side-menu__item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="side-menu__icon fe fe-door"></i><span class="side-menu__label"><?php echo e(trans('Déconnexion')); ?></span></a>
						</li>

						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo e(csrf_field()); ?>

						</form>
                        
                    </ul>
				</aside>

				<!-- CONTAINER -->
				<div class="app-content">
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
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © <?php echo e(date('Y')); ?> <a href="#">#</a>. Designed by 
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
		<script src="<?php echo e(asset('assets/plugins/select2/select2.full.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/select2.js')); ?>"></script>

		<!-- CHARTJS CHART -->
		<script src="<?php echo e(asset('assets/plugins/chart/Chart.bundle.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/chart/utils.js')); ?>"></script>

		<!-- PIETY CHART -->
		<script src="<?php echo e(asset('assets/plugins/peitychart/jquery.peity.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/peitychart/peitychart.init.js')); ?>"></script>

		<!-- LEFT-MENU -->
		<script src="<?php echo e(asset('assets/plugins/sidemenu-toggle/sidemenu-toggle.js')); ?>"></script>

		<!-- PERFECT SCROLL BAR JS-->
		<script src="<?php echo e(asset('assets/plugins/pscrollbar/perfect-scrollbar.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/pscrollbar/pscroll-leftmenu.js')); ?>"></script>

		<!-- SIDEBAR JS -->
		<script src="<?php echo e(asset('assets/plugins/sidebar/sidebar.js')); ?>"></script>

		<!-- APEX-CHARTS JS -->
		<script src="<?php echo e(asset('assets/plugins/apexcharts/apexcharts.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/apexcharts/irregular-data-series.js')); ?>"></script>

		<!-- INDEX-SCRIPTS  -->
		<script src="<?php echo e(asset('assets/js/index.js')); ?>"></script>

		
		<!-- CUSTOM JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
		<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
<script>
$(document).ready(function() {
    var interval = setInterval(function() {
        var momentNow = moment();
        $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                            + momentNow.format('dddd')
                             .substring(0,3).toUpperCase());
        $('#time-part').html(momentNow.format('A hh:mm:ss'));
    }, 100);
});
</script>
		<?php echo $__env->yieldContent('scripts'); ?>
	</body>
</html>