<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {!! Html::style('libs/materialize/dist/css/materialize.min.css') !!}
    {!! Html::style('libs/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('css/style.min.css') !!}
    <title>Agenda de Contatos</title>
</head>
<body>
<main>
    @include('errors._check_form')
    @include('flash::message')
    <div id="app">
        @yield('content')
    </div>
</main>
</body>
</html>
{!! Html::script('libs/jquery/jquery.min.js') !!}
{!! Html::script('libs/sweetalert/dist/sweetalert.min.js') !!}
{!! Html::script('libs/materialize/dist/js/materialize.min.js') !!}
{!! Html::script('js/main.js') !!}
{!! Html::script('js/index.js') !!}
