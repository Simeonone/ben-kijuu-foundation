<?php
// blog-single.php
include 'includes/config.php';

// Get post ID from URL
$post_id = $_GET['id'] ?? 1;

// Sample post data (you can later fetch from database)
$posts = [
    1 => [
        'title' => 'Understanding Liver Health: A Comprehensive Guide to Prevention',
        'author' => 'Dr. Sarah Kenya',
        'date' => 'January 15, 2025',
        'category' => 'Prevention',
        'image' => 'blog-featured.jpg',
        'content' => 'Your liver is one of the most vital organs in your body, performing over 500 essential functions...'
    ],
    // Add more posts here
];

$post = $posts[$post_id] ?? $posts[1];
$page_title = $post['title'];

include 'includes/header.php';
?>

<!-- Single Blog Post -->
<section class="py-5" style="margin-top: 2rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <article>
                    <img src="assets/images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" 
                         class="img-fluid rounded mb-4" style="width: 100%; height: 400px; object-fit: cover;">
                    
                    <div class="post-meta mb-4">
                        <span class="badge" style="background: #32665B; color: white; padding: 8px 15px; border-radius: 20px; margin-right: 1rem;">
                            <?php echo $post['category']; ?>
                        </span>
                        <span style="color: #666; margin-right: 1rem;">
                            <i class="fas fa-calendar-alt me-2"></i><?php echo $post['date']; ?>
                        </span>
                        <span style="color: #666;">
                            <i class="fas fa-user me-2"></i><?php echo $post['author']; ?>
                        </span>
                    </div>
                    
                    <h1 style="color: #333; font-weight: 700; margin-bottom: 2rem; line-height: 1.3;">
                        <?php echo $post['title']; ?>
                    </h1>
                    
                    <div class="post-content" style="color: #666; line-height: 1.8; font-size: 1.1rem;">
                        <p>Your liver is one of the most vital organs in your body, performing over 500 essential functions daily. From filtering toxins to producing proteins, your liver works tirelessly to keep you healthy. Understanding how to protect and maintain liver health is crucial for preventing liver cancer and other serious conditions.</p>
                        
                        <h3 style="color: #32665B; margin-top: 2rem;">Key Prevention Strategies</h3>
                        
                        <p>Prevention is always better than cure, especially when it comes to liver cancer. Here are the most effective strategies:</p>
                        
                        <ul>
                            <li><strong>Get vaccinated against Hepatitis B:</strong> The hepatitis B vaccine is your first line of defense against one of the leading causes of liver cancer.</li>
                            <li><strong>Limit alcohol consumption:</strong> Excessive alcohol can lead to cirrhosis, which significantly increases liver cancer risk.</li>
                            <li><strong>Maintain a healthy weight:</strong> Obesity is linked to non-alcoholic fatty liver disease, a risk factor for liver cancer.</li>
                            <li><strong>Eat a balanced diet:</strong> Include plenty of fruits, vegetables, and whole grains while limiting processed foods.</li>
                        </ul>
                        
                        <h3 style="color: #32665B; margin-top: 2rem;">The Importance of Regular Screening</h3>
                        
                        <p>If you're at high risk for liver cancer, regular screening is essential. Early detection can dramatically improve treatment outcomes and survival rates. Risk factors include:</p>
                        
                        <p>Regular check-ups with your healthcare provider can help monitor your liver health and detect any problems early. Remember, liver cancer often develops silently, making regular screening even more critical for high-risk individuals.</p>
                        
                        <div class="alert alert-info mt-4 p-4" style="background: #f0f7f0; border: 1px solid #32665B; border-radius: 15px;">
                            <strong>Important:</strong> If you experience symptoms such as abdominal pain, unexplained weight loss, or jaundice, seek medical attention immediately. Early detection and treatment can save lives.
                        </div>
                    </div>
                </article>
                
                <!-- Back to Blog -->
                <div class="text-center mt-5">
                    <a href="blog.php" class="btn" style="background: #32665B; color: white; border-radius: 25px; padding: 12px 30px;">
                        <i class="fas fa-arrow-left me-2"></i>Back to Blog
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>