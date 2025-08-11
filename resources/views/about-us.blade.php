@extends('layouts.app')

@section('content')
<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="fas fa-users"></i></div>
        <div class="header-title">About Us</div>
        <div class="header-desc">We are dedicated to providing high-quality, user-friendly tools that help individuals and businesses streamline their daily tasks and improve productivity.</div>
    </div>
    <div class="tool-card">
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3>Our Mission</h3>
                <p class="text-muted">
                    We are dedicated to providing high-quality, user-friendly tools that help individuals and businesses 
                    streamline their daily tasks and improve productivity.
                </p>
            </div>
            <div class="col-md-6">
                <h3>Our Vision</h3>
                <p class="text-muted">
                    To become the go-to platform for essential digital tools, making complex calculations 
                    and document generation simple and accessible for everyone.
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <h3>What We Offer</h3>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="text-center">
                            <i class="fas fa-calculator fa-3x text-primary mb-3"></i>
                            <h5>Financial Calculators</h5>
                            <p class="text-muted">EMI, SIP, and FD calculators for smart financial planning</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center">
                            <i class="fas fa-file-invoice fa-3x text-primary mb-3"></i>
                            <h5>Document Tools</h5>
                            <p class="text-muted">Invoice generation, digital documents, and purchase orders</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="text-center">
                            <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                            <h5>Utility Tools</h5>
                            <p class="text-muted">Color picker, timezone converter, and signature tools</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Why Choose Us?</h3>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Free to use with no hidden costs</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>User-friendly interface designed for everyone</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Accurate calculations and reliable results</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Regular updates and new features</li>
                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Secure and privacy-focused</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
