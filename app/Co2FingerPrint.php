<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Co2FingerPrint extends Model
{
	protected $guarded=[];
	public function getRouteKeyName()
	{
		return 'email';
	}
}
