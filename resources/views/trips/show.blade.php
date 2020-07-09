@extends('layout')

@section('title', 'Unirse al viaje hacia | ' .$trip->placeDropoff)

@section('content')

	<h1>{{ __('placeDropoff') }}: {{ $trip->placeDropoff}}</h1>
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


	<form method="POST" action="{{ route('trips.update', $trip) }}">
		@csrf @method('PATCH')
		@include('trips._form-show')
	</form>
@endsection
