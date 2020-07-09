{{ __('name') }}<br>
<label name="nameDriver" >{{ $trip->nameDriver }}<br>
{{ __('email') }}<br>
<label type="email" name="email">{{ $trip->email }}<br>
{{ __('phoneNumber') }}<br>
<label type="tel" name="phoneNumber">{{ $trip->phoneNumber }}<br>
{{ __('datePickup') }}<br>
<label type="date" name="datePickup" >{{ $trip->datePickup }}<br>
{{ __('timePickup') }}<br>
<label type="time" name="timePickup">{{ $trip->timePickup }}<br>
{{ __('placePickup') }}<br>
<label type="subject" name="placePickup">{{ $trip->placePickup }}<br>
{{ __('placeDropoff') }}<br>
<label type="subject" name="placeDropoff">{{ $trip->placeDropoff }}<br>
{{ __('seats') }}<br>
<label type="number" name="seats">{{ $trip->seats }}<br>
{{ __('meetingPlace') }}<br>
<label type="subject" name="meetingPlace">{{ $trip->meetingPlace }}<br>
{{ __('places') }}<br>
<label type="subject" name="places">{{ $trip->places }}<br>
{{ $trip->created_at->diffForHumans() }}<br>
@if($trip->passengerName <> NULL)
	{{ __('Passenger information') }}<br>
	{{ __('passengerName') }}<br>
	<label name="passengerName" >{{ $trip->passengerName }}<br>
	{{ __('emailPassenger') }}<br>
	<label name="emailPassenger" >{{ $trip->emailPassenger }}<br>
	{{ __('phonenumberPassenger') }}<br>
	<label name="phonenumberPassenger" >{{ $trip->phonenumberPassenger }}<br>
@else
	<a href="{{ route('trips.edit', $trip) }}">{{ __('edit') }}</a><br>
@endif
@if($trip->seats > 0)
	<a href="{{ route('trips.sign', $trip) }}">{{ __('Join a trip') }}</a><br>
@else
@endif
