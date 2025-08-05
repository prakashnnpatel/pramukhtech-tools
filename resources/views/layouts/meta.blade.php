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
			<title>Smart Timezone Converter | ToolHubSpot</title>
			<meta name="description" content="The timezone converter tool is powerful & accurate time management, Convert Timezones Instantly and Schedule Meetings Globally with Ease." />
			<meta property="og:title" content="Smart Timezone Converter | ToolHubSpot" />
			<meta property="og:description" content="Easily convert and compare time zones worldwide with ToolHubSpot's tool. Instantly check the current time across cities, plan meetings, and avoid confusion!" />
		@break

		@case('emi-calculator')
			<title>Free EMI Calculator for Home, Car and Personal Loans | ToolHubSpot</title>
			<meta name="description" content="Use our EMI Calculator to calculate your loan EMIs with ease quickly. Get detailed insights into monthly payments, interest rates, and repayment schedules." />
			<meta property="og:title" content="Free EMI Calculator - Calculate Loan EMIs | ToolHubSpot" />
			<meta property="og:description" content="Easily calculate your monthly EMI with ToolHubSpot's Free EMI Calculator. Get quick and accurate results for home, car, personal, or business loans." />
		@break

		@case('sip-calculator')
			<title>The Smart SIP Calculator to Maximize Your Investments</title>
			<meta name="description" content="SIP Calculator - Systematic Investment Plan Calculator. This tool can help you determine the amount you want to invest and the estimated value of the returns." />
			<meta property="og:title" content="Free SIP Calculator – Plan Your Investments | ToolHubSpot" />
			<meta property="og:description" content="Plan your investments with ToolHubSpot's Free SIP Calculator. Instantly calculate expected returns from Systematic Investment Plans. Easy, accurate!" />
		@break

		@case('fd-calculator')
			<title>FD Calculator - Calculate Fixed Deposit Interest Online</title>
			<meta name="description" content="Calculate fixed deposit interest easily and maturity value with {{ config('app.name') }} FD Calculator. Plan your savings efficiently with accurate results." />
			<meta property="og:title" content="Free FD Calculator - Calculate FD Interest | ToolHubSpot" />
			<meta property="og:description" content="Use ToolHubSpot's Free FD Calculator to estimate fixed deposit returns. Quick, accurate, and simple - check maturity amounts and interest earned in seconds." />
		@break

		@case('contact-us')
			<title>Have a Question? We're Just a Message Away</title>
			<meta name="description" content="We are eager to discuss your needs and explore how we can help. Whether it's a new tools or enhancing an existing one, get in touch with us anytime." />
			<meta property="og:title" content="Contact ToolHubSpot - We're Here to Help You" />
			<meta property="og:description" content="Have a question or suggestion? Reach out to the ToolHubSpot team anytime. We're here to support you and ensure the best experience with our free online tools." />
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
			<title>Free Online Screen Recorder with Audio | No Installation</title>
			<meta name="description" content="Record your screen with system & mic audio online. No software needed. Free, easy, and secure screen recorder with instant HD download - no watermark!" />
			<meta property="og:title" content="Free Online Screen Recorder with Audio | No Installation" />
			<meta property="og:description" content="Record your screen online with ToolHubSpot's free screen recorder. No extensions needed. Just record, preview, and download in a few clicks!" />
			<meta name="keywords" content="free screen recorder, online screen recording, screen capture tool, screen recording website, no download screen recorder, browser screen recorder, record screen free, screen recording for tutorials, toolhubspot screen recorder">
		@break

		@case('digital-document')
			<title>Create Free Digital Document & Download PDF | ToolHubSpot</title>
			<meta name="description" content="Create and download professional digital documents in seconds with ToolHubSpot's free custom document generator - perfect for freelancers and businesses." />
			<meta property="og:title" content="Create Free Digital Document & Download PDF | ToolHubSpot" />
			<meta property="og:description" content="Create and download professional digital documents in seconds with ToolHubSpot's free custom document generator - perfect for freelancers and businesses.." />
		@break

		@case('custom-invoice')
			<title>Free Custom Invoice Generator - 100% Editable | ToolHubSpot</title>
			<meta name="description" content="Generate branded invoices in minutes with our free tool. Add logo, tax, items & download PDF instantly. No login needed – fast, easy, and 100% free!" />
			<meta property="og:title" content="Free Custom Invoice Generator - 100% Editable | ToolHubSpot" />
			<meta property="og:description" content="Generate branded invoices in minutes with our free tool. Add logo, tax, items & download PDF instantly. No login needed – fast, easy, and 100% free!" />
			<meta name="keywords" content="custom invoice generator, free invoice maker, online invoice tool, invoice template, invoice creator, create invoice online, professional invoice tool, no sign up invoice maker, ToolHubSpot invoice">
		@break

		@case('generate-quote')
			<title>Create Free Quote for Your Clients | ToolHubSpot</title>
			<meta name="description" content="Generate professional, branded quotes for your clients with ToolHubSpot's free quote generator. 100% customizable, Download as PDF instantly!" />
			<meta property="og:title" content="Create Free Quote for Your Clients | ToolHubSpot" />
			<meta property="og:description" content="Generate professional, branded quotes for your clients with ToolHubSpot's free quote generator. 100% customizable, Download as PDF instantly!" />
			<meta name="keywords" content="custom quote generator, free quote maker, online quote tool, quote template, quote creator, create quote online, professional quote tool, no sign up quote maker, ToolHubSpot quote">
		@break

		@case('purchase-order')
			<title>Create and Download Free Purchase Order | ToolHubSpot</title>
			<meta name="description" content="Generate professional purchase orders for free with ToolHubSpot's online PO generator. Fully customizable templates. Download as PDF instantly!" />
			<meta property="og:title" content="Create and Download Free Purchase Order | ToolHubSpot" />
			<meta property="og:description" content="Generate professional purchase orders for free with ToolHubSpot's online PO generator. Fully customizable templates. Download as PDF instantly!" />
			<meta name="keywords" content="custom purchase order generator, free purchase order maker, online purchase order tool, purchase order template, purchase order creator, create purchase order online, professional purchase order tool, no sign up purchase order maker, ToolHubSpot purchase order">
		@break

		@case('signature')
			<title>Free Digital Signature Tool - Create Your E-Signature</title>
			<meta name="description" content="Create your digital signature online for free. Draw or type your e-signature and download it as a transparent PNG. Fast, secure, and no registration required." />
			<meta property="og:title" content="Free Digital Signature Tool - Create Your E-Signature" />
			<meta property="og:description" content="Create your digital signature in seconds with ToolHubSpot's free online signature tool. Draw, type, or stylize your signature and download instantly!" />
		@break

		@case('color-picker')
			<title>Free Online Color Picker Tool - Get HEX & RGB Instantly</title>
			<meta name="description" content="Use our free online Color Picker tool to select and copy any color on your screen. Instantly get HEX, RGB, or HSL codes. Perfect for designers and developers." />
			<meta property="og:title" content="Free Online Color Picker Tool - Get HEX & RGB Instantly" />
			<meta property="og:description" content="Use our free online Color Picker tool to select and copy any color on your screen. Instantly get HEX, RGB, or HSL codes. Perfect for designers and developers." />
		@break		

		@default
			<title>Free Online Tools for Everyday Work | ToolHubSpot</title>
			<meta name="description" content="Explore 100% free online tools on ToolHubSpot - screen recorder, e-signature, timezone converter, create invoice & more. No sign-up, no download, just use!" />
			<meta property="og:title" content="Free Online Tools for Everyday Work | ToolHubSpot" />
			<meta property="og:description" content="Explore 100% free online tools on ToolHubSpot - screen recorder, e-signature, timezone converter, create invoice & more. No sign-up, no download, just use!" />
		@break
	@endswitch
@else
	<title>Free Online Tools for Everyday Work | ToolHubSpot</title>
    <meta name="description" content="Explore 100% free online tools on ToolHubSpot - screen recorder, e-signature, timezone converter, create invoice & more. No sign-up, no download, just use!" />
	<meta property="og:title" content="Free Online Tools for Everyday Work | ToolHubSpot" />
	<meta property="og:description" content="Explore 100% free online tools on ToolHubSpot - screen recorder, e-signature, timezone converter, create invoice & more. No sign-up, no download, just use!" />
@endif