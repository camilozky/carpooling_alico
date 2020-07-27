<?php

namespace App\Http\Controllers;
use App\Http\Requests\JoinTripRequest;
use App\Http\Requests\SaveTripRequest;
use App\Mail\MessageEdited;
use App\Mail\MessageJoin;
use App\Mail\MessageReceived;
use App\Mail\MessageSomeoneJoined;
use App\Mail\MessageTripDeleted;
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
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index(Request $request)
	{
		$factory = (new Factory)->withServiceAccount(__DIR__.'/car-pooling-91d2a-119437167b39.json');
		$database = $factory->createDatabase();
		$tripsFromFirebase = $database->getReference('trips')->getvalue();
		// $trips = Trip::latest('datePickup')->paginate();
		// $trips = Trip::latest('updated_at')->get();  //SELECT * FROM trips order by updated_at DESC
		// $trips = Trip::where([1,2,3])->latest('updated_at')->get(); //SELECT * FROM trips WHERE id=(1,2,3)

		// $trips=[
		//     ['title' => 'trip # 1'],
		//     ['title' => 'trip # 2'],
		//     ['title' => 'trip # 3'],
		//     ['title' => 'trip # 4'],
		//     ['title' => 'trip # 5'],
		// ];

		$datePickup  = $request->get('datePickup');
		$timePickup = $request->get('timePickup');
		$placeDropoff = $request->get('placeDropoff');
		$places = $request->get('places');
		$placePickup = $request->get('placePickup');
		$name = $request->get('name');
		$createdToday = $request->get('createdToday');
		$availableSeats = $request->get('availableSeats');
		$countTrip = Trip::get()->count();

		$trips = Trip::orderBy('datePickup', 'DESC')
			->datePickup($datePickup)
			->timePickup($timePickup)
			->placeDropoff($placeDropoff)
			->places($places)
			->placePickup($placePickup)
			->name($name)
			->createdToday($createdToday)
			->availableSeats($availableSeats)
			->paginate(100);

		return view('trips.index', compact('trips'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('trips.create', [
			'trip' => new Trip
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(SaveTripRequest $request)
	{
		$validatedRequestFields = $request->validated();

		// $validatedRequestFields = request()->validate([
		//     'name'=>'required|string',
		//     'email'=>'required|email:rfc,dns',
		//     'phonenumber'=>'required|numeric',
		//     'datePickup'=>'required|date|after:yesterday',
		//     'timePickup'=>'required',
		//     'placePickup'=>'required',
		//     'placeDropoff'=>'required',
		//     'seats'=>'required|numeric|min:1|max:4',
		//     'meetingPlace'=>'required',
		//     'places'=>'required|min:3'
		//     ]);

		//Local Database
		Trip::create($validatedRequestFields);

		// Save all fields Not to be used unless Trip Class property is protected $fillable
		// Trip::create([request()->all);

		// Protects against mass assignment
		// Trip::create([request()->only('name','email','phonenumber','datePickup','timePickup','placePickup','placeDropoff','seats','meetingPlace','places'));


		// Save each field that you indicate
		// Trip::create(['name' => request('name'),'email' => request('email'),'phonenumber' => request('phonenumber'),'datePickup' => request('datePickup'),'timePickup' => request('timePickup'),'placePickup' => request('placePickup'),'placeDropoff' => request('placeDropoff'),'seats' => request('seats'),'meetingPlace' => request('meetingPlace'),'places' => request('places']);

		//Firebase
		// $factory = (new Factory)->withServiceAccount(__DIR__.'/car-pooling-91d2a-119437167b39.json');
		// $database = $factory->createDatabase();
		// $newPost = $database
		//     ->getReference('/trips')
		//     ->push($validatedRequestFields);

		//Send Mail
		Mail::to($validatedRequestFields['email'])->queue(new MessageReceived($validatedRequestFields));
		// Mail::to(request('email'))->queue(new MessageReceived($validatedRequestFields));
		// return new MessageReceived($validatedRequestFields);

		return redirect()->route('trips.index')->with('status', __('The trip has been successfully created '));
		// $newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
		//$newPost->get1Uri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
		//$newPost->getChild('title')->set('Changed post title');
		//$newPost->getValue(); // Fetches the data from the realtime database
		//$newPost->remove();
		// echo"<pre>";
		// print_r($newPost->getvalue());
		// return $request;
		// return $request->get('name'); //get a field
		// return request('name'); //get a field another way
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Trip $trip)
	{
		return view('trips.show' , [
			'trip' => $trip
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Trip $trip)
	{
		return view('trips.edit' , [
			'trip' => $trip
		]);
	}

	public function update(Trip $trip, SaveTripRequest $request)
	{
		$validatedRequestFields = $request->validated();

		// $validatedRequestFields = request()->validate([
		//     'name'=>'required|string',
		//     'email'=>'required|email:rfc,dns',
		//     'phonenumber'=>'required|numeric',
		//     'datePickup'=>'required|date|after:yesterday',
		//     'timePickup'=>'required',
		//     'placePickup'=>'required',
		//     'placeDropoff'=>'required',
		//     'seats'=>'required|numeric|min:1|max:4',
		//     'meetingPlace'=>'required',
		//     'places'=>'required|min:3'
		// ]);

		$trip->update($validatedRequestFields);

		// $trip->update([
		//     'name'=> request('name'),
		//     'email'=> request('email'),
		//     'phonenumber'=> request('phonenumber'),
		//     'datePickup'=> request('datePickup'),
		//     'timePickup'=> request('timePickup'),
		//     'placePickup'=> request('placePickup'),
		//     'placeDropoff'=> request('placeDropoff'),
		//     'seats'=> request('seats'),
		//     'meetingPlace'=> request('meetingPlace'),
		//     'places'=> request('places'),
		// ]);

		Mail::to($validatedRequestFields['email'])->queue(new MessageEdited($validatedRequestFields));
		return redirect()->route('trips.show', $trip)->with('status', __('The trip has been successfully modified '));
	}

	public function sign(Trip $trip)
	{
		return view('trips.sign' , [
			'trip' => $trip
		]);
	}

	public function join(Trip $trip, JoinTripRequest $request)
	{
		$validatedRequestFields = $request->validated();
		$passengerNameCollection= $validatedRequestFields['passengerName'] . ' , ' . $trip['passengerName'];
		$emailPassengerCollection= $validatedRequestFields['emailPassenger'] . ' , ' . $trip['emailPassenger'];
		$phonenumberPassengerCollection= $validatedRequestFields['phonenumberPassenger'] . ' , ' . $trip['phonenumberPassenger'];

		$trip->update([
			'passengerName'=> $passengerNameCollection,
			'emailPassenger'=> $emailPassengerCollection,
			'phonenumberPassenger'=> $phonenumberPassengerCollection,
			'seats'=> $trip['seats']-1,
		]);

		Mail::to($validatedRequestFields['emailPassenger'])->queue(new MessageJoin($validatedRequestFields));
		Mail::to($validatedRequestFields['email'])->queue(new MessageSomeoneJoined($validatedRequestFields));

		return redirect()->route('trips.index')->with('status', __('You have joined the successfully trip '));;
	}


	public function destroy(Trip $trip)
	{
		Mail::to($trip['email'])->queue(new MessageTripDeleted($trip));
		$trip->delete();
		return redirect()->route('trips.index')->with('status', __('The trip has been successfully eliminated '));;
	}
}
