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
		<input name="name" value="{{ $trip->name }}" placeholder="{{ __('Enter Name') }}" value="{{old('name')}}"><br>
		{!! $errors->first('name','<small class="red">:message</small><br>')!!}
		{{ __('Enter Email') }}<br>
		<input type="email" name="email" value="{{ $trip->email }}" placeholder="{{ __('Enter Email') }}"value="{{old('email')}}"><br>
		{!! $errors->first('email','<small class="red">:message</small><br>')!!}
		{{ __('Enter whatsApp') }}<br>
		<input type="tel" name="phonenumber" value="{{ $trip->phonenumber }}" placeholder="{{ __('Enter whatsApp') }}"value="{{old('phone')}}"><br>
		{!! $errors->first('phone','<small class="red">:message</small><br>')!!}
		{{ __('Enter datePickup') }}<br>
		<input type="date" name="datePickup" value="{{ $trip->datePickup }}" placeholder="Enter pickup Date"value="{{old('datePickup')}}"><br>
		{!! $errors->first('datePickup','<small class="red">:message</small><br>')!!}
		{{ __('Enter timePickup') }}<br>
		<input type="time" name="timePickup" value="{{ $trip->timePickup }}" placeholder="Enter pickup Time"value="{{old('timePickup')}}"><br>
		{!! $errors->first('timePickup','<small class="red">:message</small><br>')!!}
		{{ __('Enter pickup location') }}<br>
		<input type="subject" name="placePickup" value="{{ $trip->placePickup }}" placeholder="{{ __('Enter pickup location') }}"value="{{old('placePickup')}}"><br>
		{!! $errors->first('placePickup','<small class="red">:message</small><br>')!!}
		{{ __('Enter destination') }}<br>
		<input type="subject" name="placeDropoff" value="{{ $trip->placeDropoff }}" placeholder="{{ __('Enter destination') }}"value="{{old('placeDropoff')}}"><br>
		{!! $errors->first('placeDropoff','<small class="red">:message</small><br>')!!}
		{{ __('Enter seats') }}<br>
		<input type="number" name="seats" value="{{ $trip->seats }}" placeholder="{{ __('Enter seats') }}"value="{{old('seats')}}"><br>
		{!! $errors->first('seats','<small class="red">:message</small><br>')!!}
		{{ __('Enter a meeting place') }}<br>
		<input type="subject" name="meetingPlace" value="{{ $trip->meetingPlace }}" placeholder="{{ __('Enter a metting place') }}"value="{{old('meetingPlace')}}"><br>
		{!! $errors->first('meetingPlace','<small class="red">:message</small><br>')!!}
		{{ __('Enter places') }}<br>
		<input type="subject" name="places" value="{{ $trip->places }}" rows="10" cols="22" placeholder="{{ __('Enter places destination') }}"value="{{old('places')}}"><br>
		{!! $errors->first('places','<small class="red">:message</small><br>')!!}
		{{ $trip->updated_at->diffForHumans() }}<br>
		<button class="button buttonGreen">{{ __('update') }}</button>
	</form>
@endsection
