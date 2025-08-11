@extends('layouts.app')

@section('content')
<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="fas fa-envelope-open-text"></i></div>
        <div class="header-title">Contact Us</div>
        <div class="header-desc">Have questions, suggestions, or need support? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</div>
    </div>
    <div class="tool-card">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h3>Get in Touch</h3>
                <div class="contact-info">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                        <div>
                            <h6 class="mb-0">Email</h6>
                            <p class="text-muted mb-0">support@pramukhtech.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-clock fa-2x text-primary me-3"></i>
                        <div>
                            <h6 class="mb-0">Business Hours</h6>
                            <p class="text-muted mb-0">Monday - Friday: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                        <div>
                            <h6 class="mb-0">Location</h6>
                            <p class="text-muted mb-0">India</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
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
                    <div class="mb-3">
                        <label for="message" class="form-label">Message *</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-paper-plane me-2"></i>Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="tool-section mt-5">
        <h3 class="text-center mb-4">Frequently Asked Questions</h3>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        Are all tools free to use?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, all our tools are completely free to use. We believe in providing valuable resources without any cost to our users.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        How accurate are the calculations?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our calculations are based on standard formulas and are regularly tested for accuracy. However, we recommend verifying results for critical financial decisions.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                        Can I save my documents?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Currently, documents are generated on-demand and can be downloaded. We're working on adding document storage features in future updates.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
