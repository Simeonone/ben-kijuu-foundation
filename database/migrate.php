<?php
// database/migrate.php
include '../includes/config.php';

echo "<h1>Database Migration</h1>";
echo "<p>Setting up tables for Ben Kijuu Foundation...</p>";

try {
    // Event registrations table
$pdo->exec("CREATE TABLE IF NOT EXISTS event_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    nationality VARCHAR(100) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    how_heard VARCHAR(100) NOT NULL,
    tshirt_size ENUM('XS', 'S', 'M', 'L', 'XL', 'XXL') NOT NULL,
    participation_type ENUM('In Person', 'Virtual') NOT NULL,
    distance ENUM('5km', '10km', '21km') NOT NULL,
    number_of_adults INT DEFAULT 1,
    number_of_children INT DEFAULT 0,
    total_people INT GENERATED ALWAYS AS (number_of_adults + number_of_children) STORED,
    comments TEXT,
    special_requirements TEXT,
    total_amount DECIMAL(10,2) DEFAULT 0.00,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)");
    echo "✓ Created event_registrations table<br>";

    // Contact submissions table
    $pdo->exec("CREATE TABLE IF NOT EXISTS contact_submissions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(20),
        message TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "✓ Created contact_submissions table<br>";

    // Newsletter subscriptions table
    $pdo->exec("CREATE TABLE IF NOT EXISTS newsletter_subscriptions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) UNIQUE NOT NULL,
        subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "✓ Created newsletter_subscriptions table<br>";

    // Admin users table
    $pdo->exec("CREATE TABLE IF NOT EXISTS admin_users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "✓ Created admin_users table<br>";

    // Add after existing tables
    // $pdo->exec("ALTER TABLE event_registrations ADD COLUMN IF NOT EXISTS total_amount DECIMAL(10,2) DEFAULT 0.00 AFTER special_requirements");
    echo "✓ Added total_amount column to event_registrations<br>";

    // Create default admin user
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM admin_users WHERE username = 'admin'");
    $stmt->execute();
    
    if ($stmt->fetchColumn() == 0) {
        $adminStmt = $pdo->prepare("INSERT INTO admin_users (username, password, email) VALUES (?, ?, ?)");
        $adminStmt->execute(['admin', password_hash('foundation2025', PASSWORD_DEFAULT), 'admin@benkijuufoundation.com']);
        echo "✓ Created default admin user (admin/foundation2025)<br>";
    } else {
        echo "✓ Admin user already exists<br>";
    }

    echo "<h2 style='color: green;'>Migration completed successfully!</h2>";
    echo "<p><a href='/'>Go to Homepage</a> | <a href='/admin/dashboard.php'>Admin Dashboard</a></p>";
    
} catch (Exception $e) {
    echo "<h2 style='color: red;'>Migration error:</h2>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?>