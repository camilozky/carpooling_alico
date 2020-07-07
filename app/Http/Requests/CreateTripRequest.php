<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTripRequest extends FormRequest
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
            'name'=>'required|string',
            'email'=>'required|email:rfc,dns',
            'phonenumber'=>'required|numeric',
            'datePickup'=>'required|date|after_or_equal:yesterday',
            'timePickup'=>'required',
            'placePickup'=>'required',
            'placeDropoff'=>'required',
            'seats'=>'required|numeric|min:1|max:4',
            'meetingPlace'=>'required',
            'places'=>'required|min:3'
        ];
    }

    public function messages()
    {
        return[
            'datePickup.after_or_equal'=>__('The Date Pickup must be later than or equal to today.')
        ];
    }
}
