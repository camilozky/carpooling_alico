<div class="form-group row">
	<label for="passengerName" class="col-md-4 col-form-label text-md-right">{{ __('passengerName') }}</label>

	<div class="col-md-6">
		<input id="passengerName" type="text" placeholder="{{ __('passengerName') }}" class="form-control @error('passengerName') is-invalid @enderror" name="passengerName" value="{{old('passengerName')}}" required autocomplete="passengerName" autofocus>

		@error('passengerName')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="emailPassenger" class="col-md-4 col-form-label text-md-right">{{ __('emailPassenger') }}</label>

	<div class="col-md-6">
		<input id="emailPassenger" type="email" placeholder="{{ __('emailPassenger') }}" class="form-control @error('emailPassenger') is-invalid @enderror" name="emailPassenger" value="{{old('emailPassenger')}}" required autocomplete="emailPassenger" autofocus>

		@error('emailPassenger')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="phonenumberPassenger" class="col-md-4 col-form-label text-md-right">{{ __('phonenumberPassenger') }}</label>

	<div class="col-md-6">
		<input id="phonenumberPassenger" type="tel" placeholder="{{ __('phonenumberPassenger') }}" class="form-control @error('phonenumberPassenger') is-invalid @enderror" name="phonenumberPassenger" value="{{old('phonenumberPassenger')}}" required autocomplete="phonenumberPassenger" autofocus>

		@error('phonenumberPassenger')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
</div>

<div class="form-group row">
	<label for="seats" class="col-md-4 col-form-label text-md-right">{{ __('seats') }}</label>
	<div class="col-md-6">
		<input id="seats" type="text" class="form-control" name="seats" readonly value="{{ $trip->seats }}" required autocomplete="seats" autofocus>
	</div>
</div>
