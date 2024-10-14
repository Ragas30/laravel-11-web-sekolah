<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <i src="{{ asset('icon/sma2.png') }}"></i>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</head>
<body class="min-h-screen flex-col">
    
    @extends('template.landingPage.navbar');
    @yield('content');
    @extends('template.landingPage.footer');

    
</body>
</html>