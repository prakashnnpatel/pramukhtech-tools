<footer class="footer-modern">
    <div class="footer-content">
        <div class="footer-main">
            <div class="footer-section">
                <div class="footer-brand">
                    <img src="/images/logo_white.png" alt="{{ config('app.name') }}" class="footer-logo">
                    <h3>{{ config('app.name') }}</h3>
                    <p>Your one-stop destination for free online tools. Boost productivity with our comprehensive suite of utilities designed for professionals and everyday users.</p>
                </div>
            </div>
            
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}" title="Home">Home</a></li>
                    <li><a href="{{ route('about-us') }}" title="About Us">About Us</a></li>
                    <li><a href="{{ route('contact-us') }}" title="Contact Us">Contact Us</a></li>
                    <li><a href="{{ route('tools') }}" title="Search & Explore Free Online Tools">All Tools</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Popular Tools</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('toollist', 'emi-calculator') }}" title="EMI Calculator">EMI Calculator</a></li>
                    <li><a href="{{ route('toollist', 'custom-invoice') }}" title="Create Free Custom Invoice Online">Invoice Generator</a></li>
                    <li><a href="{{ route('toollist', 'signature') }}" title="Create Your Free Digital Signature Online in Seconds">Digital Signature</a></li>
                    <li><a href="{{ route('toollist', 'timezone') }}" title="Free Online Timezone Converter">Timezone Converter</a></li>
                    <li><a href="{{ route('toollist', 'currency-converter') }}" title="Free Online Currency Converter Tool">Currency Converter</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Connect With Us</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=61569624677812" target="_blank" class="social-link" title="Follow us on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.youtube.com/@Pramukh-Tech" target="_blank" class="social-link" title="Subscribe on YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.pramukhtech.com" target="_blank" class="social-link" title="Website">
                        <i class="fas fa-globe"></i>
                    </a>
                    {{--
                    <a href="https://linkedin.com/company/pramukhtech" target="_blank" class="social-link" title="Connect on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://twitter.com/pramukhtech" target="_blank" class="social-link" title="Follow us on Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com/pramukhtech" target="_blank" class="social-link" title="Follow us on Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://github.com/pramukhtech" target="_blank" class="social-link" title="View on GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    --}}
                </div>
                {{--
                <div class="newsletter-signup">
                    <h5>Stay Updated</h5>
                    <p>Get notified about new tools and features</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email" class="newsletter-input">
                        <button type="submit" class="newsletter-btn">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>--}}
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="copyright">
                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
                    <p class="copyright-sub">Made with <i class="fas fa-heart"></i> for the community</p>
                </div>
                <div class="footer-legal">
                    <a href="{{ route('toollist', 'terms-of-use') }}" class="legal-link" title="Terms of Use">Terms of Use</a>
                    <span class="separator">•</span>
                    <a href="{{ route('toollist', 'privacy-policy') }}" class="legal-link" title="Privacy Policy">Privacy Policy</a>
                    <span class="separator">•</span>
                    <a href="{{ route('toollist', 'disclaimer') }}" class="legal-link" title="Disclaimer">Disclaimer</a>
                    <span class="separator">•</span>
                    <a href="/sitemap.xml" class="legal-link" title="Sitemap">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" title="Go to Top">
        <i class="fas fa-chevron-up"></i>
    </button>
</footer>