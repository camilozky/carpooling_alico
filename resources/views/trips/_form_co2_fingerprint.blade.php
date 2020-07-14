@csrf

<div class="card-header">{{ __('Register Co2 footprint') }}</div>
<div class="form-group row">
	<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

	<div class="col-md-6">
		<input id="email" type="text" placeholder="{{ __('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>

		@error('email')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="kilometers" class="col-md-4 col-form-label text-md-right">{{ __('Kilometers of distance you travel daily') }}</label>
	<div class="col-md-6">
		<input id="kilometers" type="numeric" placeholder="{{ __('Kilometers of distance you travel daily') }}" class="form-control" @error('kilometers') is-invalid @enderror value="{{old('kilometers')}}" name="kilometers" step="0.01" min="1" max="1000" required autocomplete="kilometers" autofocus>
	</div>
</div>

<div class="form-group row">
	<label for="days" class="col-md-4 col-form-label text-md-right">{{ __('¿How many days a week do you travel to work?') }}</label>

	<div class="col-md-6">
		<select name="days" id="days">
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

<div class="form-group row">
	<label for="vehicle_type" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle type') }}</label>
	<div class="col-md-6">
		<select id="vehicle_type" onchange="CalculateCo2Footprint()">
			<optgroup label="Selecciona el tipo de Vehículo | Combustilbe | Cilindraje"></optgroup>
			<option value="54.39743923">Selecciona el tipo de Vehículo | Combustilbe | Cilindraje</option>
			<optgroup label="Moto 4T | Gasolina | Cilindraje ≤100"></optgroup>
			<option value="54.39743923">1950 ≤ Modelo < 2006</option>
			<option value="45.33119936">Modelo ≥ 2006</option>
			<optgroup label="Moto 4T | Gasolina | 100 < Cilindraje ≤ 300"></optgroup>
			<option value="90.66239871">1950 ≤ Modelo < 2006</option>
			<option value="75.55199893">Modelo ≥ 2006</option>
			<optgroup label="Moto 4T | Gasolina | Cilindraje > 300"></optgroup>
			<option value="113.3279984">Todos los modelos</option>
			<optgroup label="Moto 2T | Gasolina"></optgroup>
			<option value="65.27692707">Todos los modelos</option>
			<optgroup label="Carro | Gasolina | Cilindraje ≤1500"></optgroup>
			<option value="350.386082">1950 ≤ Modelo < 1993</option>
			<option value="254.5405618">1993 ≤ Modelo < 1998</option>
			<option value="236.5106053">1998 ≤ Modelo < 2012</option>
			<option value="204.1982539">Modelo ≥ 2012</option>
			<optgroup label="Carro | Gasolina | 1500 < Cilindraje ≤ 3000"></optgroup>
			<option value="408.3636351">1950 ≤ Modelo < 1993</option>
			<option value="303.5430229">1993 ≤ Modelo < 1998</option>
			<option value="298.7502383">1998 ≤ Modelo < 2012</option>
			<option value="258.1143913">Modelo ≥ 2012</option>
			<optgroup label="Carro | Gasolina | Cilindraje > 3000"></optgroup>
			<option value="530.4910774">1950 ≤ Modelo < 1993</option>
			<option value="394.1843422">1993 ≤ Modelo < 1998</option>
			<option value="388.7845567">1998 ≤ Modelo < 2012</option>
			<option value="335.9502104">Modelo ≥ 2012</option>
			<optgroup label="Carro | Diesel | Cilindraje ≤1500"></optgroup>
			<option value="239.1529722">1950 ≤ Modelo < 2005</option>
			<option value="216.1020833">2005 ≤ Modelo < 2010</option>
			<option value="201.6952777">2010 ≤ Modelo < 2013</option>
			<option value="180.0850694">Modelo ≥ 2013</option>
			<optgroup label="Carro | Diesel | 1500 < Cilindraje ≤ 3000"></optgroup>
			<option value="291.7378124">1950 ≤ Modelo < 2005</option>
			<option value="263.6445416">2005 ≤ Modelo < 2010</option>
			<option value="244.9156944">2010 ≤ Modelo < 2013</option>
			<option value="230.5088888">Modelo ≥ 2013</option>
			<optgroup label="Carro | Diesel | Cilindraje > 3000"></optgroup>
			<option value="379.6193263">1950 ≤ Modelo < 2005</option>
			<option value="341.4412916">2005 ≤ Modelo < 2010</option>
			<option value="324.1531249">2010 ≤ Modelo < 2013</option>
			<option value="302.5429166">Modelo ≥ 2013</option>
			<optgroup label="Carro | Gas Natural | Cilindraje ≤1500"></optgroup>
			<option value="198.8153113">Todos los modelos</option>
			<optgroup label="Carro | Gas Natural | 1500 < Cilindraje ≤ 3000"></optgroup>
			<option value="252.7794673">1950 ≤ Modelo < 1993</option>
			<option value="241.4185923">Modelo ≥ 1993</option>
			<optgroup label="Carro | Gas Natural | Cilindraje > 3000"></optgroup>
			<option value="312.4240606">1950 ≤ Modelo < 1993</option>
			<option value="295.3827483">Modelo ≥ 1993</option>		</select>
			@error('vehicle_type')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
	</div>

	<script>
		function CalculateCo2Footprint() {
			var CO2EmissionFactorTemp = document.getElementById("vehicle_type").value;
			var CO2EmissionFactor = parseFloat(CO2EmissionFactorTemp).toFixed(2);
			var days = document.getElementById("days").value;
			var kilometers = document.getElementById("kilometers").value;
			var oneDayMilliseconds = 1000 * 60 * 60 * 24
			var presentDate = new Date();
			var newYearsDay = new Date(presentDate.getFullYear(), 0, 1)
			var elapsedWeeksOfYear = Math.round(presentDate.getTime() - newYearsDay.getTime()) / 7 / (oneDayMilliseconds);
			var Co2FootprintTemp= CO2EmissionFactor * days * kilometers * elapsedWeeksOfYear;
			var Co2FootprintAllYearTemp= CO2EmissionFactor * days * kilometers * 52.18;
			var Co2Footprint = parseFloat(Co2FootprintTemp).toFixed(2);
			var Co2FootprintAllYear = parseFloat(Co2FootprintAllYearTemp).toFixed(2);
			document.getElementById("CO2_emission_factor").value = CO2EmissionFactor;
			document.getElementById("carbon_footprint").value = Co2Footprint;
			document.getElementById("carbon_footprint_all_year").value = Co2FootprintAllYear;
		}
	</script>

	<div class="form-group row">
		<label for="CO2_emission_factor" class="col-md-4 col-form-label text-md-right">{{ __('CO2 emission factor') }}</label>
		<div class="col-md-6">
			<input id="CO2_emission_factor" type="text" class="form-control" name="CO2_emission_factor" readonly required autocomplete="CO2_emission_factor" autofocus>
		</div>
	</div>

	<div class="form-group row">
		<label for="carbon_footprint" class="col-md-4 col-form-label text-md-right">{{ __('Carbon footprint') }}</label>
		<div class="col-md-6">
			<input id="carbon_footprint" type="text" class="form-control" name="carbon_footprint" readonly required autocomplete="carbon_footprint" autofocus>
		</div>
	</div>

	<div class="form-group row">
		<label for="carbon_footprint_all_year" class="col-md-4 col-form-label text-md-right">{{ __('Carbon footprint Calculated at the end of the year') }}</label>
		<div class="col-md-6">
			<input id="carbon_footprint_all_year" type="text" class="form-control" name="carbon_footprint_all_year" readonly required autocomplete="carbon_footprint_all_year" autofocus>
		</div>
	</div>

	<div class="form-group row mb-0">
		<div class="col-md-6 offset-md-4">
			<button type="submit" class="btn btn-primary">
				{{__($btnText)}}
			</button>
		</div>
	</div>

</div>