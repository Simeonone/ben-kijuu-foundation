// assets/js/main.js

// DOM Content Loaded Event
document.addEventListener('DOMContentLoaded', function () {
    // Initialize all functions
    initNavigation();
    initAnimations();
    initFormValidation();
    initScrollEffects();
    initCounterAnimation();
    initTooltips();
    initSmoothScrolling();
    initEventPopup();
});

// =============================================
// NAVIGATION FUNCTIONS
// =============================================

function initNavigation() {
    const navbar = document.querySelector('.navbar');
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        if (window.scrollY > 100) {
            navbar.classList.add('navbar-scrolled');
            navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            navbar.style.backdropFilter = 'blur(10px)';
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.style.backgroundColor = 'white';
            navbar.style.backdropFilter = 'none';
            navbar.style.boxShadow = '0 1px 2px rgba(0, 0, 0, 0.05)';
        }
    });

    // Close mobile menu when clicking on links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });

    // Active nav link highlighting
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.nav-link[href^="#"]');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href') === `#${current}`) {
                item.classList.add('active');
            }
        });
    });
}

// =============================================
// ANIMATION FUNCTIONS
// =============================================

function initAnimations() {
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                // Add staggered animation for cards
                if (entry.target.classList.contains('stats-card') ||
                    entry.target.classList.contains('feature-card') ||
                    entry.target.classList.contains('event-card')) {
                    const cards = entry.target.parentElement.querySelectorAll('.stats-card, .feature-card, .event-card');
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.style.animationDelay = `${index * 0.1}s`;
                            card.classList.add('fade-in-up');
                        }, index * 100);
                    });
                }
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animatedElements = document.querySelectorAll(
        '.hero-content, .stats-card, .feature-card, .event-card, .section-title, .section-subtitle'
    );

    animatedElements.forEach(el => observer.observe(el));
}

// =============================================
// COUNTER ANIMATION
// =============================================

function initCounterAnimation() {
    const counters = document.querySelectorAll('.stats-number');

    const animateCounter = (counter) => {
        const target = parseInt(counter.textContent.replace(/\D/g, ''));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }

            // Format number with + if it's the original format
            const originalText = counter.textContent;
            if (originalText.includes('+')) {
                counter.textContent = Math.floor(current) + '+';
            } else if (originalText.includes('K')) {
                counter.textContent = Math.floor(current / 1000) + 'K+';
            } else {
                counter.textContent = Math.floor(current);
            }
        }, 16);
    };

    // Intersection observer for counters
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                entry.target.classList.add('animated');
                animateCounter(entry.target);
            }
        });
    });

    counters.forEach(counter => counterObserver.observe(counter));
}

// =============================================
// FORM VALIDATION & ENHANCEMENT
// =============================================

function initFormValidation() {
    // Real-time form validation
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, textarea, select');

        inputs.forEach(input => {
            // Add focus/blur effects
            input.addEventListener('focus', function () {
                this.parentElement.classList.add('focused');
                this.classList.remove('error');
            });

            input.addEventListener('blur', function () {
                this.parentElement.classList.remove('focused');
                validateField(this);
            });

            // Real-time validation
            input.addEventListener('input', function () {
                if (this.classList.contains('error')) {
                    validateField(this);
                }
            });
        });
    });

    // Phone number formatting
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    phoneInputs.forEach(input => {
        input.addEventListener('input', function () {
            // Remove non-numeric characters except +
            let value = this.value.replace(/[^\d+]/g, '');

            // Format Kenyan phone numbers
            if (value.startsWith('0')) {
                value = '+254' + value.substring(1);
            } else if (value.startsWith('254')) {
                value = '+' + value;
            } else if (!value.startsWith('+254') && value.length > 0 && !value.startsWith('+')) {
                value = '+254' + value;
            }

            this.value = value;
        });
    });
}

function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let errorMessage = '';

    // Required field validation
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = 'This field is required';
    }

    // Email validation
    if (field.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid email address';
        }
    }

    // Phone validation
    if (field.type === 'tel' && value) {
        const phoneRegex = /^\+254\d{9}$/;
        if (!phoneRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid phone number (+254xxxxxxxxx)';
        }
    }

    // Update field appearance
    if (isValid) {
        field.classList.remove('error');
        field.classList.add('valid');
        removeErrorMessage(field);
    } else {
        field.classList.add('error');
        field.classList.remove('valid');
        showErrorMessage(field, errorMessage);
    }

    return isValid;
}

function showErrorMessage(field, message) {
    removeErrorMessage(field);
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message text-danger small mt-1';
    errorDiv.textContent = message;
    field.parentNode.appendChild(errorDiv);
}

function removeErrorMessage(field) {
    const existingError = field.parentNode.querySelector('.error-message');
    if (existingError) {
        existingError.remove();
    }
}

// =============================================
// SCROLL EFFECTS
// =============================================

function initScrollEffects() {
    // REMOVE OR COMMENT OUT this parallax section:
    /*
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;
            heroSection.style.transform = `translateY(${parallax}px)`;
        });
    }
    */

    // Keep only the back to top button and progress bar
    createBackToTopButton();
    createProgressBar();
}

function createBackToTopButton() {
    const backToTopBtn = document.createElement('button');
    backToTopBtn.innerHTML = '↑';
    backToTopBtn.className = 'back-to-top';
    backToTopBtn.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--primary-color);
        color: white;
        border: none;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        box-shadow: 0 4px 15px rgba(220, 38, 38, 0.3);
    `;

    document.body.appendChild(backToTopBtn);

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopBtn.style.opacity = '1';
            backToTopBtn.style.visibility = 'visible';
        } else {
            backToTopBtn.style.opacity = '0';
            backToTopBtn.style.visibility = 'hidden';
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

function createProgressBar() {
    const progressBar = document.createElement('div');
    progressBar.className = 'reading-progress';
    progressBar.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        z-index: 9999;
        transition: width 0.3s ease;
    `;

    document.body.appendChild(progressBar);

    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        progressBar.style.width = Math.min(scrollPercent, 100) + '%';
    });
}

// =============================================
// SMOOTH SCROLLING
// =============================================

function initSmoothScrolling() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// =============================================
// TOOLTIPS & INTERACTIVE ELEMENTS
// =============================================

function initTooltips() {
    // Initialize Bootstrap tooltips if available
    if (typeof bootstrap !== 'undefined') {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }

    // Card hover effects
    const cards = document.querySelectorAll('.stats-card, .feature-card, .event-card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1)';
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
        });
    });
}

// =============================================
// UTILITY FUNCTIONS
// =============================================

// Loading spinner for forms
function showLoadingSpinner(button) {
    const originalText = button.innerHTML;
    button.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';
    button.disabled = true;

    return () => {
        button.innerHTML = originalText;
        button.disabled = false;
    };
}

// Toast notifications
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `toast-notification toast-${type}`;
    toast.innerHTML = `
        <div class="toast-content">
            <span>${message}</span>
            <button class="toast-close">&times;</button>
        </div>
    `;

    toast.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? 'var(--secondary-color)' : 'var(--primary-color)'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        z-index: 10000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `;

    document.body.appendChild(toast);

    // Animate in
    setTimeout(() => {
        toast.style.transform = 'translateX(0)';
    }, 100);

    // Auto remove
    setTimeout(() => {
        toast.style.transform = 'translateX(100%)';
        setTimeout(() => toast.remove(), 300);
    }, 5000);

    // Manual close
    toast.querySelector('.toast-close').addEventListener('click', () => {
        toast.style.transform = 'translateX(100%)';
        setTimeout(() => toast.remove(), 300);
    });
}

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

// =============================================
// ERROR HANDLING & DEBUGGING
// =============================================

// Global error handler
window.addEventListener('error', function (e) {
    console.error('JavaScript Error:', e.error);
    // You can add error reporting here
});

// =============================================
// EVENT POPUP FUNCTIONALITY
// =============================================

function initEventPopup() {
    const popup = document.getElementById('eventPopup');
    const closeBtn = document.getElementById('closePopup');
    const laterBtn = document.getElementById('laterBtn');

    // Show popup on page load (with delay for better UX)
    setTimeout(() => {
        // Check if user has dismissed popup recently (optional)
        const dismissed = localStorage.getItem('eventPopupDismissed');
        const dismissedTime = localStorage.getItem('eventPopupDismissedTime');

        // Show popup if not dismissed, or if dismissed more than 24 hours ago
        const oneDayAgo = Date.now() - (24 * 60 * 60 * 1000);
        if (!dismissed || (dismissedTime && parseInt(dismissedTime) < oneDayAgo)) {
            showEventPopup();
        }
    }, 2000); // 2 second delay after page load

    // Close button functionality
    closeBtn?.addEventListener('click', function () {
        hideEventPopup();
        // Remember dismissal for 24 hours
        localStorage.setItem('eventPopupDismissed', 'true');
        localStorage.setItem('eventPopupDismissedTime', Date.now().toString());
    });

    // Maybe later button
    laterBtn?.addEventListener('click', function () {
        hideEventPopup();
        // Remember dismissal for 6 hours (shorter time)
        localStorage.setItem('eventPopupDismissed', 'true');
        localStorage.setItem('eventPopupDismissedTime', (Date.now() - (18 * 60 * 60 * 1000)).toString());
    });

    // Close on background click
    popup?.addEventListener('click', function (e) {
        if (e.target === popup) {
            hideEventPopup();
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && popup?.classList.contains('show')) {
            hideEventPopup();
        }
    });
}

function showEventPopup() {
    const popup = document.getElementById('eventPopup');
    if (popup) {
        popup.style.display = 'flex';
        // Small delay to trigger animation
        setTimeout(() => {
            popup.classList.add('show');
        }, 10);

        // Prevent body scroll when popup is open
        document.body.style.overflow = 'hidden';
    }
}

function hideEventPopup() {
    const popup = document.getElementById('eventPopup');
    if (popup) {
        popup.classList.remove('show');
        // Allow body scroll
        document.body.style.overflow = '';

        // Hide popup after animation
        setTimeout(() => {
            popup.style.display = 'none';
        }, 400);
    }
}



// Console welcome message
console.log('%c🎗️ Ben Kijuu Foundation', 'color: #dc2626; font-size: 20px; font-weight: bold;');
console.log('%cFighting Liver Cancer, Fueling Hope', 'color: #059669; font-size: 14px;');
console.log('%cWebsite built with ❤️ for the community', 'color: #6b7280; font-size: 12px;');