<?php
// test.php - Simple connection test
if (getenv('DATABASE_URL')) {
    echo "DATABASE_URL found: " . substr(getenv('DATABASE_URL'), 0, 20) . "...<br>";
    
    try {
        include 'includes/config.php';
        echo "Database connection successful!<br>";
        echo "Current time: " . date('Y-m-d H:i:s');
    } catch (Exception $e) {
        echo "Database error: " . $e->getMessage();
    }
} else {
    echo "No DATABASE_URL environment variable found.<br>";
    echo "Make sure MySQL database is added to Railway project.";
}
?>