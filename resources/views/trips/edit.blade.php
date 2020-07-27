@extends('layouts.app')

@section('title', 'Editar el Viaje hacia | ' .$trip->placeDropoff)

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Edit a trip') }} {{ __('destined') }} {{ $trip->placeDropoff }}</div>
				<div class="card-body">
					<form method="POST" action="{{ route('trips.update', $trip) }}">
						@include('partials.validation-errors')
						@method('PATCH')
						@include('trips._form-info-user-edit', ['btnText' => 'update'])
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
