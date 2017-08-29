@extends('layouts.master')

@section('content')
	<div class="container">
		<h1> Post: {{$post->id}}</h1>
		<ul class = "list-group">
			<li class= "list-group-item" style="font-weight: bold;">Title: {{$post->title}}</li>
			
			<a class = "list-group-item" href="{{ action('PostsController@edit', $post->id) }}">
				<span class="glyphicon glyphicon-pencil"></span>Edit this post</a>

			<li class= "list-group-item">Url: {{$post->url}}</li>
			<li class= "list-group-item">Content: {{$post->content}}</li>
			<li class= "list-group-item" style="color: #ff47d4;">Created By: {{$post->created_by}}</li>
			<li class= "list-group-item">Created At: {{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</li>
			<li class= "list-group-item">Updated At: {{$post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</li>
		</ul>
	</div>
@endsection
