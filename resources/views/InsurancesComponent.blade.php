<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{mix('/css/ui.css')}}">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">

</head>
<body style="background-color: black;">
    @include('layouts.nav')
    @include('layouts.sid')
    <div id="app">
        <insurances></insurances>
    </div>

</body>

<script src="{{mix ('/js/ui.js') }}"></script>
<script src="{{mix ('/js/app.js') }}"></script>

</html>
