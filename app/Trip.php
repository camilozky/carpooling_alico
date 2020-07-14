<?php

namespace App;

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
        		return 'email';
            }
}
