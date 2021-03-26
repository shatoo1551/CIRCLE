<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>CIRCLE</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">    
        <script type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/circle.css')}}">
        <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}">
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css')}}">  -->
    </head>
    <header>
        @include('layouts.header')
    </header>
         @yield('contents')
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>