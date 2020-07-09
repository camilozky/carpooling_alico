<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinTripRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //$this->user()->isAdmin() if this returns true it will go to check the validation rules If it returns false, it returns HTTP Response 403 Forbidden
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nameDriver'=>'required|string',
            'email'=>'required|email:rfc,dns',
            'phoneNumber'=>'required|numeric|min:7',
            'datePickup'=>'required|date',
            'timePickup'=>'required',
            'placePickup'=>'required',
            'placeDropoff'=>'required',
            'seats'=>'required|numeric',
            'meetingPlace'=>'required',
            'places'=>'required|min:3',
            'passengerName'=>'required|string',
            'emailPassenger'=>'required|email:rfc,dns',
            'phonenumberPassenger'=>'required|numeric|min:7'
        ];
    }
        public function messages()
    {
        return[
            'passengerName.required' => 'El Nombre del Pasajero es obligatorio.',
            'emailPassenger.required' => 'El Correo del Pasajero es obligatorio.',
            'emailPassenger.email' => 'El Correo del Pasajero no es un correo válido.',
            'phonenumberPassenger.required' => 'El Teléfono del Pasajero es obligatorio.',
            'phonenumberPassenger.numeric' => 'El Teléfono del Pasajero debe ser numerico.',
        ];
    }
}
