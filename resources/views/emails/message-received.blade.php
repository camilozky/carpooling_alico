<!DOCTYPE html>
<html>
<head>
	<title>Message Subject</title>
</head>
<body>
	message content

	{{ var_dump($msg) }}

	<h1>Hola: {{ $msg['name'] }}</h1>
	<h2>Acabaste de crear un viaje con el correo: {{ $msg['email'] }} y número de teléfono: {{ $msg['phone'] }}</h2>
	<h2>Para el día: {{ $msg['datePickup'] }} a las: {{ $msg['timePickup'] }}</h2>
	<h2>Lugar de recogida: {{ $msg['placePickup'] }} con destino: {{ $msg['placeDropoff'] }}</h2>
	<h2>Cupos Disponibles: {{ $msg['seats'] }}</h2>
	<h2>Lugar de Encuentro: {{ $msg['meetingPlace'] }}</h2>
	<h2>El viaje pasara por los siguientes lugares: {{ $msg['places'] }}</h2>
</body>
</html>
