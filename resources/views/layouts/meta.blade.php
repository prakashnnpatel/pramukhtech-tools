<link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="{{ config('app.name') }}">
<link rel="canonical" href="{{url()->current()}}"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:image" content="{{ url('/') }}/images/tools/{{$toolKey}}.png" />
@if(config('app.env') == 'production')
	<meta name="robots" content="index, follow" />
@else
	<meta name="robots" content="noindex, nofollow" />
@endif

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7987011474307455" crossorigin="anonymous"></script>
@if(request()->segment(1) !== NULL)
	@switch(request()->segment(1))
		@case('timezone')
			<title>Smart Timezone Converter for Effortless Global Collaboration | ToolHubSpot</title>
			<meta name="description" content="The timezone converter tool is powerful & accurate time management, Convert Timezones Instantly and Schedule Meetings Globally with Ease." />
			<meta property="og:title" content="Free Timezone Converter - Compare Multiple Time Zones Instantly | ToolHubSpot" />
			<meta property="og:description" content="Easily convert and compare time zones worldwide with ToolHubSpot's free Timezone Converter. Instantly check the current time across cities, plan meetings, and avoid confusion - no sign-up needed!" />
		@break

		@case('emi-calculator')
			<title>Free EMI Calculator for Home, Car, and Personal Loans | ToolHubSpot</title>
			<meta name="description" content="Use our EMI Calculator to calculate your loan EMIs with ease quickly. Get detailed insights into monthly payments, interest rates, and repayment schedules." />
			<meta property="og:title" content="Free EMI Calculator - Calculate Loan EMIs Instantly | ToolHubSpot" />
			<meta property="og:description" content="Easily calculate your monthly loan EMI with ToolHubSpot''s Free EMI Calculator. Get quick results for home, car, personal, or business loans. No login required - simple, fast, and accurate!" />
		@break

		@case('sip-calculator')
			<title>The Ultimate SIP Calculator to Maximize Your Investments | ToolHubSpot</title>
			<meta name="description" content="SIP Calculator - Systematic Investment Plan Calculator. This tool can help you determine the amount you want to invest and the estimated value of the returns." />
			<meta property="og:title" content="Free SIP Calculator - Estimate Mutual Fund Returns Easily | ToolHubSpot" />
			<meta property="og:description" content="Plan your investments with ToolHubSpot's Free SIP Calculator. Instantly calculate expected returns from Systematic Investment Plans. Easy, accurate & no sign-up needed!" />
		@break

		@case('fd-calculator')
			<title>FD Calculator - Calculate Fixed Deposit Interest Online</title>
			<meta name="description" content="Calculate fixed deposit interest easily and maturity value with {{ config('app.name') }} FD Calculator. Plan your savings efficiently with accurate results." />
			<meta property="og:title" content="Free FD Calculator - Calculate Fixed Deposit Interest Easily | ToolHubSpot" />
			<meta property="og:description" content="Use ToolHubSpot's Free FD Calculator to estimate your fixed deposit returns. Quick, accurate, and simple - check maturity amounts and interest earned in seconds. No login required!" />
		@break

		@case('contact-us')
			<title>Have a Question? We're Just a Message Away</title>
			<meta name="description" content="We are eager to discuss your needs and explore how we can help. Whether it's a new tools or enhancing an existing one, get in touch with us anytime." />
			<meta property="og:title" content="Contact ToolHubSpot - We're Here to Help You" />
			<meta property="og:description" content="Have a question, suggestion, or feedback? Reach out to the ToolHubSpot team anytime. We're here to support you and ensure the best experience with our free online tools." />
		@break

		@case('terms-of-use')
			<title>Terms of Use</title>
			<meta name="description" content="Welcome to {{ config('app.name') }}. These Terms and Conditions govern your use of our services, website, and related tools." />
			<meta property="og:title" content="ToolHubSpot Terms of Use - Understand Your Rights" />
			<meta property="og:description" content="Read the official Terms of Use for ToolHubSpot. Learn about user responsibilities, permitted usage, and legal guidelines for accessing our free online tools and services." />
		@break

		@case('privacy-policy')
			<title>Privacy Policy</title>
			<meta name="description" content="We are a team of IT professionals passionate about delivering IT services and developing high-quality, free tools for public use on the Internet. The primary goal of this website is to offer a comprehensive collection of free online tools (e.g., calculators, color pickers, image resizers, code formatters, etc.) to make everyday tasks easier for users." />
			<meta property="og:title" content="ToolHubSpot Privacy Policy - Your Data, Our Responsibility" />
			<meta property="og:description" content="Understand how ToolHubSpot collects, uses, and protects your personal data. We value your privacy and ensure transparency in every step of your interaction with our tools." />
		@break

		@case('screen-recording')
			<title>Free Online Screen Recorder with Audio | No Installation | Download Free</title>
			<meta name="description" content="Record your screen with system & mic audio online. No software needed. Free, easy, and secure screen recorder with instant HD download - no watermark!" />
			<meta property="og:title" content="Free Screen Recording Tool - Record Your Screen & Download Instantly | ToolHubSpot" />
			<meta property="og:description" content="Capture your screen with ease using ToolHubSpot's free online screen recorder and download instantly. No extensions needed. Record, preview, and save your screen in just a few clicks!" />
		@break

		@case('digital-document')
			<title>Create Free Digital Document & Downloadable PDF | Print Preview | ToolHubSpot</title>
			<meta name="description" content="Design and download professional digital documents in seconds with ToolHubSpot's Free Custom Document Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool provides an easy and powerful way to create documents that reflect your brand identity." />
			<meta property="og:title" content="Create Free Digital Document & Downloadable PDF | Print Preview | ToolHubSpot" />
			<meta property="og:description" content="Design and download professional digital documents in seconds with ToolHubSpot's Free Custom Document Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool provides an easy and powerful way to create documents that reflect your brand identity." />
		@break

		@case('custom-invoice')
			<title>Free Custom Invoice Generator - 100% Editable & Downloadable PDF | Print Preview | ToolHubSpot</title>
			<meta name="description" content="Create professional, branded invoices in minutes with our free custom invoice generator. Fully editable templates with multi-line items, tax options, and your own logo. No login needed, download in PDF format instantly, 100% free and easy to use!" />
			<meta property="og:title" content="Free Custom Invoice Generator - Create & Download Branded Invoices | ToolHubSpot" />
			<meta property="og:description" content="Generate branded invoices quickly with ToolHubSpot's free invoice generator. Fully editable templates. Add logo, items, taxes, and download in PDF - no sign-up required!" />
		@break

		@case('generate-quote')
			<title>Free Quote Generator for Clients - Create & Download Custom Quotes | ToolHubSpot</title>
			<meta name="description" content="Generate professional, branded quotes for your clients with ToolHubSpot's free quote generator. 100% customizable, no sign-up required. Download as PDF instantly!" />
			<meta property="og:title" content="Free Quote Generator - Create Client Quotes Online | ToolHubSpot" />
			<meta property="og:description" content="Easily create and download professional quotes with ToolHubSpot's free quote generator. Fully customizable for your business - fast, simple, and free to use!" />
		@break

		@case('purchase-order')
			<title>Free Purchase Order Generator - Create & Download Custom POs Online | ToolHubSpot</title>
			<meta name="description" content="Generate professional purchase orders for free with ToolHubSpot's online PO generator. Fully customizable templates. No sign-up required. Download as PDF instantly!" />
			<meta property="og:title" content="Free Purchase Order Generator - Create Custom POs | ToolHubSpot" />
			<meta property="og:description" content="Generate professional purchase orders instantly with ToolHubSpot's free PO generator. Customize supplier info, items, pricing, and download in PDF format - no login needed!" />
		@break

		@case('signature')
			<title>Free Digital Signature Tool - Create Your E-Signature</title>
			<meta name="description" content="Create your digital signature online for free. Draw or type your e-signature and download it as a transparent PNG. Fast, secure, and no registration required." />
			<meta property="og:title" content="Free Digital Signature Generator - Create Your Signature Online and Download | ToolHubSpot" />
			<meta property="og:description" content="Create your digital signature in seconds with ToolHubSpot's free online signature tool. Draw, type, or stylize your signature and download instantly - no sign-up required!" />
		@break

		@case('color-picker')
			<title>Free Online Color Picker Tool - Get HEX, RGB & HSL Instantly</title>
			<meta name="description" content="Use our free online Color Picker tool to select and copy any color on your screen. Instantly get HEX, RGB, or HSL codes. Perfect for designers and developers." />
			<meta property="og:title" content="Free Color Picker Tool - Find & Copy HEX, RGB, HSL Codes | ToolHubSpot" />
			<meta property="og:description" content="Pick any color and instantly get its HEX, RGB, and HSL values with ToolHubSpot's free color picker tool. Perfect for designers and developers - no installation needed!" />
		@break		

		@default
			<title>Free Online Tools for Everyday Work - Screen Recorder, Timezone Converter & More | ToolHubSpot</title>
			<meta name="description" content="Discover 100% free and easy-to-use online tools at ToolHubSpot - including screen recorder, digital signature creator, timezone converter, color picker, and more. No downloads, no sign-up. Boost productivity in seconds!" />
			<meta property="og:title" content="Free Online Tools for Everyday Work - Screen Recorder, Timezone Converter & More | ToolHubSpot" />
			<meta property="og:description" content="Discover 100% free and easy-to-use online tools at ToolHubSpot - including screen recorder, digital signature creator, timezone converter, color picker, and more. No downloads, no sign-up. Boost productivity in seconds!" />
		@break
	@endswitch
@else
	<title>Free Online Tools for Everyday Work - Screen Recorder, Timezone Converter & More | ToolHubSpot</title>
    <meta name="description" content="Discover 100% free and easy-to-use online tools at ToolHubSpot - including screen recorder, digital signature creator, timezone converter, color picker, and more. No downloads, no sign-up. Boost productivity in seconds!" />
	<meta property="og:title" content="Free Online Tools for Everyday Work - Screen Recorder, Timezone Converter & More | ToolHubSpot" />
	<meta property="og:description" content="Discover 100% free and easy-to-use online tools at ToolHubSpot - including screen recorder, digital signature creator, timezone converter, color picker, and more. No downloads, no sign-up. Boost productivity in seconds!" />
@endif