<?php
// index.php
include 'includes/config.php';
$page_title = 'Home';
include 'includes/header.php';
?>

<!-- Event Popup Modal - SIMPLIFIED VERSION -->
<div class="event-popup-overlay" id="eventPopup" style="display: none;">
    <div class="event-popup-container">
        <div class="event-popup-content">
            <!-- Close button -->
            <button class="popup-close-btn" id="closePopup">
                <i class="fas fa-times"></i>
            </button>
            
            <!-- Minimal decorative elements -->
            <div class="popup-decoration">
                <div class="ribbon-banner">
                    <span>UPCOMING EVENT</span>
                </div>
            </div>
            
            <!-- Main poster image -->
            <div class="poster-container">
                <img src="assets/images/walk-run-poster.jpg" alt="Walk/Run for Liver Cancer - October 10th, 2025" class="poster-image">
            </div>
            
            <!-- Simple call-to-action - just the button -->
            <div class="popup-cta">
                <a href="register.php" class="btn-popup-register">
                    <span class="btn-text">Register Now</span>
                    <span class="btn-icon">🏃‍♀️</span>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- Hero Section -->
<section class="hero-section" style="background: #f8f9fa; padding: 5rem 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content text-start">
                    <p class="hero-subtitle font-script mb-3" style="color: #32665B; font-size: 1.3rem;">Fighting Liver Cancer, Fueling Hope</p>
                    <h1 class="hero-title mb-4" style="color: #333; font-size: 3.5rem; font-weight: 700;">
                        Together<br>
                        <span style="color: #DAA520;">We're Stronger</span>
                    </h1>
                    <p class="hero-description lead mb-5" style="color: #666; font-size: 1.2rem;">
                        Join our community of warriors, supporters, and researchers in the 
                        battle against liver cancer. Every step forward brings us closer to hope and healing.
                    </p>
                    <div class="hero-buttons d-flex align-items-center">
                        <a href="#about" class="btn btn-lg me-4 px-4 py-3" style="background: #32665B; color: white; border-radius: 50px;">Tell Me More</a>
                        
                        <!-- Golden Play Button with Ripple Effect -->
                        <a href="events.php" class="play-btn-wrapper">
                            <div class="play-btn">
                                <div class="ripple-1"></div>
                                <div class="ripple-2"></div>
                                <div class="ripple-3"></div>
                                <i class="fas fa-play"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="assets/images/hero-image.jpg" alt="Together We're Stronger" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<!-- Stats Section -->
<section class="stats-section py-5" style="background-color: #f0f7f0;">
    <div class="container">
        <div class="row text-center">
            
            <!-- Stat 1 -->
            <div class="col-md-4 mb-4">
                <div class="stats-card p-4 bg-white rounded shadow">
                    <div class="stats-icon mb-3">
                        <i class="fas fa-heart text-warning" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="stats-number display-4 fw-bold" style="color: #2d5016;">10000+</h3>
                    <p class="stats-label text-muted">Lives We Can Touch</p>
                </div>
            </div>
            
            <!-- Stat 2 -->
            <div class="col-md-4 mb-4">
                <div class="stats-card p-4 bg-white rounded shadow">
                    <div class="stats-icon mb-3">
                        <i class="fas fa-users text-primary" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="stats-number display-4 fw-bold" style="color: #2d5016;">500+</h3>
                    <p class="stats-label text-muted">Active Volunteers</p>
                </div>
            </div>
            
            <!-- Stat 3 -->
            <div class="col-md-4 mb-4">
                <div class="stats-card p-4 bg-white rounded shadow">
                    <div class="stats-icon mb-3">
                        <i class="fas fa-flask text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="stats-number display-4 fw-bold" style="color: #2d5016;">50+</h3>
                    <p class="stats-label text-muted">Research Projects Funded</p>
                </div>
            </div>
            
        </div>
    </div>
</section>


<!-- About Section -->
<section class="about-section py-5" style="background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="assets/images/family-happy-kenya.jpg" alt="Happy African Family" class="img-fluid rounded-3 shadow-lg">
            </div>
            <div class="col-lg-6">
                <span class="text-uppercase" style="color: #f5a623; font-size: 0.9rem; font-weight: 600;">About Us</span>
                <h2 class="section-title text-start mt-2 mb-4" style="color: #333; font-size: 2.5rem;">Every step forward brings us closer to<br>hope and healing.</h2>
                <p class="mb-4" style="color: #666; line-height: 1.6;">
                    The Ben Kijuu Foundation strives to provide support, education, and resources to those affected by liver cancer and to fund research for better treatments and ultimately a cure.
                </p>
                <p class="mb-4" style="color: #666; line-height: 1.6;">
                    You can get involved with the Ben Kijuu Foundation by donating, volunteering, participating in our events, and spreading awareness about liver cancer. Visit our <a href="about.php" style="color: #2d5016;">'About Us'</a> page for more information, or <a href="partner.php" style="color: #2d5016;">Partner With Us</a>
                </p>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="me-4">
                        <i class="fas fa-hands-helping" style="font-size: 2rem; color: #f5a623;"></i>
                    </div>
                    <div>
                        <h5 style="color: #333; margin: 0;">Volunteer with Us</h5>
                        <p style="color: #666; margin: 0; font-size: 0.9rem;">Volunteers are the heart of our mission to combat liver cancer through education, support, and research.</p>
                    </div>
                </div>
                
                <a href="about.php" class="btn" style="background: #2d5016; color: white; border-radius: 50px; padding: 12px 30px;">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- Community Section -->
<section class="events-section">
    <div class="container">
        <h2 class="section-title">A Dedicated Community</h2>
        <p class="section-subtitle">
            By joining our dedicated team, you can make a meaningful impact in the lives of 
            patients, families, and communities affected by this disease.
        </p>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <!-- Updated Event Card -->
<div class="event-card bg-white rounded shadow-lg overflow-hidden">
    <img src="assets/images/volunteers.jpg" alt="Volunteer with Us" class="img-fluid">
    <div class="event-card-body p-4">
        <h3 class="event-title mb-3" style="color: #2d5016;">Volunteer with Us</h3>
        <p class="event-description text-muted mb-4">
            Volunteers are the heart of our mission to combat liver cancer through 
            education, support, and research. There are many ways to get involved 
            at varying capacities.
        </p>
        <a href="volunteer.php" class="btn btn-warning btn-lg w-100">Get Involved</a>
    </div>
</div>

            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="event-card">
                    <!-- IMAGE NEEDED: Fundraising or events image -->
                    <!-- Filename: fundraising.jpg or events.jpg -->
                    <!-- Description: Fundraising events, people at charity events, donation activities -->
                    <img src="assets/images/fundraising.jpg" alt="Funds Drive" class="img-fluid">
                    <div class="event-card-body">
                        <h3 class="event-title">Funds Drive</h3>
                        <p class="event-description">
                            We organize various events to raise money for research and support services. 
                            Donating is one way to join our community of warriors and supporters.
                        </p>
                        <a href="volunteer.php" class="th-btn btn-custom">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Event Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- IMAGE NEEDED: Walk/Run event image -->
                <!-- Filename: liver-cancer-walk.jpg or awareness-walk.jpg -->
                <!-- Description: People walking/running for charity, event participants, outdoor activity -->
                <img src="assets/images/liver-cancer-walk.jpg" alt="Liver Cancer Awareness Walk/Run" class="img-fluid rounded-3 shadow-lg">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title text-start">Liver Cancer Awareness Walk/Run</h2>
                <p class="section-subtitle text-start">
                    Annual awareness walk to support liver cancer research and patient care initiatives.
                    Choose your distance: 5km, 10km, or 21km. Participate in person or virtually.
                </p>
                <div class="mt-4">
                    <a href="register.php" class="th-btn btn-custom me-3">Register Now</a>
                    <a href="events.php" class="btn btn-outline-custom btn-custom">View All Events</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section" style="background: linear-gradient(135deg, #2d5016 0%, #4a7c59 100%); padding: 5rem 0; color: white; text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="cta-title mb-4" style="font-size: 2.5rem; font-weight: 700; color: white;">
                    Every Step Forward Brings Us Closer To Hope And Healing
                </h2>
                <p class="cta-description mb-4" style="font-size: 1.2rem; color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
                    Join us in raising vital funds for those battling liver cancer and 
                    in spreading awareness about this important cause.
                </p>
                <!-- <a href="donate.php" class="btn btn-lg px-5 py-3" style="background: #f5a623; color: #333; border: none; border-radius: 50px; font-weight: 600; font-size: 1.1rem;">
                    ♥ Donate Now
                </a> -->
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5">
    <div class="container">
        <div class="contact-form">
            <h3 class="text-center mb-4">Join The Community</h3>
            <form id="contactForm" method="POST" action="process-contact.php">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address" required>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="message" rows="4" placeholder="Your Message"></textarea>
                </div>
                
                <!-- Human verification -->
                <div class="mb-3">
                    <p>Please prove you are human by selecting the heart.</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="humanVerification" name="human_verification" required>
                        <label class="form-check-label text-primary" for="humanVerification">
                            ♥
                        </label>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="th-btn btn-custom">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>