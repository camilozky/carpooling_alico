<script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&amp;libraries=places&amp;callback=initAutocomplete" type="text/javascript"></script>

<script>
	google.maps.event.addDomListener(window, 'load', initialize);

	function initialize()
	{
		var inputPlacePickup = document.getElementById('placePickup');
		var autocompletePlacePickup = new google.maps.places.Autocomplete(inputPlacePickup);

		var inputPlaceDropoff = document.getElementById('placeDropoff');
		var autocompletePlaceDropoff = new google.maps.places.Autocomplete(inputPlaceDropoff);

		var inputMeetingPlace = document.getElementById('meetingPlace');
		var autocompleteMeetingPlace = new google.maps.places.Autocomplete(inputMeetingPlace);



		var inputPlaces = document.getElementById('place');
		var places = new google.maps.places.Autocomplete(inputPlaces);
	}
</script>
@auth @csrf

<div class="form-group row">
	<label for="nameDriver" class="col-md-4 col-form-label text-md-right">{{ __('nameDriver') }}</label>

	<div class="col-md-6">
		<input id="nameDriver" type="text" placeholder="{{ __('nameDriver') }}" class="form-control @error('nameDriver') is-invalid @enderror" name="nameDriver" value="{{old('nameDriver', Auth::user()->name, $trip->nameDriver)}}" required autocomplete="nameDriver" autofocus>

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
		<input id="email" type="text" placeholder="{{ __('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', Auth::user()->email)}}" required autocomplete="email" autofocus>

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
		<input id="phoneNumber" type="text" placeholder="{{ __('phoneNumber') }}" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{old('phoneNumber', Auth::user()->phoneNumber)}}" required autocomplete="phoneNumber" autofocus>

		@error('phoneNumber')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
	$(document).ready( function() {
		var now = new Date();
		var day = ("0" + now.getDate()).slice(-2);
		var month = ("0" + (now.getMonth() + 1)).slice(-2);
		var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
		$('#datePickup').val(today);
	});
</script>


<div class="form-group row">
	<label for="datePickup" class="col-md-4 col-form-label text-md-right">{{ __('datePickup') }}</label>

	<div class="col-md-6">
		<input id="datePickup" type="date"  class="form-control @error('datePickup') is-invalid @enderror" name="datePickup" value="{{old('datePickup', $trip->datePickup)}}" required autocomplete="datePickup" autofocus >

		@error('datePickup')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<script>
	$(document).ready( function()
	{
		var d = new Date();
		var h = addZero(d.getHours());
		var m = addZero(d.getMinutes());
		d = h + ":" + m;
		$('#timePickup').val(d);
		function addZero(i)
		{
			if (i < 10)
			{
				i = "0" + i;
			}
			return i;
		}
	});
</script>

<div class="form-group row">
	<label for="timePickup" class="col-md-4 col-form-label text-md-right">{{ __('timePickup') }}</label>

	<div class="col-md-6">
		<input id="timePickup" type="time"  class="form-control @error('timePickup') is-invalid @enderror" name="timePickup" value="{{old('timePickup', $trip->timePickup)}}" required autocomplete="timePickup" autofocus value="10:30 PM">

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
		<input id="placePickup" type="text" placeholder="{{ __('placePickup') }}" class="form-control @error('placePickup') is-invalid @enderror" name="placePickup" value="{{old('placePickup', Auth::user()->placePickup, $trip->placePickup)}}" required autocomplete="placePickup" autofocus>
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
		<input id="placeDropoff" type="text" placeholder="{{ __('placeDropoff') }}" class="form-control @error('placeDropoff') is-invalid @enderror" name="placeDropoff" value="{{old('placeDropoff', Auth::user()->placeDropoff, $trip->placeDropoff)}}" required autocomplete="placeDropoff" autofocus>

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
		<select name="seats" id="seats" value = 4>
			<option value="4">4</option>
			<option value="3">3</option>
			<option value="2">2</option>
			<option value="1">1</option>
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
		<input id="meetingPlace" type="text" placeholder="{{ __('meetingPlace') }}" class="form-control @error('meetingPlace') is-invalid @enderror" name="meetingPlace" value="{{old('meetingPlace', Auth::user()->placePickup, $trip->meetingPlace)}}" required autocomplete="meetingPlace" autofocus>

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
		<textarea id="places" rows="10" cols="50"  type="text" placeholder="{{ __('places') }}" class="form-control @error('places') is-invalid @enderror" name="places" value="{{old('places', $trip->places)}}" required autocomplete="places" autofocus></textarea>
		@error('places')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="place" class="col-md-4 col-form-label text-md-right">{{ __('Add trip sites') }}</label>

	<div class="col-md-6">
		<input id="place" type="text" placeholder="{{ __('Add trip sites') }}" class="form-control @error('place') is-invalid @enderror" name="place" value="{{old('meetingPlace')}}" autocomplete="place" autofocus>

		@error('place')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label class="col-md-4 col-form-label text-md-right"></label>

	<div class="col-md-6">
		<div class="row">
			<div class="col-sm-6">
				<script>
					var placeDropoffTemp = document.getElementById("placeDropoff").value
					var placePickupTemp = document.getElementById("placePickup").value
					var placesTemp = [placeDropoffTemp,placePickupTemp];
					document.getElementById("place").value = placesTemp;
					function addPlace()
					{
						placesTemp.splice(0,0,document.getElementById("place").value);
						document.getElementById("places").value = placesTemp;
						document.getElementById("place").value = '';
					}
					function removePlace()
					{
						placesTemp.shift();
						document.getElementById("place").value = '';
					}
					document.addEventListener('DOMContentLoaded', function()
					{
						document.querySelector('#add-trip-sites').onclick = function()
						{
							addPlace();
						}
						document.querySelector('#remove-trip-sites').onclick = function()
						{
							removePlace();
							document.getElementById("places").value = placesTemp;
							document.getElementById("place").value = '';
						}
					});


				</script>
				<button type="button" id="add-trip-sites" class="btn btn-outline-success">
					{{ __('Add trip sites') }}
				</button>
			</div>
			<div class="col-sm-6">

				<button type="button" id="remove-trip-sites" class="btn btn-outline-danger">
					{{ __('Disaggregate trip sites') }}
				</button>
			</div>
		</div>
	</div>
</div>


<div class="form-group row mb-0">
	<div class="col-md-6 offset-md-4">
		<button type="submit" class="btn btn-outline-primary">
			{{__($btnText)}}
		</button>
	</div>
</div>
@endauth