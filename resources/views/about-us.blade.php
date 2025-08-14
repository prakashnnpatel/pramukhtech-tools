@extends('layouts.app')

@section('content')
<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="fas fa-users"></i></div>
        <div class="header-title">About Us</div>
        <div class="header-desc">
            At {{ config('app.name') }}, we are committed to creating high-quality, user-friendly tools 
            that help individuals and businesses streamline their daily tasks, save time, and boost productivity.
        </div>
    </div>

    <div class="tool-card">
        <div class="row mb-5">
            <div class="col-md-12 mb-4 mb-md-0">
                <h3>About {{ config('app.name') }}</h3>
                <p class="text-muted">
                    Hello and welcome to {{ config('app.name') }}! We're thrilled that you're here to learn more about our platform.
                </p>

                <p class="text-muted">
                    In today's fast-paced digital world, people rely heavily on online tools and services. 
                    That's why we took the initiative to build a platform that offers powerful, reliable, and 
                    easy-to-use tools to make your life easier.
                </p>

                <p class="text-muted">
                    Our focus is on delivering tools that are not only practical but also completely free, 
                    ensuring everyone - from individuals to businesses - can benefit without limitations.
                </p>
            </div>

            <div class="col-md-12">
                <h3>Our Mission</h3>
                <p class="text-muted">
                    Every day, millions of websites are created, but many either charge fees or collect personal 
                    data before you can access their services. Our mission is different - we provide 100% FREE tools 
                    with no sign-ups and no personal information required.
                </p>
                <p class="text-muted">
                    By using our tools, you can save money, work more efficiently, and make your day-to-day 
                    tasks simpler - without sacrificing privacy.
                </p>
                <p class="text-muted">
                    We continually improve and expand our tool collection to give you a better, smoother, 
                    and more secure experience.
                </p>
            </div>

            <div class="col-md-12">
                <h3>Our Vision</h3>
                <p class="text-muted">
                    To be the leading online platform for essential digital tools, making calculations, 
                    document creation, business cards, greeting cards and everyday utilities accessible to everyone, anywhere in the world.
                </p>
            </div>
        </div>

        <div class="tool-categories">
            <div class=" category-section">
                <h3>What We Offer</h3>
                <div class="tools-grid">
                    <div class="tool-card animate-on-scroll" data-delay="0.1">
                        <div class="tool-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <div class="tool-content">
                            <h3>Financial Calculators</h3>
                            <p>EMI, SIP, FD, and other smart calculators to help you plan and manage finances effectively.</p>
                            {{--<a href="{{route('toollist', 'fd-calculator')}}" class="tool-link" title="Try Now">
                                Try Now <i class="fas fa-arrow-right"></i>
                            </a>--}}
                        </div>
                        <div class="tool-hover-effect"></div>
                    </div>
                    
                    <div class="tool-card animate-on-scroll" data-delay="0.2">
                        <div class="tool-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <div class="tool-content">
                            <h3>Document Tools</h3>
                            <p>Easy invoice creation, purchase orders, and customizable digital documents.</p>
                            {{--<a href="{{route('toollist', 'sip-calculator')}}" class="tool-link" title="Try Now">
                                Try Now <i class="fas fa-arrow-right"></i>
                            </a>--}}
                        </div>
                        <div class="tool-hover-effect"></div>
                    </div>
                    
                    <div class="tool-card animate-on-scroll" data-delay="0.3">
                        <div class="tool-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="tool-content">
                            <h3>Utility Tools</h3>
                            <p>From color pickers and timezone converters to digital signatures, all in one place.</p>
                            {{--<a href="{{route('toollist', 'emi-calculator')}}" class="tool-link" title="Try Now">
                                Try Now <i class="fas fa-arrow-right"></i>
                            </a>--}}
                        </div>
                        <div class="tool-hover-effect"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3>Why Choose Us?</h3>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>100% Free to use - no hidden costs</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Simple, user-friendly interface for everyone</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Accurate, reliable, and fast results</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Regular updates and new tool additions</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Privacy-focused and secure</li>
                </ul>
            </div>
        </div>

        <p class="mt-4">
            Your feedback helps us improve! Please share your thoughts through our 
            <a href="{{ route('contact-us') }}" title="Contact Us">Contact Us</a> form or email us directly at 
            <a href="mailto:pramukhtech.services@gmail.com" title="Email Now">pramukhtech.services@gmail.com</a>.
        </p>
    </div>
</div>

@endsection
