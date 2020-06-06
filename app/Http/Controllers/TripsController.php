<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
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
}
