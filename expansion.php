<?php
// expansion.php
include 'includes/config.php';
$page_title = 'Expansion Plan';
include 'includes/header.php';
?>

<!-- Hero Section with Green Background -->
<section class="hero-section" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white; padding: 6rem 0 4rem; min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-3" style="color: white; font-size: 4rem; font-weight: 700;">
                    Expansion Plan
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background: none;">
                        <li class="breadcrumb-item">
                            <a href="index.php" style="color: #DAA520;">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: white;">
                            Expansion Plan
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        
        <!-- Introduction -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto text-center">
                <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                    Our goals & aspirations
                </span>
                <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
                    Going Into The Future
                </h2>
            </div>
        </div>

        <!-- Expansion Plan Accordion -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="accordion" id="expansionAccordion">
                    
                    <!-- 1. Research & Medical Advancements -->
                    <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#research" 
                                    style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.2rem; padding: 1.5rem;">
                                1. Research & Medical Advancements
                            </button>
                        </h2>
                        <div id="research" class="accordion-collapse collapse show" data-bs-parent="#expansionAccordion">
                            <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; padding: 2rem;">
                                <ul style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                                    <li><strong>Funding Research Grants:</strong> Seek funding for liver cancer research, including new treatments and early detection methods.</li>
                                    <li><strong>Partnerships with Universities & Hospitals:</strong> Collaborate on clinical trials and innovative therapies.</li>
                                    <li><strong>Biobank & Data Sharing Initiatives:</strong> Collaborative with relevant institutions to establish a biobank for liver cancer samples and promote data sharing among researchers.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Awareness & Education -->
                    <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#awareness" 
                                    style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.2rem; padding: 1.5rem;">
                                2. Awareness & Education
                            </button>
                        </h2>
                        <div id="awareness" class="accordion-collapse collapse" data-bs-parent="#expansionAccordion">
                            <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; padding: 2rem;">
                                <ul style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                                    <li>Awareness Campaigns: Expand public outreach on risk factors (e.g.. hepatitis, fatty liver disease, alcohol).</li>
                                    <li><strong>Patient & Caregiver Education Programs:</strong> Develop resources, webinars, or workshops for those affected.</li>
                                    <li><strong>Training for Healthcare Professionals:</strong> collaborative with respective institutions to provide education programs on early detection and new treatment options</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Patient Support Services -->
                    <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#support" 
                                    style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.2rem; padding: 1.5rem;">
                                3. Patient Support Services
                            </button>
                        </h2>
                        <div id="support" class="accordion-collapse collapse" data-bs-parent="#expansionAccordion">
                            <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; padding: 2rem;">
                                <ul style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                                    <li><strong>Financial Assistance Programs: Offer grants to help with treatment costs, Homecare, tests, travel, or medication.</li>
                                    <li>Expansion of Support Groups: Establish in-person and online support networks for patients and families.</li>
                                    <li>Navigation Services: Help patients connect with specialists, clinical trials, and second opinions</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Policy & Advocacy -->
                    <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#policy" 
                                    style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.2rem; padding: 1.5rem;">
                                4. Policy & Advocacy
                            </button>
                        </h2>
                        <div id="policy" class="accordion-collapse collapse" data-bs-parent="#expansionAccordion">
                            <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; padding: 2rem;">
                                <ul style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                                    <li>Government & Policy Advocacy: Push for more liver cancer funding, screenings, and privacy changes.</li>
                                    <li>Insurance & Access Advocacy: Work to ensure affordable treatments and early screenings.</li>
                                    <li>Global Health Initiatives: Collaborate with international organizations on liver cancer prevention.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Geographic Expansion -->
                    <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#geographic" 
                                    style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.2rem; padding: 1.5rem;">
                                5. Geographic Expansion
                            </button>
                        </h2>
                        <div id="geographic" class="accordion-collapse collapse" data-bs-parent="#expansionAccordion">
                            <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; padding: 2rem;">
                                <ul style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                                    <li>Establish presence in underserved areas.</li>
                                    <li>International Collaboration: Partner with liver cancer organizations worldwide.</li>
                                    <li>Telemedicine & Remote Support: Establish online medical consultations and virtual patient support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Fundraising & Sustainability -->
                    <div class="accordion-item mb-3" style="border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fundraising" 
                                    style="background: white; border-radius: 15px; font-weight: 600; color: #333; font-size: 1.2rem; padding: 1.5rem;">
                                6. Fundraising & Sustainability
                            </button>
                        </h2>
                        <div id="fundraising" class="accordion-collapse collapse" data-bs-parent="#expansionAccordion">
                            <div class="accordion-body" style="background: #f8f9fa; border-radius: 0 0 15px 15px; padding: 2rem;">
                                <ul style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                                    <li>Major Donor & Corporate Partnerships: Engage with philanthropists and companies to secure funding.</li>
                                    <li>Fundraising Events & Campaigns: Expand charity runs, galas, and crowdfunding efforts</li>
                                    <li>Endowment Funds & Grants: Set up a long-term financial sustainability plan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS for accordion styling -->
<style>
.accordion-button:not(.collapsed) {
    background-color: white !important;
    color: #333 !important;
    box-shadow: none !important;
}

.accordion-button:focus {
    box-shadow: none !important;
    border-color: transparent !important;
}

.accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2332665B'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
}

.accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2332665B'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") !important;
    transform: rotate(-180deg) !important;
}

@media (max-width: 768px) {
    .accordion-button {
        font-size: 1rem !important;
        padding: 1rem !important;
    }
    
    .accordion-body {
        padding: 1.5rem !important;
    }
}
</style>

<?php include 'includes/footer.php'; ?>