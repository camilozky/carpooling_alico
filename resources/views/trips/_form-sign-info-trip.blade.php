<div class="form-group row">
	<label for="nameDriver" class="col-md-4 col-form-label text-md-right">{{ __('nameDriver') }}</label>
	<div class="col-md-6">
		<input id="nameDriver" type="text" class="form-control" name="nameDriver" readonly value="{{ $trip->nameDriver }}" required autocomplete="nameDriver" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>
	<div class="col-md-6">
		<input id="email" type="text" class="form-control" name="email" readonly value="{{ $trip->email }}" required autocomplete="email" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('phoneNumber') }}</label>
	<div class="col-md-6">
		<input id="phoneNumber" type="text" class="form-control" name="phoneNumber" readonly value="{{ $trip->phoneNumber }}" required autocomplete="phoneNumber" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="datePickup" class="col-md-4 col-form-label text-md-right">{{ __('datePickup') }}</label>
	<div class="col-md-6">
		<input id="datePickup" type="text" class="form-control" name="datePickup" readonly value="{{ $trip->datePickup }}" required autocomplete="datePickup" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="datePickup" class="col-md-4 col-form-label text-md-right">{{ __('datePickup') }}</label>
	<div class="col-md-6">
		<input id="datePickup" type="text" class="form-control" name="datePickup" readonly value="{{ $trip->datePickup }}" required autocomplete="datePickup" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="timePickup" class="col-md-4 col-form-label text-md-right">{{ __('timePickup') }}</label>
	<div class="col-md-6">
		<input id="timePickup" type="text" class="form-control" name="timePickup" readonly value="{{ $trip->timePickup }}" required autocomplete="timePickup" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="placePickup" class="col-md-4 col-form-label text-md-right">{{ __('placePickup') }}</label>
	<div class="col-md-6">
		<input id="placePickup" type="text" class="form-control" name="placePickup" readonly value="{{ $trip->placePickup }}" required autocomplete="placePickup" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="placeDropoff" class="col-md-4 col-form-label text-md-right">{{ __('placeDropoff') }}</label>
	<div class="col-md-6">
		<input id="placeDropoff" type="text" class="form-control" name="placeDropoff" readonly value="{{ $trip->placeDropoff }}" required autocomplete="placeDropoff" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="seats" class="col-md-4 col-form-label text-md-right">{{ __('seats') }}</label>
	<div class="col-md-6">
		<input id="seats" type="text" class="form-control" name="seats" readonly value="{{ $trip->seats }}" required autocomplete="seats" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="meetingPlace" class="col-md-4 col-form-label text-md-right">{{ __('meetingPlace') }}</label>
	<div class="col-md-6">
		<input id="meetingPlace" type="text" class="form-control" name="meetingPlace" readonly value="{{ $trip->meetingPlace }}" required autocomplete="meetingPlace" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="places" class="col-md-4 col-form-label text-md-right">{{ __('places') }}</label>
	<div class="col-md-6">
		<input id="places" type="text" class="form-control" name="places" readonly value="{{ $trip->places }}" required autocomplete="places" autofocus>
	</div>
</div>
<div class="form-group row">
	<label for="places" class="col-md-4 col-form-label text-md-right">{{ $trip->created_at->diffForHumans() }}</label>
	<div class="col-md-6">
	</div>
</div>
