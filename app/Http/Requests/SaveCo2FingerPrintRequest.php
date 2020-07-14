<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCo2FingerPrintRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
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
			'email'=>'required|email:rfc,dns',
			'kilometers'=>'required|numeric|between:0,99.99',
			'days'=>'required|numeric|min:1|max:7',
			'CO2_emission_factor'=>'numeric|between:1,999.999999999',
			'carbon_footprint'=>'numeric|between:1,999999999.999999999',
			'carbon_footprint_all_year'=>'numeric|between:1,999999999.999999999',
		];
	}
}
