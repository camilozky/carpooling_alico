@extends('layout')

@section('title', 'Unirse al viaje hacia | ' .$trip->placeDropoff)

@section('content')
		<h1>{{ $trip->placeDropoff}}</h1>
		<li>Conductor: {{ $trip->name }} <br> <small>Cupos: {{ $trip->seats }} <br>Día: {{ $trip->datePickup }}<br>Hora: {{ $trip->timePickup }}<br>Lugar de Recogida: {{ $trip->placePickup }}<br>Lugar de Destino: {{ $trip->placeDropoff }}<br>Lugar de Encuentro: {{ $trip->meetingPlace }}  <br>El viaje pasara por los siguientes lugares: {{ $trip->places }}  <br>Correo electrónico del conductor:  {{ $trip->email }} <br>  {{ $trip->updated_at->diffForHumans() }}  </small> </li>
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
	<form method="POST" action="{{ route('maketrip') }}">
		@csrf
		<button class="button buttonGreen">{{ __('Join a trip') }}</button>
	</form>

@endsection