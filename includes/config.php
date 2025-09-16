<?php
session_start();

// Railway database configuration
if (getenv('DATABASE_URL')) {
    // Production - Railway
    $database_url = getenv('DATABASE_URL');
    $db_parts = parse_url($database_url);
    
    define('DB_HOST', $db_parts['host']);
    define('DB_NAME', ltrim($db_parts['path'], '/'));
    define('DB_USER', $db_parts['user']);
    define('DB_PASS', $db_parts['pass']);
    define('DB_PORT', $db_parts['port'] ?? 3306);
} else {
    // Local development - XAMPP
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'ben_kijuu_foundation');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_PORT', 3306);
}

// Site configuration
define('SITE_NAME', 'Ben Kijuu Foundation');
define('SITE_DESCRIPTION', 'Fighting Liver Cancer, Fueling Hope');

try {
    $dsn = "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch(PDOException $e) {
    if (getenv('DATABASE_URL')) {
        // Production error
        die("Database connection failed. Please try again later.");
    } else {
        // Development error - show details
        die("Connection failed: " . $e->getMessage());
    }
}
?>