<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', 'PostsController');


// Route::get('/hello', function () {
// 	$result = 1 + 1;
// 	echo $result;
// });

// Route::get('/sayhello', function () {
// 	return "Hello world!";
// }


// Route::get('/sayhello/{name}', function($name) {
// 	return "Hello, $name!";
// });

// Route::get('/sayhello/{name?}', function($name = "World") {
// 	if($name == "Chris"){
// 	return redirect('/');	
// 	} else {
// 	return "Hello, $name";
// 	}
// });

// // Route with required parameters
// Route::get('/sayhello/{firstName}/{lastname}', function($firstName, $lastName) {
// 	return "Hi there, $firstName $lastName";
// });


// Route::post('/save', function() {

// });

// Route::get('/uppercase/{word}', function($word) {
// 	$data = [];
// 	$data['wordEntered'] = $word;
// 	$data['word'] = strtoupper($word);

// 	return view('uppercase',$data);
// });




// Route::get('/increment/{num}', function($num) {
// 	if(is_numeric($number)){
// 	return $num + 1;
// 	} else {
// 		return 1;
// 	}
// });


// Route::get('add/{num1}{num2}', function($num1, $num2) {
// 	if(is_numeric($num1) && is_numeric($num2)) {
// 		return $num1 + $num2;
// 	}
// });

// Route::get('/rolldice', function() {
// 	$data = [];
// 	$data['random'] = mt_rand(1, 6);

// 	return view('roll-dice',$data);
// });

// Route::get('/rolldice/{guess}', function($guess) {
// 	$data = [];
// 	$data['random'] = mt_rand(1, 6);
// 	$data['guess'] = $guess;

// 	return view('roll-dice',$data);
// });

// Route::get('/sayHello{name?}','HomeController@showWelcome');

// Route::get('/sample/{str}', 'SampleController@firstLetter');

// Route::get('/process/{num}', 'SampleController@processNum');

// Route::get('/double/{num}', 'SampleController@doubleNum');

// Route::get('/triple/{num}', 'SampleController@tripleNum');

// Route::get('/uppercase/{word}', 'HomeController@uppercase');

// Route::get('/lowercase/{word}', 'HomeController@lowercase');

// Route::get('/increment/{num}', 'HomeController@increment');

// Route::get('/zero', 'HomeController@resetToZero');

// Route::resource('dogs', 'DogsController');



Route::get('create-user', function() {
	$user = new \App\User();
	$user->name = "admin";
	$user->email = "admin@codeup.com";
	$user->password = "password";
	$user->save();
});

// Route::get('/register', 'HomeController@register');

// Route::post('/register', function()
// {
// 	$user = new User;
// 	$user->email = Input::get('email');
// 	$user->username = Input::get('username');
// 	$user->password = Hash::make(Input::get('password'));
// 	$user->save();
// 	$theEmail = Input::get('email');
// 	return View::make('thanks')->with('theEmail', $theEmail);
// });

// Route::get('orm-test', function()
// {
// 	$post1 = new App\Models\Post();
// 	$post1->title = 'Eloquent is awesome!';
// 	$post1->url='https://laravel.com/docs/5.1/eloquent';
// 	$post1->content  = 'It is super easy to create a new post.';
// 	$post1->created_by = 1;
// 	$post1->save();
// 	// dd($post);

// 	$post2 = new \App\Models\Post();
// 	$post2->title = 'Eloquent is really easy!';
// 	$post2->url='https://laravel.com/docs/5.1/eloquent';
// 	$post2->content = 'It is super easy to create a new post.';
// 	$post2->created_by = 2;
// 	$post2->save();

// });





