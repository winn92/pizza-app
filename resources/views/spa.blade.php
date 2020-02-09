<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pizza app</title>
</head>

<body>
    <div id="app">
        <app-component></app-component>
    </div>
    <script src="{{mix("/js/app.js")}}"></script>
</body>

</html>