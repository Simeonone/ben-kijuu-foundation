<?php
// faq.php
include 'includes/config.php';
$page_title = 'FAQs';
include 'includes/header.php';
?>

<!-- Hero Section with Green Background -->
<section class="hero-section" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white; padding: 6rem 0 4rem; min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-3" style="color: white; font-size: 4rem; font-weight: 700;">
                    FAQs
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background: none;">
                        <li class="breadcrumb-item">
                            <a href="index.php" style="color: #DAA520;">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: white;">
                            FAQs
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Content Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            
            <!-- Left Side - FAQ Intro -->
            <div class="col-lg-4 mb-5">
                <div class="faq-intro">
                    <div class="mb-4">
                        <i class="fas fa-question-circle" style="color: #32665B; font-size: 2.5rem; margin-bottom: 1rem;"></i>
                        <span class="font-script d-block" style="color: #DAA520; font-size: 1.3rem; font-weight: 600;">
                            Frequently Asked Questions
                        </span>
                    </div>
                    
                    <h2 class="mb-4" style="color: #333; font-size: 2.5rem; font-weight: 700;">We Answer</h2>
                    
                    <p style="color: #666; line-height: 1.6; font-size: 1.1rem; margin-bottom: 1.5rem;">
                        At the Ben Kijuu Foundation, support, education and awareness are core elements of what we do.
                    </p>
                    
                    <p style="color: #666; line-height: 1.6; font-size: 1.1rem; margin-bottom: 0;">
                        Let us answer some or all of your <span style="color: #32665B; font-weight: 600;">questions</span> 
                        to get you ready to support the mission.
                    </p>
                </div>
            </div>
            
            <!-- Right Side - FAQ Categories and Questions -->
            <div class="col-lg-8">
                
               <!-- Category Tabs -->
<div class="faq-categories mb-4">
    <div class="row">
        <div class="col-md-4 mb-2">
            <button class="category-tab active w-100" data-category="understanding" 
                    style="background: #4CAF50; color: white; border: none; border-radius: 10px; padding: 15px; font-weight: 600; transition: all 0.3s ease;">
                <i class="fas fa-info-circle me-2"></i>Understanding Liver Cancer
            </button>
        </div>
        <div class="col-md-4 mb-2">
            <button class="category-tab w-100" data-category="treatment" 
                    style="background: #e5e7eb; color: #666; border: none; border-radius: 10px; padding: 15px; font-weight: 600; transition: all 0.3s ease;">
                <i class="fas fa-stethoscope me-2"></i>Treatment & Prevention
            </button>
        </div>
        <div class="col-md-4 mb-2">
            <button class="category-tab w-100" data-category="support" 
                    style="background: #e5e7eb; color: #666; border: none; border-radius: 10px; padding: 15px; font-weight: 600; transition: all 0.3s ease;">
                <i class="fas fa-users me-2"></i>Support & Action
            </button>
        </div>
    </div>
</div>
                
                <!-- FAQ Accordion -->
                <div class="faq-accordion">
                    
                    <!-- Understanding Liver Cancer Questions -->
                    <div class="faq-category-content" id="understanding" style="display: block;">
                        <div class="accordion" id="understandingAccordion">
                            
                            <!-- Question 1 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#understanding1" 
                style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
            What are the risk factors for liver cancer?
        </button>
    </h2>
    <div id="understanding1" class="accordion-collapse collapse show" data-bs-parent="#understandingAccordion">
        <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
            Risk factors for liver cancer include chronic infection with hepatitis B or C, cirrhosis, certain inherited liver diseases, diabetes, fatty liver disease, excessive alcohol consumption, and exposure to aflatoxins.
        </div>
    </div>
</div>

                            <!-- Question 2 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#understanding3" 
                style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
            What are the symptoms of liver cancer?
        </button>
    </h2>
    <div id="understanding3" class="accordion-collapse collapse" data-bs-parent="#understandingAccordion">
        <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
            Symptoms may include unintentional weight loss, loss of appetite, upper abdominal pain, nausea and vomiting, general weakness, swelling of the abdomen, jaundice, and white, chalky stools.
        </div>
    </div>
</div>

                            <!-- Question 3 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#understanding2" 
                style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
            How is liver cancer diagnosed?
        </button>
    </h2>
    <div id="understanding2" class="accordion-collapse collapse" data-bs-parent="#understandingAccordion">
        <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
            Liver cancer is diagnosed using imaging tests such as ultrasound, CT scans, or MRI, blood tests for tumor markers like AFP, and sometimes a liver biopsy.
        </div>
    </div>
</div>

                            <!-- Question 4 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#understanding4" 
                                            style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
                                        What is hepatocellular carcinoma (HCC)?
                                        
                                    </button>
                                </h2>
                                <div id="understanding4" class="accordion-collapse collapse" data-bs-parent="#understandingAccordion">
                                    <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
                                        Hepatocellular carcinoma (HCC) is the most common type of primary liver cancer, accounting for about 90% of all liver cancers. It develops in the main type of liver cells called hepatocytes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Treatment & Prevention Questions -->
                    <div class="faq-category-content" id="treatment" style="display: none;">
                        <div class="accordion" id="treatmentAccordion">
                            
                            <!-- Treatment Question 1 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#treatment1" 
                                            style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
                                        What are the treatment options for liver cancer?
                                        <!-- <i class="fas fa-chevron-down ms-auto" style="color: #32665B;"></i> -->
                                    </button>
                                </h2>
                                <div id="treatment1" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
                                        Treatment options include surgery, liver transplantation, chemotherapy, immunotherapy, targeted oral therapy, radiation therapy, ablation, and embolization. The best treatment depends on the stage of cancer and overall liver health.
                                    </div>
                                </div>
                            </div>

                            <!-- Treatment Question 2 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#understanding4" 
                style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
            Can liver cancer be prevented?
        </button>
    </h2>
    <div id="understanding4" class="accordion-collapse collapse" data-bs-parent="#understandingAccordion">
        <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
            Prevention includes getting vaccinated against hepatitis B, avoiding hepatitis C infection by practicing safe sex and avoiding sharing needles, reducing alcohol consumption, maintaining a healthy weight, and avoiding exposure to aflatoxins.
        </div>
    </div>
</div>

                            <!-- Treatment Question 3 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#treatment3" 
                                            style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
                                        What is the hepatitis B vaccine and why is it important?
                                        <!-- <i class="fas fa-chevron-down ms-auto" style="color: #32665B;"></i> -->
                                    </button>
                                </h2>
                                <div id="treatment3" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
                                        The hepatitis B vaccine is recognized as the first "anti-cancer" vaccine. It prevents chronic hepatitis B infection, which is a major cause of liver cancer, significantly reducing the risk of developing liver cancer.
                                    </div>
                                </div>
                            </div>

                            <!-- Treatment Question 4 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#treatment4" 
                                            style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
                                        How often should high-risk individuals get screened?
                                        <!-- <i class="fas fa-chevron-down ms-auto" style="color: #32665B;"></i> -->
                                    </button>
                                </h2>
                                <div id="treatment4" class="accordion-collapse collapse" data-bs-parent="#treatmentAccordion">
                                    <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
                                        If you're at high risk for liver cancer (hepatitis B or C, cirrhosis, or other risk factors), it's recommended to see a doctor at least once a year for screening and monitoring of liver function.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support & Action Questions -->
                    <div class="faq-category-content" id="support" style="display: none;">
                        <div class="accordion" id="supportAccordion">
                            
                            <!-- Support Question 1 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#support1" 
                                            style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
                                        How can I get involved with the Ben Kijuu Foundation?
                                        <!-- <i class="fas fa-chevron-down ms-auto" style="color: #32665B;"></i> -->
                                    </button>
                                </h2>
                                <div id="support1" class="accordion-collapse collapse" data-bs-parent="#supportAccordion">
                                    <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
                                        You can get involved by volunteering, donating, participating in our events, spreading awareness about liver cancer, or joining our support groups. Contact us to learn about current opportunities.
                                    </div>
                                </div>
                            </div>

                            <!-- Support Question 2 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#support2" 
                                            style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
                                        What support services do you offer to patients and families?
                                        <!-- <i class="fas fa-chevron-down ms-auto" style="color: #32665B;"></i> -->
                                    </button>
                                </h2>
                                <div id="support2" class="accordion-collapse collapse" data-bs-parent="#supportAccordion">
                                    <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
                                        We provide resources, counseling, assistance for patients and families, help connecting people with clinical trials and specialists, support groups, and peer mentoring programs.
                                    </div>
                                </div>
                            </div>

                            <!-- Support Question 3 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#support3" 
                                            style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
                                        How are donations used by the foundation?
                                        <!-- <i class="fas fa-chevron-down ms-auto" style="color: #32665B;"></i> -->
                                    </button>
                                </h2>
                                <div id="support3" class="accordion-collapse collapse" data-bs-parent="#supportAccordion">
                                    <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
                                        Donations fund liver cancer research, patient support services, awareness campaigns, educational programs, screening camps, and helping families with financial assistance for treatment.
                                    </div>
                                </div>
                            </div>

                            <!-- Support Question 4 -->
                            <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#support4" 
                                            style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.1rem;">
                                        Do you organize fundraising events?
                                        <!-- <i class="fas fa-chevron-down ms-auto" style="color: #32665B;"></i> -->
                                    </button>
                                </h2>
                                <div id="support4" class="accordion-collapse collapse" data-bs-parent="#supportAccordion">
                                    <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; color: #666; line-height: 1.6;">
                                        Yes, we organize various fundraising events including awareness walks, galas, charity runs, workshops, and screening camps to raise money for research and support services.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Can't Find Your Question Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="text-center mb-4" style="color: #333; font-weight: 600;">Can't find your question and answer?</h3>
                
                <div class="contact-form" style="background: #f8f9fa; border-radius: 25px; padding: 3rem; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <form id="faqForm">
                        
                        <!-- Name Field -->
                        <div class="mb-4">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="name" 
                                placeholder="Your Name" 
                                required
                                style="border: 2px solid #e5e7eb; border-radius: 50px; padding: 1.2rem 1.5rem; font-size: 1rem; background: white;"
                            >
                        </div>
                        
                        <!-- Message Field -->
                        <div class="mb-4">
                            <textarea 
                                class="form-control" 
                                name="message" 
                                rows="5" 
                                placeholder="Write Message..."
                                required
                                style="border: 2px solid #e5e7eb; border-radius: 25px; padding: 1.2rem 1.5rem; font-size: 1rem; background: white; resize: vertical;"
                            ></textarea>
                        </div>
                        
                        <!-- Human Verification -->
                        <div class="mb-4">
                            <div class="p-3" style="border: 2px solid #e5e7eb; border-radius: 15px; background: white;">
                                <p class="mb-3" style="color: #666; margin: 0 0 1rem 0;">Please prove you are human by selecting the <strong>house</strong>.</p>
                                <div class="d-flex justify-content-center gap-4">
                                    <label class="cursor-pointer" style="cursor: pointer;">
                                        <input type="radio" name="human_verification" value="house" required style="display: none;">
                                        <div class="verification-option" style="padding: 1rem; border: 2px solid #e5e7eb; border-radius: 10px; transition: all 0.3s ease;">
                                            <i class="fas fa-home" style="font-size: 2rem; color: #666;"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="cursor-pointer" style="cursor: pointer;">
                                        <input type="radio" name="human_verification" value="car" style="display: none;">
                                        <div class="verification-option" style="padding: 1rem; border: 2px solid #e5e7eb; border-radius: 10px; transition: all 0.3s ease;">
                                            <i class="fas fa-car" style="font-size: 2rem; color: #666;"></i>
                                        </div>
                                    </label>
                                    
                                    <label class="cursor-pointer" style="cursor: pointer;">
                                        <input type="radio" name="human_verification" value="flag" style="display: none;">
                                        <div class="verification-option" style="padding: 1rem; border: 2px solid #e5e7eb; border-radius: 10px; transition: all 0.3s ease;">
                                            <i class="fas fa-flag" style="font-size: 2rem; color: #666;"></i>
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
                                Ask Question Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add custom CSS and JavaScript -->
<style>
.category-tab.active {
    background: #4CAF50 !important;
    color: white !important;
}

.category-tab:not(.active):hover {
    background: #d1d5db !important;
    color: #333 !important;
}

.form-control:focus {
    border-color: #32665B !important;
    box-shadow: 0 0 0 0.2rem rgba(50, 102, 91, 0.25) !important;
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

.accordion-button:not(.collapsed) .fa-chevron-down {
    transform: rotate(180deg);
}

.accordion-button.collapsed .fa-chevron-up {
    transform: rotate(180deg);
}
</style>

<script>
// Category tab switching
document.querySelectorAll('.category-tab').forEach(tab => {
    tab.addEventListener('click', function() {
        // Remove active class from all tabs
        document.querySelectorAll('.category-tab').forEach(t => {
            t.classList.remove('active');
            t.style.background = '#e5e7eb';
            t.style.color = '#666';
        });
        
        // Add active class to clicked tab
        this.classList.add('active');
        this.style.background = '#4CAF50';
        this.style.color = 'white';
        
        // Hide all category content
        document.querySelectorAll('.faq-category-content').forEach(content => {
            content.style.display = 'none';
        });
        
        // Show selected category content
        const category = this.getAttribute('data-category');
        document.getElementById(category).style.display = 'block';
    });
});

// Form submission
document.getElementById('faqForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    // Check if house is selected
    const houseSelected = document.querySelector('input[name="human_verification"]:checked');
    if (!houseSelected || houseSelected.value !== 'house') {
        alert('Please select the house to verify you are human.');
        return false;
    }
    
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    
    // Simulate form submission
    setTimeout(() => {
        alert('Thank you for your question! We will get back to you soon.');
        this.reset();
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }, 2000);
});
</script>

<?php include 'includes/footer.php'; ?>