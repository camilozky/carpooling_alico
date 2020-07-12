@if($trip->passengerName <> NULL)
	<div class="form-group row">
		<label for="passengerName" class="col-md-4 col-form-label text-md-right">{{ __('passengerName') }}</label>
		<div class="col-md-6">
			<input id="passengerName" type="text" class="form-control" name="passengerName" readonly value="{{ $trip->passengerName }}" required autocomplete="passengerName" autofocus>
		</div>
	</div>
	<div class="form-group row">
		<label for="emailPassenger" class="col-md-4 col-form-label text-md-right">{{ __('emailPassenger') }}</label>
		<div class="col-md-6">
			<input id="emailPassenger" type="text" class="form-control" name="emailPassenger" readonly value="{{ $trip->emailPassenger }}" required autocomplete="emailPassenger" autofocus>
		</div>
	</div>
	<div class="form-group row">
		<label for="phonenumberPassenger" class="col-md-4 col-form-label text-md-right">{{ __('phonenumberPassenger') }}</label>
		<div class="col-md-6">
			<input id="phonenumberPassenger" type="text" class="form-control" name="phonenumberPassenger" readonly value="{{ $trip->phonenumberPassenger }}" required autocomplete="phonenumberPassenger" autofocus>
		</div>
	</div>
@else
@endif
