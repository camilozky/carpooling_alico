<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
	protected $fillable=[
            'name',
            'email',
            'phonenumber',
            'datePickup',
            'timePickup',
            'placePickup',
            'placeDropoff',
            'seats',
            'meetingPlace',
            'places'
		];
    public function getRouteKeyName()
    {
		return 'email';
    }
}
