<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show' , ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $user->update([
                'name' => request('name'),
                'email' => request('email'),
                'phoneNumber' => request('phoneNumber'),
                'placeDropoff' => request('placeDropoff'),
                'latitudePlaceDropoff' => request('latitudePlaceDropoff'),
                'longitudePlaceDropoff' => request('longitudePlaceDropoff'),
                'placePickup' => request('placePickup'),
                'longitudePlacePickup' => request('longitudePlacePickup'),
                'longitudePlacePickup' => request('longitudePlacePickup'),
                'kilometers' => request('kilometers'),
                'CO2_emission_factor' => request('CO2_emission_factor'),
                'carbon_footprint' => request('carbon_footprint'),
                'carbon_footprint_all_year' => request('carbon_footprint_all_year'),
                'vehicle' => request('vehicle'),
            ]);
        return redirect()->route('trips.index')->with('status', __('You have successfully updated your profile '));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
