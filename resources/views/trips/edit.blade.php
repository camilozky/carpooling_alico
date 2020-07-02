@extends('layout')

@section('title', 'Unirse al viaje hacia | ' .$trip['name'])

@section('content')
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

	<form method="POST" action="{{ route('trips.update') }}">
		@csrf
		<small>
		<li>
		<label type="subject" name="placeDropoff" >{{ __('placeDropoff') }}: {{ $trip['placeDropoff']}}<br>
		<label type="subject" name="name" >{{ __('name') }}: {{ $trip['name']}}<br>
		<label type="subject" name="seats" >{{ __('seats') }}: {{ $trip['seats']}}<br>
		<label type="subject" name="datePickup" >{{ __('datePickup') }}: {{ $trip['datePickup']}}<br>
		<label type="subject" name="timePickup" >{{ __('timePickup') }}: {{ $trip['timePickup']}}<br>
		<label type="subject" name="placePickup" >{{ __('placePickup') }}: {{ $trip['placePickup']}}<br>
		<label type="subject" name="meetingPlace" >{{ __('meetingPlace') }}: {{ $trip['meetingPlace']}}<br>
		<label type="subject" name="places" >{{ __('places') }}: {{ $trip['places']}}<br></small> </li>
		<button class="button buttonGreen">{{ __('Join a trip') }}</button>
	</form>

@endsection



