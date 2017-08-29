@extends('layouts.master')

@section('title')
<title>Create a Post Form</title>
@stop


@section('content')
	<main class="container">
		<form method="POST" action="{{ action('PostsController@store') }}">
			{!! csrf_field() !!}
			Name: <input type="text" name="name">
			E-mail: <input type="text" name="email">
			Website: <input type="text" name="website">
			Comment: <textarea name="comment" rows="5" cols="40">
			</textarea>
			<button>Submit</button>
		</form>
<!-- 
	<form method="DELETE" action="{{ action('PostsController@destroy',array(2)) }}">
		{!! csrf_field() !!}
		<button class="btn btn-danger">Delete Record</button>
		{{ method_field('DELETE') }}
	</form> -->

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