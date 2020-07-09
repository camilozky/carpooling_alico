<!DOCTYPE html>
<html>
<head>
	<title>"{{ __('Message Subject') }}"</title>
</head>
<body>

	{{ var_dump($validatedRequestFields) }}

	<h1>{{ __('Hello!') }}: {{ $validatedRequestFields['passengerName'] }}</h1>
	<h2>{{ __('You just joined a trip with the following information:') }}</h2>
	<h2>{{ __('nameDriver') }}: {{ $validatedRequestFields['nameDriver'] }}</h2>
	<h2>{{ __('email') }}: {{ $validatedRequestFields['email'] }} {{ __('phoneNumber') }}: {{ $validatedRequestFields['phoneNumber'] }}</h2>
	<h2>{{ __('datePickup') }}: {{ $validatedRequestFields['datePickup'] }} {{ __('timePickup') }}: {{ $validatedRequestFields['timePickup'] }}</h2>
	<h2>{{ __('placePickup') }}: {{ $validatedRequestFields['placePickup'] }} {{('placeDropoff')}}: {{ $validatedRequestFields['placeDropoff'] }}</h2>
	<h2>{{__('seats')}}: {{ $validatedRequestFields['seats'] }}</h2>
	<h2>{{__('meetingPlace')}}: {{ $validatedRequestFields['meetingPlace'] }}</h2>
	<h2>{{__('places')}}: {{ $validatedRequestFields['places'] }}</h2>
	<h2>{{__('Passenger information')}}: </h2>
	<h2>{{__('passengerName')}}: {{ $validatedRequestFields['passengerName'] }}</h2>
	<h2>{{__('emailPassenger')}}: {{ $validatedRequestFields['emailPassenger'] }}</h2>
	<h2>{{__('phonenumberPassenger')}}: {{ $validatedRequestFields['phonenumberPassenger'] }}</h2>
</body>
</html>
