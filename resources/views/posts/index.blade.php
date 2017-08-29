@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>All Posts</h1>
		@foreach($posts as $post)
			<ul class = "list-group">
				<li class= "list-group-item">Id: {{$post->id}}</li>
				<li class= "list-group-item list-group-item-info" style="font-weight: bold;">Title: {{$post->title}}</li>
				<li class= "list-group-item">Url: {{$post->url}}</li>
				<li class= "list-group-item">Content: {{$post->content}}</li>
				<li class= "list-group-item" style="color: #4a9bd9;">Created By: {{$post->created_by}}</li>
				<li class= "list-group-item">Created: {{$post->created_at->diffForHumans() }}</li>
				<a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@show', $post->id) }}">See This Post</a>
			</ul>
		@endforeach
		{!! $posts->render() !!}
	</div>
@endsection
