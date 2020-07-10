<input name="passengerName" placeholder="{{ __('Enter Name') }}" value="{{old('passengerName')}}" ><br>
{!! $errors->first('passengerName','<small class="red">:message</small><br>')!!}
<input type="emailPassenger" name="emailPassenger" placeholder="{{ __('Enter Email') }}" value="{{old('emailPassenger')}}" ><br>
{!! $errors->first('emailPassenger','<small class="red">:message</small><br>')!!}
<input type="tel" name="phonenumberPassenger" placeholder="{{ __('Enter whatsApp') }}" value="{{old('phonenumberPassenger')}}"><br>
{!! $errors->first('phonenumberPassenger','<small class="red">:message</small><br>')!!}
{{ __('seats') }}<label type="number" name="seats" > {{old('seats', $trip->seats)}}</label><br>
