<link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="{{ config('app.name') }}">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:image" content="{{ url('/') }}/images/favicon.png" />
<meta property="og:title" content="{{ config('app.name') }}" />
<meta property="og:description" content="{{ config('app.name') }} offers Free tools for the public usage." />
@if(config('app.env') == 'production')
	<meta name="robots" content="index, follow" />
@else
	<meta name="robots" content="noindex, nofollow" />
@endif
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7987011474307455" crossorigin="anonymous"></script>
@if(request()->segment(1) !== NULL)
	@switch(request()->segment(1))
		@case('timezone')
			<title>Smart Timezone Converter for Effortless Global Collaboration</title>
			<meta name="description" content="The timezone converter tool is powerful & accurate time management, Convert Timezones Instantly and Schedule Meetings Globally with Ease." />
		@break

		@case('emi-calculator')
			<title>Free EMI Calculator for Home, Car, and Personal Loans</title>
			<meta name="description" content="Use our EMI Calculator to calculate your loan EMIs with ease quickly. Get detailed insights into monthly payments, interest rates, and repayment schedules." />
		@break

		@case('sip-calculator')
			<title>The Ultimate SIP Calculator to Maximize Your Investments</title>
			<meta name="description" content="SIP Calculator - Systematic Investment Plan Calculator. This tool can help you determine the amount you want to invest and the estimated value of the returns." />
		@break

		@default	
			<title>FD Calculator - Calculate Fixed Deposit Interest Online</title>
			<meta name="description" content="Calculate fixed deposit interest easily and maturity value with {{ config('app.name') }} FD Calculator. Plan your savings efficiently with accurate results." />
		@break
	@endswitch
@else
	<title>FD Calculator - Calculate Fixed Deposit Interest Online</title>
    <meta name="description" content="Easily calculate fixed deposit interest and maturity value with {{ config('app.name') }} FD Calculator. Plan your savings efficiently with accurate results." />
@endif