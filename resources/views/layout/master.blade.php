<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ads - @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href=" {{ url('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        @include('layout.header')
        <div class="wrap-content">
            @yield('content')
        </div>
        @include('layout.footer')
    </body>
</html>
