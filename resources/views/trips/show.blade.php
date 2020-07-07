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
		{{ __('name') }}<br>
		<label name="name" >{{ $trip->name }}<br>
		{{ __('email') }}<br>
		<label type="email" name="email">{{ $trip->email }}<br>
		{{ __('phonenumber') }}<br>
		<label type="tel" name="phonenumber">{{ $trip->phonenumber }}<br>
		{{ __('datePickup') }}<br>
		<label type="date" name="datePickup" >{{ $trip->datePickup }}<br>
		{{ __('timePickup') }}<br>
		<label type="time" name="timePickup">{{ $trip->timePickup }}<br>
		{{ __('placePickup') }}<br>
		<label type="subject" name="placePickup">{{ $trip->placePickup }}<br>
		{{ __('placeDropoff') }}<br>
		<label type="subject" name="placeDropoff">{{ $trip->placeDropoff }}<br>
		{{ __('seats') }}<br>
		<label type="number" name="seats">{{ $trip->seats }}<br>
		{{ __('meetingPlace') }}<br>
		<label type="subject" name="meetingPlace">{{ $trip->meetingPlace }}<br>
		{{ __('places') }}<br>
		<label type="subject" name="places">{{ $trip->places }}<br>
		{{ $trip->updated_at->diffForHumans() }}<br>
		<a href="{{ route('trips.edit', $trip) }}">{{ __('edit') }}</a><br>
		<button class="button buttonGreen">{{ __('Join a trip') }}</button>
	</form>

@endsection
