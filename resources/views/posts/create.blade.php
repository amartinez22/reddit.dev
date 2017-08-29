@extends('layouts.master')

@section('title')
<title>Create a Post Form</title>
@stop


@section('content')
	<main class="container">
		{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
		{!! $errors->first('url', '<span class="help-block">:message</span>') !!}
		{!! $errors->first('content', '<span class="help-block">:message</span>') !!}

		<form method="POST" action="{{ action('PostsController@store') }}">
			{!! csrf_field() !!}
			<h1>Create a Post Below</h1>
			Title: <input type="text" name="title" placeholder="Enter Title Here" value="{{ old('title') }}">
			<br>
			URL: <input type="text" name="url" placeholder="Enter URL Here" value="{{ old('url') }}">
			<br>
			Content: 
			<br>
			<textarea name="content" rows="5" cols="40">{{ old('content') }}</textarea>
			<br>
			<button>Submit</button>
		</form>
	</main>
@stop



<!-- @section('content')
	<main class="container">
		{!! csrf_field() !!}
		<form method="POST" action="{{ action('PostsController@store') }}">
			<h1>Dog Create Form</h1>
			<input type="text" name="name" placeholder="Enter Dog Name">
			<input type="text" name="breed" placeholder="Enter Dog Breed">
			<input type="text" name="age" placeholder="Enter Dog Age">
			<button>Submit</button>
		</form>
	</main>
@stop -->