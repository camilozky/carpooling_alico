<!DOCTYPE html>
<html>
<head>
	<title>"{{ __('Message Subject') }}"</title>
</head>
<body>

{{-- 	{{ var_dump($validatedRequestFields) }} --}}

	<h1>{{ __('Hello!') }}: {{ $validatedRequestFields['nameDriver'] }}</h1>
	<h2>{{ __('You just updated a trip with the mail:') }} {{ $validatedRequestFields['email'] }} {{ __('and') }} {{ __('phoneNumber') }}: {{ $validatedRequestFields['phoneNumber'] }}</h2>
	<h2>{{ __('datePickup') }}: {{ $validatedRequestFields['datePickup'] }} {{ __('timePickup') }}: {{ $validatedRequestFields['timePickup'] }}</h2>
	<h2>{{ __('placePickup') }}: {{ $validatedRequestFields['placePickup'] }} {{__('placeDropoff')}}: {{ $validatedRequestFields['placeDropoff'] }}</h2>
	<h2>{{__('seats')}}: {{ $validatedRequestFields['seats'] }}</h2>
	<h2>{{__('meetingPlace')}}: {{ $validatedRequestFields['meetingPlace'] }}</h2>
	<h2>{{__('places')}}: {{ $validatedRequestFields['places'] }}</h2>
</body>
</html>
