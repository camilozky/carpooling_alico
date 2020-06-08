@extends('layout')

@section('title', 'Make a Trip')

@section('content')
	<h1>Make a trip</h1>
	<form method="POST" action="{{ route('maketrip') }}">
		@csrf
		<input name="name" placeholder="Nombre"><br>
		<input type="email" name="email" placeholder="Correo Electrónico"><br>
		<input type="date" name="datePickup" placeholder="Fecha"><br>
		<input type="time" name="timePickup" placeholder="Hora"><br>
		<input type="subject" name="placePickup" placeholder="Lugar de Recogida"><br>
		<input type="subject" name="placeDropoff" placeholder="Lugar de Destino"><br>
		<input type="number" name="seats" placeholder="Cupos"><br>
		<input type="subject" name="placeMeet" placeholder="Lugar de Encuentro"><br>
		<textarea name="places" placeholder="Sitios del viaje" ></textarea><br>
		<button>Crear Viaje</button>
	</form>
@endsection
