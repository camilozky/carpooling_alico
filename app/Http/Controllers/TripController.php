<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use App\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Kreait\Firebase;
use Kreait\Firebase\Database;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $factory = (new Factory)->withServiceAccount(__DIR__.'/car-pooling-91d2a-119437167b39.json');
        $database = $factory->createDatabase();
        $tripsFromFirebase = $database->getReference('trips')->getvalue();
        $trips = Trip::latest('updated_at')->paginate(5);
        // $trips = Trip::latest('updated_at')->get();  //SELECT * FROM trips order by updated_at DESC
        // $trips = Trip::where([1,2,3])->latest('updated_at')->get(); //SELECT * FROM trips WHERE id=(1,2,3)

        // $trips=[
        //     ['title' => 'trip # 1'],
        //     ['title' => 'trip # 2'],
        //     ['title' => 'trip # 3'],
        //     ['title' => 'trip # 4'],
        //     ['title' => 'trip # 5'],
        // ];

        return view('trips.index', compact('trips'));
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
        Mail::to(request('email'))->queue(new MessageReceived($msg));
        $factory = (new Factory)->withServiceAccount(__DIR__.'/car-pooling-91d2a-119437167b39.json');
        $database = $factory->createDatabase();
        $newPost = $database
            ->getReference('/trips')
            ->push($msg);
        return new MessageReceived($msg);
        // $newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
        //$newPost->get1Uri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
        //$newPost->getChild('title')->set('Changed post title');
        //$newPost->getValue(); // Fetches the data from the realtime database
        //$newPost->remove();
        // echo"<pre>";
        // print_r($newPost->getvalue());
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
        return view('trips.show' , [
            'trip' => Trip::findOrFail($id)
        ]);
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
