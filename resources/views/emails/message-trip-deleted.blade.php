<!DOCTYPE html>
<html>
<head>
	<title>"{{ __('Message Subject') }}"</title>
</head>
<body>

{{-- {{ var_dump($trip) }} --}}

	<h1>{{ __('Hello!') }}: {{ $trip['nameDriver'] }}</h1>
	<h2>{{ __('You just deleted a trip with the mail:') }} {{ $trip['email'] }} {{ __('and') }} {{ __('phoneNumber') }}: {{ $trip['phoneNumber'] }}</h2>
	<h2>{{ __('datePickup') }}: {{ $trip['datePickup'] }} {{ __('timePickup') }}: {{ $trip['timePickup'] }}</h2>
	<h2>{{ __('placePickup') }}: {{ $trip['placePickup'] }} {{('placeDropoff')}}: {{ $trip['placeDropoff'] }}</h2>
	<h2>{{__('seats')}}: {{ $trip['seats'] }}</h2>
	<h2>{{__('meetingPlace')}}: {{ $trip['meetingPlace'] }}</h2>
	<h2>{{__('places')}}: {{ $trip['places'] }}</h2>
</body>
</html>
