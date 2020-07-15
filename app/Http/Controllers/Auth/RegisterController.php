<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'kilometers' => ['required', 'numeric', 'min:1', 'max:999.99'],
            'days'=>['required', 'numeric', 'min:1', 'max:7'],
            'CO2_emission_factor'=>['required', 'numeric', 'min:1', 'max:999999999.99'],
            'carbon_footprint'=>['required', 'numeric', 'min:1', 'max:999999999.99'],
            'carbon_footprint_all_year'=>['required', 'numeric', 'min:1', 'max:999999999.99'],
            'vehicle' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'kilometers' => $data['kilometers'],
            'days' => $data['days'],
            'CO2_emission_factor' => $data['CO2_emission_factor'],
            'carbon_footprint' => $data['carbon_footprint'],
            'carbon_footprint_all_year' => $data['carbon_footprint_all_year'],
            'vehicle' => $data['vehicle'],
        ]);
    }
}
