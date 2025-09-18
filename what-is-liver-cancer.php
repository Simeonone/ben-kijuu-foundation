<?php
// what-is-liver-cancer.php
include 'includes/config.php';
$page_title = 'What Is Liver Cancer';
include 'includes/header.php';
?>

<!-- Hero Section with Green Background -->
<section class="hero-section" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white; padding: 6rem 0 4rem; min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-3" style="color: white; font-size: 4rem; font-weight: 700;">
                    About Liver Cancer
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background: none;">
                        <li class="breadcrumb-item">
                            <a href="index.php" style="color: #DAA520;">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: white;">
                            About Liver Cancer
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- What Is Liver Cancer Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                In brief
            </span>
            <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
                What Is Liver Cancer?
            </h2>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="p-4 mb-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem;">
                        Cancer is a condition where normal cells undergo changes and begin to grow uncontrollably, 
                        often forming a lump known as a tumor or mass. Tumors can be either benign (non-cancerous) 
                        or malignant (cancerous). The type of cancer is typically named after the area of the body 
                        where it originates.
                    </p>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem; font-style: italic;">
                        When cancer begins in the liver, it is referred to as primary liver cancer. If cancer 
                        spreads to the liver from another part of the body—a process called metastasis—it is 
                        not classified as liver cancer.
                    </p>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 0;">
                        In most cases, when we talk about "liver cancer," we are referring to hepatocellular 
                        carcinoma (HCC), the most common form of primary liver cancer. HCC originates in the 
                        main type of liver cells. There are also other, less common types of liver cancer, 
                        sometimes called hepatobiliary cancers, which include:
                    </p>
                    
                    <ul style="color: #666; line-height: 1.6; margin-top: 1rem;">
                        <li>Cholangiocarcinoma, which starts in the bile ducts</li>
                        <li>Angiosarcoma, which originates in the liver's blood vessels</li>
                        <li>Gallbladder cancer, which begins in the gallbladder cells</li>
                    </ul>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-top: 1.5rem; margin-bottom: 0;">
                        Below is a comparison of a normal liver vs cancerous liver.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Types of Liver Cancer Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="color: #333; font-size: 2.8rem; font-weight: 700;">
                Types of Liver Cancer
            </h2>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Accordion for Types of Cancer -->
                <div class="accordion" id="liverCancerAccordion">
                    
                    <!-- Hepatocellular carcinoma (HCC) -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#hcc" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Hepatocellular carcinoma (HCC)
                            </button>
                        </h2>
                        <div id="hcc" class="accordion-collapse collapse show" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Liver cells called hepatocytes</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">The most common type of liver cancer<br>Accounts for about 90% of liver cancers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bile duct cancer (Cholangiocarcinoma) -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bile" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Bile duct cancer (Cholangiocarcinoma)
                            </button>
                        </h2>
                        <div id="bile" class="accordion-collapse collapse" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">The bile duct, which begins inside the liver and extends to the small intestine</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Accounts for about 9% of liver cancers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Continue with other accordion items as provided previously... -->
                    <!-- (Include all 9 types as I provided in the previous response) -->
                     <!-- Angiosarcoma -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#angio" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Angiosarcoma
                            </button>
                        </h2>
                        <div id="angio" class="accordion-collapse collapse" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Blood vessels in the liver</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Accounts for less than 1% of liver cancers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallbladder cancer -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gallbladder" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Gallbladder cancer
                            </button>
                        </h2>
                        <div id="gallbladder" class="accordion-collapse collapse" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Gallbladder lining</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Accounts for less than 1% of liver cancers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hepatoblastoma -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hepatoblastoma" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Hepatoblastoma
                            </button>
                        </h2>
                        <div id="hepatoblastoma" class="accordion-collapse collapse" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Embryonic (or early stage) liver cells</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Very rare kind of liver cancer usually found in children younger than 4 years</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fibrolamellar carcinoma -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fibrolamellar" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Fibrolamellar carcinoma
                            </button>
                        </h2>
                        <div id="fibrolamellar" class="accordion-collapse collapse" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Found in hepatocytes but often involves growth into the bile ducts</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Rare and unique form of liver cancer occurring most commonly in children and young adults without hepatitis or cirrhosis. Accounts for less than 1% to 8% of all hepatocellular carcinomas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Undifferentiated embryonal sarcoma of the liver (UESL) -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#uesl" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Undifferentiated embryonal sarcoma of the liver (UESL)
                            </button>
                        </h2>
                        <div id="uesl" class="accordion-collapse collapse" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Tumor often spreads all through the liver and/or to the lungs.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">The third most common liver cancer in children and adolescents; usually occurs in children aged between 5 and 10 years</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infantile choriocarcinoma -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#infantile" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Infantile choriocarcinoma
                            </button>
                        </h2>
                        <div id="infantile" class="accordion-collapse collapse" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Starts in the placenta and spreads to the fetus</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Very rare type of cancer usually found during the first few months of life</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Epithelioid hemangioendothelioma -->
                    <div class="accordion-item mb-3" style="border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-radius: 15px;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#epithelioid" 
                                    style="background: #f8f9fa; border-radius: 15px; font-weight: 600; color: #32665B;">
                                <i class="fas fa-plus-circle me-3" style="color: #DAA520;"></i>
                                Epithelioid hemangioendothelioma
                            </button>
                        </h2>
                        <div id="epithelioid" class="accordion-collapse collapse" data-bs-parent="#liverCancerAccordion">
                            <div class="accordion-body" style="background: white; border-radius: 0 0 15px 15px;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h6 style="color: #32665B; font-weight: 600;">Where Does the Cancer Start?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Cancer of the blood vessels in the liver and other organs</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="color: #32665B; font-weight: 600;">How Common Is the Cancer?</h6>
                                        <p style="color: #666; margin-bottom: 0;">Rare type of cancer occurring in infants; tumors are often benign (not cancer), but a small number of children may develop cancerous tumors over time</p>
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

<!-- Risk Factors Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                What Is a Risk Factor?
            </span>
            <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
                Risk Factors
            </h2>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="p-4 mb-5" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem;">
                        A risk factor is anything that increases the likelihood of developing a disease, such as cancer. 
                        Each type of cancer has its own set of risk factors. However, having one or more risk factors does 
                        not mean a person will definitely develop cancer, and some individuals with no known risk factors 
                        may still be diagnosed with it. Generally, the more risk factors a person has, the higher their 
                        chances of developing the disease.
                    </p>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 0; font-style: italic;">
                        Understanding your risk factors and discussing them with your healthcare provider can help you make 
                        informed decisions about your lifestyle and medical care to potentially reduce your risk.
                    </p>
                </div>
                
                <!-- Major & Other Risk Factors Title -->
<div class="text-center mb-5" id="risk-factors">
    <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
        Major & Other
    </span>
    <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
        What Are The Risk Factors For Liver Cancer?
    </h2>
</div>
                
                <div class="p-4 mb-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1rem;">
                        The leading global risk factor for liver cancer is chronic infection with the <strong>hepatitis B virus (HBV)</strong>. 
                        Around 15%–25% of people with chronic HBV infection develop serious liver conditions such as 
                        <strong>cirrhosis, liver failure,</strong> or <strong>liver cancer</strong>. In fact, the risk of liver cancer in individuals with 
                        chronic hepatitis B can exceed the risk of lung cancer in heavy smokers. Fortunately, long-term 
                        antiviral treatment can lower the risk of liver cancer by up to <strong>60%</strong>.
                    </p>
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 0; font-style: italic;">
                        Being aware of these factors can aid in early detection and prevention efforts.
                    </p>
                </div>
                
                <!-- Risk Factors Grid -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <span class="font-script" style="color: #DAA520; font-size: 1.3rem; font-weight: 600;">
                                Major Risk Factors
                            </span>
                        </div>
                        
                        <!-- Major Risk Factors -->
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-exclamation-circle" style="color: #dc3545; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Chronic viral hepatitis</span>
                        </div>
                        
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-exclamation-circle" style="color: #dc3545; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Cirrhosis</span>
                        </div>
                        
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-exclamation-circle" style="color: #dc3545; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Aflatoxins and environmental toxins</span>
                        </div>
                        
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-exclamation-circle" style="color: #dc3545; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Family history of liver cancer</span>
                        </div>
                        
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-exclamation-circle" style="color: #dc3545; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Heavy alcohol use</span>
                        </div>
                        
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-exclamation-circle" style="color: #dc3545; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Diabetes, obesity, and nonalcoholic fatty liver disease</span>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-4">
                            <span class="font-script" style="color: #DAA520; font-size: 1.3rem; font-weight: 600;">
                                Other Risk Factors
                            </span>
                        </div>
                        
                        <!-- Other Risk Factors -->
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-info-circle" style="color: #ffc107; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Race/ethnicity</span>
                        </div>
                        
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-info-circle" style="color: #ffc107; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Gender & age</span>
                        </div>
                        
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-info-circle" style="color: #ffc107; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Smoking</span>
                        </div>
                        
                        <div class="risk-factor-item mb-3" style="display: flex; align-items: center; padding: 15px; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <i class="fas fa-info-circle" style="color: #ffc107; font-size: 1.5rem; margin-right: 15px;"></i>
                            <span style="color: #333; font-weight: 500;">Inherited metabolic diseases</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prevention, Detection & Treatment Section -->
<section class="py-5" style="background: white;" id="prevention-detection">
    <div class="container">
        <div class="text-center mb-5">
            <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                All is not lost
            </span>
            <h2 class="mt-2 mb-4" style="color: #333; font-size: 2.8rem; font-weight: 700;">
                Liver Cancer: Prevention, Detection & Treatment
            </h2>
        </div>
        
        <!-- Prevention & Detection -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="mb-5">
                    <h3 style="color: #32665B; font-size: 2rem; font-weight: 600; margin-bottom: 2rem;">Prevention & Detection</h3>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 2rem;">
                        Liver cancer is largely preventable by addressing its primary risk factors especially chronic infections 
                        with hepatitis B and C. Without widespread prevention efforts, the number of liver cancer cases is 
                        projected to increase significantly over the next two decades.
                    </p>
                    
                    <!-- Hepatitis B Vaccine -->
                    <div class="p-4 mb-4" style="background: #f0f7f0; border-radius: 15px; border-left: 5px solid #32665B;">
                        <h4 style="color: #32665B; font-weight: 600; margin-bottom: 1rem;">The Hepatitis B Vaccine: The First Anti-Cancer Vaccine</h4>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 0;">
                            The hepatitis B vaccine, recognized by the U.S. Food and Drug Administration as the first "anti-cancer" 
                            vaccine, helps prevent chronic hepatitis B infection—a major cause of liver cancer. By preventing the 
                            infection, the vaccine significantly reduces the risk of developing liver cancer.
                        </p>
                    </div>
                    
                    <!-- Cirrhosis and Liver Cancer -->
                    <div class="p-4 mb-4" style="background: #f0f7f0; border-radius: 15px; border-left: 5px solid #DAA520;">
                        <h4 style="color: #32665B; font-weight: 600; margin-bottom: 1rem;">Cirrhosis and Liver Cancer</h4>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 1rem;">
                            Approximately 80% of people diagnosed with liver cancer also have cirrhosis. While hepatitis B can 
                            lead directly to liver cancer without cirrhosis, in most cases, preventing cirrhosis helps lower the risk. 
                            Cirrhosis prevention includes:
                        </p>
                        <ul style="color: #666; line-height: 1.6;">
                            <li>Avoiding chronic hepatitis B and C infections</li>
                            <li>Reducing alcohol consumption</li>
                            <li>Quitting smoking</li>
                            <li>Avoiding exposure to industrial toxins and aflatoxins (toxins from mold in improperly stored food or grain)</li>
                        </ul>
                    </div>
                    
                    <!-- Routine Medical Checkups -->
                    <div class="p-4 mb-4" style="background: #f8f9fa; border-radius: 15px;">
                        <h4 style="color: #32665B; font-weight: 600; margin-bottom: 1rem;">Routine Medical Checkups</h4>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 0;">
                            If you are at high risk for liver cancer—such as those living with hepatitis B or C, cirrhosis, 
                            or other known risk factors—it is recommended that you see a doctor at least once a year. These 
                            regular checkups help monitor liver function and viral load, allowing for early detection of liver 
                            damage or cancer and improving treatment success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Screening and Early Detection -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="mb-5">
                    <h3 style="color: #32665B; font-size: 2rem; font-weight: 600; margin-bottom: 2rem;">Screening and Early Detection</h3>
                    
                    <div class="p-4 mb-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem;">
                            Early detection through regular liver cancer screening is one of the most effective ways to improve 
                            survival rates. When liver cancer is found at an early stage—before symptoms appear and while the 
                            tumor is still small—treatment is more likely to be successful. The 5-year survival rate for early-stage 
                            liver cancer that can be surgically removed may exceed 50%.
                        </p>
                        
                        <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem;">
                            People with cirrhosis or other high-risk conditions should undergo liver cancer screening during 
                            routine medical visits, even if they are not experiencing symptoms. A hepatologist (a liver disease 
                            specialist) may be involved in your care to ensure appropriate monitoring and treatment.
                        </p>
                        
                        <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 0;">
                            Because liver cancer often develops silently, people with chronic hepatitis B or C should be screened 
                            regularly to detect tumors early—before they grow too large or disqualify a patient from curative 
                            treatments like liver transplantation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Symptoms and Diagnosis -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="row">
                    <!-- Symptoms -->
                    <div class="col-lg-6 mb-4">
                        <div class="h-100" style="background: #f8f9fa; border-radius: 15px; padding: 2rem;">
                            <span class="font-script" style="color: #DAA520; font-size: 1.3rem; font-weight: 600;">
                                Symptoms of Liver Cancer
                            </span>
                            <p style="color: #666; line-height: 1.6; margin: 1rem 0;">
                                Liver cancer in its early stages often has no symptoms, which is why regular screening is essential. 
                                As the disease progresses, symptoms may include:
                            </p>
                            
                            <div class="symptoms-grid">
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Pain or discomfort in the upper right abdomen</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">A lump or feeling of heaviness in the upper abdomen</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Swelling in the abdomen (due to fluid buildup)</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Loss of appetite or early satiety</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Unexplained weight loss</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Fatigue or weakness</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Nausea and vomiting</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Jaundice (yellowing of the skin and eyes)</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Pale stools and dark urine</span>
                                </div>
                                <div class="symptom-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fas fa-check-circle me-2" style="color: #dc3545;"></i>
                                    <span style="color: #666; font-size: 0.95rem;">Fever</span>
                                </div>
                            </div>
                            
                            <p style="color: #666; line-height: 1.6; margin-top: 1rem; font-style: italic;">
                                These symptoms can also be caused by other conditions, so it's important to consult a qualified 
                                healthcare provider promptly if they occur.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Diagnosis -->
                    <div class="col-lg-6 mb-4">
                        <div class="h-100" style="background: #f8f9fa; border-radius: 15px; padding: 2rem;">
                            <span class="font-script" style="color: #DAA520; font-size: 1.3rem; font-weight: 600;">
                                Diagnosing Liver Cancer
                            </span>
                            <p style="color: #666; line-height: 1.6; margin: 1rem 0;">
                                To confirm a diagnosis of liver cancer, a range of tests may be conducted, including:
                            </p>
                            
                            <ul style="color: #666; line-height: 1.6; list-style: none; padding: 0;">
                                <li class="mb-2">• Physical examination</li>
                                <li class="mb-2">• Liver function tests to assess how well your liver is working</li>
                                <li class="mb-2"><strong>Blood tests, such as:</strong></li>
                                <li class="mb-2 ms-3">• Alpha-fetoprotein (AFP), which can be elevated in liver cancer</li>
                                <li class="mb-2 ms-3">• Calcium and cholesterol levels</li>
                                <li class="mb-2 ms-3">• Complete blood count (CBC)</li>
                                <li class="mb-2 ms-3">• Blood clotting tests</li>
                                <li class="mb-2 ms-3">• Hepatitis B and C testing</li>
                                <li class="mb-2"><strong>Imaging studies, including:</strong></li>
                                <li class="mb-2 ms-3">• CT scans</li>
                                <li class="mb-2 ms-3">• MRI</li>
                                <li class="mb-2 ms-3">• Ultrasound</li>
                                <li class="mb-2 ms-3">• Angiography</li>
                                <li class="mb-2 ms-3">• Laparoscopy</li>
                                <li class="mb-2">• Liver biopsy, where a small sample of liver tissue is taken for examination under a microscope to confirm the presence of cancer cells</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Section -->
<section class="py-5" style="background: #f8f9fa;" id="treatment">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="color: #333; font-size: 2.8rem; font-weight: 700;">
                Treatment of Liver Cancer
            </h2>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="p-4 mb-5" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem;">
                        Over the past two decades, liver cancer treatment and prevention have made significant strides. Today, 
                        the disease can often be prevented, detected earlier, and managed effectively with a range of treatment 
                        options depending on the stage and health of the liver.
                    </p>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem;">
                        Treatment decisions are highly individual and must balance the potential benefits with the risks, including 
                        the possibility of liver failure and impact on quality of life. Treatment approaches may include surgery, 
                        liver transplantation, targeted therapy, immunotherapy, and localized treatments such as radiofrequency 
                        ablation or embolization techniques.
                    </p>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 0; font-weight: 600;">
                        Early detection and informed, timely treatment can lead to significantly better outcomes and improved survival.
                    </p>
                </div>
                
                <!-- Treatment Options Grid -->
                <div class="mb-5">
                    <h3 style="color: #32665B; font-size: 2rem; font-weight: 600; margin-bottom: 2rem; text-align: center;">Treatment Options</h3>
                    
                    <div class="row">
                        <!-- Surgery -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="treatment-card h-100" style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center;">
                                <div class="mb-3" style="width: 80px; height: 80px; background: #32665B; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fas fa-scalpel" style="color: white; font-size: 2rem;"></i>
                                </div>
                                <h4 style="color: #32665B; font-weight: 600; margin-bottom: 1rem;">Surgery</h4>
                                <p style="color: #666; line-height: 1.6; font-size: 0.95rem;">
                                    The surgical procedure is where part of the liver tissue is removed. The goal is to remove 
                                    the entire tumor, along with a margin of healthy tissue. Removing the part of the liver that 
                                    has cancer is only possible if the cancer is detected early enough and has not spread to the 
                                    blood vessels or outside the liver.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Chemotherapy -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="treatment-card h-100" style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center;">
                                <div class="mb-3" style="width: 80px; height: 80px; background: #DAA520; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fas fa-syringe" style="color: white; font-size: 2rem;"></i>
                                </div>
                                <h4 style="color: #32665B; font-weight: 600; margin-bottom: 1rem;">Chemotherapy</h4>
                                <p style="color: #666; line-height: 1.6; font-size: 0.95rem;">
                                    Chemotherapy involves using drugs to kill the cancer cells. It is a systemic treatment where 
                                    the drugs are usually injected into a vein and they enter the bloodstream and are carried 
                                    throughout the body. This can affect both cancer and healthy cells.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Immunotherapy -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="treatment-card h-100" style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center;">
                                <div class="mb-3" style="width: 80px; height: 80px; background: #4a7c59; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fas fa-shield-virus" style="color: white; font-size: 2rem;"></i>
                                </div>
                                <h4 style="color: #32665B; font-weight: 600; margin-bottom: 1rem;">Immunotherapy</h4>
                                <p style="color: #666; line-height: 1.6; font-size: 0.95rem;">
                                    A treatment that utilizes the body's own immune system to fight cancer cells. It works by 
                                    boosting or modifying the immune system to recognize and attack the cancer cells.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Targeted Oral Therapy -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="treatment-card h-100" style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center;">
                                <div class="mb-3" style="width: 80px; height: 80px; background: #FF6B6B; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fas fa-pills" style="color: white; font-size: 2rem;"></i>
                                </div>
                                <h4 style="color: #32665B; font-weight: 600; margin-bottom: 1rem;">Targeted Oral Therapy</h4>
                                <p style="color: #666; line-height: 1.6; font-size: 0.95rem;">
                                    If chemotherapy is not effective and the patient also cannot undergo surgery, health care 
                                    providers may treat the patient with targeted oral therapies (pills taken by mouth). The 
                                    drugs used precisely identify and attack certain cancer cells, often by targeting specific 
                                    molecules that cancer cells need to survive.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Radiation therapy -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="treatment-card h-100" style="background: white; border-radius: 15px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center;">
                                <div class="mb-3" style="width: 80px; height: 80px; background: #6f42c1; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fas fa-radiation" style="color: white; font-size: 2rem;"></i>
                                </div>
                                <h4 style="color: #32665B; font-weight: 600; margin-bottom: 1rem;">Radiation therapy</h4>
                                <p style="color: #666; line-height: 1.6; font-size: 0.95rem;">
                                    Also known as radiotherapy, may be an option for some people who cannot have surgery. It uses 
                                    high energy radiation to kill cancer cells and shrink tumors, often as part of a larger cancer 
                                    treatment plan.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Continue with other treatment options... -->
                        <!-- Ablation, Embolization, Liver Transplants -->
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Choosing the Right Treatment -->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <span class="font-script" style="color: #DAA520; font-size: 1.5rem; font-weight: 600;">
                        Based on medical needs & lifestyle
                    </span>
                    <h3 style="color: #333; font-size: 2rem; font-weight: 700; margin-top: 1rem;">
                        Choosing The Right Treatment
                    </h3>
                </div>
                
                <div class="p-4" style="background: white; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem;">
                        Liver cancer is treated by a team of specialists, which may include surgeons, hepatologists (liver disease 
                        experts), medical oncologists, and radiation oncologists. Your care team may also involve an oncology nurse 
                        and a registered dietitian to support you throughout the process.
                    </p>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 1.5rem;">
                        Before starting treatment, it's important to have a detailed discussion with your healthcare team about your 
                        options. The best treatment plan for you will depend on several key factors, including:
                    </p>
                    
                    <ul style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                        <li>The number, size, and location of tumors in your liver</li>
                        <li>The overall function of your liver and the presence or severity of cirrhosis</li>
                        <li>Whether the cancer has spread beyond the liver</li>
                        <li>Your age, overall health, and how treatment might impact your daily life and well-being</li>
                    </ul>
                    
                    <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 0; font-style: italic;">
                        A personalized approach ensures the treatment is tailored to your unique medical needs and lifestyle.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>