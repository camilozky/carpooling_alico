<?php

namespace App\Http\Controllers;

use App\Co2FingerPrint;
use App\Http\Requests\SaveCo2FingerPrintRequest;
use Illuminate\Http\Request;

class Co2FingerPrintController extends Controller
{
	public function store(SaveCo2FingerPrintRequest $request)
	{
		$validatedRequestFields = $request->validated();
		Co2FingerPrint::create($validatedRequestFields);
		// Mail::to($validatedRequestFields['email'])->queue(new MessageReceived($validatedRequestFields));
		return redirect()->route('home1')->with('status', __('The Co2 footprint has been successfully saved'));
	}

}
