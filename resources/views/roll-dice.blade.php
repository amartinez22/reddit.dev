@extends('layouts.master')

@section('title')
<title>Roll The Dice</title>
@stop

@section('content')
    <div class="container">
        @if($guess == $random)
            <h1 class="green">Right! You win!</h1>
        @else
            <h1 class="red">Wrong! You lose :(</h1>
        @endif
        <h4>Your guess is {{ $guess }} <h4>
        <h4>The answer is {{ $random }}</h4>
        <br>
        <br>
        <a href="{{action('HomeController@uppercase', 'analyssa')}}">Uppercase Analyssa: </a>
        <br>
        <a href="{{action('HomeController@uppercase', 'kristie')}}">Uppercase Kristie: </a>
        <br>
        <a href="{{action('HomeController@uppercase', 'vivian')}}">Uppercase Vivian: </a>
    </div>
@stop