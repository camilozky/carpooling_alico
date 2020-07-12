@extends('layouts.app')

@section('title', 'Crear un Viaje')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Make a trip') }}</div>
				<div class="card-body">
					<form method="POST" action="{{ route('trips.store') }}">
						@include('partials.validation-errors')
						@include('trips._form', ['btnText' => 'Make a trip'])
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
