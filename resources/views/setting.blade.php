@extends('layouts.app')

@section('content')


					<div class="page-header">
						<h4 class="page-title">{{trans('setting')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">GalaxyApp</a></li>
							<li class="breadcrumb-item active" aria-current="page">setting</li>
						</ol>
					</div>

                    <div class="row">
                        <div class="col-lg-4">
							<form class="card" method="post">
								<div class="card-header">
									<div class="card-title">Login to your account</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail11"  placeholder="Enter email">
									</div>
									<div class="form-group">
										<label class="form-label">
										Password
										<a href="forgot-password.html" class="float-right small">I forgot password</a>
										</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									<div class="form-group">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" />
											<span class="custom-control-label">Remember me</span>
										</label>
									</div>
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block">Sign in</button>
									</div>
								</div>
							</form>
							<div class="card">
								<div class="card-body">
									<div class="text-center text-muted">
										Don't have account yet? <a href="register.html">Sign up</a>
									</div>
									<form class="" method="post">
										<div class="mt-4">
											<div class="card-title">Forgot password</div>
											<p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
											<div class="form-group">
												<label class="form-label" for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
											</div>
											<div class="form-footer">
												<button type="submit" class="btn btn-primary btn-block">Send me new password</button>
											</div>
										</div>
									</form>
									<div class="text-center text-muted mt-3 ">
										Forget it, <a href="login.html">send me back</a> to the sign in screen.
									</div>
								</div>
							</div>
						</div><!-- COL END -->
						<div class="col-lg-8">
							<form class="card">
								<div class="card-header">
									<h3 class="card-title">Edit Profile</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">Company</label>
												<input type="text" class="form-control"  placeholder="Company" >
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="form-group">
												<label class="form-label">Username</label>
												<input type="text" class="form-control" placeholder="Username" >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Email address</label>
												<input type="email" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control" placeholder="Company">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control" placeholder="Last Name">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<input type="text" class="form-control" placeholder="Home Address" >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">City</label>
												<input type="text" class="form-control" placeholder="City" >
											</div>
										</div>
										<div class="col-sm-6 col-md-3">
											<div class="form-group">
												<label class="form-label">Postal Code</label>
												<input type="number" class="form-control" placeholder="ZIP Code">
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label class="form-label">Country</label>
												<select class="form-control custom-select">
													<option value="0">--Select--</option>
													<option value="1">Germany</option>
													<option value="2">Canada</option>
													<option value="3">Usa</option>
													<option value="4">Aus</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group mb-0">
												<label class="form-label">About Me</label>
												<textarea rows="5" class="form-control" placeholder="Enter About your description" ></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer text-right">
									<button type="submit" class="btn btn-primary">Update Profile</button>
								</div>
							</form>
                        </div>
            
@endsection

@section('modals')



@endsection


