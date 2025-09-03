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
            <div class="tools-grid owl-carousel">
                @foreach(\Illuminate\Support\Arr::shuffle($feactureToolListArr['financial']) as $tool)
                    <a href="{{ $tool['link'] }}" class="tool-card" title="{{ $tool['seo_title'] }}" style="text-decoration:none;color:inherit;display:block;">
                        <div class="tool-icon">
                            <i class="{{ $tool['icon'] }}"></i>
                        </div>
                        <div class="tool-content">
                            <h3>{{ $tool['title'] }}</h3>               
                            <p>{{ $tool['description'] }}</p>
                            <span class="tool-link" style="pointer-events:none;">
                                Try Now <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                        <div class="tool-hover-effect"></div>
                    </a>
                @endforeach
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
            <div class="tools-grid owl-carousel">
              @foreach(\Illuminate\Support\Arr::shuffle($feactureToolListArr['documents']) as $tool)
                    <a href="{{ $tool['link'] }}" class="tool-card" title="{{ $tool['seo_title'] }}" style="text-decoration:none;color:inherit;display:block;">
                        <div class="tool-icon">
                            <i class="{{ $tool['icon'] }}"></i>
                        </div>
                        <div class="tool-content">
                            <h3>{{ $tool['title'] }}</h3>               
                            <p>{{ $tool['description'] }}</p>
                            <span class="tool-link" style="pointer-events:none;">
                                Try Now <i class="fas fa-arrow-right"></i>
                            </span> 
                            </div>
                        <div class="tool-hover-effect"></div>
                    </a>
                @endforeach 
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
            <div class="tools-grid owl-carousel"> 
                
                @foreach(\Illuminate\Support\Arr::shuffle($feactureToolListArr['utilities']) as $tool)
                    <a href="{{ $tool['link'] }}" class="tool-card" title="{{ $tool['seo_title'] }}" style="text-decoration:none;color:inherit;display:block;">
                        <div class="tool-icon">
                            <i class="{{ $tool['icon'] }}"></i>
                        </div>
                        <div class="tool-content">
                            <h3>{{ $tool['title'] }}</h3>               
                            <p>{{ $tool['description'] }}</p>
                            <span class="tool-link" style="pointer-events:none;">
                                Try Now <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                        <div class="tool-hover-effect"></div>
                    </a>
                @endforeach
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