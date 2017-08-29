<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

// public function showWelcome
// {
// 	return redirect()->action('HomeController@sayHello', array('Bob'));
// }

public function uppercase($word) 
{
	$data = [];
	$data['wordEntered'] = $word;
	$data['word'] = strtoupper($word);

	return view('uppercase',$data);
}

public function lowercase($word) 
{
	$data = [];
	$data['wordEntered'] = $word;
	$data['word'] = strtolower($word);

	return view('uppercase',$data);
}

public function increment($num) 
{
	if(is_numeric($num)){
	return $num + 1;
	} else {
		return 1;
	}

	if($num > 5) {
		return redirect()->action('HomeController@resetToZero');
	}

	$data['num'] = $num;
	return view('increment')->with($data);
}

public function resetToZero()
{
	$data['num'] = 0;
	return view('increment', $data);
}

public function register()
{
	view('/register');
}




}
