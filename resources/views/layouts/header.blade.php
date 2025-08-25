<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <div class="logo fs-4 fw-bold">
            <a href="{{ route('home') }}" title="Free Online Tools | ToolHubSpot">
                <img src="/images/logo.png" alt="{{ config('app.name') }}">
            </a>
        </div>
        
        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        
        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}" title="Free Online Tools | ToolHubSpot">Home</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link {{ request()->is('tools*') ? 'active' : '' }}" href="{{ route('tools') }}" title="Search & Explore Free Online Tools">All Tools</a>
                </li>
                
                <!-- Financial Tools Dropdown -->
				{{--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Calculators">
                        <i class="fas fa-calculator"></i> Calculators
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('toollist', 'fd-calculator')}}" title="FD Calculator">
                            <i class="fas fa-piggy-bank"></i> FD Calculator
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'sip-calculator')}}" title="SIP Calculator">
                            <i class="fas fa-hand-holding-water"></i> SIP Calculator
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'emi-calculator')}}" title="EMI Calculator">
                            <i class="fas fa-calculator"></i> EMI Calculator
                        </a></li>
                    </ul>
                </li>
				--}}
                
                <!-- Document Tools Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Documents">
                        <i class="fas fa-file-pdf"></i> Documents
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('toollist', 'custom-invoice')}}" title="Create Free Custom Invoice Online">
                            <i class="fas fa-file-invoice"></i> Custom Invoice
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'generate-quote')}}" title="Generate Free Online Quotes Easily">
                            <i class="fas fa-file-contract"></i> Generate Quote
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'purchase-order')}}" title="Create Free Purchase Orders Online">
                            <i class="fas fa-shopping-cart"></i> Purchase Order
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'digital-document')}}" title="Create Free Digital Documents & Download Online">
                            <i class="fas fa-file"></i> Digital Document
                        </a></li>
                         <li><a class="dropdown-item" href="{{route('toollist', 'word-counter')}}" title="Free Online Word Counter Tool">
                            <i class="fa-solid fa-font"></i> Word Counter
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'merge-images-to-pdf')}}" title="Merge Images Into PDF Online for Free">
                            <i class="fa-solid fa-file-pdf"></i> Merge Images Into PDF</a>
						</li>
                    </ul>
                </li>
                
                <!-- Utility Tools Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Utilities">
                        <i class="fas fa-tools"></i> Utilities
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('toollist', 'currency-converter')}}" title="Free Online Currency Converter Tool">
                            <i class="fas fa-exchange-alt"></i> Currency Converter
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'timezone')}}" title="Free Online Timezone Converter">
                            <i class="fas fa-clock"></i> Timezone Converter
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'signature')}}" title="Create Your Free Digital Signature Online in Seconds">
                            <i class="fa-solid fa-pen"></i> Digital Signature
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'screen-recording')}}" title="Online Free Screen Recorder with Audio, Download FREE">
                            <i class="fa-solid fa-desktop"></i> Screen Recorder
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'color-picker')}}" title="Free Online Color Picker Tool">
                            <i class="fa-solid fa-palette"></i> Color Picker
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'qr-code-generator')}}" title="Free QR Code Generator Online">
                            <i class="fa-solid fa-qrcode"></i> QR Code Generator
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'barcode-sticker-generator')}}" title="Create Barcode Stickers Online for Free">
                            <i class="fas fa-barcode"></i> Barcode Sticker Generator
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('toollist', 'unicode-text-converter')}}" title="Free Online Unicode Text Converter Tool">
                            <i class="fa-solid fa-language"></i> Unicode Text Converter
                        </a></li>
                    </ul>
                </li>				

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}" title="About Us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}" title="Contact Us">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>