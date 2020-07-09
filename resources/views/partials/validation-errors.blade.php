@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
			<li>
				{{ $error }}
			</li>
		@endforeach
	</ul>
@endif

{{-- @if($errors->any())
	{!! $errors->first('nameDriver','<small class="red">:message</small><br>')!!}
	{!! $errors->first('email','<small class="red">:message</small><br>')!!}
	{!! $errors->first('phoneNumber','<small class="red">:message</small><br>')!!}
	{!! $errors->first('datePickup','<small class="red">:message</small><br>')!!}
	{!! $errors->first('timePickup','<small class="red">:message</small><br>')!!}
	{!! $errors->first('placePickup','<small class="red">:message</small><br>')!!}
	{!! $errors->first('placeDropoff','<small class="red">:message</small><br>')!!}
	{!! $errors->first('seats','<small class="red">:message</small><br>')!!}
	{!! $errors->first('meetingPlace','<small class="red">:message</small><br>')!!}
	{!! $errors->first('places','<small class="red">:message</small><br>')!!}
@endif --}}