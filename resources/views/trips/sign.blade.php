@extends('layouts.app')

@section('title', 'Unirse al Viaje hacia | ' .$trip->placeDropoff)

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Join a trip') }} {{ __('destined') }} {{ $trip->placeDropoff }}</div>
				<div class="card-body">
					<form method="POST" action="{{ route('trips.join', $trip) }}">
						@csrf @method('PATCH')
						@include('partials.validation-errors')
						@include('trips._form-sign-info-passenger')
						@include('trips._form-sign-info-trip')
						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-outline-primary btn-block">
									{{ __('Join a trip') }}
								</button>
							</div>
						</div>
					</form><br>
					<div class="card-header">{{ __('Join a trip') }} {{ __('destined') }} {{ $trip->placeDropoff }}</div>
					<div class="card-body">
						@include('trips._form-sign-passenger')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

