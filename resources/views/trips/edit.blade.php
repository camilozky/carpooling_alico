@extends('layout')

@section('title', 'Editar el Viaje hacia | ' .$trip->placeDropoff)

@section('content')
	<h1>{{ __('Edit a trip') }} {{ __('destined') }} {{ $trip->placeDropoff }} </h1>

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
		{{ __('Enter Name') }}<br>
		<input name="nameDriver" placeholder="{{ __('Enter Name') }}" value="{{old('nameDriver', $trip->nameDriver)}}"><br>
		{!! $errors->first('nameDriver','<small class="red">:message</small><br>')!!}
		{{ __('Enter Email') }}<br>
		<input type="email" name="email" placeholder="{{ __('Enter Email') }}" value="{{old('email', $trip->email)}}"><br>
		{!! $errors->first('email','<small class="red">:message</small><br>')!!}
		{{ __('Enter whatsApp') }}<br>
		<input type="tel" name="phoneNumber" placeholder="{{ __('Enter whatsApp') }}" value="{{old('phoneNumber', $trip->phoneNumber)}}"><br>
		{!! $errors->first('phoneNumber','<small class="red">:message</small><br>')!!}
		{{ __('Enter datePickup') }}<br>
		<input type="date" name="datePickup" placeholder="Enter pickup Date" value="{{old('datePickup', $trip->datePickup)}}"><br>
		{!! $errors->first('datePickup','<small class="red">:message</small><br>')!!}
		{{ __('Enter timePickup') }}<br>
		<input type="time" name="timePickup" placeholder="Enter pickup Time" value="{{old('timePickup', $trip->timePickup)}}"><br>
		{!! $errors->first('timePickup','<small class="red">:message</small><br>')!!}
		{{ __('Enter pickup location') }}<br>
		<input type="subject" name="placePickup" placeholder="{{ __('Enter pickup location') }}" value="{{old('placePickup', $trip->placePickup)}}"><br>
		{!! $errors->first('placePickup','<small class="red">:message</small><br>')!!}
		{{ __('Enter destination') }}<br>
		<input type="subject" name="placeDropoff" placeholder="{{ __('Enter destination') }}" value="{{old('placeDropoff', $trip->placeDropoff)}}"><br>
		{!! $errors->first('placeDropoff','<small class="red">:message</small><br>')!!}
		{{ __('Enter seats') }}<br>
		<input type="number" name="seats" placeholder="{{ __('Enter seats') }}"value="{{old('seats', $trip->seats)}}"><br>
		{!! $errors->first('seats','<small class="red">:message</small><br>')!!}
		{{ __('Enter a meeting place') }}<br>
		<input type="subject" name="meetingPlace" placeholder="{{ __('Enter a metting place') }}"value="{{old('meetingPlace', $trip->meetingPlace)}}"><br>
		{!! $errors->first('meetingPlace','<small class="red">:message</small><br>')!!}
		{{ __('Enter places') }}<br>
		<input type="subject" name="places"  placeholder="{{ __('Enter places destination') }}"value="{{old('places', $trip->places)}}"><br>
		{!! $errors->first('places','<small class="red">:message</small><br>')!!}
		{{ $trip->created_at->diffForHumans() }}<br>
		<button class="button buttonGreen">{{ __('update') }}</button>
	</form>
@endsection
