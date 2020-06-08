@extends('layout')

@section('title', 'Make a Trip')

@section('content')
	<h1>Make a trip</h1>
	<script type="text/javascript">
		function ConfirmTrip()
		{
			var message = confirm("¿Estas seguro de crear el viaje?");
			if (message)
			{
				alert("¡Haz creado el viaje correctamente!");
			}
			else
			{
				alert("¡Haz cancelado la creación del viaje!");
			}
		}
	</script>
	<form method="POST" action="{{ route('maketrip') }}">
		@csrf
		<input name="name" placeholder="Nombre"><br>
		<input type="email" name="email" placeholder="Correo Electrónico"><br>
		<input type="tel" name="phone" placeholder="whatsApp"><br>
		<input type="date" name="datePickup" placeholder="Fecha"><br>
		<input name="weekPickup" type="week"><br>
		<input type="time" name="timePickup" placeholder="Hora"><br>
		<input type="subject" name="placePickup" placeholder="Lugar de Recogida"><br>
		<input type="subject" name="placeDropoff" placeholder="Lugar de Destino"><br>
		<input type="radio" id="vehicle1" name="vehicle1" value="Moto">
		<label for="vehicle1"> Tengo Moto</label>
		<input type="radio" id="vehicle2" name="vehicle2" value="Car">
		<label for="vehicle2"> Tengo Carro</label><br>
		<input type="number" name="seats" placeholder="Cupos"><br>
		<input type="subject" name="placeMeet" placeholder="Lugar de Encuentro"><br>
		<textarea name="places" placeholder="Sitios del viaje" ></textarea><br>
		<input type="button" onclick="ConfirmTrip()" value="Crear viaje" />
		<input type="reset" value="Limpiar datos">
	</form>
@endsection
