@extends('layouts.app')

@section('content')
<div class="fd-calculator-container">
    <!-- Header Section -->
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">Contact Us</h1>
                <p class="calculator-subtitle">Have questions, suggestions, or need support? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            </div>
        </div>
    </div>

    <!-- Main Calculator Section -->
    <div class="calculator-main">
        <div class="row">
            <!-- Input Form Section -->
            <div class="col-lg-8 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-envelope-open-text"></i> We're Just a Message Away </h3>                        
                    </div>
                    <div class="card-body">                    
                        <form>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <p>Have an idea for a new tool? Let's bring it to life, send us a message! We'll build and publish it here for public use.</p>
                                    <p>Your one idea could help or even change the lives of many people.</p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="support">Technical Support</option>
                                        <option value="feedback">Feedback</option>
                                        <option value="bug">Bug Report</option>
                                        <option value="feature">Feature Request</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>

                                <!-- Button -->
                                <div class="col-lg-12">
                                    <div class="calculate-section">
                                        <button type="submit" class="calculate-btn">
                                            <i class="fas fa-paper-plane"></i>
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Get in Touch Section -->
            <div class="col-lg-4 mb-4">
                <div class="info-card">
                    <div class="info-header">
                        <h4><i class="fas fa-handshake"></i> Get in Touch</h4>
                    </div>
                    <div class="info-content">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-text">
                                <h5>Email</h5>
                                <a href="mailto:pramukhtech.services@gmail.com" title="Email Now">Click here to Email</a>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-text">
                                <h5>Call</h5>
                                <p>(+91) 932 844 8634</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-text">
                                <h5>Business Hours</h5>
                                <p>Monday - Friday <br/>9:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-text">
                                <h5>Location</h5>
                                <p>India</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tool-page-container">    
    <div class="tool-section">
        <h3 class="text-center mb-4">Frequently Asked Questions</h3>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        Are your tools really free?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, all our tools are completely free to use. We believe in providing valuable resources without any cost to our users.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        Do I need to provide personal information to use the tools?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Nope! We don't collect personal data. You can use all our tools without creating an account or sharing sensitive information, for your privacy and peace of mind.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                        How accurate and reliable are the results?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our tools deliver accurate, dependable results. We apply industry standard formulas and logic, and our team continuously improves them to ensure they remain precise and reliable. However, we recommend verifying results for critical financial decisions.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                        Can I save my documents?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Currently, documents are generated on-demand and can be downloaded. We're working on adding document storage features in future updates.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                        Can I request a new tool or feature?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely! We welcome suggestions. Feel free to send your ideas using the Contact Us form or email us at pramukhtech.services@gmail.com
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                        Do you regularly update the tools?
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes. ToolHubSpot is actively maintained with bug fixes, enhancements, and new tool additions rolled out frequently for an improved user experience.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                    Can I use these tools for commercial purposes?
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes! Our tools are free for both personal and commercial use, no restrictions, no cost. Just keep using them to your heart's content.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
