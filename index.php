<?php
// index.php
include 'includes/config.php';
$page_title = 'Home';
include 'includes/header.php';
?>

<!-- Event Popup Modal - ADD THIS ENTIRE SECTION HERE -->
<div class="event-popup-overlay" id="eventPopup">
    <div class="event-popup-container">
        <div class="event-popup-content">
            <!-- Close button -->
            <button class="popup-close-btn" id="closePopup">
                <i class="fas fa-times"></i>
            </button>
            
            <!-- Decorative elements -->
            <div class="popup-decoration">
                <div class="ribbon-banner">
                    <span>UPCOMING EVENT</span>
                </div>
                <div class="floating-hearts">
                    <div class="heart heart-1">♥</div>
                    <div class="heart heart-2">♥</div>
                    <div class="heart heart-3">♥</div>
                </div>
                <div class="corner-ornament corner-top-left"></div>
                <div class="corner-ornament corner-top-right"></div>
                <div class="corner-ornament corner-bottom-left"></div>
                <div class="corner-ornament corner-bottom-right"></div>
            </div>
            
            <!-- Main poster image -->
            <div class="poster-container">
                <!-- PLACE YOUR WALK/RUN POSTER IMAGE HERE -->
                <!-- Save your image as: assets/images/walk-run-poster.jpg -->
                <img src="assets/images/walk-run-poster.jpg" alt="Walk/Run for Liver Cancer - October 10th, 2025" class="poster-image">
                
                <!-- Overlay glow effect -->
                <div class="poster-glow"></div>
            </div>
            
            <!-- Call-to-action section -->
            <div class="popup-cta">
                <div class="pulse-circle">
                    <div class="pulse-ring"></div>
                    <div class="pulse-ring pulse-ring-delay"></div>
                </div>
                
                <h3 class="popup-title">Don't Miss Out!</h3>
                <p class="popup-subtitle">Join us for this meaningful cause</p>
                
                <div class="popup-buttons">
                    <a href="register.php" class="btn-popup-register">
                        <span class="btn-text">Register Now</span>
                        <span class="btn-icon">🏃‍♀️</span>
                    </a>
                    <button class="btn-popup-later" id="laterBtn">Maybe Later</button>
                </div>
                
                <!-- Event highlights -->
                <div class="event-highlights">
                    <div class="highlight-item">
                        <span class="highlight-icon">📍</span>
                        <span>Karura Forest</span>
                    </div>
                    <div class="highlight-item">
                        <span class="highlight-icon">🕐</span>
                        <span>07:00 AM</span>
                    </div>
                    <div class="highlight-item">
                        <span class="highlight-icon">🏃</span>
                        <span>5/10/21 KM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content text-lg-start text-center">
                    <h1 class="hero-title">Together<br>We're <span class="text-primary">Stronger</span></h1>
                    <p class="hero-subtitle font-script">Fighting Liver Cancer, Fueling Hope</p>
                    <p class="hero-description">
                        Join our community of warriors, supporters, and researchers in the 
                        battle against liver cancer. Every step forward brings us closer to hope and healing.
                    </p>
                    <div class="hero-buttons mt-4">
                        <a href="#about" class="btn btn-primary-custom btn-custom me-3">Tell Me More</a>
                        <a href="events.php" class="btn btn-outline-custom btn-custom">Join The Campaign</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- IMAGE NEEDED: Hero/banner image -->
                <!-- Filename: hero-image.jpg or hero-banner.png -->
                <!-- Description: Inspiring image of people together, medical/health theme, or foundation activities -->
                <img src="assets/images/hero-image.jpg" alt="Together We're Stronger" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <span class="stats-number">10000+</span>
                    <p class="stats-label">Lives We Can Touch</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <span class="stats-number">500+</span>
                    <p class="stats-label">Active Volunteers</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="stats-card">
                    <span class="stats-number">50+</span>
                    <p class="stats-label">Research Projects Funded</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section" id="about">
    <div class="container">
        <h2 class="section-title">About The Ben Kijuu Foundation</h2>
        <p class="section-subtitle">
            The Ben Kijuu Foundation strives to provide support, education, and 
            resources to those affected by liver cancer and to fund research for better 
            treatments and ultimately a cure.
        </p>
        
        <div class="row">
    <div class="col-lg-4 mb-4">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-hands-helping"></i>
            </div>
            <h3 class="feature-title">Support</h3>
            <p class="feature-description">
                Providing emotional and practical support to patients and families 
                affected by liver cancer through our dedicated community network.
            </p>
        </div>
    </div>
    
    <div class="col-lg-4 mb-4">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h3 class="feature-title">Education</h3>
            <p class="feature-description">
                Spreading awareness and knowledge about liver cancer prevention, 
                symptoms, and treatment options to communities worldwide.
            </p>
        </div>
    </div>
    
    <div class="col-lg-4 mb-4">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-microscope"></i>
            </div>
            <h3 class="feature-title">Research</h3>
            <p class="feature-description">
                Funding innovative research projects aimed at developing better 
                treatments and ultimately finding a cure for liver cancer.
            </p>
        </div>
    </div>
</div>
        
        <div class="text-center mt-5">
            <a href="about.php" class="btn btn-primary-custom btn-custom">Read More About Us</a>
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
                <div class="event-card">
                    <!-- IMAGE NEEDED: Volunteer activities image -->
                    <!-- Filename: volunteers.jpg or volunteer-activities.jpg -->
                    <!-- Description: People volunteering, helping others, community work -->
                    <img src="assets/images/volunteers.jpg" alt="Volunteer with Us" class="img-fluid">
                    <div class="event-card-body">
                        <h3 class="event-title">Volunteer with Us</h3>
                        <p class="event-description">
                            Volunteers are the heart of our mission to combat liver cancer through 
                            education, support, and research. There are many ways to get involved 
                            at varying capacities.
                        </p>
                        <a href="volunteer.php" class="btn btn-primary-custom btn-custom">Get Involved</a>
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
                        <a href="volunteer.php" class="btn btn-primary-custom btn-custom">Donate Now</a>
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
                    <a href="register.php" class="btn btn-primary-custom btn-custom me-3">Register Now</a>
                    <a href="events.php" class="btn btn-outline-custom btn-custom">View All Events</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="cta-title">Every Step Forward Brings Us Closer To Hope And Healing</h2>
                <p class="cta-description">
                    Join us in raising vital funds for those battling liver cancer and 
                    in spreading awareness about this important cause.
                </p>
                <a href="donate.php" class="btn btn-danger btn-custom">♥ Donate Now</a>
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
                    <button type="submit" class="btn btn-primary-custom btn-custom">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>