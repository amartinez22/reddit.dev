@extends('layouts.master')

@section('title')
<title>Increment View</title>
@stop

@section('content')

	<h1>The number is currently {{$num}} </h1>
	<a href="{{action('HomeController@increment', array($num))}}">Increase {{$num}}</a>

@stop