<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Drone')}}</title>

    <style>
        canvas {
            background: black;
            /*width: 600px;
            height: 800px;*/

            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    @include('inc/messages')
    @yield('content')
</body>
</html>
