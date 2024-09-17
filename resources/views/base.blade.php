<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="revisit-after" content="7 days">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('head-title')</title>
    @yield('stylesheets')
    @yield('javascripts')
</head>
<body>
@yield('body')
</body>
</html>
