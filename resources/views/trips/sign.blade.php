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
		<input type="hidden" name="seatsPassenger" value=1>
		<input name="passengerName" placeholder="{{ __('Enter Name') }}" value="{{old('passengerName')}}" ><br>
		{!! $errors->first('passengerName','<small class="red">:message</small><br>')!!}
		<input type="emailPassenger" name="emailPassenger" placeholder="{{ __('Enter Email') }}" value="{{old('emailPassenger')}}" ><br>
		{!! $errors->first('emailPassenger','<small class="red">:message</small><br>')!!}
		<input type="tel" name="phonenumberPassenger" placeholder="{{ __('Enter whatsApp') }}" value="{{old('phonenumberPassenger')}}"><br>
		{!! $errors->first('phonenumberPassenger','<small class="red">:message</small><br>')!!}
		{{ __('seats') }}<label type="number" name="seats" > {{old('seats', $trip->seats)}}</label><br>
		{{ $trip->created_at->diffForHumans() }}<br>
		<button class="button buttonGreen">{{ __('Join a trip') }}</button>
	</form>
@endsection
