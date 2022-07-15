@extends('layouts.app')

@section('content')


					<div class="page-header">
						<h4 class="page-title">{{trans('edit')}} {{trans('profile')}}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">GalaxyApp</a></li>
							<li class="breadcrumb-item active" aria-current="page">setting</li>
						</ol>
					</div>

                    <div class="row">
                        <div class="col-lg-12">

							<div class="card">
								<div class="card-header">
									<h3 class="card-title">
									</h3>
								</div>
                                <div class="card-body">
                                    <form class="login100-form validate-form" method="POST" action="{{route('user.update',['user'=>$user->id])}}" aria-label="Login">
                                    @csrf


                                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <label>Nom : </label>
                                    <input id="nom"  type="text" class="form-control" value="{{$user->nom}}" name="nom"  required>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <label>Prénom : </label>
                                    <input id="prenom"  type="text" class="form-control" value="{{$user->name}}" name="name"  required autofocus>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                        <label>Pays : </label>

                                        
                                        <select id="country" value="{{$user->pays}}" name="pays" class="form-control" >
                                            <option value="us">United State</option>

                                            <option value="dz">Algeria</option>
                                            <option value="de">Germany</option>
                                            <option value="fr">france</option>
                                            <option value="es">spain</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>                                    

                                    </div>
                                    <br>

                                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                        <label>Téléphone : </label>
                                        <input id="phone" name="telephone"  value="{{$user->telephone}}" class="form-control" type="tel">
                                    </div>


                                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                        <label>Email : </label>
                                        <input id="email"  type="text" class="form-control" value="{{$user->email}}" name="email"  required autofocus>
                                    </div>
                                    <hr>
                                    
                                    <div class="wrap-input100 validate-input">

                                        <label>Code de sponsor: </label>

                                        <input id="code_sponsor" type="text" class="form-control" name="code_sponsor" value="{{$_GET['code'] ?? ''}}">
                                        <input id="refered_user" type="hidden"  class="form-control"  name="refered_user">
                                        <a href="#" id="user_name"  >
                                            
                                        </a>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                        <label>Mot de passe: </label>
                                        <input id="password" type="text" class="form-control" value="{{$user->password_text}}"  name="password" required>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                    <label>Confirmer Mot de passe: </label>
                                    <input id="password" type="password" value="{{$user->password_text}}"  class="form-control" name="confirm_password" required>
                                        </div>                                

                                    <div class="container-login100-form-btn">
                                        <button type="submit" href="#" class="btn btn-primary">
                                            <i class="fa fa-door-open"></i>Sauvgarder
                                        </button>
                                    </div>
                                </form>
                                </div>
							</div>                        


                        





                        </div>
                    </div>
            
@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('build/css/intlTelInput.css')}}">
@endsection

@section('scripts')
<script src="{{asset('build/js/intlTelInput.js')}}"></script>

<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
  });
</script>



@endsection


