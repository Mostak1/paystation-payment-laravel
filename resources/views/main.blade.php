<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- title -->
    <title>@yield('title', 'AWC-Payment')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-a4e625d3.css') }}"> --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{asset('build/assets/app-a724cf2c.css')}}">
    <!-- Styles -->
    @yield('styles')
    
</head>

<body class="">
    @yield('content')
    @include('flash')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')
 

</body>

</html>
