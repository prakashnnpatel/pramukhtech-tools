import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
// Back to Top Button Functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('backToTop');
    
    if (backToTopBtn) {
        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });
        
        // Smooth scroll to top when clicked
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Newsletter form submission
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.newsletter-input').value;
            
            if (email && isValidEmail(email)) {
                // Show success message
                showNotification('Thank you for subscribing!', 'success');
                this.querySelector('.newsletter-input').value = '';
            } else {
                showNotification('Please enter a valid email address.', 'error');
            }
        });
    }
    
    // Email validation function
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // Notification function
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            color: white;
            font-weight: 500;
            z-index: 10000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            max-width: 300px;
        `;
        
        if (type === 'success') {
            notification.style.background = 'linear-gradient(135deg, #10b981, #059669)';
        } else {
            notification.style.background = 'linear-gradient(135deg, #ef4444, #dc2626)';
        }
        
        notification.textContent = message;
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
    
    // Social media link hover effects
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.1)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Footer link hover effects
    const footerLinks = document.querySelectorAll('.footer-links a');
    footerLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });
});

// Dropdown hover fix for menu (desktop only)
document.addEventListener('DOMContentLoaded', function() {
    // Dropdown hover fix
    const dropdowns = document.querySelectorAll('.navbar-nav .dropdown');
    dropdowns.forEach(function(dropdown) {
        let timeout;
        const menu = dropdown.querySelector('.dropdown-menu');
        if (!menu) return;

        // Open on mouseenter
        dropdown.addEventListener('mouseenter', function() {
            clearTimeout(timeout);
            dropdown.classList.add('show');
            menu.classList.add('show');
        });
        // Keep open when moving to submenu
        menu.addEventListener('mouseenter', function() {
            clearTimeout(timeout);
            dropdown.classList.add('show');
            menu.classList.add('show');
        });
        // Close on mouseleave (with small delay)
        dropdown.addEventListener('mouseleave', function() {
            timeout = setTimeout(function() {
                dropdown.classList.remove('show');
                menu.classList.remove('show');
            }, 150);
        });
        menu.addEventListener('mouseleave', function() {
            timeout = setTimeout(function() {
                dropdown.classList.remove('show');
                menu.classList.remove('show');
            }, 150);
        });
    });

    const swiper = new Swiper('#swiper-vertical', {
        direction: "vertical", 
         slidesPerView: 4,
        spaceBetween: 30,
        freeMode: {
         enabled: true,
         sticky: false,
        },        
        speed: 1500,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
            waitForTransition: false,
        },
        loop: true,      
    });

    new Swiper('#swiper-horizontal', {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: {
         enabled: true,
         sticky: false,
        },        
        speed: 1500,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
            waitForTransition: false,
        },
        loop: true,      
    });
});