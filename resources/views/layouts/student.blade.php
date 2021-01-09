<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Login Page')</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    @yield('stylesheets')
</head>
@yield('body')
</html>
