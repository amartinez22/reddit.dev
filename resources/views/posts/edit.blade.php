@extends('layouts.master')

@section('title')
<title>Edit Your Post</title>
@stop


@section('content')
	<main class="container">
		<form method="POST" action="{{ action('PostsController@update', $post->id) }}">
			{!! csrf_field() !!}
			<h1>Edit Post Below</h1>
			Title: <input type="text" name="title" placeholder="Enter Title Here" value="{{ $post->title }}">
			<br>
			URL: <input type="text" name="url" placeholder="Enter URL Here" value="{{ $post->url }}">
			<br>
			Content: 
			<br>
			<textarea name="content" rows="5" cols="40">{{ $post->content }}</textarea>
			</textarea>
			<br>
			{{ method_field('PUT') }}
			<button class="btn btn-success">Update Post</button>
		</form>

		<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
			{!! csrf_field() !!}
			<button class="btn btn-danger">Delete Post</button>
			{{ method_field('DELETE') }}
		</form>



	</main>
@stop
