import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import 'owl.carousel';
var Home = (function () {  
	function redirectToSearch(query) {
		if(query !== '') {
			window.location.href = '/tools?search=' + encodeURIComponent(query);
		}
	}

    return {
        init: function () {
            // Initialize Bootstrap dropdowns
            this.initDropdowns();

			// Trigger on Enter key
			$('.searchBox').on('keypress', function(e) {
				if (e.which == 13) {
					var query = $(this).val().trim(); 
					redirectToSearch(query);
				}
			});

			// Trigger on search button click
			$('.searchBtn').on('click', function() {
				var query = $(this).siblings('.searchBox').val().trim();
				redirectToSearch(query);
			});

            $('.owl-carousel').each(function(idx, el) {
                var $carousel = $(el);
                $carousel.owlCarousel({
                    items:3,
                    loop: true,
                    margin: 20,
                    autoplay: true,
                    nav: true,
                    navText: [
                        `<span class="owl-custom-prev" aria-label="Previous" style="display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;background:#fff;border-radius:50%;box-shadow:0 2px 8px rgba(104,77,244,0.08);color:#684DF4;font-size:22px;"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.5 15L6 9L11.5 3" stroke="#684DF4" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>`,

                        `<span class="owl-custom-next" aria-label="Next" style="display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;background:#fff;border-radius:50%;box-shadow:0 2px 8px rgba(104,77,244,0.08);color:#684DF4;font-size:22px;"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 3L12 9L6.5 15" stroke="#684DF4" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>`
                    ],
                    dots: false,
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        1200: { items: 3 }
                    }
                });
                // Move nav to custom container
                var $nav = $carousel.find('.owl-nav');
                var $customNav = $carousel.parent().find('.owl-custom-nav');
                var $customNavButton = $carousel.parent().find('button');
                $customNav.append($nav);
                $customNav.css({
                    position: 'absolute',
                    right: '16px',
                    bottom: '-30px',
                    zIndex: 10
                });
                $customNavButton.css({
                    border: '0', 
                    backgroundColor:'#f1f5f9',                
                });
                $carousel.parent().css('position', 'relative');
            });
        },

		
        
        initDropdowns: function() {
            // Ensure dropdowns work properly
            document.addEventListener('DOMContentLoaded', function() {
                console.log('Initializing dropdowns...');
                
                // Initialize all dropdowns
                var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
                console.log('Found dropdown elements:', dropdownElementList.length);
                
                var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                    return new bootstrap.Dropdown(dropdownToggleEl);
                });
                
                // Add click event listeners for debugging
                dropdownElementList.forEach(function(dropdownToggle) {
                    dropdownToggle.addEventListener('click', function(e) {
                        console.log('Dropdown clicked:', this.textContent.trim());
                    });
                });
                
                // Add hover functionality for desktop
                if (window.innerWidth >= 992) {
                    document.querySelectorAll('.dropdown').forEach(function(dropdown) {
                        dropdown.addEventListener('mouseenter', function() {
                            var dropdownMenu = this.querySelector('.dropdown-menu');
                            if (dropdownMenu) {
                                dropdownMenu.classList.add('show');
                                console.log('Dropdown opened on hover');
                            }
                        });
                        
                        dropdown.addEventListener('mouseleave', function() {
                            var dropdownMenu = this.querySelector('.dropdown-menu');
                            if (dropdownMenu) {
                                dropdownMenu.classList.remove('show');
                                console.log('Dropdown closed on mouse leave');
                            }
                        });
                    });
                }
            });
        }
    };
})();

$(function () {
    Home.init();
});
window.Home = Home;

// Home page animations and interactions
document.addEventListener('DOMContentLoaded', function() {
    
    // Counter animation for hero stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }
    
    // Scroll animation observer
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const delay = element.getAttribute('data-delay') || 0;
                    
                    setTimeout(() => {
                        element.classList.add('animate');
                    }, delay * 1000);
                    
                    observer.unobserve(element);
                }
            });
        }, observerOptions);
        
        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    }
    
    // Parallax effect for floating icons
    function initParallax() {
        const floatingIcons = document.querySelectorAll('.floating-icon');
        
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            floatingIcons.forEach((icon, index) => {
                const speed = 0.5 + (index * 0.1);
                icon.style.transform = `translateY(${rate * speed}px)`;
            });
        });
    }
    
    // Tool card hover effects
    function initToolCardEffects() {
        const toolCards = document.querySelectorAll('.tool-card');
        
        toolCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    }
    
    // Smooth scroll for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
    
    // Typing effect for hero title
    function initTypingEffect() {
        const heroTitle = document.querySelector('.hero-title');
        if (!heroTitle) return;
        
        const text = heroTitle.textContent;
        heroTitle.textContent = '';
        
        let i = 0;
        const typeWriter = () => {
            if (i < text.length) {
                heroTitle.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        };
        
        // Start typing effect after a short delay
        setTimeout(typeWriter, 500);
    }
    
    // Particle background effect
    function initParticleEffect() {
        const heroSection = document.querySelector('.hero-section');
        if (!heroSection) return;
        
        // Create particles
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.cssText = `
                position: absolute;
                width: 2px;
                height: 2px;
                background: rgba(255, 255, 255, 0.5);
                border-radius: 50%;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
                animation: particle-float ${3 + Math.random() * 4}s infinite linear;
                animation-delay: ${Math.random() * 2}s;
            `;
            heroSection.appendChild(particle);
        }
    }
    
    // Add particle animation CSS
    const particleCSS = `
        @keyframes particle-float {
            0% {
                transform: translateY(0px) translateX(0px);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) translateX(20px);
                opacity: 0;
            }
        }
    `;
    
    const style = document.createElement('style');
    style.textContent = particleCSS;
    document.head.appendChild(style);
    
    // Initialize all effects
    initScrollAnimations();
    initParallax();
    initToolCardEffects();
    initSmoothScroll();
    initParticleEffect();
    
    // Start counter animation after hero section is visible
    const heroObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                heroObserver.unobserve(entry.target);
            }
        });
    });
    
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        heroObserver.observe(heroSection);
    }
    
    // Add loading animation
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });
    
    // Add scroll progress indicator
    /*function initScrollProgress() {
        const progressBar = document.createElement('div');
        progressBar.className = 'scroll-progress';
        progressBar.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #684DF4, #8b5cf6);
            z-index: 9999;
            transition: width 0.1s ease;
        `;
        document.body.appendChild(progressBar);
        
        window.addEventListener('scroll', () => {
            const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            progressBar.style.width = scrolled + '%';
        });
    }
    
    initScrollProgress();*/
    
    // Add cursor trail effect
    function initCursorTrail() {
        const cursor = document.createElement('div');
        cursor.className = 'cursor-trail';
        cursor.style.cssText = `
            position: fixed;
            width: 20px;
            height: 20px;
            background: rgba(104, 77, 244, 0.3);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transition: all 0.1s ease;
            transform: translate(-50%, -50%);
        `;
        document.body.appendChild(cursor);
        
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });
        
        // Hide cursor trail on mobile
        if (window.innerWidth <= 768) {
            cursor.style.display = 'none';
        }
    }
    
    initCursorTrail();
});
