<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.meta')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite('resources/sass/frontend.scss')
    @stack('page_css')
	@if(config('app.env') == 'production')
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7987011474307455" crossorigin="anonymous"></script>
	@endif
</head>
<body>
    @include('section.sidebar')
	<div class="content">
		@yield('content')
		@include('layouts.footer')
	</div>
    @vite('resources/js/frontend.js')
	@vite('resources/js/home.js')
	@stack('page_scripts')
    @include('layouts.third-party-code')
</body>
</html>
