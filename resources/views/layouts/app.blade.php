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
		<link rel="icon" href="{{asset('assets/images/brand/favicon.ico')}}" type="image/x-icon"/>
		<link rel="shortcut icon" href="{{asset('assets/images/brand/favicon.ico')}}" type="image/x-icon"/>

		<!-- TITLE -->
		<title>Galaxy App</title>

		<!-- DASHBOARD CSS -->
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/css/style-modes.css')}}" rel="stylesheet"/>

		<!-- LEFT-MENU CSS -->
		<link href="{{asset('assets/css/sidemenu/closed-sidemenu.css')}}" rel="stylesheet">

		<!--C3.JS CHARTS PLUGIN -->

		<!-- TABS CSS -->
		<link href="{{asset('assets/plugins/tabs/style-2.css')}}" rel="stylesheet" type="text/css">

		<!-- PERFECT SCROLL BAR CSS-->
		<link href="{{asset('assets/plugins/pscrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>

		<!-- Skin css-->
		<link href="{{asset('assets/skins/skins-modes/color1.css')}}"  id="theme" rel="stylesheet" type="text/css" media="all" />

	</head>

	<body class="app sidebar-mini default-header">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('assets/images/svgs/loader.svg')}}" class="loader-img" alt="Loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!-- HEADER -->
				<div class="header app-header">
					<div class="container-fluid">
						<div class="d-flex">
						   <a class="header-brand" href="/home" class="text-white">
                                Galaxy
							</a><!-- LOGO -->
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
							    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="fa fa-search"></i></a>
								<div class="">
									<form class="form-inline">
										<div class="search-element">
											<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
											<button class="btn btn-primary-color" type="submit"><i class="fa fa-search"></i></button>
										</div>
									</form>
								</div><!-- SEARCH -->
								<div class="dropdown d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg" id="fullscreen-button">
										<i class="fe fe-maximize-2" ></i>
									</a>
								</div><!-- FULL-SCREEN -->
								<div class="dropdown d-md-flex notifications">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="pulse bg-warning"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 text-dark">Notifications</h5>
												<span class="badge badge-danger ml-auto  brround">4</span>
											</div>
										</div>
										<div class="dropdown-divider mt-0"></div>
									    <a href="#" class="dropdown-item mt-2 d-flex pb-3">
											<div class="notifyimg bg-success-transparent">
												<i class="fa fa-thumbs-o-up text-success"></i>
											</div>
											<div>
												<strong>Someone likes our posts.</strong>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-primary-transparent">
												<i class="fa fa-exclamation-triangle text-primary"></i>
											</div>
											<div>
												<strong> Issues Fixed</strong>
												<div class="small text-muted">30 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-warning-transparent">
												<i class="fa fa-commenting-o text-warning"></i>
											</div>
											<div>
												<strong> 3 New Comments</strong>
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-danger-transparent">
												<i class="fa fa-cogs text-danger"></i>
											</div>
											<div>
												<strong> Server Rebooted.</strong>
												<div class="small text-muted">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider mb-0"></div>
										<div class=" text-center p-2">
											<a href="#" class="text-dark pt-0">View All Notifications</a>
										</div>
									</div>
								</div><!-- NOTIFICATIONS -->
								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="fe fe-mail "></i>
										<span class="badge badge-danger">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="d-flex">
												<h5 class="mb-0 text-dark">Messages</h5>
												<span class="badge badge-danger ml-auto  brround">3</span>
											</div>
										</div>
										<div class="dropdown-divider mt-0"></div>
										<a href="#" class="dropdown-item d-flex mt-2 pb-3">
											<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{asset('assets/images/users/male/41.jpg')}}">
												<span class="avatar-status bg-green"></span>
											</div>
											<div>
												<strong>Madeleine</strong>
												<p class="mb-0 fs-13 text-muted ">Hey! there I' am available</p>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{asset('assets/images/users/female/1.jpg')}}">
												<span class="avatar-status bg-red"></span>
											</div>
											<div>
												<strong>Anthony</strong>
												<p class="mb-0 fs-13 text-muted ">New product Launching</p>
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{asset('assets/images/users/female/18.jpg')}}">
												<span class="avatar-status bg-yellow"></span>
											</div>
											<div>
												<strong>Olivia</strong>
												<p class="mb-0 fs-13 text-muted ">New Schedule Realease</p>
												<div class="small text-muted">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider mb-0"></div>
										<div class=" text-center p-2">
											<a href="#" class="text-dark pt-0">View All Messages</a>
										</div>
									</div>
								</div><!-- MESSAGE-BOX -->
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										<span><img src="{{asset('assets/images/users/male/32.jpg')}}" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											<h5 class="text-dark mb-1">USER</h5>
											<small class="text-muted">App Developer</small>
										</div>
										<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
										<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
										<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
										<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
										<a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
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
								<img src="{{asset('assets/images/users/male/32.jpg')}}" alt="user-img" class="avatar avatar-lg brround">
							</div>
							<div class="user-info">
								<h2>{{Auth::user()->name}}</h2>
								<span>{{Auth::user()->telephone ?? '########'}}</span>
							</div>
							<div class="sidebar-navs mt-2">
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="border-0"><h3>Personal</h3><li>
						<li>
							<a class="side-menu__item" href="{{route('home')}}"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">{{trans('acceuil')}}</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">{{trans('finance')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('operation.recharger.show')}}" class="slide-item">{{trans('recharger')}} </a>
								</li>
								<li>
									<a href="{{route('recharger-compte')}}" class="slide-item">{{trans('retirer')}} </a>
								</li>
								<li>
									<a href="{{route('operation.index')}}" class="slide-item">{{trans('opérations')}} </a>
								</li>

							</ul>
						</li>

						<li>
							<a class="side-menu__item" href="{{route('setting')}}"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label">{{trans('setting')}}</span></a>
						</li>

						<li>
							<a class="side-menu__item" href="{{route('faq')}}"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">{{trans('Faq')}}</span></a>
						</li>
						<li>
							<a class="side-menu__item" href=""><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">{{trans('actif')}}</span></a>
						</li>


						<li>
							<a class="side-menu__item" href="{{route('home')}}"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">{{trans('support')}}</span></a>
						</li>

						<li>
							<a class="side-menu__item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="side-menu__icon fe fe-door-open"></i><span class="side-menu__label">{{trans('logout')}}</span></a>
						</li>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
                        
                    </ul>
				</aside>

				<!-- CONTAINER -->
				<div class="app-content">
                    @yield('content')
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
							Copyright © {{date('Y')}} <a href="#">#</a>. Designed by 
						</div>
					</div>
				</div>
			</footer>
			<!-- FOOTER END -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

		<!-- JQUERY SCRIPTS -->
		<script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>

		<!-- SPARKLINE -->
		<script src="{{asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE -->
		<script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script>

		<!-- RATING STAR -->
		<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

		<!-- CHARTJS CHART -->
		<script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- PIETY CHART -->
		<script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

		<!-- LEFT-MENU -->
		<script src="{{asset('assets/plugins/sidemenu-toggle/sidemenu-toggle.js')}}"></script>

		<!-- PERFECT SCROLL BAR JS-->
		<script src="{{asset('assets/plugins/pscrollbar/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('assets/plugins/pscrollbar/pscroll-leftmenu.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- APEX-CHARTS JS -->
		<script src="{{asset('assets/plugins/apexcharts/apexcharts.js')}}"></script>
		<script src="{{asset('assets/plugins/apexcharts/irregular-data-series.js')}}"></script>

		<!-- INDEX-SCRIPTS  -->
		<script src="{{asset('assets/js/index.js')}}"></script>

		<!-- CUSTOM JS -->
		<script src="{{asset('assets/js/custom.js')}}"></script>
		@yield('scripts')
	</body>
</html>