@extends('layout')

@section('title', 'Unirse al Viaje hacia | ' .$trip->placeDropoff)

@section('content')
	<h1>{{ __('Join a trip') }} {{ __('destined') }} {{ $trip->placeDropoff }} </h1>

	@include('partials.validation-errors')


	<style>
	.button
	{
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
	}
	.buttonGreen {background-color: #006400;} /* Green */
	.red
	{
		font-size: smaller;
		color: red
	}
	</style>
	<form method="POST" action="{{ route('trips.join', $trip) }}">
		@method('PATCH')
		@include('trips._form-sign-info-passenger')
		@include('trips._form-sign-info-trip')
		<button class="button buttonGreen">{{ __('Join a trip') }}</button>
	</form>
	@include('trips._form-sign-passenger')
@endsection
