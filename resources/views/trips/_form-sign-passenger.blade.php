@if($trip->passengerName <> NULL)
	<h1>{{ __('Passenger information') }}<br></h1>
	{{ __('passengerName') }}<br>
	<label name="passengerName" >{{ $trip->passengerName }}<br>
	{{ __('emailPassenger') }}<br>
	<label name="emailPassenger" >{{ $trip->emailPassenger }}<br>
	{{ __('phonenumberPassenger') }}<br>
	<label name="phonenumberPassenger" >{{ $trip->phonenumberPassenger }}<br>
@else
@endif
