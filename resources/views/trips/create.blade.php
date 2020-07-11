@extends('layouts.app')

@section('title', 'Crear un Viaje')

@section('content')
	<h1>{{ __('Make a trip') }}</h1>

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
	<form method="POST" action="{{ route('trips.store') }}">
		@include('trips._form', ['btnText' => 'Make a trip'])
	</form>
@endsection
