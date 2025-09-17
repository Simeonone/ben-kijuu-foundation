<?php
// events.php
include 'includes/config.php';
$page_title = 'Events';
include 'includes/header.php';
?>

<!-- Hero Section with Green Background -->
<section class="hero-section" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white; padding: 6rem 0 4rem; min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-3" style="color: white; font-size: 4rem; font-weight: 700;">
                    Events
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background: none;">
                        <li class="breadcrumb-item">
                            <a href="index.php" style="color: #DAA520;">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: white;">
                            Events
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                Campaigns & Events
            </span>
            <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
                Upcoming Events
            </h2>
            <p style="color: #666; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">
                Stay connected with the latest events in liver cancer awareness and education
            </p>
        </div>
        
        <div class="row">
            <!-- Event 1: Liver Cancer Awareness Walk/Run -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100" style="background: white; border-radius: 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); overflow: hidden; transition: all 0.3s ease;">
                    <div class="event-header" style="background: linear-gradient(135deg, #32665B 0%, #4a7c59 100%); color: white; padding: 2rem; text-align: center;">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">Liver Cancer Awareness Walk/Run</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 0; line-height: 1.6;">
                            Annual awareness walk to support liver cancer research and patient care initiatives.
                        </p>
                    </div>
                    
                    <div class="event-details" style="padding: 1.5rem;">
                        <div class="event-info mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt me-3" style="color: #32665B; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Saturday 10th October</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-map-marker-alt me-3" style="color: #32665B; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Karura Forest - Sigiria Gate</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-clock me-3" style="color: #32665B; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Start: 07:00 am</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-3" style="color: #32665B; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Public</span>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <!-- <button class="btn btn-outline-secondary btn-sm mb-2" style="border-radius: 20px; font-size: 0.8rem;">Click to Register</button> -->
                            <a href="register.php" class="btn d-block" style="background: #32665B; color: white; border-radius: 25px; padding: 12px 20px; font-weight: 600;">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Event 2: Preserve & Save the Liver -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100" style="background: white; border-radius: 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); overflow: hidden; transition: all 0.3s ease;">
                    <div class="event-header" style="background: linear-gradient(135deg, #DAA520 0%, #B8860B 100%); color: white; padding: 2rem; text-align: center;">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">Preserve & Save the Liver</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 0; line-height: 1.6;">
                            Commemorating Ben Kijuu's 2nd Memorial anniversary. The goals are awareness, prevention, financial assistance & help fight liver disease through education and healthy choices
                        </p>
                    </div>
                    
                    <div class="event-details" style="padding: 1.5rem;">
                        <div class="event-info mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt me-3" style="color: #DAA520; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">May 2025 - May 2026</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-map-marker-alt me-3" style="color: #DAA520; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">TBA (To be Advised)</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-3" style="color: #DAA520; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Expected Attendees: 10,000+</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-globe me-3" style="color: #DAA520; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Public</span>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <!-- <button class="btn btn-outline-secondary btn-sm mb-2" style="border-radius: 20px; font-size: 0.8rem;">Click to Register</button> -->
                            <a href="donate.php" class="btn d-block" style="background: #DAA520; color: white; border-radius: 25px; padding: 12px 20px; font-weight: 600;">
                                Donate Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Event 3: Liver Cancer Workshop -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100" style="background: white; border-radius: 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); overflow: hidden; transition: all 0.3s ease;">
                    <div class="event-header" style="background: linear-gradient(135deg, #4a7c59 0%, #2d5016 100%); color: white; padding: 2rem; text-align: center;">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">Liver Cancer Workshop</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 0; line-height: 1.6;">
                            Join leading oncologists and researchers for education, awareness and the latest developments in liver cancer treatment and research.
                        </p>
                    </div>
                    
                    <div class="event-details" style="padding: 1.5rem;">
                        <div class="event-info mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt me-3" style="color: #4a7c59; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">TBA (To be Advised)</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-map-marker-alt me-3" style="color: #4a7c59; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">TBA (To be Advised)</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-3" style="color: #4a7c59; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Expected Attendees: 500</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-user-md me-3" style="color: #4a7c59; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Professional</span>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <!-- <button class="btn btn-outline-secondary btn-sm mb-2" style="border-radius: 20px; font-size: 0.8rem;">Click to Register</button> -->
                            <a href="contact.php" class="btn d-block" style="background: #4a7c59; color: white; border-radius: 25px; padding: 12px 20px; font-weight: 600;">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Event 4: Patient Support Group Meeting -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100" style="background: white; border-radius: 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); overflow: hidden; transition: all 0.3s ease;">
                    <div class="event-header" style="background: linear-gradient(135deg, #6f42c1 0%, #5a2d91 100%); color: white; padding: 2rem; text-align: center;">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">Patient Support Group Meeting</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 0; line-height: 1.6;">
                            Monthly support group for liver cancer patients and their families.
                        </p>
                    </div>
                    
                    <div class="event-details" style="padding: 1.5rem;">
                        <div class="event-info mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt me-3" style="color: #6f42c1; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Monthly</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-video me-3" style="color: #6f42c1; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Virtual</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-3" style="color: #6f42c1; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Expected Attendees: 30</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-hands-helping me-3" style="color: #6f42c1; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Support</span>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <!-- <button class="btn btn-outline-secondary btn-sm mb-2" style="border-radius: 20px; font-size: 0.8rem;">Click to Register</button> -->
                            <a href="contact.php" class="btn d-block" style="background: #6f42c1; color: white; border-radius: 25px; padding: 12px 20px; font-weight: 600;">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Event 5: Liver Cancer Screening Camp -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100" style="background: white; border-radius: 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); overflow: hidden; transition: all 0.3s ease;">
                    <div class="event-header" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); color: white; padding: 2rem; text-align: center;">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">Liver Cancer Screening Camp</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 0; line-height: 1.6;">
                            Free liver cancer screening camp for high-risk individuals.
                        </p>
                    </div>
                    
                    <div class="event-details" style="padding: 1.5rem;">
                        <div class="event-info mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt me-3" style="color: #e74c3c; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">TBA (To be Advised)</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-map-marker-alt me-3" style="color: #e74c3c; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">TBA (To be Advised)</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-3" style="color: #e74c3c; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Expected Attendees: 200</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-globe me-3" style="color: #e74c3c; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Public</span>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <!-- <button class="btn btn-outline-secondary btn-sm mb-2" style="border-radius: 20px; font-size: 0.8rem;">Click to Register</button> -->
                            <a href="contact.php" class="btn d-block" style="background: #e74c3c; color: white; border-radius: 25px; padding: 12px 20px; font-weight: 600;">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Event 6: Research Symposium -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100" style="background: white; border-radius: 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); overflow: hidden; transition: all 0.3s ease;">
                    <div class="event-header" style="background: linear-gradient(135deg, #17a2b8 0%, #117a8b 100%); color: white; padding: 2rem; text-align: center;">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">Research Symposium: Latest Treatments</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 0; line-height: 1.6;">
                            Free liver cancer screening camp for high-risk individuals.
                        </p>
                    </div>
                    
                    <div class="event-details" style="padding: 1.5rem;">
                        <div class="event-info mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar-alt me-3" style="color: #17a2b8; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">TBA (To be Advised)</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-map-marker-alt me-3" style="color: #17a2b8; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">TBA (To be Advised)</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-3" style="color: #17a2b8; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Expected Attendees: 300</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-globe me-3" style="color: #17a2b8; width: 20px;"></i>
                                <span style="color: #666; font-weight: 500;">Public</span>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <!-- <button class="btn btn-outline-secondary btn-sm mb-2" style="border-radius: 20px; font-size: 0.8rem;">Click to Register</button> -->
                            <a href="contact.php" class="btn d-block" style="background: #17a2b8; color: white; border-radius: 25px; padding: 12px 20px; font-weight: 600;">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add hover effects with CSS -->
<style>
.event-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15) !important;
}
</style>

<?php include 'includes/footer.php'; ?>