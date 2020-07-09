@extends('layout')

@section('title', 'Unirse al Viaje hacia | ' .$trip->placeDropoff)

@section('content')
	<h1>{{ __('Join a trip') }} {{ __('destined') }} {{ $trip->placeDropoff }} </h1>

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
		@csrf @method('PATCH')
		<input name="passengerName" placeholder="{{ __('Enter Name') }}" value="{{old('passengerName')}}" ><br>
		{!! $errors->first('passengerName','<small class="red">:message</small><br>')!!}
		<input type="emailPassenger" name="emailPassenger" placeholder="{{ __('Enter Email') }}" value="{{old('emailPassenger')}}" ><br>
		{!! $errors->first('emailPassenger','<small class="red">:message</small><br>')!!}
		<input type="tel" name="phonenumberPassenger" placeholder="{{ __('Enter whatsApp') }}" value="{{old('phonenumberPassenger')}}"><br>
		{!! $errors->first('phonenumberPassenger','<small class="red">:message</small><br>')!!}
		{{ __('seats') }}<label type="number" name="seats" > {{old('seats', $trip->seats)}}</label><br>
		{{ $trip->created_at->diffForHumans() }}<br>

		<h1>{{ __('Trip information') }} {{ __('destined') }} {{ $trip->placeDropoff }} </h1>

		{{ __('nameDriver') }}:<br>
		<input type="subject" name="nameDriver" readonly value="{{ $trip->nameDriver }}"><br>
		{{ __('email') }}:<br>
		<input type="subject" name="email" readonly value="{{ $trip->email }} "><br>
		{{ __('phoneNumber') }}:<br>
		<input type="subject" name="phoneNumber" readonly value="{{ $trip->phoneNumber }} "><br>
		{{ __('datePickup') }}:<br>
		<input type="subject" name="datePickup" readonly value="{{ $trip->datePickup }} "><br>
		{{ __('timePickup') }}:<br>
		<input type="subject" name="timePickup" readonly value="{{ $trip->timePickup }} "><br>
		{{ __('placePickup') }}:<br>
		<input type="subject" name="placePickup" readonly value="{{ $trip->placePickup }} "><br>
		{{ __('placeDropoff') }}:<br>
		<input type="subject" name="placeDropoff" readonly value="{{ $trip->placeDropoff }} "><br>
		{{__('seats')}}:<br>
		<input type="subject" name="seats" readonly value="{{ $trip->seats }}"><br>
		{{__('meetingPlace')}}:<br>
		<input type="subject" name="meetingPlace" readonly value="{{ $trip->meetingPlace }}"><br>
		{{__('places')}}:<br>
		<input type="subject" name="places" readonly value="{{ $trip->places }}"><br>


		<button class="button buttonGreen">{{ __('Join a trip') }}</button>
	</form>

	@if($trip->passengerName <> NULL)
		<h1>{{ __('Passenger information') }}<br></h1>
		{{ __('passengerName') }}<br>
		<label name="passengerName" >{{ $trip->passengerName }}<br>
		{{ __('emailPassenger') }}<br>
		<label name="emailPassenger" >{{ $trip->emailPassenger }}<br>
		{{ __('phonenumberPassenger') }}<br>
		<label name="phonenumberPassenger" >{{ $trip->phonenumberPassenger }}<br>
	@else
	@endif

@endsection
