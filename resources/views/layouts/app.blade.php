<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@stack('title')</title>
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png">
    @include('layouts.meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/sass/frontend.scss')
    @stack('page_css')
</head>
<body>
  <div class="wrapper">
        @include('layouts.header')
        <div class="main">
            @include('section.sidebar')
            @yield('content')   
        </div>        
    </div>
    @vite('resources/js/frontend.js')   
	@stack('page_scripts')
    @include('layouts.third-party-code')
</body>
</html>
