<?php
// what-we-do.php
include 'includes/config.php';
$page_title = 'What We Do';
include 'includes/header.php';
?>

<!-- Hero Section with Green Background -->
<section class="hero-section" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white; padding: 6rem 0 4rem; min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-3" style="color: white; font-size: 4rem; font-weight: 700;">
                    What We Do
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background: none;">
                        <li class="breadcrumb-item">
                            <a href="index.php" style="color: #DAA520;">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: white;">
                            What We Do
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- About Ben Kijuu Foundation Section - Modern Card Design -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <!-- Modern card design -->
                <div class="position-relative" style="height: 400px;">
                    <div style="
                        background: linear-gradient(135deg, #DAA520 0%, #FFD700 50%, #FFA500 100%); 
                        border-radius: 25px; 
                        height: 100%; 
                        position: relative; 
                        overflow: hidden;
                        box-shadow: 0 10px 30px rgba(218, 165, 32, 0.3);
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        padding: 2rem;
                        text-align: center;
                    ">
                        <!-- Foundation mission icon -->
                        <div style="
                            background: rgba(255,255,255,0.2);
                            border-radius: 50%;
                            width: 120px;
                            height: 120px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            margin-bottom: 1rem;
                        ">
                            <i class="fas fa-ribbon" style="font-size: 3rem; color: rgba(0,0,0,0.3);"></i>
                        </div>
                        
                        <!-- Text overlay -->
                        <div style="color: rgba(0,0,0,0.3); font-weight: 600; font-size: 1.1rem;">
                            Fighting Liver Cancer
                        </div>
                        <div style="color: rgba(0,0,0,0.2); font-weight: 500; font-size: 0.9rem; margin-top: 0.5rem;">
                            Fueling Hope
                        </div>
                        
                        <!-- Small decorative elements -->
                        <div style="
                            position: absolute;
                            top: 20px;
                            right: 20px;
                            width: 40px;
                            height: 40px;
                            background: rgba(255,255,255,0.15);
                            border-radius: 50%;
                        "></div>
                        <div style="
                            position: absolute;
                            bottom: 20px;
                            left: 20px;
                            width: 30px;
                            height: 30px;
                            background: rgba(255,255,255,0.1);
                            border-radius: 50%;
                        "></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                    About Ben Kijuu Foundation
                </span>
                
                <!-- Our Vision -->
                <div class="mb-5 mt-4">
                    <h2 class="mb-3" style="color: #333; font-size: 2.5rem; font-weight: 700;">
                        Our Vision
                    </h2>
                    <p style="color: #666; line-height: 1.6; font-size: 1.1rem;">
                        A future where liver cancer is preventable and curable, with universal access to early 
                        diagnosis, quality treatment, compassionate support and care.
                    </p>
                </div>
                
                <!-- Our Mission -->
                <div class="mb-4">
                    <h2 class="mb-3" style="color: #333; font-size: 2.5rem; font-weight: 700;">
                        Our Mission
                    </h2>
                    <p style="color: #666; line-height: 1.6; font-size: 1.1rem;">
                        To prevent, detect and defeat liver cancer through research, education, support and advocacy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                Guiding principles
            </span>
            <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
                Our Values
            </h2>
        </div>
        
        <div class="row">
            <!-- Compassion -->
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center p-4 h-100" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: #FF6B6B; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-heart" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="color: #333; font-weight: 600;">Compassion</h5>
                </div>
            </div>
            
            <!-- Equity -->
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center p-4 h-100" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: #4ECDC4; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-balance-scale" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="color: #333; font-weight: 600;">Equity</h5>
                </div>
            </div>
            
            <!-- Integrity -->
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="text-center p-4 h-100" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: #45B7D1; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-shield-alt" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="color: #333; font-weight: 600;">Integrity</h5>
                </div>
            </div>
            
            <!-- Patient Centeredness -->
            <div class="col-lg-3 col-md-6 col-6 mb-4">
                <div class="text-center p-4 h-100" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: #96CEB4; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-user-md" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="color: #333; font-weight: 600;">Patient Centeredness</h5>
                </div>
            </div>
            
            <!-- Collaboration -->
            <div class="col-lg-3 col-md-6 col-6 mb-4">
                <div class="text-center p-4 h-100" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: #DAA520; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-handshake" style="color: white; font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="color: #333; font-weight: 600;">Collaboration</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                Our Scope
            </span>
            <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
                What We Do
            </h2>
        </div>
        
        <div class="row">
            <!-- Patient Support -->
            <div class="col-lg-6 mb-5">
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); height: 100%;">
                    <h3 class="mb-3" style="color: #32665B; font-weight: 600;">Patient Support</h3>
                    <ul style="color: #666; line-height: 1.8;">
                        <li>Provide resources, counseling, and assistance for patients and families.</li>
                        <li>Help connect people with clinical trials, treatment centers, or specialists.</li>
                        <li>Offer support groups or peer mentoring programs.</li>
                    </ul>
                </div>
            </div>
            
            <!-- Research Funding -->
            <div class="col-lg-6 mb-5">
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); height: 100%;">
                    <h3 class="mb-3" style="color: #32665B; font-weight: 600;">Research Funding</h3>
                    <ul style="color: #666; line-height: 1.8;">
                        <li>Fund or support scientific research into liver cancer treatments, early detection, and prevention.</li>
                        <li>Partner with universities or research institutions.</li>
                    </ul>
                </div>
            </div>
            
            <!-- Awareness & Education -->
            <div class="col-lg-6 mb-5">
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); height: 100%;">
                    <h3 class="mb-3" style="color: #32665B; font-weight: 600;">Awareness & Education</h3>
                    <ul style="color: #666; line-height: 1.8;">
                        <li>Raise public awareness about liver cancer risk factors (like hepatitis B/C, alcohol use, or fatty liver disease).</li>
                        <li>Educate about symptoms, early detection, and the importance of liver health.</li>
                        <li>Host events, webinars, or campaigns.</li>
                    </ul>
                </div>
            </div>
            
            <!-- Advocacy -->
            <div class="col-lg-6 mb-5">
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); height: 100%;">
                    <h3 class="mb-3" style="color: #32665B; font-weight: 600;">Advocacy</h3>
                    <ul style="color: #666; line-height: 1.8;">
                        <li>Work to influence public policy and funding for liver cancer-related programs.</li>
                        <li>Advocate for access to care, screenings, and new treatments.</li>
                    </ul>
                </div>
            </div>
            
            <!-- Community Outreach -->
            <div class="col-lg-6 mb-4">
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); height: 100%;">
                    <h3 class="mb-3" style="color: #32665B; font-weight: 600;">Community Outreach</h3>
                    <p style="color: #666; line-height: 1.8; margin: 0;">
                        Participate in organizing and staffing events aimed at raising awareness about liver cancer prevention, early detection, and treatment options.
                    </p>
                </div>
            </div>
            
            <!-- Fundraising -->
            <div class="col-lg-6 mb-4">
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); height: 100%;">
                    <h3 class="mb-3" style="color: #32665B; font-weight: 600;">Fundraising</h3>
                    <p style="color: #666; line-height: 1.8; margin: 0;">
                        Organize events like walks, galas, or charity runs to raise money for research and support services.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Volunteer With Us Section -->
<section class="py-5" id="why-volunteer" style="background: white;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                Volunteering & Getting started
            </span>
            <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
                Why Volunteer With Us?
            </h2>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-8">
                <p class="mb-4" style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                    Volunteering with the Ben Kijuu Foundation offers an opportunity to make a tangible difference 
                    in the fight against liver cancer. Whether you're providing direct support to patients, raising 
                    awareness in the community, or assisting behind the scenes, your contributions are invaluable.
                </p>
                <p class="mb-4" style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                    As part of our volunteer network, you'll connect with others who share your passion and dedication.
                </p>
                <p class="mb-4" style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                    If you're interested in volunteering, please complete our Volunteer Application Form or contact 
                    our Volunteer Coordinator.
                </p>
                <div class="contact-info mb-4">
                    <p style="color: #666; margin-bottom: 0.5rem;">
                        <strong>Phone:</strong> <a href="tel:+254722815445" style="color: #32665B;">+254 722 815 445</a>
                    </p>
                    <p style="color: #666; margin-bottom: 0;">
                        <strong>Email:</strong> <a href="mailto:info@benkijuufoundation.com" style="color: #32665B;">info[at]benkijuufoundation.com</a>
                    </p>
                </div>
                <p class="font-script text-center" style="color: #DAA520; font-size: 1.3rem; font-style: italic; margin-top: 2rem;">
                    Together, we can make strides toward a future without liver cancer. Join us in this vital mission today.
                </p>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <a href="story.php" class="btn mb-3 d-block" style="background: #32665B; color: white; border-radius: 50px; padding: 15px 30px; font-weight: 600;">
                        The Story <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="partner.php" class="btn d-block" style="background: #32665B; color: white; border-radius: 50px; padding: 15px 30px; font-weight: 600;">
                        Partner With Us <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>