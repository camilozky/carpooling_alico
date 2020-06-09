@extends('layout')

@section('title', 'Make a Trip')

@section('content')
	<h1>Make a trip</h1>
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
	.buttonGreen {background-color: #4CAF50;} /* Green */
	.red
	{
		font-size: smaller;
		color: red
	}
	</style>
	<form method="POST" action="{{ route('maketrip') }}">
		@csrf
		<input name="name" placeholder="Nombre" value="{{old('name')}}"><br>
		{!! $errors->first('name','<small class="red">:message</small><br>')!!}
		<input type="email" name="email" placeholder="Correo Electrónico"value="{{old('email')}}"><br>
		{!! $errors->first('email','<small class="red">:message</small><br>')!!}
		<input type="tel" name="phone" placeholder="whatsApp"value="{{old('phone')}}"><br>
		{!! $errors->first('phone','<small class="red">:message</small><br>')!!}
		<input type="date" name="datePickup" placeholder="Fecha"value="{{old('datePickup')}}"><br>
		{!! $errors->first('datePickup','<small class="red">:message</small><br>')!!}
		<input name="weekPickup" type="week"><br>
		<input type="time" name="timePickup" placeholder="Hora"value="{{old('timePickup')}}"><br>
		{!! $errors->first('timePickup','<small class="red">:message</small><br>')!!}
		<input type="subject" name="placePickup" placeholder="Lugar de Recogida"value="{{old('placePickup')}}"><br>
		{!! $errors->first('placePickup','<small class="red">:message</small><br>')!!}
		<input type="subject" name="placeDropoff" placeholder="Lugar de Destino"value="{{old('placeDropoff')}}"><br>
		{!! $errors->first('placeDropoff','<small class="red">:message</small><br>')!!}
		<input type="radio" id="vehicle1" name="vehicle1" value="Moto">
		<label for="vehicle1"> Tengo Moto</label>
		<input type="radio" id="vehicle2" name="vehicle2" value="Car">
		<label for="vehicle2"> Tengo Carro</label><br>
		<input type="number" name="seats" placeholder="Cupos"value="{{old('seats')}}"><br>
		{!! $errors->first('seats','<small class="red">:message</small><br>')!!}
		<input type="subject" name="placeMeet" placeholder="Lugar de Encuentro"value="{{old('placeMeet')}}"><br>
		{!! $errors->first('placeMeet','<small class="red">:message</small><br>')!!}
		<input type="subject" name="places" placeholder="Sitios del viaje"value="{{old('places')}}"><br>
		{!! $errors->first('places','<small class="red">:message</small><br>')!!}
		<button class="button buttonGreen">Crear Viaje</button>
		<button type="reset" class="button buttonGreen">Limpiar datos</button>
	</form>
@endsection
