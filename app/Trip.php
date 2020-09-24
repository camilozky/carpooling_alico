<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
	//only if the TripController uses Trip::create([request()->all);
	// protected $fillable=['name','email','phonenumber','datePickup','timePickup','placePickup','placeDropoff','seats','meetingPlace','places'];

	//Default protection in Laravel
	// protected $guarded=['name','email','phonenumber','datePickup','timePickup','placePickup','placeDropoff','seats','meetingPlace','places'];

	// This function disables the default protection in Laravel Fields like aproved id or token could be seen on the ui
	//you can only be enabled if you are validating the fields of the ui
	protected $guarded=[];

	public function getRouteKeyName()
	{
		return 'id';
	}

	//Query Scope
	public function scopeDatePickup($query, $datePickup)
	{
		if($datePickup)
			return $query->where('datePickup', 'LIKE', "%$datePickup%");
	}

	public function scopeTimePickup($query, $timePickup)
	{
		if($timePickup)
			return $query->where('timePickup', 'LIKE', "%$timePickup%");
	}

	public function scopePlaceDropoff($query, $placeDropoff)
	{
		if($placeDropoff)
			return $query->where('placeDropoff', 'LIKE', "%$placeDropoff%");
	}
	public function scopePlaces($query, $places)
	{
		if($places)
			return $query->where('places', 'LIKE', "%$places%");
	}
	public function scopePlacePickup($query, $placePickup)
	{
		if($placePickup)
			return $query->where('placePickup', 'LIKE', "%$placePickup%");
	}
	public function scopeName($query, $nameDriver)
	{
		if($nameDriver)
			return $query->where('nameDriver', 'LIKE', "%$nameDriver%");
	}
	public function scopeEmailPassenger($query, $emailPassenger)
	{
		if($emailPassenger)
			return $query->where('emailPassenger', 'LIKE', "%$emailPassenger%");
	}
    public function scopeCreatedToday($query)
    {
        return $query->where('datePickup', '>=', Carbon::today());
    }
    public function scopeAvailableSeats($query)
    {
        return $query->where('seats', '>', "0");
    }
}
