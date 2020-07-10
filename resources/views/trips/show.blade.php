@extends('layout')

@section('title', 'Detalle del viaje hacia | ' .$trip->placeDropoff)

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

@include('trips._form-sign-info-trip')

@if($trip->passengerName <> NULL)
{{ __('Passenger information') }}<br>
{{ __('passengerName') }}<br>
<label name="passengerName" >{{ $trip->passengerName }}<br>
{{ __('emailPassenger') }}<br>
<label name="emailPassenger" >{{ $trip->emailPassenger }}<br>
{{ __('phonenumberPassenger') }}<br>
<label name="phonenumberPassenger" >{{ $trip->phonenumberPassenger }}<br>
@else
<a href="{{ route('trips.edit', $trip) }}">{{ __('edit') }}</a><br>
@endif
@if($trip->seats > 0)
	<a href="{{ route('trips.sign', $trip) }}">{{ __('Join a trip') }}</a><br>
@else
@endif

@endsection
