<?php
// includes/header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title . ' | ' . SITE_NAME; ?></title>
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Navigation -->
<!-- Navigation - Bigger and Sticky -->
<nav class="navbar navbar-expand-lg sticky-top" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 1.5rem 0; z-index: 1000;">
    <div class="container">
        <!-- Logo - Bigger -->
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.png" alt="Ben Kijuu Foundation" style="height: 130px; width: 130px;">
        </a>
        
        <!-- Mobile toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border: none;">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navigation menu with green background wrapper - Bigger -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav-wrapper ms-auto" style="background: #2d5016; border-radius: 50px; padding: 12px 30px;">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: white !important; padding: 12px 20px; margin: 0 6px; font-size: 1.1rem;">Home</a>
                    </li>
                    
                    <!-- Who We Are Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: white !important; padding: 12px 20px; margin: 0 6px; font-size: 1.1rem;">
                            Who We Are
                        </a>
                        <ul class="dropdown-menu" style="border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                            <li><a class="dropdown-item" href="#footer" onclick="scrollToFooter()">What We Do</a></li>
                            <li><a class="dropdown-item" href="#footer" onclick="scrollToFooter()">Why Volunteer With Us</a></li>
                            <li><a class="dropdown-item" href="#footer" onclick="scrollToFooter()">How To Get Started</a></li>
                        </ul>
                    </li>
                    
                    <!-- About Liver Cancer Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: white !important; padding: 12px 20px; margin: 0 6px; font-size: 1.1rem;">
                            About Liver Cancer
                        </a>
                        <ul class="dropdown-menu" style="border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                            <li><a class="dropdown-item" href="#footer" onclick="scrollToFooter()">What Is Liver Cancer</a></li>
                            <li><a class="dropdown-item" href="#footer" onclick="scrollToFooter()">Risk Factors</a></li>
                            <li><a class="dropdown-item" href="#footer" onclick="scrollToFooter()">Prevention, Detection & Treatment</a></li>
                            <li><a class="dropdown-item" href="#footer" onclick="scrollToFooter()">Treatment Options</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="events.php" style="color: white !important; padding: 12px 20px; margin: 0 6px; font-size: 1.1rem;">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" style="color: white !important; padding: 12px 20px; margin: 0 6px; font-size: 1.1rem;">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php" style="color: white !important; padding: 12px 20px; margin: 0 6px; font-size: 1.1rem;">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php" style="color: white !important; padding: 12px 20px; margin: 0 6px; font-size: 1.1rem;">Blog</a>
                    </li>
                </ul>
            </div>
            
            <!-- Donate Button - Bigger -->
            <a href="donate.php" class="btn ms-3" style="background: #f5a623; color: #333; border-radius: 50px; padding: 15px 30px; font-weight: 600; font-size: 1.1rem;">
                <i class="fas fa-heart me-2"></i>Donate Now
            </a>
        </div>
    </div>
</nav>

<script>
// Smooth scroll to footer
function scrollToFooter() {
    document.querySelector('footer').scrollIntoView({ 
        behavior: 'smooth' 
    });
}
</script>
