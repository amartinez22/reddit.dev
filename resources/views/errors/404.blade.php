@extends('layouts.master')

@section('title')
@stop

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>404 Error.</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
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
                <div class="title">Page Not Found: 404 Error</div>
            </div>
        </div>
    </body>
</html>
@stop