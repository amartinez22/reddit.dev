@extends('layouts.master')

@section('title')
@stop

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <title>503 Error</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                font-weight: 100;
            }

            .container {
                text-align: center;
                vertical-align: middle;
                margin-top: 150px;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Be right back.</div>
            </div>
        </div>
    </body>
</html>
@stop
