<?php
session_start();

// Railway database configuration
$database_url = getenv('DATABASE_URL') ?: getenv('MYSQL_URL');

if ($database_url) {
    // Production - Railway
    $db_parts = parse_url($database_url);
    
    define('DB_HOST', $db_parts['host']);
    define('DB_NAME', ltrim($db_parts['path'], '/'));
    define('DB_USER', $db_parts['user']);
    define('DB_PASS', $db_parts['pass']);
} else {
    // Local development - XAMPP
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'ben_kijuu_foundation');
    define('DB_USER', 'root');
    define('DB_PASS', '');
}

// Site configuration
define('SITE_NAME', 'Ben Kijuu Foundation');
define('SITE_DESCRIPTION', 'Fighting Liver Cancer, Fueling Hope');

try {
    if ($database_url) {
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4";
    } else {
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    }
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch(PDOException $e) {
    if ($database_url) {
        die("Database connection failed. Please try again later.");
    } else {
        die("Connection failed: " . $e->getMessage());
    }
}
?>