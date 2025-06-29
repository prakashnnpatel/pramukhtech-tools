<link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="{{ config('app.name') }}">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:image" content="{{ url('/') }}/images/tools/{{$toolKey}}.png" />
<meta property="og:title" content="Free Online Tools for Everyday Work - Screen Recorder, Timezone Converter & More | ToolHubSpot" />
<meta property="og:description" content="Discover 100% free and easy-to-use online tools at ToolHubSpot - including screen recorder, digital signature creator, timezone converter, color picker, and more. No downloads, no sign-up. Boost productivity in seconds!" />
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

		@case('contact-us')
			<title>Have a Question? We're Just a Message Away</title>
			<meta name="description" content="We are eager to discuss your needs and explore how we can help. Whether it's a new tools or enhancing an existing one, get in touch with us anytime." />
		@break

		@case('terms-of-use')
			<title>Terms of Use</title>
			<meta name="description" content="Welcome to {{ config('app.name') }}. These Terms and Conditions govern your use of our services, website, and related tools." />
		@break

		@case('privacy-policy')
			<title>Privacy Policy</title>
			<meta name="description" content="We are a team of IT professionals passionate about delivering IT services and developing high-quality, free tools for public use on the Internet. The primary goal of this website is to offer a comprehensive collection of free online tools (e.g., calculators, color pickers, image resizers, code formatters, etc.) to make everyday tasks easier for users." />
		@break

		@case('screen-recording')
			<title>Free Online Screen Recorder with Audio | No Installation | Download Free</title>
			<meta name="description" content="Record your screen with system & mic audio online. No software needed. Free, easy, and secure screen recorder with instant HD download - no watermark!" />
		@break

		@case('custom-invoice')
			<title>Free Online Create professional branded invoices | Free Print | Free Download as PDF</title>
			<meta name="description" content="Create professional, branded invoices in minutes with our easy-to-use custom invoice generator. Whether you're a freelancer, small business, or agency, you can design invoices that reflect your brand, add taxes, include multi-line descriptions, and download them instantly - no design skills needed." />
		@break

		@case('signature')
			<title>Free Digital Signature Tool - Create Your E-Signature</title>
			<meta name="description" content="Create your digital signature online for free. Draw or type your e-signature and download it as a transparent PNG. Fast, secure, and no registration required." />
		@break

		@case('color-picker')
			<title>Free Online Color Picker Tool - Get HEX, RGB & HSL Instantly</title>
			<meta name="description" content="Use our free online Color Picker tool to select and copy any color on your screen. Instantly get HEX, RGB, or HSL codes. Perfect for designers and developers." />
		@break

		@case('fd-calculator')
			<title>FD Calculator - Calculate Fixed Deposit Interest Online</title>
			<meta name="description" content="Calculate fixed deposit interest easily and maturity value with {{ config('app.name') }} FD Calculator. Plan your savings efficiently with accurate results." />
		@break

		@default
		<title>Free Online Tools for Everyday Work - Screen Recorder, Timezone Converter & More | ToolHubSpot</title>
		<meta name="description" content="Discover 100% free and easy-to-use online tools at ToolHubSpot - including screen recorder, digital signature creator, timezone converter, color picker, and more. No downloads, no sign-up. Boost productivity in seconds!" />
		@break
	@endswitch
@else
	<title>Free Online Tools for Everyday Work - Screen Recorder, Timezone Converter & More | ToolHubSpot</title>
    <meta name="description" content="Discover 100% free and easy-to-use online tools at ToolHubSpot - including screen recorder, digital signature creator, timezone converter, color picker, and more. No downloads, no sign-up. Boost productivity in seconds!" />
@endif