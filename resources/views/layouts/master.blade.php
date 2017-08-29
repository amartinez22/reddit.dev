<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intitial-scale=1">
    
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/posts">Home</a></li>
            <li class="{{Request::is('create') ? 'active' : ''}}"><a href="/posts/create">Create</a></li>
        </ul>
    </div>




    @yield('title')
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Bootstrap Core JavaScript -->
    <style>
    </style>
</head>
<body>
    @if (session()->has('successMessage'))
        <div class="alert alert-success">{{ session('successMessage') }}</div>
    @endif

    @if (session()->has('errorMessage'))
        <div class="alert alert-error">{{ session('errorMessage') }}</div>
    @endif

    @yield('content')
    <!-- jQuery Version 1.11.1 -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</body>
</html>