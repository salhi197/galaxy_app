<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from laravel.spruko.com/solic/Horizontal-Light-ltr/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2020 16:37:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html5 template, admin panel html template,  html5 admin template, admin panel html, admin panel html template, html css admin templates, dashboard html5, html dashboard template, simple dashboard html template, html5 dashboard template, dashboard html5,  simple dashboard html, dashboard design template, bootstrap 4 admin template,  bootstrap admin template,  admin, premium admin templates, best bootstrap admin template, bootstrap dashboard template,   admin ui templates, modern admin template, admin panel template bootstrap 4 "  />
		<!--favicon -->
<link rel="icon" href="" type="image/x-icon"/>
<link rel="shortcut icon" href="" type="image/x-icon"/>
<!-- TITLE -->
<title>Galaxy App  - Connexion</title>
<!-- DASHBOARD CSS -->
<link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/dashboard-dark.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/style-modes.css')}}" rel="stylesheet"/>
<!-- HORIZONTAL-MENU CSS -->
<link href="{{asset('assets/plugins/horizontal-menu/dropdown-effects/fade-down.css')}}" rel="stylesheet">
<!--C3.JS CHARTS PLUGIN -->
<link href="{{asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>
<!-- SINGLE-PAGE CSS -->
<link href="{{asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet" type="text/css">
<!-- PERFECT SCROLL BAR CSS-->
<link href="{{asset('assets/plugins/pscrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />
<!--- FONT-ICONS CSS -->
<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>
<!-- SELECT2 CSS -->
<!-- Skin css-->
<link href="{{asset('assets/skins/skins-modes/color22.css')}}"  id="theme" rel="stylesheet" type="text/css" media="all" />
<!-- SIDEBAR CSS -->

<!-- Switcher CSS -->
</head>
<link href="{{asset('css/toastr.css')}}" rel="stylesheet"/>

		
	<body class="default-header">	    
		<div class="login-img">
			<div id="global-loader"></div>
			<div class="page">
				<div class="">
					<div class="col col-login mx-auto">
						<div class="text-center">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							
                            <form class="login100-form validate-form" method="POST" action="/login" aria-label="Login">
                                @csrf
                                <input type="hidden" name="_token" value="GnPinh22Yif9GsIWbgLW4r49uxQq3MniIG3y4TQo">
                                <span class="login100-form-title">
									Connexion 
								</span>

								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <label>Email : </label>
                                <input id="email"  type="text" class="form-control" name="email" value="" required autofocus>
									<span class="focus-input100"></span>
									<span class="symbol-input100">
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <label>Mot de passe: </label>
                                <input id="password" type="password" class="form-control" name="password" required>
										<span class="focus-input100"></span>
									<span class="symbol-input100">
									</span>
								</div>
								<div class="container-login100-form-btn">
									<button type="submit" href="#" class="login100-form-btn btn-primary">
                                        <i class="fa fa-door-open"></i>Connexion
									</button>
								</div>
								<p>
									Vous n'avez pas encore un comtpe ?
									<a href="{{route('register')}}"> S'enregistrer .</a>

								</p>
							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
		
		<!-- JQUERY SCRIPTS -->
<script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
<!-- SPARKLINE -->
<script src="{{asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>
<!-- CHART-CIRCLE -->
<script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script>
<!-- RATING STAR -->
<!-- SELECT2 JS -->
<!-- INPUT MASK PLUGIN-->
<!-- CUSTOM SCROLL BAR JS-->
<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- CUSTOM JS-->
<script src="{{asset('js/toastr.min.js')}}"></script>	

<script src="{{asset('assets/js/custom.js')}}"></script>	
<script>
        @if($errors->any())
        $(function(){
                toastr.error('{{$errors->first()}}')
            })

        @endif
        @if(session('success'))
            toastr.success('{{Session::get("success")}}')
        @endif
</script>

	</body>

</html>