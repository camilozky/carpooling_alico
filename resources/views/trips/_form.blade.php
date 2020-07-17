</html>
	{{-- javascript code --}}
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&amp;libraries=places&amp;callback=initAutocomplete" type="text/javascript"></script>

	<script>
	google.maps.event.addDomListener(window, 'load', initialize);

	function initialize()
	{
		var placePickup = document.getElementById('placePickup');
		var autocompleteplacePickup = new google.maps.places.Autocomplete(placePickup);
		var placePickup = document.getElementById('placeDropoff');
		var autocompleteplaceDropoff = new google.maps.places.Autocomplete(placeDropoff);
		var placePickup = document.getElementById('meetingPlace');
		var autocompletemeetingPlace = new google.maps.places.Autocomplete(meetingPlace);
		var placePickup = document.getElementById('places');
		var autocompleteplaces = new google.maps.places.Autocomplete(places);
	}
	</script>

@csrf

<div class="form-group row">
	<label for="nameDriver" class="col-md-4 col-form-label text-md-right">{{ __('nameDriver') }}</label>

	<div class="col-md-6">
		<input id="nameDriver" type="text" placeholder="{{ __('nameDriver') }}" class="form-control @error('nameDriver') is-invalid @enderror" name="nameDriver" value="{{old('nameDriver', $trip->nameDriver)}}" required autocomplete="nameDriver" autofocus>

		@error('nameDriver')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

	<div class="col-md-6">
		<input id="email" type="text" placeholder="{{ __('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $trip->email)}}" required autocomplete="email" autofocus>

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
		<input id="phoneNumber" type="text" placeholder="{{ __('phoneNumber') }}" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{old('phoneNumber', $trip->phoneNumber)}}" required autocomplete="phoneNumber" autofocus>

		@error('phoneNumber')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>


<div class="form-group row">
	<label for="datePickup" class="col-md-4 col-form-label text-md-right">{{ __('datePickup') }}</label>

	<div class="col-md-6">
		<input id="datePickup" type="date"  class="form-control @error('datePickup') is-invalid @enderror" name="datePickup" value="{{old('datePickup', $trip->datePickup)}}" required autocomplete="datePickup" autofocus>

		@error('datePickup')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="timePickup" class="col-md-4 col-form-label text-md-right">{{ __('timePickup') }}</label>

	<div class="col-md-6">
		<input id="timePickup" type="time"  class="form-control @error('timePickup') is-invalid @enderror" name="timePickup" value="{{old('timePickup', $trip->timePickup)}}" required autocomplete="timePickup" autofocus>

		@error('timePickup')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="placePickup" class="col-md-4 col-form-label text-md-right">{{ __('placePickup') }}</label>

	<div class="col-md-6">
		<input id="placePickup" type="text" placeholder="{{ __('placePickup') }}" class="form-control @error('placePickup') is-invalid @enderror" name="placePickup" value="{{old('placePickup', $trip->placePickup)}}" required autocomplete="placePickup" autofocus>
		@error('placePickup')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="placeDropoff" class="col-md-4 col-form-label text-md-right">{{ __('placeDropoff') }}</label>

	<div class="col-md-6">
		<input id="placeDropoff" type="text" placeholder="{{ __('placeDropoff') }}" class="form-control @error('placeDropoff') is-invalid @enderror" name="placeDropoff" value="{{old('placeDropoff', $trip->placeDropoff)}}" required autocomplete="placeDropoff" autofocus>

		@error('placeDropoff')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>


<div class="form-group row">
	<label for="seats" class="col-md-4 col-form-label text-md-right">{{ __('seats') }}</label>

	<div class="col-md-6">
		<select name="seats" id="seats">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
		@error('seats')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="meetingPlace" class="col-md-4 col-form-label text-md-right">{{ __('meetingPlace') }}</label>

	<div class="col-md-6">
		<input id="meetingPlace" type="text" placeholder="{{ __('meetingPlace') }}" class="form-control @error('meetingPlace') is-invalid @enderror" name="meetingPlace" value="{{old('meetingPlace', $trip->meetingPlace)}}" required autocomplete="meetingPlace" autofocus>

		@error('meetingPlace')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="places" class="col-md-4 col-form-label text-md-right">{{ __('places') }}</label>

	<div class="col-md-6">
		<input id="places" type="text" placeholder="{{ __('places') }}" class="form-control @error('places') is-invalid @enderror" name="places" value="{{old('places', $trip->places)}}" required autocomplete="places" autofocus>

		@error('places')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row mb-0">
	<div class="col-md-6 offset-md-4">
		<button type="submit" class="btn btn-primary">
			{{__($btnText)}}
		</button>
	</div>
</div>
