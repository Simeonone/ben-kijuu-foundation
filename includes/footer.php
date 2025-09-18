<?php
// includes/footer.php
?>

<!-- FAQ Section (before footer) -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="assets/images/person-silhouette-kenya.jpg" alt="Hope and Healing" class="img-fluid" style="filter: grayscale(100%);">
            </div>
            <div class="col-lg-6">
                <span class="text-uppercase" style="color: #f5a623; font-size: 0.9rem; font-weight: 600;">
                    <i class="fas fa-question-circle me-2"></i>Need some clarification?
                </span>
                <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.5rem;">Frequent Questions</h2>
                
                <!-- FAQ Accordions -->
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: white; border: 1px solid #e5e7eb; border-radius: 10px;">
                                What should I do if I think I have symptoms of liver cancer?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="color: #666;">
                                If you experience symptoms of liver cancer, it is crucial to seek medical advice immediately. Contact your healthcare provider for an evaluation and appropriate diagnostic tests. Early detection and treatment can improve outcomes.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: white; border: 1px solid #e5e7eb; border-radius: 10px;">
                                How can I support someone with liver cancer?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="color: #666;">
                                Supporting someone with liver cancer involves providing emotional support, helping with daily activities, accompanying them to medical appointments, and encouraging them to follow their treatment plan.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: white; border: 1px solid #e5e7eb; border-radius: 10px;">
                                How can I donate?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="color: #666;">
                                We officially support mobile money (M-Pesa & Airtel Money) and also mainstream cards such as Visa & Mastercard.
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="faq.php" class="btn mt-4" style="background: #2d5016; color: white; border-radius: 50px; padding: 12px 30px;">Get More Answers</a>
            </div>
        </div>
    </div>
</section>

<!-- Main Footer -->
<footer style="background: linear-gradient(135deg, #2d5016 0%, #1a3009 100%); color: white; padding: 4rem 0 2rem;">
    <div class="container">
        <div class="row">
            <!-- Foundation Info -->
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="assets/images/logo.png" alt="Ben Kijuu Foundation" height="40" class="mb-3">
                <h5 class="mb-3" style="color: #f5a623;">Ben Kijuu Foundation</h5>
                <p class="mb-4" style="color: #d1d5db; line-height: 1.6;">
                    Join us in raising vital funds for those battling liver cancer and in spreading awareness about this important cause.
                </p>
                <a href="donate.php" class="btn btn-warning" style="border-radius: 25px; padding: 10px 25px;">
                    <i class="fas fa-heart me-2"></i>Donate Now
                </a>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="mb-3" style="color: #f5a623;">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/ben-kijuu-foundation/privacy.php" style="color: #d1d5db; text-decoration: none;">About Us</a></li>
                    <li class="mb-2"><a href="/ben-kijuu-foundation/contact.php" style="color: #d1d5db; text-decoration: none;">Contact Us</a></li>
                    <li class="mb-2"><a href="/ben-kijuu-foundation/expansion.php" style="color: #d1d5db; text-decoration: none;">Expansion Plan</a></li>
                    <li class="mb-2"><a href="/ben-kijuu-foundation/privacy.php" style="color: #d1d5db; text-decoration: none;">Legal & Privacy</a></li>
                </ul>
            </div>
            
            <!-- More Pages -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="mb-3" style="color: #f5a623;">More Pages</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="/ben-kijuu-foundation/story.php" style="color: #d1d5db; text-decoration: none;">The Story</a></li>
                    <li class="mb-2"><a href="/ben-kijuu-foundation/partner.php" style="color: #d1d5db; text-decoration: none;">Partner With Us</a></li>
                    <li class="mb-2"><a href="faq.php" style="color: #d1d5db; text-decoration: none;">FAQs</a></li>
                    <li class="mb-2"><a href="blog.php" style="color: #d1d5db; text-decoration: none;">Blog</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3" style="color: #f5a623;">Contact Us</h5>
                
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3" style="width: 40px; height: 40px; background: rgba(245, 166, 35, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-phone" style="color: #f5a623;"></i>
                    </div>
                    <div>
                        <p class="mb-0" style="color: #d1d5db; font-size: 0.9rem;">Call us any time:</p>
                        <a href="tel:+254722815445" style="color: white; text-decoration: none; font-weight: 600;">+254 722 815 445</a>
                    </div>
                </div>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="me-3" style="width: 40px; height: 40px; background: rgba(245, 166, 35, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-envelope" style="color: #f5a623;"></i>
                    </div>
                    <div>
                        <p class="mb-0" style="color: #d1d5db; font-size: 0.9rem;">Email us any time:</p>
                        <a href="mailto:info@benkijuufoundation.com" style="color: white; text-decoration: none; font-weight: 600;">Click HERE</a>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="d-flex gap-3">
                    <a href="https://www.instagram.com/ben_kijuu_fdn" style="color: #d1d5db; font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61575287167534" style="color: #d1d5db; font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                    <a href="https://x.com/benkijuufound" style="color: #d1d5db; font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.tiktok.com/@benkijuufoundation" style="color: #d1d5db; font-size: 1.5rem;"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            
            <!-- Important Notice -->
            <div class="col-lg-2 col-md-12">
                <div class="p-3" style="background: rgba(255, 193, 7, 0.1); border: 1px solid rgba(255, 193, 7, 0.3); border-radius: 10px;">
                    <p style="color: #f5a623; font-weight: 600; font-size: 0.9rem; margin: 0;">
                        <strong>Important:</strong> If you experience symptoms of liver cancer, it is crucial to seek medical advice immediately. Contact your healthcare provider for an evaluation and appropriate diagnostic tests. Early detection and treatment can improve outcomes.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Newsletter Section -->
        <div class="row mt-5 pt-4" style="border-top: 1px solid rgba(255,255,255,0.1);">
            <div class="col-lg-6 mb-3">
                <h5 class="mb-3" style="color: #f5a623;">Stay Updated</h5>
                <p style="color: #d1d5db;">Join us in raising vital funds for those battling liver cancer and in spreading awareness about this important cause.</p>
            </div>
            <div class="col-lg-6">
                <form class="d-flex gap-2">
                    <input type="email" class="form-control" placeholder="Enter your email" style="border-radius: 25px; border: 1px solid rgba(255,255,255,0.2); background: rgba(255,255,255,0.1); color: white;">
                    <button type="submit" class="btn" style="background: #2d5016; color: white; border-radius: 25px; padding: 8px 20px; white-space: nowrap;">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div style="border-top: 1px solid rgba(255,255,255,0.1); margin-top: 3rem; padding-top: 2rem;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p style="color: #9ca3af; margin: 0;">&copy; Copyright <?php echo date('Y'); ?> Ben Kijuu Foundation. All Rights Reserved.</p>
                </div>
                <!-- <div class="col-lg-6 text-lg-end">
                    <a href="donate.php" class="btn btn-danger btn-sm" style="border-radius: 20px;">♥ Donate Now</a>
                </div> -->
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>