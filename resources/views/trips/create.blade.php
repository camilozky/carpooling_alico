@extends('layout')

@section('title', 'Crear un Viaje')

@section('content')
	<h1>{{ __('Make a trip') }}</h1>


@if($errors->any())
	{!! $errors->first('nameDriver','<small class="red">:message</small><br>')!!}
	{!! $errors->first('email','<small class="red">:message</small><br>')!!}
	{!! $errors->first('phoneNumber','<small class="red">:message</small><br>')!!}
	{!! $errors->first('datePickup','<small class="red">:message</small><br>')!!}
	{!! $errors->first('timePickup','<small class="red">:message</small><br>')!!}
	{!! $errors->first('placePickup','<small class="red">:message</small><br>')!!}
	{!! $errors->first('placeDropoff','<small class="red">:message</small><br>')!!}
	{!! $errors->first('seats','<small class="red">:message</small><br>')!!}
	{!! $errors->first('meetingPlace','<small class="red">:message</small><br>')!!}
	{!! $errors->first('places','<small class="red">:message</small><br>')!!}
@endif

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
		@csrf
		<input name="nameDriver" placeholder="{{ __('Enter Name') }}" value="{{old('nameDriver')}}"><br>
		{!! $errors->first('nameDriver','<small class="red">:message</small><br>')!!}
		<input type="email" name="email" placeholder="{{ __('Enter Email') }}"value="{{old('email')}}"><br>
		{!! $errors->first('email','<small class="red">:message</small><br>')!!}
		<input type="tel" name="phoneNumber" placeholder="{{ __('Enter whatsApp') }}"value="{{old('phoneNumber')}}"><br>
		{!! $errors->first('phoneNumber','<small class="red">:message</small><br>')!!}
		<input type="date" name="datePickup" placeholder="Enter pickup Date"value="{{old('datePickup')}}"><br>
		{!! $errors->first('datePickup','<small class="red">:message</small><br>')!!}
		<input type="time" name="timePickup" placeholder="Enter pickup Time"value="{{old('timePickup')}}"><br>
		{!! $errors->first('timePickup','<small class="red">:message</small><br>')!!}
		<input type="subject" name="placePickup" placeholder="{{ __('Enter pickup location') }}"value="{{old('placePickup')}}"><br>
		{!! $errors->first('placePickup','<small class="red">:message</small><br>')!!}
		<input type="subject" name="placeDropoff" placeholder="{{ __('Enter destination') }}"value="{{old('placeDropoff')}}"><br>
		{!! $errors->first('placeDropoff','<small class="red">:message</small><br>')!!}
		<input type="number" name="seats" placeholder="{{ __('Enter seats') }}"value="{{old('seats')}}"><br>
		{!! $errors->first('seats','<small class="red">:message</small><br>')!!}
		<input type="subject" name="meetingPlace" placeholder="{{ __('Enter a metting place') }}"value="{{old('meetingPlace')}}"><br>
		{!! $errors->first('meetingPlace','<small class="red">:message</small><br>')!!}
		<input type="subject" type="subject" name="places" rows="10" cols="22" placeholder="{{ __('Enter places destination') }}"value="{{old('places')}}"><br>
		{!! $errors->first('places','<small class="red">:message</small><br>')!!}
		<button class="button buttonGreen">{{ __('Make a trip') }}</button>
	</form>
@endsection
