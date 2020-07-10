
<h1>{{ __('Trip information') }} {{ __('destined') }} {{ $trip->placeDropoff }} </h1>

{{ __('nameDriver') }}:<br>
<input type="subject" name="nameDriver" readonly value="{{ $trip->nameDriver }}"><br>
{{ __('email') }}:<br>
<input type="subject" name="email" readonly value="{{ $trip->email }} "><br>
{{ __('phoneNumber') }}:<br>
<input type="subject" name="phoneNumber" readonly value="{{ $trip->phoneNumber }} "><br>
{{ __('datePickup') }}:<br>
<input type="subject" name="datePickup" readonly value="{{ $trip->datePickup }} "><br>
{{ __('timePickup') }}:<br>
<input type="subject" name="timePickup" readonly value="{{ $trip->timePickup }} "><br>
{{ __('placePickup') }}:<br>
<input type="subject" name="placePickup" readonly value="{{ $trip->placePickup }} "><br>
{{ __('placeDropoff') }}:<br>
<input type="subject" name="placeDropoff" readonly value="{{ $trip->placeDropoff }} "><br>
{{__('seats')}}:<br>
<input type="subject" name="seats" readonly value="{{ $trip->seats }}"><br>
{{__('meetingPlace')}}:<br>
<input type="subject" name="meetingPlace" readonly value="{{ $trip->meetingPlace }}"><br>
{{__('places')}}:<br>
<input type="subject" name="places" readonly value="{{ $trip->places }}"><br>
{{ $trip->created_at->diffForHumans() }}<br>
