<script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&amp;libraries=places&amp;callback=initAutocomplete" type="text/javascript"></script>

<script>
	google.maps.event.addDomListener(window, 'load', initialize);

	function initialize()
	{
		var inputPlaceDropoff = document.getElementById('placeDropoff');
		var placeDropoff = new google.maps.places.Autocomplete(inputPlaceDropoff);
		placeDropoff.addListener('place_changed',
			function()
			{
				var place = placeDropoff.getPlace();
				$('#latitudePlaceDropoff').val(place.geometry['location'].lat());
				$('#longitudePlaceDropoff').val(place.geometry['location'].lng());

			});
		var inputplacePickup = document.getElementById('placePickup');
		var placePickup = new google.maps.places.Autocomplete(inputplacePickup);
		placePickup.addListener('place_changed',
			function()
			{
				var place = placePickup.getPlace();
				$('#latitudePlacePickup').val(place.geometry['location'].lat());
				$('#longitudePlacePickup').val(place.geometry['location'].lng());
			});
	}
</script>
@extends('layouts.app')

@section('title', 'Perfil del Usuario | ' .$user->name)

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('User information') }}: {{ $user->name}}</div>
				<div class="card-body">


					@section('content')
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">{{ __('Edit Profile') }}</div>

									<div class="card-body">
										@include('partials.validation-errors')
										<form method="POST" action="{{ route('users.update', $user) }}">
											@csrf @method('PATCH')
											<div class="form-group row">
												<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

												<div class="col-md-6">
													<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" name="name" value="{{old('name', $user->name)}}" required autocomplete="name" autofocus>
													@error('name')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

												<div class="col-md-6">
													<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('email') }}" name="email" value="{{old('email', $user->email)}}" required autocomplete="email">

													@error('email')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('phoneNumber') }}</label>

												<div class="col-md-6">
													<input id="phoneNumber" type="tel" class="form-control @error('phoneNumber') is-invalid @enderror" placeholder="{{ __('phoneNumber') }}" name="phoneNumber" value="{{old('phoneNumber', $user->phoneNumber)}}" required autocomplete="phoneNumber" autofocus>

													@error('phoneNumber')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>

											<div class="form-group row">
												<label for="placeDropoff" class="col-md-4 col-form-label text-md-right">{{ __('Residential address') }}</label>

												<div class="col-md-6">
													<input id="placeDropoff" class="form-control @error('placeDropoff') is-invalid @enderror" placeholder="{{ __('Residential address') }}" name="placeDropoff" value="{{old('placeDropoff', $user->placeDropoff)}}" required autocomplete="placeDropoff" autofocus>

													@error('placeDropoff')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-4 col-form-label text-md-right">{{ __('Latitude and Longitude Coordinates Residence') }}</label>

												<div class="col-md-6">


													<div class="row">
														<div class="col-sm-6">
															<input id="latitudePlaceDropoff" type="numeric" class="form-control @error('latitudePlaceDropoff') is-invalid @enderror" placeholder="{{ __('latitudePlaceDropoff') }}" name="latitudePlaceDropoff" value="{{old('latitudePlaceDropoff', $user->latitudePlaceDropoff)}}" required autocomplete="latitudePlaceDropoff" autofocus>

															@error('latitudePlaceDropoff')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror							</div>
														<div class="col-sm-6">
															<input id="longitudePlaceDropoff" type="numeric" class="form-control @error('longitudePlaceDropoff') is-invalid @enderror" placeholder="{{ __('longitudePlaceDropoff') }}" name="longitudePlaceDropoff" value="{{old('longitudePlaceDropoff', $user->longitudePlaceDropoff)}}" required autocomplete="longitudePlaceDropoff" autofocus>

															@error('longitudePlaceDropoff')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label for="placePickup" class="col-md-4 col-form-label text-md-right">{{ __('Work address') }}</label>

												<div class="col-md-6">
													<input id="placePickup" class="form-control @error('placePickup') is-invalid @enderror" placeholder="{{ __('Work address') }}" name="placePickup" value="{{old('placePickup', $user->placePickup)}}" required autocomplete="placePickup" autofocus>

													@error('placePickup')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-4 col-form-label text-md-right">{{ __('Latitude and Longitude Coordinates Work') }}</label>

												<div class="col-md-6">
													<div class="row">
														<div class="col-sm-6">
															<input id="latitudePlacePickup" type="numeric" class="form-control @error('latitudePlacePickup') is-invalid @enderror" placeholder="{{ __('latitudePlacePickup') }}" name="latitudePlacePickup" value="{{old('latitudePlacePickup', $user->latitudePlacePickup)}}" required autocomplete="latitudePlacePickup" autofocus>

															@error('latitudePlacePickup')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror							</div>
														<div class="col-sm-6">
															<input id="longitudePlacePickup" type="numeric" class="form-control @error('longitudePlacePickup') is-invalid @enderror" placeholder="{{ __('longitudePlacePickup') }}" name="longitudePlacePickup" value="{{old('longitudePlacePickup', $user->longitudePlacePickup)}}" required autocomplete="longitudePlacePickup" autofocus>

															@error('longitudePlacePickup')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label for="days" class="col-md-4 col-form-label text-md-right">{{ __('¿How many days a week do you travel to work?') }}</label>

												<div class="col-md-6">
													<select name="days" id="days">
														<option value="{{old('days', $user->days)}}">{{$user->days}}</option>
														<option value=1>1</option>
														<option value=2>2</option>
														<option value=3>3</option>
														<option value=4>4</option>
														<option value=5>5</option>
														<option value=6>6</option>
														<option value=7>7</option>
													</select>
													@error('days')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
											</div>

											<script type="module">
												import LatLon from 'https://cdn.jsdelivr.net/npm/geodesy@2/latlon-spherical.min.js';
												document.addEventListener('DOMContentLoaded', function()
												{
													document.querySelector('#calc-dist').onclick = function()
													{
														calculateDistance();
													}
												});
												function calculateDistance() {
													const c1= latitudePlaceDropoff.value + ',' + longitudePlaceDropoff.value
													const c2= latitudePlacePickup.value + ',' + longitudePlacePickup.value
													const p1 = LatLon.parse(c1);
													const p2 = LatLon.parse(c2);
													const dist = (parseFloat(p1.distanceTo(p2).toPrecision(2)) / 1000) * 2;
													document.getElementById("kilometers").value = dist;
												}
											</script>

											<div class="form-group row">
												<label for="kilometers" class="col-md-4 col-form-label text-md-right">{{ __('click to calculate Kilometers of distance you travel daily') }}</label>
												<div class="col-md-6">
													<button type="button" id="calc-dist" class="btn btn-outline-primary btn-block">
														{{ __('Calculate distance') }}
													</button>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-4 col-form-label text-md-right">{{ __('Kilometers of distance you travel daily') }}</label>
												<div class="col-md-6">
													<input id="kilometers" type="numeric" placeholder="{{ __('Kilometers of distance you travel daily') }}" class="form-control" @error('kilometers') is-invalid @enderror value="{{old('kilometers', $user->kilometers)}}"  name="kilometers" step="0.01" min="1" max="1000" required  autocomplete="kilometers" autofocus>
												</div>
											</div>


											<div class="form-group row">
												<label for="vehicle_type" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle type') }}</label>
												<div class="col-md-6">
													<select id="vehicle_type" name="vehicle_type" onchange="CalculateCo2Footprint(this)">
														<option value="{{old('vehicle', $user->CO2_emission_factor)}}">{{$user->vehicle}}</option>
														<optgroup label="Sin vehículo" id="Sin vehículo">
															<option value="0">Sin vehículo o bicicleta</option>
															<optgroup label="Moto 4T | Gasolina | Cilindraje ≤100" id="Moto 4T | Gasolina | Cilindraje ≤100">
																<option value="54.39743923">1950 ≤ Modelo < 2006</option>
																<option value="45.33119936">Modelo ≥ 2006</option>
															</optgroup>
															<optgroup label="Moto 4T | Gasolina | 100 < Cilindraje ≤ 300" id="Moto 4T | Gasolina | 100 < Cilindraje ≤ 300">
																<option value="90.66239871">1950 ≤ Modelo < 2006</option>
																<option value="75.55199893">Modelo ≥ 2006</option>
															</optgroup>
															<optgroup label="Moto 4T | Gasolina | Cilindraje > 300" id="Moto 4T | Gasolina | Cilindraje > 300">
																<option value="113.3279984">Todos los modelos</option>
															</optgroup>
															<optgroup label="Moto 2T | Gasolina" id="Moto 2T | Gasolina">
																<option value="65.27692707">Todos los modelos</option>
															</optgroup>
															<optgroup label="Carro | Gasolina | Cilindraje ≤1500" id="Carro | Gasolina | Cilindraje ≤1500">
																<option value="350.386082">1950 ≤ Modelo < 1993</option>
																<option value="254.5405618">1993 ≤ Modelo < 1998</option>
																<option value="236.5106053">1998 ≤ Modelo < 2012</option>
																<option value="204.1982539">Modelo ≥ 2012</option>
															</optgroup>
															<optgroup label="Carro | Gasolina | 1500 < Cilindraje ≤ 3000" id="Carro | Gasolina | 1500 < Cilindraje ≤ 3000">
																<option value="408.3636351">1950 ≤ Modelo < 1993</option>
																<option value="303.5430229">1993 ≤ Modelo < 1998</option>
																<option value="298.7502383">1998 ≤ Modelo < 2012</option>
																<option value="258.1143913">Modelo ≥ 2012</option>
															</optgroup>
															<optgroup label="Carro | Gasolina | Cilindraje > 3000" id="Carro | Gasolina | Cilindraje > 3000">
																<option value="530.4910774">1950 ≤ Modelo < 1993</option>
																<option value="394.1843422">1993 ≤ Modelo < 1998</option>
																<option value="388.7845567">1998 ≤ Modelo < 2012</option>
																<option value="335.9502104">Modelo ≥ 2012</option>
															</optgroup>
															<optgroup label="Carro | Diesel | Cilindraje ≤1500" id="Carro | Diesel | Cilindraje ≤1500">
																<option value="239.1529722">1950 ≤ Modelo < 2005</option>
																<option value="216.1020833">2005 ≤ Modelo < 2010</option>
																<option value="201.6952777">2010 ≤ Modelo < 2013</option>
																<option value="180.0850694">Modelo ≥ 2013</option>
															</optgroup>
															<optgroup label="Carro | Diesel | 1500 < Cilindraje ≤ 3000" id="Carro | Diesel | 1500 < Cilindraje ≤ 3000">
																<option value="291.7378124">1950 ≤ Modelo < 2005</option>
																<option value="263.6445416">2005 ≤ Modelo < 2010</option>
																<option value="244.9156944">2010 ≤ Modelo < 2013</option>
																<option value="230.5088888">Modelo ≥ 2013</option>
															</optgroup>
															<optgroup label="Carro | Diesel | Cilindraje > 3000" id="Carro | Diesel | Cilindraje > 3000">
																<option value="379.6193263">1950 ≤ Modelo < 2005</option>
																<option value="341.4412916">2005 ≤ Modelo < 2010</option>
																<option value="324.1531249">2010 ≤ Modelo < 2013</option>
																<option value="302.5429166">Modelo ≥ 2013</option>
															</optgroup>
															<optgroup label="Carro | Gas Natural | Cilindraje ≤1500" id="Carro | Gas Natural | Cilindraje ≤1500">
																<option value="198.8153113">Todos los modelos</option>
															</optgroup>
															<optgroup label="Carro | Gas Natural | 1500 < Cilindraje ≤ 3000" id="Carro | Gas Natural | 1500 < Cilindraje ≤ 3000">
																<option value="252.7794673">1950 ≤ Modelo < 1993</option>
																<option value="241.4185923">Modelo ≥ 1993</option>
															</optgroup>
															<optgroup label="Carro | Gas Natural | Cilindraje > 3000" id="Carro | Gas Natural | Cilindraje > 3000">
																<option value="312.4240606">1950 ≤ Modelo < 1993</option>
																<option value="295.3827483">Modelo ≥ 1993</option>
															</optgroup>
														</select>
														@error('vehicle_type')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>

												<script>
													function CalculateCo2Footprint(selectBox)
													{
														var CO2EmissionFactorTemp = document.getElementById("vehicle_type").value;
														var CO2EmissionFactor = parseFloat(CO2EmissionFactorTemp).toFixed(2);
														var days = document.getElementById("days").value;
														var kilometers = document.getElementById("kilometers").value;
														var oneDayMilliseconds = 1000 * 60 * 60 * 24
														var presentDate = new Date();
														var newYearsDay = new Date(presentDate.getFullYear(), 0, 1)
														var elapsedWeeksOfYear = Math.round(presentDate.getTime() - newYearsDay.getTime()) / 7 / (oneDayMilliseconds);
														var Co2FootprintTemp= CO2EmissionFactor *  kilometers ;
														var Co2FootprintAllYearTemp= CO2EmissionFactor * days * kilometers * 52.18;
														var Co2Footprint = parseFloat(Co2FootprintTemp).toFixed(2);
														var Co2FootprintAllYear = parseFloat(Co2FootprintAllYearTemp).toFixed(2);
														var vehicleTypeTemp = selectBox.options[selectBox.selectedIndex];
														var vehicleTypeCatTemp = vehicleTypeTemp.parentNode;
														var vehicleTypeCat = vehicleTypeCatTemp.label
														var vehicleType = vehicleTypeTemp.text
														document.getElementById("CO2_emission_factor").value = CO2EmissionFactor;
														document.getElementById("carbon_footprint").value = Co2Footprint;
														document.getElementById("carbon_footprint_all_year").value = Co2FootprintAllYear/1000;
														document.getElementById("vehicle").value = vehicleTypeCat + " | "+ vehicleType;
													}
												</script>

												<div class="form-group row">
													<label for="CO2_emission_factor" class="col-md-4 col-form-label text-md-right">{{ __('CO2 emission factor') }} (g/km) </label>
													<div class="col-md-6">
														<input id="CO2_emission_factor" type="text" placeholder="{{ __('CO2 emission factor') }}" class="form-control" name="CO2_emission_factor" value="{{old('CO2_emission_factor', $user->CO2_emission_factor)}}" readonly required autocomplete="CO2_emission_factor" autofocus>
													</div>
												</div>

												<div class="form-group row">
													<label for="carbon_footprint" class="col-md-4 col-form-label text-md-right">{{ __('Carbon footprint') }} (g/km) </label>
													<div class="col-md-6">
														<input id="carbon_footprint" type="text" placeholder="{{ __('Carbon footprint') }}" class="form-control" name="carbon_footprint" value="{{old('carbon_footprint', $user->carbon_footprint)}}" readonly required autocomplete="carbon_footprint" autofocus>
													</div>
												</div>

												<div class="form-group row">
													<label for="carbon_footprint_all_year" class="col-md-4 col-form-label text-md-right">{{ __('Carbon footprint Calculated at the end of the year')  }} (Ton/km) </label>
													<div class="col-md-6">
														<input id="carbon_footprint_all_year" type="text" placeholder="{{ __('Carbon footprint Calculated at the end of the year') }}"  class="form-control" name="carbon_footprint_all_year" value="{{old('carbon_footprint_all_year', $user->carbon_footprint_all_year)}}" readonly required autocomplete="carbon_footprint_all_year" autofocus>
													</div>
												</div>

												<div class="form-group row">
													<label for="vehicle" class="col-md-4 col-form-label text-md-right">{{ __('vehicle') }}</label>
													<div class="col-md-6">
														<input id="vehicle" type="text" placeholder="{{ __('vehicle') }}" class="form-control" name="vehicle" value="{{old('vehicle', $user->vehicle)}}" readonly required autocomplete="vehicle" autofocus>
													</div>
												</div>

												<div class="form-group row mb-0">
													<div class="col-md-6 offset-md-4">
														<button type="submit" class="btn btn-outline-success btn-block">{{ __('update') }}</button>
													</div>
												</div>
											</form>
											<div class="form-group row mb-0">
												<div class="col-md-6 offset-md-4">
													<a class="btn btn-outline-dark btn-block" href="{{ route('trips.index', $user) }}">{{ __('Back to home') }}</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endsection

					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
