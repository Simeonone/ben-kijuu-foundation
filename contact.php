<?php
// contact.php
include 'includes/config.php';
$page_title = 'Contact Us';
include 'includes/header.php';
?>

<!-- Hero Section with Green Background -->
<section class="hero-section" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white; padding: 6rem 0 4rem; min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-3" style="color: white; font-size: 4rem; font-weight: 700;">
                    Contact Us
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background: none;">
                        <li class="breadcrumb-item">
                            <a href="index.php" style="color: #DAA520;">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: white;">
                            Contact Us
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            
            <!-- Address Card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card h-100" style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center;">
                    <div class="contact-icon mb-3" style="width: 80px; height: 80px; background: linear-gradient(135deg, #32665B 0%, #4a7c59 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-paper-plane" style="color: white; font-size: 2rem;"></i>
                    </div>
                    <h4 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Address</h4>
                    <p style="color: #666; line-height: 1.6; margin-bottom: 0.5rem; font-weight: 500;">P.O Box is 1635-00100</p>
                    <p style="color: #666; line-height: 1.6; margin-bottom: 0; font-weight: 500;">Nairobi</p>
                </div>
            </div>
            
            <!-- Phone Card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="contact-info-card h-100" style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center;">
                    <div class="contact-icon mb-3" style="width: 80px; height: 80px; background: linear-gradient(135deg, #DAA520 0%, #B8860B 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-phone" style="color: white; font-size: 2rem;"></i>
                    </div>
                    <h4 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Phone</h4>
                    <p style="color: #666; line-height: 1.6; margin-bottom: 0; font-weight: 500;">
                        <a href="tel:+254722815445" style="color: #32665B; text-decoration: none;">+254 722 815 445</a>
                    </p>
                </div>
            </div>
            
            <!-- Email Card -->
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="contact-info-card h-100" style="background: white; border-radius: 20px; padding: 2.5rem; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center;">
                    <div class="contact-icon mb-3" style="width: 80px; height: 80px; background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-envelope" style="color: white; font-size: 2rem;"></i>
                    </div>
                    <h4 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Email</h4>
                    <p style="color: #666; line-height: 1.6; margin-bottom: 0; font-weight: 500;">
                        <a href="mailto:info@benkijuufoundation.com" style="color: #32665B; text-decoration: none;">info[at]benkijuufoundation.com</a>
                    </p>
                </div>
            </div>
            
        </div>
        
        <!-- Have Questions Section -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="text-center mb-4">
                    <div class="contact-icon mb-3" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-question-circle" style="color: white; font-size: 3rem;"></i>
                    </div>
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem;">Have Questions?</h3>
                    <p style="color: #666; font-size: 1.1rem; max-width: 500px; margin: 0 auto;">
                        Discover more by visiting us or joining our community
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Maps Section -->
<section class="py-0" style="background: white;">
    <div class="container-fluid p-0">
        <!-- Embedded Google Map for Nairobi, Kenya -->
        <div style="width: 100%; height: 400px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255282.35893760095!2d36.70730395019531!3d-1.302142036320944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1640000000000!5m2!1sen!2sus" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-4">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem;">You can also use the form below to write to us</h3>
                </div>
                
                <div class="contact-form" style="background: white; border-radius: 25px; padding: 3rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <form id="contactForm" method="POST" action="process-contact.php">
                        
                        <!-- Name Field -->
                        <div class="mb-4">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="name" 
                                placeholder="Your Name" 
                                required
                                style="border: 2px solid #e5e7eb; border-radius: 50px; padding: 1.2rem 1.5rem; font-size: 1rem; background: #f8f9fa;"
                            >
                        </div>
                        
                        <!-- Email Field -->
                        <div class="mb-4">
                            <input 
                                type="email" 
                                class="form-control" 
                                name="email" 
                                placeholder="Email Address" 
                                required
                                style="border: 2px solid #e5e7eb; border-radius: 50px; padding: 1.2rem 1.5rem; font-size: 1rem; background: #f8f9fa;"
                            >
                        </div>
                        
                        <!-- Phone Field -->
                        <div class="mb-4">
                            <input 
                                type="tel" 
                                class="form-control" 
                                name="phone" 
                                placeholder="Phone Number"
                                style="border: 2px solid #e5e7eb; border-radius: 50px; padding: 1.2rem 1.5rem; font-size: 1rem; background: #f8f9fa;"
                            >
                        </div>
                        
                        <!-- Message Field -->
                        <div class="mb-4">
                            <textarea 
                                class="form-control" 
                                name="message" 
                                rows="5" 
                                placeholder="Type Your Message"
                                style="border: 2px solid #e5e7eb; border-radius: 25px; padding: 1.2rem 1.5rem; font-size: 1rem; background: #f8f9fa; resize: vertical;"
                            ></textarea>
                        </div>
                        
                        <!-- Human Verification -->
                        <div class="mb-4">
                            <div class="p-3" style="border: 2px solid #e5e7eb; border-radius: 15px; background: #f8f9fa;">
                                <p class="mb-3" style="color: #666; margin: 0 0 1rem 0;">Please prove you are human by selecting the <strong>tree</strong>.</p>
                                <div class="d-flex justify-content-center gap-4">
                                    <label class="cursor-pointer" style="cursor: pointer;">
                                        <input type="radio" name="human_verification" value="truck" style="display: none;">
                                        <div class="verification-option" style="padding: 1rem; border: 2px solid #e5e7eb; border-radius: 10px; transition: all 0.3s ease;">
                                            <i class="fas fa-truck" style="font-size: 2rem; color: #666;"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="cursor-pointer" style="cursor: pointer;">
                                        <input type="radio" name="human_verification" value="tree" required style="display: none;">
                                        <div class="verification-option" style="padding: 1rem; border: 2px solid #e5e7eb; border-radius: 10px; transition: all 0.3s ease;">
                                            <i class="fas fa-tree" style="font-size: 2rem; color: #666;"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="cursor-pointer" style="cursor: pointer;">
                                        <input type="radio" name="human_verification" value="plane" style="display: none;">
                                        <div class="verification-option" style="padding: 1rem; border: 2px solid #e5e7eb; border-radius: 10px; transition: all 0.3s ease;">
                                            <i class="fas fa-plane" style="font-size: 2rem; color: #666;"></i>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="text-center">
                            <button 
                                type="submit" 
                                class="btn"
                                style="background: linear-gradient(135deg, #32665B 0%, #4a7c59 100%); color: white; border: none; border-radius: 50px; padding: 1rem 3rem; font-size: 1.1rem; font-weight: 600; transition: all 0.3s ease;"
                            >
                                Send a Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add custom CSS for form interactions -->
<style>
.form-control:focus {
    border-color: #32665B !important;
    box-shadow: 0 0 0 0.2rem rgba(50, 102, 91, 0.25) !important;
    background: white !important;
}

.verification-option:hover {
    border-color: #32665B !important;
    background: rgba(50, 102, 91, 0.1) !important;
}

input[name="human_verification"]:checked + .verification-option {
    border-color: #32665B !important;
    background: rgba(50, 102, 91, 0.1) !important;
}

input[name="human_verification"]:checked + .verification-option i {
    color: #32665B !important;
}

.contact-info-card:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(50, 102, 91, 0.4) !important;
}
</style>

<!-- Form JavaScript -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    // Check if tree is selected
    const treeSelected = document.querySelector('input[name="human_verification"]:checked');
    if (!treeSelected || treeSelected.value !== 'tree') {
        alert('Please select the tree to verify you are human.');
        return false;
    }
    
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    
    // Simulate form submission (since you want visual only)
    setTimeout(() => {
        alert('Thank you for your message! We will get back to you soon.');
        this.reset();
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }, 2000);
});
</script>

<?php include 'includes/footer.php'; ?>