<?php
// includes/footer.php
?>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Foundation Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-section">
                    <!-- IMAGE NEEDED: Footer logo -->
                    <!-- Filename: logo-white.png or logo-footer.png -->
                    <!-- Description: Foundation logo in white/light color for dark footer -->
                    <img src="assets/images/logo-white.png" alt="<?php echo SITE_NAME; ?>" height="50" class="mb-3">
                    <h5 class="mb-3"><?php echo SITE_NAME; ?></h5>
                    <p class="text-light mb-3">
                        Fighting Liver Cancer, Fueling Hope. The Ben Kijuu Foundation strives to provide support, 
                        education, and resources to those affected by liver cancer and to fund research for better 
                        treatments and ultimately a cure.
                    </p>
                    
                    <!-- Contact Info -->
                    <div class="contact-info">
                        <p class="mb-2">
                            <strong>Call us any time:</strong><br>
                            <a href="tel:+254722815445" class="text-light">+254 722 815 445</a>
                        </p>
                        <p class="mb-2">
                            <strong>Email us any time:</strong><br>
                            <a href="mailto:info@benkijuufoundation.com" class="text-light">Click HERE</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-section">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="expansion.php">Expansion Plan</a></li>
                        <li><a href="privacy.php">Legal & Privacy</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- More Pages -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-section">
                    <h5 class="mb-3">More Pages</h5>
                    <ul class="footer-links">
                        <li><a href="story.php">The Story</a></li>
                        <li><a href="partner.php">Partner With Us</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- FAQ Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-section">
                    <h5 class="mb-3">Frequent Questions</h5>
                    <p class="text-light mb-3">Need some clarification?</p>
                    <a href="faq.php" class="btn btn-outline-light btn-sm mb-4">Get More Answers</a>
                    
                    <!-- Important Notice -->
                    <div class="alert alert-warning" style="background-color: rgba(255, 193, 7, 0.1); border: 1px solid rgba(255, 193, 7, 0.3);">
                        <small class="text-warning">
                            <strong>Important:</strong> If you experience symptoms of liver cancer, it is crucial to 
                            seek medical advice immediately. Contact your healthcare provider for an evaluation and 
                            appropriate diagnostic tests. Early detection and treatment can improve outcomes.
                        </small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Newsletter Signup -->
        <div class="row mt-4 pt-4" style="border-top: 1px solid #374151;">
            <div class="col-lg-6 mb-3">
                <h5 class="mb-3">Stay Updated</h5>
                <p class="text-light">Join us in raising vital funds for those battling liver cancer and in spreading awareness about this important cause.</p>
            </div>
            <div class="col-lg-6">
                <form id="newsletterForm" method="POST" action="process-newsletter.php" class="d-flex">
                    <input type="email" class="form-control me-2" name="email" placeholder="Enter your email" required style="border-radius: 25px;">
                    <button type="submit" class="btn btn-primary-custom" style="border-radius: 25px; white-space: nowrap;">Subscribe</button>
                </form>
            </div>
        </div>
        
        <!-- Social Media Links (if needed) -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="social-links">
                    <!-- IMAGE NEEDED: Social media icons -->
                    <!-- Filenames: facebook-icon.png, twitter-icon.png, instagram-icon.png, linkedin-icon.png -->
                    <!-- Description: Social media icons in white/light color (32x32px each) -->
                    <a href="#" class="me-3" target="_blank" rel="noopener">
                        <img src="assets/images/facebook-icon.png" alt="Facebook" width="32" height="32">
                    </a>
                    <a href="#" class="me-3" target="_blank" rel="noopener">
                        <img src="assets/images/twitter-icon.png" alt="Twitter" width="32" height="32">
                    </a>
                    <a href="#" class="me-3" target="_blank" rel="noopener">
                        <img src="assets/images/instagram-icon.png" alt="Instagram" width="32" height="32">
                    </a>
                    <a href="#" target="_blank" rel="noopener">
                        <img src="assets/images/linkedin-icon.png" alt="LinkedIn" width="32" height="32">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p>&copy; Copyright <?php echo date('Y'); ?> Ben Kijuu Foundation. All Rights Reserved.</p>
                </div>
<div class="col-lg-6 text-lg-end">
    <a href="donate.php" class="btn btn-danger btn-sm">♥ Donate Now</a>
</div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS and Custom Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>

<!-- Custom JavaScript for forms and interactions -->
<script>
// Contact form handling
document.getElementById('contactForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Add loading state
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Submitting...';
    submitBtn.disabled = true;
    
    // Submit form via fetch
    fetch('process-contact.php', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Thank you! Your message has been sent successfully.');
            this.reset();
        } else {
            alert('Sorry, there was an error sending your message. Please try again.');
        }
    })
    .catch(error => {
        alert('Sorry, there was an error. Please try again.');
    })
    .finally(() => {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    });
});

// Newsletter form handling
document.getElementById('newsletterForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Subscribing...';
    submitBtn.disabled = true;
    
    fetch('process-newsletter.php', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Thank you for subscribing to our newsletter!');
            this.reset();
        } else {
            alert('Sorry, there was an error. Please try again.');
        }
    })
    .catch(error => {
        alert('Sorry, there was an error. Please try again.');
    })
    .finally(() => {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    });
});

// Smooth scrolling for anchor links
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
</script>
</body>
</html>