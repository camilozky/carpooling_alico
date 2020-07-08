<!DOCTYPE html>
<html>
<head>
	<title>"{{ __('Message Subject') }}"</title>
</head>
<body>

	{{ var_dump($validatedRequestFields) }}

	<h1>Hola: {{ $validatedRequestFields['nameDriver'] }}</h1>
	<h2>Acabaste de crear un viaje con el correo: {{ $validatedRequestFields['email'] }} y número de teléfono: {{ $validatedRequestFields['phoneNumber'] }}</h2>
	<h2>Para el día: {{ $validatedRequestFields['datePickup'] }} a las: {{ $validatedRequestFields['timePickup'] }}</h2>
	{{-- <h2>Para la semana: {{ $validatedRequestFields['weekPickup'] }}</h2> --}}
	<h2>Lugar de recogida: {{ $validatedRequestFields['placePickup'] }} con destino: {{ $validatedRequestFields['placeDropoff'] }}</h2>
	<h2>Cupos Disponibles: {{ $validatedRequestFields['seats'] }}</h2>
	<h2>Lugar de Encuentro: {{ $validatedRequestFields['meetingPlace'] }}</h2>
	<h2>El viaje pasara por los siguientes lugares: {{ $validatedRequestFields['places'] }}</h2>
</body>
</html>
