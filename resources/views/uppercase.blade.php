@extends('layouts.master')

@section('title')
<title>">Uppercase The Word</title>
@stop

@section('content')
    <div class="container">
       <h1>YOU ENTERED {{ $wordEntered }}<h1>
       <h1>UPPERCASE {{ $word }}</h1>
       <h2>To get Lowercase click below:<h2>
	   <a href="{{action('HomeController@lowercase', 'john')}}">Lowercase</a>
       <br>
       <a href="{{action('HomeController@increment', 1)}}">Increment 1</a>
       <br>
       <a href="{{action('HomeController@increment', 2)}}">Increment 2</a>
       <br>
       <a href="{{action('HomeController@increment', 3)}}">Increment 3</a>
	</div>
@stop