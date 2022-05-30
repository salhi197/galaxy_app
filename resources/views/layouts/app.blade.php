<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">

		<!--favicon -->
		<link rel="icon" href="{{asset('img/logos.ico')}}" type="image/x-icon"/>
		<link rel="shortcut icon" href="{{asset('img/logos.ico')}}" type="image/x-icon"/>

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
		<link href="{{asset('assets/skins/skins-modes/color22.css')}}"  id="theme" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
		@yield('styles')
	</head>

	<body class="app sidebar-mini default-header">

	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
		</div>

		<div class="page">
			<div class="page-main">
				<!-- HEADER -->
				<div class="header app-header" style="background-color:#41413f;">
					<div class="container-fluid">
						<div class="d-flex">
						   <a class="header-brand" href="index.html">
							   <img src="{{asset('img/logoh.png')}}" class="header-brand-img desktop-logo" width="140px"/>
							   <img src="{{asset('img/logoh.png')}}" class="header-brand-img mobile-view-logo" alt="Solic logo">							   
							</a><!-- LOGO -->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
							    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"></a>
								<div class="desktop-logo">
									<p id="date-part" class="text-white desktop-logo" style="padding:15px;font-size:100%">

									</p>
								</div><!-- SEARCH -->
								<div class="desktop-logo">
									<a class="" style="padding:12px" href="#">
										{{Auth::user()->solde ?? ''}}$
									</a>
								</div>
								<!-- SEARCH -->

								<div class="dropdown d-md-flex">
								</div><!-- FULL-SCREEN -->
								<div class="dropdown d-md-flex notifications">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="pulse bg-warning"></span>
									</a>
								</div>
								<div class="dropdown d-md-flex message">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<span class="badge badge-danger">
											
										</span>
									</a>
								</div>

								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										<span><img src="{{asset('assets/images/users/male/32.jpg')}}" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											<h5 class="text-dark mb-1">{{Auth::user()->name ?? ''}}</h5>
											
											<small class="text-muted">
												Investor
											</small>
										</div>
										<a class="dropdown-item" href="{{route('user.profile')}}"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
										<a class="dropdown-item" href="{{route('setting')}}"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
										<a class="dropdown-item" href="{{route('operation.recharger.index.actif')}}"><i class="fe fe-list mr-2"></i> <span>Activity</span></a>
										<a class="dropdown-item" href="{{route('support')}}"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
										<a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>

									</div>
								</div>
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										<span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											<h5 class="text-dark mb-1">{{Auth::user()->name}}</h5>
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
								<img src="{{asset('assets/images/users/male/32.jpg')}}" alt="user-img" class="avatar avatar-lg brround">
							</div>
							

							<div class="user-info">
								<h2>{{Auth::user()->name ?? ''}}</h2>
								@auth
								<img src="{{asset('assets/images/flags/'.Auth::user()->pays.'.svg')}}" class="w-5 h-5 text-center mx-auto d-block"/>
								@endif
								<!-- <span>{{Auth::user()->telephone ?? 'Investor'}}<span> -->
							</div>
							<br>
							<div class="sidebar-navs text-center">
								<ul class="nav nav-pills nav-pills-circle text-center" id="tabs_3" role="tablist">
									<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<a class="nav-link border text-center m-2">
											<i class="fe fe-facebook"></i>
										</a>
									</li>
									<!-- <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<a class="nav-link border  m-2">
											<i class="fe fe-twitter"></i>
										</a>
									</li> -->
									<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<a class="nav-link border  m-2" >
											<i class="fe fe-linkedin"></i>
										</a>
									</li>
									<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
										<a class="nav-link border  m-2">
											<i class="fe fe-instagram"></i>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
					<ul class="side-menu">
						@auth('admin')
						<li>
							<a class="side-menu__item" href="{{route('admin')}}"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">{{trans('Admin')}}</span></a>
						</li>

						<li>
							<a class="side-menu__item" href="{{route('user.index')}}"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">{{trans('liste utilisateurs')}}</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">{{trans('Finance')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('operation.recharger.index')}}" class="slide-item">{{trans('Rechargements')}} </a>
								</li>
								<li>
									<a href="{{route('operation.retrait.index')}}" class="slide-item">{{trans('Retrait')}} </a>
								</li>


							</ul>
						</li>

						<li>
							<a class="side-menu__item" href="{{route('operation.index')}}"><i class="side-menu__icon fe fe-list"></i><span class="side-menu__label">{{trans('Transactions')}}</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label">{{trans('setting')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('methode.index')}}" class="slide-item">{{trans('methode de paiment')}} </a>
								</li>	

							</ul>
						</li>


						@endif

						@auth
						<li>
							<a class="side-menu__item" href="{{route('home')}}"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">{{trans('Tableau de bord')}}</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">{{trans('Finance')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('operation.recharger.show')}}" class="slide-item">{{trans('Recharger')}} </a>
								</li>
								<li>
									<a href="{{route('operation.retirer.show')}}" class="slide-item">{{trans('Retirer')}} </a>
								</li>

								<li>
									<a href="{{route('operation.transferer.index')}}" class="slide-item">{{trans('Transfert')}} </a>
								</li>
								<li>
									<a href="{{route('operation.index')}}" class="slide-item">{{trans('Opérations')}} </a>
								</li>

							</ul>
						</li>


						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label">{{trans('Partenaires')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('user.partenaire')}}" class="slide-item">{{trans('Partenaires')}} </a>
								</li>	

							</ul>
						</li>


						<li>
							<a class="side-menu__item" href="{{route('operation.recharger.index.actif')}}"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">{{trans('Actif')}}</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="{{route('user.profile')}}"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">{{trans('Profile')}}</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item  slide-show" href="#"><i class="side-menu__icon fa fa-cog"></i><span class="side-menu__label">{{trans('Setting')}}</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('user.methodes')}}" class="slide-item">{{trans('Methode de Paiment')}} </a>
								</li>	

							</ul>
						</li>

						<li>
							<a class="side-menu__item" href="{{route('faq')}}"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">{{trans('Faq')}}</span></a>
						</li>


						<li>
							<a class="side-menu__item" href="{{route('support')}}"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">{{trans('support')}}</span></a>
						</li>
						@endif

						<li>
							<a class="side-menu__item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="side-menu__icon fe fe-door"></i><span class="side-menu__label">{{trans('Déconnexion')}}</span></a>
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

		<!-- RATING STAR -->
		<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- SELECT2 JS -->
		<!-- <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script> -->
		<!-- <script src="{{asset('assets/js/select2.js')}}"></script> -->

		<!-- CHARTJS CHART -->

		<!-- PIETY CHART -->
		<!-- LEFT-MENU -->
		<script src="{{asset('assets/plugins/sidemenu-toggle/sidemenu-toggle.js')}}"></script>

		<!-- PERFECT SCROLL BAR JS-->

		<!-- SIDEBAR JS -->
		<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- APEX-CHARTS JS -->

		<!-- INDEX-SCRIPTS  -->
		<script src="{{asset('assets/js/index.js')}}"></script>

		
		<!-- CUSTOM JS -->
		<script src="{{asset('js/chart.min.js')}}"></script>
		<script src="{{asset('js/moment.min.js')}}"></script>
				
		<script src="{{asset('assets/js/custom.js')}}"></script>
        <script src="{{asset('js/toastr.min.js')}}"></script>	
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/js/sweet-alert.js')}}"></script>

        <script>
        @if(session('error'))
        	$(function(){
                toastr.error('{{Session::get("error")}}')
            })

        @endif
        @if(session('success'))
            toastr.success('{{Session::get("success")}}')
        @endif
            

        </script>


<script>
$(document).ready(function() {
    var interval = setInterval(function() {
        var momentNow = moment();
        $('#date-part').html(moment().format('MMMM Do YYYY, h:mm:ss a'));
        $('#time-part').html(momentNow.format('A hh:mm:ss'));
    }, 100);
});
</script>
		@yield('scripts')
	</body>
</html>