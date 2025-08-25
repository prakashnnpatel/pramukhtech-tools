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
<meta property="og:image" content="{{ url('/') }}/images/tools/{{$toolKey??request()->segment(1)}}.png" />
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
			<meta name="keywords" content="timezone converter, UTC to IST, IST to UTC, GMT to IST, EST to PST, time zone difference, time zone calculator, world clock converter, convert time zones, online time converter, global time converter, time zone conversion tool, convert UTC to local time, international time zones, time zone map">
			<meta property="og:title" content="Smart Timezone Converter | ToolHubSpot" />
			<meta property="og:description" content="Easily convert and compare time zones worldwide with ToolHubSpot's tool. Instantly check the current time across cities, plan meetings, and avoid confusion!" />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('emi-calculator')
			<title>Free EMI Calculator for Home, Car and Personal Loans | ToolHubSpot</title>
			<meta name="description" content="Use our EMI Calculator to calculate your loan EMIs with ease quickly. Get detailed insights into monthly payments, interest rates, and repayment schedules." />
			<meta name="keywords" content="EMI calculator, loan EMI calculator, home loan calculator, car loan EMI calculator, personal loan EMI, monthly loan payment calculator, interest rate EMI calculator, loan repayment schedule, loan amortization calculator, calculate EMI online">
			<meta property="og:title" content="Free EMI Calculator - Calculate Loan EMIs | ToolHubSpot" />
			<meta property="og:description" content="Easily calculate your monthly EMI with ToolHubSpot's Free EMI Calculator. Get quick and accurate results for home, car, personal, or business loans." />
			<link rel="canonical" href="{{url('/emi-calculator')}}"/>
		@break

		@case('sip-calculator')
			<title>The Smart SIP Calculator to Maximize Your Investments</title>
			<meta name="description" content="SIP Calculator - Systematic Investment Plan Calculator. This tool can help you determine the amount you want to invest and the estimated value of the returns." />
			<meta name="keywords" content="SIP calculator, mutual fund SIP calculator, SIP return calculator, monthly SIP investment, SIP growth calculator, systematic investment plan calculator, SIP maturity calculator, SIP amount calculator, calculate SIP returns, SIP investment calculator online">
			<meta property="og:title" content="Free SIP Calculator - Plan Your Investments | ToolHubSpot" />
			<meta property="og:description" content="Plan your investments with ToolHubSpot's Free SIP Calculator. Instantly calculate expected returns from Systematic Investment Plans. Easy, accurate!" />
			<link rel="canonical" href="{{url('/sip-calculator')}}"/>
		@break

		@case('fd-calculator')
			<title>FD Calculator - Calculate Fixed Deposit Interest Online</title>
			<meta name="description" content="Calculate fixed deposit interest easily and maturity value with {{ config('app.name') }} FD Calculator. Plan your savings efficiently with accurate results." />
			<meta name="keywords" content="FD calculator, fixed deposit calculator, bank FD interest calculator, FD maturity amount, fixed deposit interest rate, FD investment calculator, FD interest calculator online, compound interest FD calculator, fixed deposit return calculator, calculate FD maturity value">
			<meta property="og:title" content="Free FD Calculator - Calculate FD Interest | ToolHubSpot" />
			<meta property="og:description" content="Use ToolHubSpot's Free FD Calculator to estimate fixed deposit returns. Quick, accurate, and simple - check maturity amounts and interest earned in seconds." />
			<link rel="canonical" href="{{url('/fd-calculator')}}"/>
		@break

		@case('contact-us')
			<title>Have a Question? We're Just a Message Away</title>
			<meta name="description" content="We are eager to discuss your needs and explore how we can help. Whether it's a new tools or enhancing an existing one, get in touch with us anytime." />
			<meta name="keywords" content="contact ToolHubSpot, ToolHubSpot support, get in touch, customer service, contact details, ToolHubSpot email, ToolHubSpot help, send message, ToolHubSpot phone number, ToolHubSpot contact form">
			<meta property="og:title" content="Contact ToolHubSpot - We're Here to Help You" />
			<meta property="og:description" content="Have a question or suggestion? Reach out to the ToolHubSpot team anytime. We're here to support you and ensure the best experience with our free online tools." />
			<link rel="canonical" href="{{url('/contact-us')}}"/>
		@break

		@case('terms-of-use')
			<title>Terms of Use</title>
			<meta name="description" content="Welcome to {{ config('app.name') }}. These Terms and Conditions govern your use of our services, website, and related tools." />
			<meta property="og:title" content="ToolHubSpot Terms of Use - Understand Your Rights" />
			<meta property="og:description" content="Read the official Terms of Use for ToolHubSpot. Learn about user responsibilities, permitted usage, and legal guidelines for accessing our free online tools and services." />
			<link rel="canonical" href="{{url('/terms-of-use')}}"/>
		@break

		@case('privacy-policy')
			<title>Privacy Policy</title>
			<meta name="description" content="We are a team of IT professionals passionate about delivering IT services and developing high-quality, free tools for public use on the Internet. The primary goal of this website is to offer a comprehensive collection of free online tools (e.g., calculators, color pickers, image resizers, code formatters, etc.) to make everyday tasks easier for users." />
			<meta property="og:title" content="ToolHubSpot Privacy Policy - Your Data, Our Responsibility" />
			<meta property="og:description" content="Understand how ToolHubSpot collects, uses, and protects your personal data. We value your privacy and ensure transparency in every step of your interaction with our tools." />
			<link rel="canonical" href="{{url('/privacy-policy')}}"/>
		@break

		@case('screen-recording')
			<title>Free Online Screen Recorder with Audio | No Installation</title>
			<meta name="description" content="Record your screen with system & mic audio online. No software needed. Free, easy, and secure screen recorder with instant HD download - no watermark!" />
			<meta name="keywords" content="screen recorder, online screen recording, free screen recorder, record computer screen, browser screen recorder, video screen capture, screen recording software online, screen recorder with audio, capture screen online, record screen for free">
			<meta property="og:title" content="Free Online Screen Recorder with Audio | No Installation" />
			<meta property="og:description" content="Record your screen online with ToolHubSpot's free screen recorder. No extensions needed. Just record, preview, and download in a few clicks!" />
			<link rel="canonical" href="{{url('/screen-recording')}}"/>
		@break

		@case('digital-document')
			<title>Create Digital Document | Free & Download PDF | ToolHubSpot</title>
			<meta name="description" content="Create and download professional digital documents in seconds with ToolHubSpot's free document generator - perfect for freelancers and businesses." />
			<meta name="keywords" content="digital document creator, online document generator, free document maker, create invoice online, PDF document creator, online receipt maker, professional document template, generate certificate online, make digital document, online bill generator">
			<meta property="og:title" content="Create Free Digital Document & Download PDF | ToolHubSpot" />
			<meta property="og:description" content="Create and download professional digital documents in seconds with ToolHubSpot's free document generator - perfect for freelancers and businesses." />
			<link rel="canonical" href="{{url('/digital-document')}}"/>
		@break

		@case('invoice-generator')
		@case('custom-invoice')
			<title>Free Invoice Generator - 100% Editable | ToolHubSpot</title>
			<meta name="description" content="Generate branded invoices in minutes with our free tool. Add logo, tax, items & download PDF instantly. No login needed - fast, easy, and 100% free!" />
			<meta property="og:title" content="Free Invoice Generator - 100% Editable | ToolHubSpot" />
			<meta property="og:description" content="Generate branded invoices in minutes with our free tool. Add logo, tax, items & download PDF instantly. No login needed - fast, easy, and 100% free!" />
			<meta name="keywords" content="Invoice generator, free invoice maker, online invoice tool, invoice template, invoice creator, create invoice online, professional invoice tool, no sign up invoice maker, ToolHubSpot invoice">
			<link rel="canonical" href="{{url('/custom-invoice')}}"/>
		@break

		@case('generate-quote')
			<title>Create Free Quote for Your Clients | ToolHubSpot</title>
			<meta name="description" content="Generate professional, branded quotes for your clients with ToolHubSpot's free quote generator. 100% customizable, Download as PDF instantly!" />
			<meta property="og:title" content="Create Free Quote for Your Clients | ToolHubSpot" />
			<meta property="og:description" content="Generate professional, branded quotes for your clients with ToolHubSpot's free quote generator. 100% customizable, Download as PDF instantly!" />
			<meta name="keywords" content="Quote generator, free quote maker, online quote tool, quote template, quote creator, create quote online, professional quote tool, no sign up quote maker, ToolHubSpot quote">
			<link rel="canonical" href="{{url('/generate-quote')}}"/>
		@break

		@case('purchase-order')
			<title>Create and Download Free Purchase Order | ToolHubSpot</title>
			<meta name="description" content="Generate professional purchase orders for free with ToolHubSpot's online PO generator. Fully customizable templates. Download as PDF instantly!" />
			<meta property="og:title" content="Create and Download Free Purchase Order | ToolHubSpot" />
			<meta property="og:description" content="Generate professional purchase orders for free with ToolHubSpot's online PO generator. Fully customizable templates. Download as PDF instantly!" />
			<meta name="keywords" content="customizable purchase order generator, free purchase order maker, online purchase order tool, purchase order template, purchase order creator, create purchase order online, professional purchase order tool, no sign up purchase order maker, ToolHubSpot purchase order">
			<link rel="canonical" href="{{url('/purchase-order')}}"/>
		@break

		@case('signature')
			<title>Free Digital Signature Tool - Create Your E-Signature</title>
			<meta name="description" content="Create your digital signature online for free. Draw or type your e-signature and download it as a transparent PNG. Fast, secure, and no registration required." />
			<meta name="keywords" content="online signature, digital signature maker, e-signature creator, signature generator, free online signature tool, create digital signature, draw signature online, sign documents online, electronic signature maker, digital sign tool">
			<meta property="og:title" content="Free Digital Signature Tool - Create Your E-Signature" />
			<meta property="og:description" content="Create your digital signature in seconds with ToolHubSpot's free online signature tool. Draw, type, or stylize your signature and download instantly!" />
			<link rel="canonical" href="{{url('/signature')}}"/>
		@break

		@case('color-picker')
			<title>Free Online Color Picker Tool - Get HEX & RGB Instantly</title>
			<meta name="description" content="Use our free online Color Picker tool to select and copy any color on your screen. Instantly get HEX, RGB, or HSL codes. Perfect for designers and developers." />
			<meta name="keywords" content="color picker, HTML color picker, RGB color picker, HEX color code picker, online color tool, color code generator, digital color selector, color palette picker, find color code, pick colors online">
			<meta property="og:title" content="Free Online Color Picker Tool - Get HEX & RGB Instantly" />
			<meta property="og:description" content="Use our free online Color Picker tool to select and copy any color on your screen. Instantly get HEX, RGB, or HSL codes. Perfect for designers and developers." />
			<link rel="canonical" href="{{url('/color-picker')}}"/>
		@break

		@case('currency-converter')
			<title>Currency Converter Tool | Real-Time Exchange Rates</title>
			<meta name="description" content="Convert currencies instantly with our free Currency Converter Tool. Get real-time exchange rates for USD, EUR, INR, and more. Fast, accurate, and easy to use.">
			<meta name="keywords" content="currency converter, exchange rates, forex rates, USD to INR, EUR to USD, currency exchange, money converter, forex calculator">
			<meta property="og:title" content="Currency Converter Tool | Real-Time Exchange Rates" />
			<meta property="og:description" content="Convert currencies instantly with our free Currency Converter Tool. Get real-time exchange rates for USD, EUR, INR, and more. Fast, accurate, and easy to use." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('word-counter')
			<title>Word Counter Tool | Count Words, Characters, Sentences & Paragraphs</title>
			<meta name="description" content="Count words, characters, sentences, space and paragraphs instantly with our free Word Counter Tool. Perfect for author, writers, students, and professionals.">
			<meta name="keywords" content="word counter, character counter, sentence counter, paragraph counter, text analyzer, space counter, word count tool, character count, text statistics">
			<meta property="og:title" content="Word Counter Tool | Count Words, Characters, Sentences & Paragraphs" />
			<meta property="og:description" content="Count words, characters, sentences, space and paragraphs instantly with our free Word Counter Tool. Perfect for author, writers, students, and professionals." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('about-us')
			<title>About Us | ToolHubSpot - Your All-in-One Online Tools Hub</title>
			<meta name="description" content="Discover ToolHubSpot's mission, and vision, for your favorite online tools. Learn how we create simple, powerful, and free tools to make your daily tasks easier.">
			<meta name="keywords" content="about ToolHubSpot, ToolHubSpot team, ToolHubSpot mission, online tools hub, free tools provider, our story, ToolHubSpot vision, web tools, productivity tools, ToolHubSpot overview">
			<meta property="og:title" content="About Us | ToolHubSpot - Your All-in-One Online Tools Hub" />
			<meta property="og:description" content="Discover ToolHubSpot's mission, and vision, for your favorite online tools. Learn how we create simple, powerful, and free tools to make your daily tasks easier." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('merge-images-to-pdf')
			<title>Merge Images to PDF Online | Free Combine Multiple Images into One PDF Tool | ToolHubSpot</title>
			<meta name="description" content="Easily merge images into a single PDF online. Free tool to combine JPEG, PNG, JPG, GIF, SVG, WEBP, BMP & TIFF into one PDF. Fast, secure & no installation.">
			<meta name="keywords" content="merge images to pdf, combine images into one pdf, image to pdf converter, convert images to pdf online, join multiple images into pdf, jpg to pdf, png to pdf, free pdf tool, online image to pdf, photo to pdf maker">
			<meta property="og:title" content="Merge Images to PDF Online | Free Combine Multiple Images into One PDF Tool | ToolHubSpot" />
			<meta property="og:description" content="Easily merge images into a single PDF online. Free tool to combine JPEG, PNG, JPG, GIF, SVG, WEBP, BMP & TIFF into one PDF. Fast, secure & no installation." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('qr-code-generator')
			<title>Free Online QR Code Generator | Create QR Codes - ToolHubSpot</title>
			<meta name="description" content="Create free custom QR codes instantly with ToolHubSpot's QR Code Generator. Generate QR codes for URLs, text, Wi-Fi, vCards, and more.">
			<meta name="keywords" content="QR Code Generator, Free QR Code Generator, Online QR Code Maker, Custom QR Code, Create QR Code Online, Download QR Code, QR Code for URL, QR Code for WiFi, QR Code Generator Tool">
			<meta property="og:title" content="Free Online QR Code Generator | Create QR Codes - ToolHubSpot" />
			<meta property="og:description" content="Create free custom QR codes instantly with ToolHubSpot's QR Code Generator. Generate QR codes for URLs, text, Wi-Fi, vCards, and more." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('barcode-sticker-generator')
			<title>Free Online Barcode Generator | Create Barcode Stickers</title>
			<meta name="description" content="Generate barcodes instantly in Code128, EAN, UPC & more. Create, customize & download barcode stickers in PDF for easy printing.">
			<meta name="keywords" content="barcode generator, barcode stickers, online barcode creator, code128 barcode, EAN barcode, UPC barcode, barcode PDF download, printable barcodes, barcode tool">
			<meta property="og:title" content="Free Online Barcode Generator | Create Barcode Stickers" />
			<meta property="og:description" content="Generate barcodes instantly in Code128, EAN, UPC & more. Create, customize & download barcode stickers in PDF for easy printing." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('unicode-text-converter')
			<title>Free Text Converter | Unicode Text Converter</title>
			<meta name="description" content="Unicode text converter that works in Facebook, WhatsApp, Twitter(X), LinkedIn and lots more.">
			<meta name="keywords" content="Unicode converter, text converter, text Unicode converter, unicode text converter, fancy text converter, font style, unicode text transformer, text transformer">			
			<meta property="og:title" content="Free Text Converter | Unicode Text Converter" />
			<meta property="og:description" content="Unicode text converter that works in Facebook, WhatsApp, Twitter(X), LinkedIn and lots more." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('code-minifier')
			<title>Free Online Code Minifier | Minify JavaScript, CSS & HTML Instantly</title>
			<meta name="description" content="Minify JavaScript, CSS & HTML online instantly. Boost website speed, reduce file size, and improve SEO with our free code minifier tool.">
			<meta name="keywords" content="online code minifier, code minifier tool, minify JavaScript online, minify CSS online, minify HTML online, compress code online, free code minifier">			
			<meta property="og:title" content="Free Online Code Minifier | Minify JavaScript, CSS & HTML Instantly" />
			<meta property="og:description" content="Minify JavaScript, CSS & HTML online instantly. Boost website speed, reduce file size, and improve SEO with our free code minifier tool." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@case('code-beautifier')			
			<title>Free Online Code Beautifier | Format & Beautify JavaScript, CSS & HTML</title>
			<meta name="description" content="Beautify JavaScript, CSS & HTML online. Free code beautifier tool to format, clean, and organize minified or messy code instantly.">
			<meta name="keywords" content="online code beautifier, code beautifier tool, beautify JavaScript online, beautify CSS online, beautify HTML online, code formatter online, free code beautifier">			
			<meta property="og:title" content="Free Online Code Minifier | Minify JavaScript, CSS & HTML Instantly" />
			<meta property="og:description" content="Beautify JavaScript, CSS & HTML online. Free code beautifier tool to format, clean, and organize minified or messy code instantly." />
			<link rel="canonical" href="{{url()->current()}}"/>
		@break

		@default
			<title>Free Online Tools for Everyday Work | ToolHubSpot</title>
			<meta name="description" content="Explore 100% free online tools on ToolHubSpot - screen recorder, e-signature, timezone converter, create invoice & more. No sign-up, no download, just use!" />			
			<meta name="keywords" content="online tools, free web tools, productivity tools, digital tools, time converter, timezone converter, EMI calculator, SIP calculator, FD calculator, online signature maker, screen recorder, color picker, document creator, ToolHubSpot">
			<meta property="og:title" content="Free Online Tools for Everyday Work | ToolHubSpot" />
			<meta property="og:description" content="Explore 100% free online tools on ToolHubSpot - screen recorder, e-signature, timezone converter, create invoice & more. No sign-up, no download, just use!" />
			<link rel="canonical" href="{{url('/')}}"/>
		@break
	@endswitch
@else
	<title>Free Online Tools for Everyday Work | ToolHubSpot</title>
    <meta name="description" content="Explore 100% free online tools on ToolHubSpot - screen recorder, e-signature, timezone converter, create invoice & more. No sign-up, no download, just use!" />
	<meta name="keywords" content="online tools, free web tools, productivity tools, digital tools, time converter, timezone converter, EMI calculator, SIP calculator, FD calculator, online signature maker, screen recorder, color picker, document creator, ToolHubSpot">
	<meta property="og:title" content="Free Online Tools for Everyday Work | ToolHubSpot" />
	<meta property="og:description" content="Explore 100% free online tools on ToolHubSpot - screen recorder, e-signature, timezone converter, create invoice & more. No sign-up, no download, just use!" />
	<link rel="canonical" href="{{url('/')}}"/>
@endif