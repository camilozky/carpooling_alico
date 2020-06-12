<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips=[
            ['title' => 'trip # 1'],
            ['title' => 'trip # 2'],
            ['title' => 'trip # 3'],
            ['title' => 'trip # 4'],
            ['title' => 'trip # 5'],
        ];
        return view('trips', compact('trips'));
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
        $msg = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'datePickup'=>'required|date',
            'timePickup'=>'required',
            'placePickup'=>'required',
            'placeDropoff'=>'required',
            'seats'=>'required',
            'meetingPlace'=>'required',
            'places'=>'required|min:3'
            ]);

        // Mail::to($msg['email'])->queue(new MessageReceived($msg));
        Mail::to('camilo.iush@gmail.com')->queue(new MessageReceived($msg));

        return new MessageReceived($msg);

        return $request;
        // return $request->get('name'); //get a field
        // return request('name'); //get a field another way

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
