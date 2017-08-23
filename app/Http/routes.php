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

Route::get('/uppercase/{word}', function($word) {
	return strtoupper($word);

});


Route::get('/increment/{num}', function($num) {
	if(is_numeric($number)){
	return $num + 1;
	} else {
		return 1;
	}
});


Route::get('add/{num1}{num2}', function($num1, $num2) {
	if(is_numeric($num1) && is_numeric($num2)) {
		return $num1 + $num2;
	}
});







