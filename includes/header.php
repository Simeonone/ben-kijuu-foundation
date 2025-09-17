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
<!-- Navigation - Aligned with content and scaled up -->
<nav class="navbar navbar-expand-lg sticky-top" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 1.5rem 0; z-index: 1000;">
    <div class="container"> <!-- Changed back to container to match content width -->
        <!-- Logo -->
        <a class="navbar-brand me-4" href="index.php">
            <img src="assets/images/logo.png" alt="Ben Kijuu Foundation" style="height: 70px; width: 70px;">
        </a>
        
        <!-- Mobile toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="border: none;">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navigation menu with green background wrapper -->
<div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav-wrapper mx-auto">
        <ul class="navbar-nav align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            
            <!-- Who We Are Dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
        Who We Are
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="what-we-do.php">What We Do</a></li>
        <li><a class="dropdown-item" href="what-we-do.php#why-volunteer">Why Volunteer With Us</a></li>
        <li><a class="dropdown-item" href="what-we-do.php#why-volunteer">How To Get Started</a></li>
    </ul>
</li>
            
<!-- About Liver Cancer Dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
        About Liver Cancer
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="what-is-liver-cancer.php">What Is Liver Cancer</a></li>
        <li><a class="dropdown-item" href="what-is-liver-cancer.php#risk-factors">Risk Factors</a></li>
        <li><a class="dropdown-item" href="what-is-liver-cancer.php#prevention-detection">Prevention, Detection & Treatment</a></li>
        <li><a class="dropdown-item" href="what-is-liver-cancer.php#treatment">Treatment Options</a></li>
    </ul>
</li>
            
            <li class="nav-item">
                <a class="nav-link" href="events.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
        </ul>
    </div>
    
    <!-- Donate Button -->
    <a href="donate.php" class="btn ms-4 donate-btn-mobile">
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
