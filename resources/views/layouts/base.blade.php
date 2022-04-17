<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['h-full bg-gray-100'=> Request::route()->getPrefix() === '/dashboard'])>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

    <title>@yield('title') - {{ config('app.name') }}</title>
    @else
    <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    @livewireStyles

    <!-- Scripts -->
    {{-- <script src="{{ url(mix('js/app.js')) }}" defer></script> --}}
    <script src="{{ url(asset('js/alpine/alpine.js')) }}" defer></script>
    <script src="{{ url(asset('js/alpine/components-v2.js')) }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body @class(['h-full'=> Request::route()->getPrefix() === '/dashboard'])>
    @yield('body')

    @livewireScripts
</body>

</html>