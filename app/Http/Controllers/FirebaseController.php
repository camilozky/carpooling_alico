<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
class FirebaseController extends Controller
{
	public function index(){
	$trips=[
            ['title' => 'trip # 1'],
            ['title' => 'trip # 2'],
            ['title' => 'trip # 3'],
            ['title' => 'trip # 4'],
            ['title' => 'trip # 5'],
        ];
	$factory = (new Factory)->withServiceAccount(__DIR__.'/car-pooling-91d2a-119437167b39.json');
	$database = $factory->createDatabase();

	$newPost = $database

		->getReference('/')
		->push($trips);
    return view('phpfirebase_sdk', compact('trips'));

	// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/car-pooling-91d2a-119437167b39.json');
	// echo $serviceAccount;
	// $firebase = (new Factory)
	// 	->withServiceAccount($serviceAccount))
	// 	->withDatabaseUri('https://car-pooling-91d2a.firebaseio.com/')
	// 	->create();
	// $database = $firebase->getDatabase();
	// $newPost = $database
	// ->getReference('blog/posts')
	// ->push(['title' => 'Post title',
	// 		'body' => 'This should probably be longer.']);
	// //$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
	// //$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
	// //$newPost->getChild('title')->set('Changed post title');
	// //$newPost->getValue(); // Fetches the data from the realtime database
	// //$newPost->remove();
	// echo"<pre>";
	// print_r($newPost->getvalue());
	}
}
?>
