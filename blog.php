<?php
// blog.php
include 'includes/config.php';
$page_title = 'Blog';
include 'includes/header.php';
?>

<!-- Hero Section with Green Background -->
<section class="hero-section" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white; padding: 6rem 0 4rem; min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title mb-3" style="color: white; font-size: 4rem; font-weight: 700;">
                    Blog
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" style="background: none;">
                        <li class="breadcrumb-item">
                            <a href="index.php" style="color: #DAA520;">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: white;">
                            Blog
                        </li>
                    </ol>
                </nav>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; margin-top: 1rem;">
                    Stay informed with the latest insights on liver health, cancer prevention, and community stories
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories -->
<section class="py-4" style="background: white; border-bottom: 1px solid #e5e7eb;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-categories d-flex flex-wrap justify-content-center gap-3">
                    <button class="category-filter active" data-category="all" 
                            style="background: #32665B; color: white; border: none; border-radius: 25px; padding: 10px 25px; font-weight: 500; transition: all 0.3s ease;">
                        All Posts
                    </button>
                    <button class="category-filter" data-category="prevention" 
                            style="background: #f8f9fa; color: #666; border: 1px solid #e5e7eb; border-radius: 25px; padding: 10px 25px; font-weight: 500; transition: all 0.3s ease;">
                        Prevention
                    </button>
                    <button class="category-filter" data-category="research" 
                            style="background: #f8f9fa; color: #666; border: 1px solid #e5e7eb; border-radius: 25px; padding: 10px 25px; font-weight: 500; transition: all 0.3s ease;">
                        Research
                    </button>
                    <button class="category-filter" data-category="stories" 
                            style="background: #f8f9fa; color: #666; border: 1px solid #e5e7eb; border-radius: 25px; padding: 10px 25px; font-weight: 500; transition: all 0.3s ease;">
                        Patient Stories
                    </button>
                    <button class="category-filter" data-category="lifestyle" 
                            style="background: #f8f9fa; color: #666; border: 1px solid #e5e7eb; border-radius: 25px; padding: 10px 25px; font-weight: 500; transition: all 0.3s ease;">
                        Healthy Living
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Post -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-post mb-5" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="assets/images/blog-featured.jpg" alt="Understanding Liver Health" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover;">
                        </div>
                        <div class="col-lg-6 p-5">
                            <span class="badge mb-3" style="background: #32665B; color: white; padding: 8px 15px; border-radius: 20px; font-size: 0.8rem;">Featured</span>
                            <h2 style="color: #333; font-weight: 700; margin-bottom: 1rem; line-height: 1.3;">
                                Understanding Liver Health: A Comprehensive Guide to Prevention
                            </h2>
                            <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem; font-size: 1.1rem;">
                                Learn about the essential steps you can take today to protect your liver health and reduce your risk of liver cancer. From dietary choices to lifestyle modifications...
                            </p>
                            <div class="post-meta mb-3" style="display: flex; align-items: center; gap: 1rem; color: #888; font-size: 0.9rem;">
                                <span><i class="fas fa-calendar-alt me-2"></i>January 15, 2025</span>
                                <span><i class="fas fa-clock me-2"></i>8 min read</span>
                                <span><i class="fas fa-user me-2"></i>Dr. Sarah Kenya</span>
                            </div>
                            <a href="blog-single.php?id=1" class="btn" style="background: #32665B; color: white; border-radius: 25px; padding: 12px 25px; text-decoration: none;">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row" id="blogGrid">
            
            <!-- Blog Post 1 -->
            <div class="col-lg-4 col-md-6 mb-4 blog-post" data-category="prevention">
                <article class="blog-card h-100" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="blog-image" style="position: relative; overflow: hidden;">
                        <img src="assets/images/blog-prevention.jpg" alt="Hepatitis B Vaccine" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="blog-category" style="position: absolute; top: 15px; left: 15px;">
                            <span style="background: #4CAF50; color: white; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">Prevention</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">
                            <a href="blog-single.php?id=2" style="color: inherit; text-decoration: none;">The Hepatitis B Vaccine: Your First Line of Defense</a>
                        </h3>
                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            Discover why the hepatitis B vaccine is considered the first anti-cancer vaccine and how it can significantly reduce your risk of liver cancer.
                        </p>
                        <div class="post-meta" style="display: flex; align-items: center; justify-content: space-between; color: #888; font-size: 0.85rem;">
                            <span><i class="fas fa-calendar-alt me-2"></i>January 12, 2025</span>
                            <span>5 min read</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Post 2 -->
            <div class="col-lg-4 col-md-6 mb-4 blog-post" data-category="research">
                <article class="blog-card h-100" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="blog-image" style="position: relative; overflow: hidden;">
                        <img src="assets/images/blog-research.jpg" alt="Cancer Research" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="blog-category" style="position: absolute; top: 15px; left: 15px;">
                            <span style="background: #2196F3; color: white; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">Research</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">
                            <a href="blog-single.php?id=3" style="color: inherit; text-decoration: none;">Latest Breakthroughs in Liver Cancer Treatment</a>
                        </h3>
                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            Explore the cutting-edge treatments and research developments that are giving new hope to liver cancer patients worldwide.
                        </p>
                        <div class="post-meta" style="display: flex; align-items: center; justify-content: space-between; color: #888; font-size: 0.85rem;">
                            <span><i class="fas fa-calendar-alt me-2"></i>January 10, 2025</span>
                            <span>7 min read</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Post 3 -->
            <div class="col-lg-4 col-md-6 mb-4 blog-post" data-category="stories">
                <article class="blog-card h-100" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="blog-image" style="position: relative; overflow: hidden;">
                        <img src="assets/images/blog-story.jpg" alt="Patient Story" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="blog-category" style="position: absolute; top: 15px; left: 15px;">
                            <span style="background: #FF9800; color: white; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">Patient Stories</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">
                            <a href="blog-single.php?id=4" style="color: inherit; text-decoration: none;">Grace's Journey: From Diagnosis to Hope</a>
                        </h3>
                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            Read Grace's inspiring story of resilience and recovery, and how early detection made all the difference in her fight against liver cancer.
                        </p>
                        <div class="post-meta" style="display: flex; align-items: center; justify-content: space-between; color: #888; font-size: 0.85rem;">
                            <span><i class="fas fa-calendar-alt me-2"></i>January 8, 2025</span>
                            <span>6 min read</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Post 4 -->
            <div class="col-lg-4 col-md-6 mb-4 blog-post" data-category="lifestyle">
                <article class="blog-card h-100" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="blog-image" style="position: relative; overflow: hidden;">
                        <img src="assets/images/blog-nutrition.jpg" alt="Healthy Nutrition" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="blog-category" style="position: absolute; top: 15px; left: 15px;">
                            <span style="background: #4CAF50; color: white; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">Healthy Living</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">
                            <a href="blog-single.php?id=5" style="color: inherit; text-decoration: none;">Nutrition for Liver Health: Foods That Heal</a>
                        </h3>
                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            Discover the power of nutrition in maintaining liver health and learn about the foods that can help protect and heal your liver.
                        </p>
                        <div class="post-meta" style="display: flex; align-items: center; justify-content: space-between; color: #888; font-size: 0.85rem;">
                            <span><i class="fas fa-calendar-alt me-2"></i>January 5, 2025</span>
                            <span>4 min read</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Post 5 -->
            <div class="col-lg-4 col-md-6 mb-4 blog-post" data-category="prevention">
                <article class="blog-card h-100" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="blog-image" style="position: relative; overflow: hidden;">
                        <img src="assets/images/blog-screening.jpg" alt="Cancer Screening" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="blog-category" style="position: absolute; top: 15px; left: 15px;">
                            <span style="background: #4CAF50; color: white; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">Prevention</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">
                            <a href="blog-single.php?id=6" style="color: inherit; text-decoration: none;">Early Detection: The Key to Survival</a>
                        </h3>
                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            Learn why regular screening is crucial for high-risk individuals and how early detection can dramatically improve treatment outcomes.
                        </p>
                        <div class="post-meta" style="display: flex; align-items: center; justify-content: space-between; color: #888; font-size: 0.85rem;">
                            <span><i class="fas fa-calendar-alt me-2"></i>January 3, 2025</span>
                            <span>6 min read</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Post 6 -->
            <div class="col-lg-4 col-md-6 mb-4 blog-post" data-category="stories">
                <article class="blog-card h-100" style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                    <div class="blog-image" style="position: relative; overflow: hidden;">
                        <img src="assets/images/blog-community.jpg" alt="Community Support" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s ease;">
                        <div class="blog-category" style="position: absolute; top: 15px; left: 15px;">
                            <span style="background: #FF9800; color: white; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">Patient Stories</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">
                            <a href="blog-single.php?id=7" style="color: inherit; text-decoration: none;">Building Community: The Power of Support Groups</a>
                        </h3>
                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            Discover how our support groups are creating a network of hope and healing for patients and families affected by liver cancer.
                        </p>
                        <div class="post-meta" style="display: flex; align-items: center; justify-content: space-between; color: #888; font-size: 0.85rem;">
                            <span><i class="fas fa-calendar-alt me-2"></i>December 30, 2024</span>
                            <span>5 min read</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-5">
            <button class="btn" style="background: #32665B; color: white; border-radius: 25px; padding: 15px 40px; font-weight: 600;">
                Load More Posts
            </button>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-5" style="background: linear-gradient(135deg, #32665B 0%, #2a5650 100%); color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h3 style="color: white; font-weight: 600; margin-bottom: 1rem;">Stay Updated with Our Latest Posts</h3>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem;">
                    Get the latest insights on liver health, prevention tips, and inspiring stories delivered to your inbox.
                </p>
                <form class="d-flex justify-content-center gap-3">
                    <input type="email" class="form-control" placeholder="Enter your email address" 
                           style="max-width: 400px; border-radius: 25px; border: none; padding: 15px 20px;">
                    <button type="submit" class="btn" style="background: #DAA520; color: white; border: none; border-radius: 25px; padding: 15px 30px; font-weight: 600;">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS and JavaScript -->
<style>
.blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15) !important;
}

.blog-card:hover .blog-image img {
    transform: scale(1.05);
}

.category-filter.active {
    background: #32665B !important;
    color: white !important;
}

.category-filter:hover:not(.active) {
    background: #e5e7eb !important;
    color: #333 !important;
}

@media (max-width: 768px) {
    .featured-post .row {
        flex-direction: column-reverse;
    }
    
    .blog-categories {
        justify-content: flex-start !important;
        overflow-x: auto;
        white-space: nowrap;
    }
    
    .blog-categories .category-filter {
        flex-shrink: 0;
    }
}
</style>

<script>
// Category filtering
document.querySelectorAll('.category-filter').forEach(filter => {
    filter.addEventListener('click', function() {
        // Update active filter
        document.querySelectorAll('.category-filter').forEach(f => {
            f.classList.remove('active');
            f.style.background = '#f8f9fa';
            f.style.color = '#666';
        });
        
        this.classList.add('active');
        this.style.background = '#32665B';
        this.style.color = 'white';
        
        // Filter posts
        const category = this.getAttribute('data-category');
        const posts = document.querySelectorAll('.blog-post');
        
        posts.forEach(post => {
            if (category === 'all' || post.getAttribute('data-category') === category) {
                post.style.display = 'block';
            } else {
                post.style.display = 'none';
            }
        });
    });
});

// Newsletter subscription
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[type="email"]').value;
    if (email) {
        alert('Thank you for subscribing! You will receive our latest updates.');
        this.reset();
    }
});
</script>

<?php include 'includes/footer.php'; ?>