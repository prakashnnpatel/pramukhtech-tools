<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.meta')
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/sass/frontend.scss')
    @vite('resources/css/fd-calculator.css')
    @vite('resources/css/invoice-builder.css')
    @stack('page_css')
	@if(config('app.env') == 'production')
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7987011474307455" crossorigin="anonymous"></script>
	@endif
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=689822e0e700c1c978e64e88&product=sop' async='async'></script>
</head>
<body>
    @include('layouts.header')
    <div class="main-container">
        <div class="content">
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
    
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @vite('resources/js/frontend.js')
	@vite('resources/js/home.js')
    @vite("resources/js/jquery-ui.min.js")
	@vite("resources/js/jqueryUiTouch.js")
	@stack('page_scripts')
    @include('layouts.third-party-code')
</body>
</html>
