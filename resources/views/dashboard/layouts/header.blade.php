<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $title }}</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="{{ asset('public/public/assets/img/metis-tile.png') }}" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/bootstrap/css/bootstrap.css')}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/font-awesome/css/font-awesome.css') }}">  
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/public/assets/css/main.css') }}">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/metismenu/metisMenu.css') }}">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/onoffcanvas/onoffcanvas.css') }}">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/public/assets/lib/animate.css/animate.css') }}">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="{{ asset('public/public/assets/css/style-switcher.css') }}">
    <link rel="stylesheet/less" type="text/css" href="{{ asset('public/public/assets/less/theme.less') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
  </head>

        <body class="  ">