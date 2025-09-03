@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1 class="hero-title animate-fade-in">
                <span class="gradient-text">All-in-One</span> FREE Online Tools
            </h1>
            <p class="hero-subtitle animate-fade-in-delay">
                Boost your productivity with our comprehensive suite of free, easy-to-use online tools. 
                From financial calculators to document generators - everything you need in one place.
            </p>
            <div class="hero-stats animate-fade-in-delay-2">
                <div class="stat-item">
                    <span class="stat-number" data-target="{{$totalTools}}">0</span>
                    <span class="stat-label">Tools Available</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="100">0</span>
                    <span class="stat-label">% Free</span>
                </div>
                <div class="stat-item">
                    <span class="cta-stat-number">1.5M+</span>
                    <span class="stat-label">Tools Used</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="ai-robot-scene">
                <div>
                    <img src="/images/robot-thinking.gif" style="max-height:60vh;" alt="Robot Thinking"/>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Standard Width Container for remaining sections -->
<div class="home-content-container">
    <!-- Tool Categories -->
    <div class="tool-categories">
        <div class="category-section">
            <h2 class="section-title animate-on-scroll">
                <i class="fas fa-calculator"></i>
                Financial Tools
            </h2>
            <div class="section-description d-flex align-items-center justify-content-between w-100" style="max-width:100%;">
                <span>Smart calculators for your financial planning needs</span>
                <a href="{{ route('tools', 'Finance') }}" class="tool-link" title="Explore All Financial Tools Online | Free & Easy to Use">
                    View all <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="tools-grid">
                <a href="{{route('toollist', 'fd-calculator')}}" class="tool-card animate-on-scroll" data-delay="0.1" title="Free Online FD Calculator, Calculate Fixed Deposit Returns" style="text-decoration:none;color:inherit;display:block;">
                    <div class="tool-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <div class="tool-content">
                        <h3>FD Calculator</h3>
                        <p>Calculate Fixed Deposit returns with ease</p>
                        <span class="tool-link" style="pointer-events:none;">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                    <div class="tool-hover-effect"></div>
                </a>
                
                <a href="{{route('toollist', 'sip-calculator')}}" class="tool-card animate-on-scroll" data-delay="0.1"  title="Free SIP Calculator, Plan Your Systematic Investment Easily" style="text-decoration:none;color:inherit;display:block;">
                    <div class="tool-icon">
                        <i class="fas fa-hand-holding-water"></i>
                    </div>
                    <div class="tool-content">
                        <h3>SIP Calculator</h3>
                        <p>Plan your Systematic Investment Plan</p>
                        <span class="tool-link" style="pointer-events:none;">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                    <div class="tool-hover-effect"></div>
                </a>
                
                <a href="{{route('toollist', 'emi-calculator')}}" class="tool-card animate-on-scroll" data-delay="0.1"  title="Free EMI Calculator, Calculate Loan EMIs Instantly" style="text-decoration:none;color:inherit;display:block;">
                    <div class="tool-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="tool-content">
                        <h3>EMI Calculator</h3>
                        <p>Calculate Equated Monthly Installments</p>
                        <span class="tool-link" style="pointer-events:none;">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                    <div class="tool-hover-effect"></div>
                </a>
            </div>             
        </div>

        <div class="category-section">
            <h2 class="section-title animate-on-scroll">
                <i class="fas fa-file-invoice"></i>
                Document Tools
            </h2>
            <div class="section-description d-flex align-items-center justify-content-between w-100" style="max-width:100%;">
                <span>Professional document generation and management</span>
                <a href="{{ route('tools', 'Documents') }}" class="tool-link" title="Explore All Documents Tools Online | Free & Easy to Use">
                    View all <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="tools-grid">
                <div class="tool-card animate-on-scroll" data-delay="0.1">
                    <div class="tool-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Custom Invoice</h3>
                        <p>Create professional invoices instantly</p>
                        <a href="{{route('toollist', 'custom-invoice')}}" class="tool-link" title="Create Free Custom Invoice Online">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>
                
                <div class="tool-card animate-on-scroll" data-delay="0.2">
                    <div class="tool-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Generate Quote</h3>
                        <p>Create detailed quotes for your business</p>
                        <a href="{{route('toollist', 'generate-quote')}}" class="tool-link" title="Generate Free Online Quotes Easily">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>
                
                <div class="tool-card animate-on-scroll" data-delay="0.3">
                    <div class="tool-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Purchase Order</h3>
                        <p>Generate purchase orders quickly</p>
                        <a href="{{route('toollist', 'purchase-order')}}" class="tool-link" title="Create Free Purchase Orders Online">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>
                
                <div class="tool-card animate-on-scroll" data-delay="0.4">
                    <div class="tool-icon">
                        <i class="fa-solid fa-file"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Digital Document</h3>
                        <p>Create and manage digital documents</p>
                        <a href="{{route('toollist', 'digital-document')}}" class="tool-link" title="Create Free Digital Documents & Download Online">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>

                <div class="tool-card animate-on-scroll" data-delay="0.5">
                    <div class="tool-icon">
                        <i class="fa-solid fa-font"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Word Counter</h3>
                        <p>Count words, characters, sentences & paragraphs, spaces and more.</p>
                        <a href="{{route('toollist', 'word-counter')}}" class="tool-link" title="Free Online Word Counter Tool">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>

                <div class="tool-card animate-on-scroll" data-delay="0.5">
                    <div class="tool-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Merge Images Into PDF</h3>
                        <p>Turn multiple photos or images in any format into a polished, professional PDF.
                        </p>
                        <a href="{{route('toollist', 'merge-images-to-pdf')}}" class="tool-link" title="Merge Images Into PDF Online for Free">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>

            </div>
        </div>

        <div class="category-section">
            <h2 class="section-title animate-on-scroll">
                <i class="fas fa-tools"></i>
                Utility Tools
            </h2>
            <div class="section-description d-flex align-items-center justify-content-between w-100" style="max-width:100%;">
                <span>Essential utilities for everyday tasks</span>
                <a href="{{ route('tools', 'Utilities') }}" class="tool-link" title="Explore All Utility Tools Online | Free & Easy to Use">
                    View all <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="tools-grid">
                <div class="tool-card animate-on-scroll" data-delay="0.1">
                    <div class="tool-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Timezone Converter</h3>
                        <p>Convert time between different timezones</p>
                        <a href="{{route('toollist', 'timezone')}}" class="tool-link" title="Free Online Timezone Converter">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>
                
                <div class="tool-card animate-on-scroll" data-delay="0.2">
                    <div class="tool-icon">
                        <i class="fa-solid fa-pen"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Digital Signature</h3>
                        <p>Create your digital signature in seconds</p>
                        <a href="{{route('toollist', 'signature')}}" class="tool-link" title="Create Your Free Digital Signature Online in Seconds">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>
                
                <div class="tool-card animate-on-scroll" data-delay="0.3">
                    <div class="tool-icon">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Screen Recorder</h3>
                        <p>Record your screen with audio</p>
                        <a href="{{route('toollist', 'screen-recording')}}" class="tool-link" title="Online Free Screen Recorder with Audio, Download FREE">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>
                
                <div class="tool-card animate-on-scroll" data-delay="0.4">
                    <div class="tool-icon">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Color Picker</h3>
                        <p>Pick and convert colors easily</p>
                        <a href="{{route('toollist', 'color-picker')}}" class="tool-link" title="Free Online Color Picker Tool">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>

                <div class="tool-card animate-on-scroll" data-delay="0.4">
                    <div class="tool-icon">
                        <i class="fa-solid fa-qrcode"></i>
                    </div>
                    <div class="tool-content">
                        <h3>QR Code Generator</h3>
                        <p>Create customizable QR codes and download as PNG/SVG.</p>
                        <a href="{{route('toollist', 'qr-code-generator')}}" class="tool-link" title="Free QR Code Generator Online">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>

                <div class="tool-card animate-on-scroll" data-delay="0.4">
                    <div class="tool-icon">
                        <i class="fas fa-barcode"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Barcode Sticker Generator</h3>
                        <p>Generate up to 50 barcode stickers at once and download as PDF.</p>
                        <a href="{{route('toollist', 'barcode-sticker-generator')}}" class="tool-link" title="Create Barcode Stickers Online for Free">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>

                <div class="tool-card animate-on-scroll" data-delay="0.4">
                    <div class="tool-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Currency Converter</h3>
                        <p>Support for 160+ global currencies with real-time exchange rates.</p>
                        <a href="{{route('toollist', 'currency-converter')}}" class="tool-link" title="Free Online Currency Converter Tool">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>

                <div class="tool-card animate-on-scroll" data-delay="0.4">
                    <div class="tool-icon">
                        <i class="fa-solid fa-language"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Unicode Text Converter</h3>
                        <p>Generate fancy Unicode styles and copy anywhere.</p>
                        <a href="{{route('toollist', 'unicode-text-converter')}}" class="tool-link" title="Free Online Unicode Text Converter Tool">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>

                <div class="tool-card animate-on-scroll" data-delay="0.4">
                    <div class="tool-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="tool-content">
                        <h3>Code Beautifier</h3>
                        <p>Format HTML, JavaScript, and CSS for better readability.</p>
                        <a href="{{route('toollist', 'code-beautifier')}}" class="tool-link" title="Free Online Code Beautifier | Format & Beautify JavaScript, CSS & HTML">
                            Try Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="tool-hover-effect"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features-section">
        <div class="container">
            <h2 class="section-title text-center animate-on-scroll">Why Choose Our Tools?</h2>
            <div class="features-grid">
                <div class="feature-card animate-on-scroll" data-delay="0.1">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Lightning Fast</h3>
                    <p>All tools load instantly and work seamlessly without any delays</p>
                </div>
                
                <div class="feature-card animate-on-scroll" data-delay="0.2">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% Secure</h3>
                    <p>Your data stays private and secure. No information is stored on our servers</p>
                </div>
                
                <div class="feature-card animate-on-scroll" data-delay="0.3">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Friendly</h3>
                    <p>All tools work perfectly on desktop, tablet, and mobile devices</p>
                </div>
                
                <div class="feature-card animate-on-scroll" data-delay="0.4">
                    <div class="feature-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Completely Free</h3>
                    <p>No hidden costs, no premium features, everything is absolutely free</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="cta-section-improved">
    <div class="cta-background">
        <div class="cta-pattern"></div>
    </div>
    <div class="footer-content">
        <div class="cta-content">
            <div class="cta-text">
                <h2 class="animate-on-scroll">Ready to Boost Your Productivity?</h2>
                <p class="animate-on-scroll">Start using our tools today and experience the difference. Join millions of worldwide users who trust our platform for their daily tasks.</p>
                <div class="cta-stats">
                    <div class="cta-stat">
                        <span class="cta-stat-number">74K+</span>
                        <span class="cta-stat-label">Happy Users</span>
                    </div>
                    <div class="cta-stat">
                        <span class="cta-stat-number">1.5M+</span>
                        <span class="cta-stat-label">Tools Used</span>
                    </div>
                    <div class="cta-stat">
                        <span class="cta-stat-number">99.9%</span>
                        <span class="cta-stat-label">Uptime</span>
                    </div>
                </div>
            </div>
            <div class="cta-buttons animate-on-scroll">
                <a href="{{ route('tools') }}" class="btn btn-primary btn-lg cta-btn-primary" title="Get Started Now">
                    <i class="fas fa-play"></i>
                    Search Tools Now
                </a>
                <a href="{{route('about-us')}}" class="btn btn-outline-light btn-lg cta-btn-secondary" title="Learn More About Us">
                    <i class="fas fa-info-circle"></i>
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page_scripts')
@endpush
