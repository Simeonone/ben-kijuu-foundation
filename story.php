<?php
// story.php
include 'includes/config.php';
$page_title = 'The Story';
include 'includes/header.php';
?>

<!-- Hero Section with Green Background -->
<section class="hero-section" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white; padding: 6rem 0 4rem; min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-3" style="color: white; font-size: 4rem; font-weight: 700;">
                    The Story
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background: none;">
                        <li class="breadcrumb-item">
                            <a href="index.php" style="color: #DAA520;">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: white;">
                            The Story
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Main Story Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/ben-kijuu-portrait.jpg" alt="Ben Kijuu" class="img-fluid rounded-3 shadow-lg" style="width: 100%; height: auto;">
            </div>
            <div class="col-lg-6">
                <h2 style="color: #333; font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">Ben Kijuu Foundation</h2>
                <h3 style="color: #32665B; font-size: 1.5rem; font-weight: 600; margin-bottom: 2rem;">The Story | A Life Rewritten</h3>
                
                <p style="color: #666; line-height: 1.8; font-size: 1.1rem; margin-bottom: 2rem;">
                    If you are wondering how the Ben Kijuu Foundation came to be, or simply wondering what is the inspiration behind it, then you are in the right place.
                </p>
                
                <!-- Chapter Overview Grid -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <div class="chapter-preview" style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-left: 4px solid #32665B;">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-newspaper" style="color: #32665B; font-size: 1.2rem; margin-right: 0.5rem;"></i>
                                <span style="color: #888; font-size: 0.9rem;">Chapter 1</span>
                            </div>
                            <h5 style="color: #333; font-weight: 600; margin: 0;">The Unexpected News</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="chapter-preview" style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-left: 4px solid #32665B;">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-plus-circle" style="color: #32665B; font-size: 1.2rem; margin-right: 0.5rem;"></i>
                                <span style="color: #888; font-size: 0.9rem;">Chapter 2</span>
                            </div>
                            <h5 style="color: #333; font-weight: 600; margin: 0;">The Battle Begins</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="chapter-preview" style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-left: 4px solid #32665B;">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-briefcase-medical" style="color: #32665B; font-size: 1.2rem; margin-right: 0.5rem;"></i>
                                <span style="color: #888; font-size: 0.9rem;">Chapter 3</span>
                            </div>
                            <h5 style="color: #333; font-weight: 600; margin: 0;">Treatment Highs & Lows</h5>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="chapter-preview" style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-left: 4px solid #32665B;">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-lightbulb" style="color: #32665B; font-size: 1.2rem; margin-right: 0.5rem;"></i>
                                <span style="color: #888; font-size: 0.9rem;">Chapter 4</span>
                            </div>
                            <h5 style="color: #333; font-weight: 600; margin: 0;">A New Perspective</h5>
                        </div>
                    </div>
                </div>
                
                <a href="#chapter1" class="btn" style="background: #32665B; color: white; border-radius: 50px; padding: 15px 30px; font-weight: 600; text-decoration: none;">
                    Read the full details below <i class="fas fa-arrow-down ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Chapter Navigation -->
<section class="py-3" style="background: white; border-bottom: 1px solid #e5e7eb;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="chapter-nav d-flex flex-wrap justify-content-center gap-3">
                    <button class="chapter-nav-btn active" data-chapter="chapter1" 
                            style="background: #4CAF50; color: white; border: none; border-radius: 25px; padding: 10px 20px; font-weight: 500; transition: all 0.3s ease;">
                        <i class="fas fa-newspaper me-2"></i>Chapter 1
                    </button>
                    <button class="chapter-nav-btn" data-chapter="chapter2" 
                            style="background: #f8f9fa; color: #666; border: 1px solid #e5e7eb; border-radius: 25px; padding: 10px 20px; font-weight: 500; transition: all 0.3s ease;">
                        <i class="fas fa-plus-circle me-2"></i>Chapter 2
                    </button>
                    <button class="chapter-nav-btn" data-chapter="chapter3" 
                            style="background: #f8f9fa; color: #666; border: 1px solid #e5e7eb; border-radius: 25px; padding: 10px 20px; font-weight: 500; transition: all 0.3s ease;">
                        <i class="fas fa-briefcase-medical me-2"></i>Chapter 3
                    </button>
                    <button class="chapter-nav-btn" data-chapter="chapter4" 
                            style="background: #f8f9fa; color: #666; border: 1px solid #e5e7eb; border-radius: 25px; padding: 10px 20px; font-weight: 500; transition: all 0.3s ease;">
                        <i class="fas fa-lightbulb me-2"></i>Chapter 4
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Story Content -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                
                <!-- Chapter 1 -->
                <div class="chapter-content" id="chapter1" style="display: block;">
                    <div class="p-4 mb-4" style="background: #f8f9fa; border-radius: 15px; border-left: 5px solid #32665B;">
                        <h2 style="color: #32665B; font-weight: 700; margin-bottom: 2rem;">
                            The Unexpected <span style="color: #4CAF50;">News</span>
                        </h2>
                        
                        <div style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                            <p>Ben had always been a picture of good health. Before the COVID 19 pandemic, Ben rarely missed his gym workout or a morning walk and prided himself on staying active. After the COVID 19 outbreak when the gyms closed Ben walked for thirteen (13) km at least four (4) times a week. But from March 2022 something felt off. Ben was always tired and his appetite had shrunk. We did not think of the symptoms as anything serious and assumed that the weight loss was as a result of the weekly walks that he did.</p>
                            
                            <p>Later that year, at the beginning of August 2022, Ben developed a constant irritating cough, he occasionally woke up to a swollen right foot and he complained of a dull pain in his right side that wouldn't go away. However, he brushed off all the aforementioned symptoms and resorted to taking off the counter cough syrups that did not "treat" the cough. The cough progressively got worse and i insisted that he seeks medical attention which he did.</p>
                            
                            <p>He underwent a COVID 19 test which turned out positive and he was given medication and isolated for fourteen (14) days. The cough disappeared but reappeared after two (2) weeks and we concluded that COVID 19 was not the underlying cause of the cough.</p>
                            
                            <p>We went back to hospital and the Doctor suggested that Ben undergoes a full medical checkup. This second visit to the Doctor led to a series of tests, including a CT scan of the lungs to check if he had tuberculosis. When the Doctor received and reviewed the CT scan which had partially captured a section of the liver, he saw a mass in the liver. The Doctor immediately recommended that an MRI of the liver be done which it was and it confirmed that indeed there was a mass in the liver.</p>
                            
                            <p>Consequently, Ben was admitted immediately and a biopsy was undertaken and when the results came out, we heard the words that would change our lives forever.</p>
                            
                            <blockquote style="background: white; padding: 2rem; border-left: 4px solid #32665B; margin: 2rem 0; font-style: italic; font-size: 1.2rem; color: #333;">
                                "You have hepatocellular carcinoma-liver cancer."
                            </blockquote>
                            
                            <p>I squeezed Ben's hand, totally confused and in utter shock. Ben sat frozen. We both had questions running through our heads. Cancer? How? We just could not believe that here we were, facing a disease we never thought would touch us. After what looked like hours but was barely a minute after the Doctor had broken the shattering news to us, i said to Ben, "We will overcome this."</p>
                        </div>
                    </div>
                </div>

                <!-- Chapter 2 -->
                <div class="chapter-content" id="chapter2" style="display: none;">
                    <div class="p-4 mb-4" style="background: #f8f9fa; border-radius: 15px; border-left: 5px solid #32665B;">
                        <h2 style="color: #32665B; font-weight: 700; margin-bottom: 2rem;">
                            The Battle <span style="color: #4CAF50;">Begins</span>
                        </h2>
                        
                        <div style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                            <p>The next few weeks felt like a blur of Doctor visits, discussions about treatment options, and the looming question: how much time did he have? After a battery of medical tests and a whirlwind of medical consultations, Ben’s oncologist recommended his
targeted chemotherapy treatment plan, but there was no guarantee and like any invasive treatment it had its risks. Ben
opted to proceed with the treatment but the wight before the treatment commenced he lay in bed, staring at the ceiling, wondering if he would wake up to see another day. “I’m not ready to go, ” he whispered into the darkness but he still found the strength to wake up and had his first chemotherapy session. The thought of his loved ones kept him fighting. Ben had a total of eight (8) chemotherapy sessions.</p>
                            
    
                        </div>
                    </div>
                </div>

                <!-- Chapter 3 -->
                <div class="chapter-content" id="chapter3" style="display: none;">
                    <div class="p-4 mb-4" style="background: #f8f9fa; border-radius: 15px; border-left: 5px solid #32665B;">
                        <h2 style="color: #32665B; font-weight: 700; margin-bottom: 2rem;">
                            Treatment Highs & <span style="color: #4CAF50;">Lows</span>
                        </h2>
                        
                        <div style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                            <p>Just when we thought Ben was improving, after the seventh chemotherapy session Ben became very weak and the blood tests and scan did not show any improvement compared to the tests that had been done from his sixth session but the oncologist advised for Ben to have an eighth cycle before she could make a conclusion. Unfortunately, after the eighth session Ben extremely weak and there was still no improvement. Follow-up blood tests and scans revealed small tumors in another section of his liver. It was a major setback that lead the oncologist to finally make the decision to terminate the chemotherapy treatment but his Doctors had another plan: immunotherapy.</p>
                            
                            <p>The treatments drained him. Some days, he could barely get out of bed. The nausea, fatigue, and weight loss made him feel like a shell of himself. But i was always there, holding his hand, encouraging him and reminding him of our plans and dreams once he got better.</p>
                            
                            <p>There were good days too. Days when he could sit outside and feel the warmth of the sun, chat and laugh with family and friends who constantly visited and encouraged him. Those moments kept him grounded.</p>
                        </div>
                    </div>
                </div>

                <!-- Chapter 4 -->
                <div class="chapter-content" id="chapter4" style="display: none;">
                    <div class="p-4 mb-4" style="background: #f8f9fa; border-radius: 15px; border-left: 5px solid #32665B;">
                        <h2 style="color: #32665B; font-weight: 700; margin-bottom: 2rem;">
                            A New <span style="color: #4CAF50;">Perspective</span>
                        </h2>
                        
                        <div style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                            <p>After months of treatment, Ben drastically deteriorated at the beginning of April 2023 when the treatment 
                                had taken a toll on his body and the pain was unbearable. On the night of 27th April 2023 Ben developed
                                 an extremely high fever combined with hallucinations. 
                                 I called the ambulance and we took him to hospital knowing that we would be back home as had always 
                                 been the case. I did not know that this time, it was going to be different.</p>
                            
                            <p>I used to think life was about big moments. I have learnt, that it’s about small ones. 
                                A hug, a sunrise, a good cup of coffee. I
don’t want to waste anv more time.</p>
                            
                            <p>Liver cancer changed both Ben’s life and mine. It rewrote Ben’s life story, but it never took away his will to 
                                fight. As Ben continued his journey with the 
                                challenges of liver cancer, he embraced each day with gratitude, knowing that every sunrise was a gift.</p>

                                <p>I give gratitude and glory to God for Ben’s life. I thank St. Austin’s Parish, our families, friends, 
                                    colleagues, Doctors, homecare & hospital 
                                    nurses, the entire hospital staff and AMREF for the support they accorded us when we needed it most.</p>
                            
                            <p>In Memory of Ben, the Ben Kijuu Foundation was launched during the celebration of Ben’s first Memorial on 
                                16th May 2024 and was officially registered on 13th January 2025. The Foundation is here to give moral, 
                                emotional, psychological, financial 
                                and logistical support to patients and their loved ones who have been diagnosed or have survived liver cancer.</p>

                                <p>Ben, you remain the shining star, always and forever in my heart.</p>
                                <p>To everyone who was, has been and remains a part of this journey I say Thank You very much!</p>
                                <p><i>Connie</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Photo Gallery Section -->
<div class="row mt-5">
    <div class="col-lg-10 mx-auto">
        <div class="photo-gallery">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item">
                        <img src="assets/images/ben-gallery-1.jpg" alt="Ben Kijuu - Journey Photo 1" 
                             class="img-fluid rounded shadow" 
                             style="width: 100%; height: auto; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item">
                        <img src="assets/images/ben-gallery-2.jpg" alt="Ben Kijuu - Journey Photo 2" 
                             class="img-fluid rounded shadow" 
                             style="width: 100%; height: auto; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item">
                        <img src="assets/images/ben-gallery-3.jpg" alt="Ben Kijuu - Journey Photo 3" 
                             class="img-fluid rounded shadow" 
                             style="width: 100%; height: auto; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="gallery-item">
                        <img src="assets/images/ben-gallery-4.jpg" alt="Ben Kijuu - Journey Photo 4" 
                             class="img-fluid rounded shadow" 
                             style="width: 100%; height: auto; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Custom CSS and JavaScript -->
<style>
.chapter-nav-btn.active {
    background: #4CAF50 !important;
    color: white !important;
}

.chapter-nav-btn:not(.active):hover {
    background: #e5e7eb !important;
    color: #333 !important;
}

.chapter-preview:hover {
    transform: translateY(-2px);
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15) !important;
}

@media (max-width: 768px) {
    .chapter-nav {
        flex-direction: column;
        align-items: center;
    }
    
    .chapter-nav-btn {
        width: 100%;
        max-width: 250px;
        margin: 0.25rem 0 !important;
    }
}
</style>

<script>
// Chapter navigation
document.querySelectorAll('.chapter-nav-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('.chapter-nav-btn').forEach(b => {
            b.classList.remove('active');
            b.style.background = '#f8f9fa';
            b.style.color = '#666';
        });
        
        // Add active class to clicked button
        this.classList.add('active');
        this.style.background = '#4CAF50';
        this.style.color = 'white';
        
        // Hide all chapter content
        document.querySelectorAll('.chapter-content').forEach(content => {
            content.style.display = 'none';
        });
        
        // Show selected chapter content
        const chapter = this.getAttribute('data-chapter');
        document.getElementById(chapter).style.display = 'block';
        
        // Smooth scroll to content
        document.getElementById(chapter).scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    });
});

// Smooth scroll for the main "Read details" button
document.querySelector('a[href="#chapter1"]').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('chapter1').scrollIntoView({ 
        behavior: 'smooth',
        block: 'start'
    });
});
</script>

<?php include 'includes/footer.php'; ?>