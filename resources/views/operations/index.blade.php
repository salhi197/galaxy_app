@extends('layouts.app')

@section('content')


                    <div class="page-header">
						<h4 class="page-title">{{trans('liste_recharger')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{trans('dashboard')}}</li>
						</ol>
					</div>
					<!-- PAGE-HEADER END -->

					<!-- ROW-1 -->

					<div class="row">
						<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Basic Table</h3>
								</div>
								<div class="table-responsive">
									<table class="table card-table table-vcenter text-nowrap">
										<thead >
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- table-responsive -->
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->


@endsection