@extends('layouts.app')

@section('title', 'Detalle del viaje hacia | ' .$trip->placeDropoff)

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Trip information') }} {{ __('destined') }}: {{ $trip->placeDropoff}}</div>
				<div class="card-body">
					@include('trips._form-sign-info-trip')
					@if($trip->passengerName <> NULL)
					<div class="card-header">{{ __('Passenger information') }}</div>
					<div class="card-body">
						<div class="form-group row">
							<label for="nameDriver" class="col-md-4 col-form-label text-md-right">{{ __('nameDriver') }}</label>
							<div class="col-md-6">
								<input id="nameDriver" type="text" class="form-control" name="nameDriver" readonly value="{{ $trip->nameDriver }}" required autocomplete="nameDriver" autofocus>
							</div>
						</div>
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

{{-- 						Here's the condition that you won't allow a driver to join your own trip
						Aqui es la condición de que no permitas que un conductor se una a su propio viaje.
						@if($trip->emailPassenger) --}}

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<a href="{{ route('trips.edit', $trip) }}">{{ __('edit') }}</a><br>
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<form method="POST" action="{{ route('trips.destroy', $trip) }}">
										@csrf @method('DELETE')
										<button type="submit" class="btn btn-primary">
											{{ __('delete') }}
										</button>
									</form>
								</div>
							</div>

							@endif
							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									@if($trip->seats > 0)
									<a href="{{ route('trips.sign', $trip) }}">{{ __('Join a trip') }}</a>
									@endif
								</div>
							</div>
{{-- 						@endif --}}

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
