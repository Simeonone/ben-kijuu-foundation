<?php
// debug.php
echo "<h2>Environment Check</h2>";

$mysql_url = getenv('MYSQL_URL') ?: getenv('DATABASE_URL');
echo "MYSQL_URL exists: " . ($mysql_url ? 'YES' : 'NO') . "<br>";

if ($mysql_url) {
    echo "MYSQL_URL: " . substr($mysql_url, 0, 40) . "...<br>";
    
    $url = parse_url($mysql_url);
    echo "Host: " . ($url['host'] ?? 'NOT SET') . "<br>";
    echo "Database: " . (ltrim($url['path'] ?? '', '/')) . "<br>";
    echo "User: " . ($url['user'] ?? 'NOT SET') . "<br>";
} else {
    echo "No MYSQL_URL found. Services not connected.<br>";
}

echo "<h3>All MySQL-related environment variables:</h3>";
foreach ($_ENV as $key => $value) {
    if (stripos($key, 'mysql') !== false || stripos($key, 'database') !== false) {
        echo "$key = " . substr($value, 0, 50) . "...<br>";
    }
}

// Test connection
if ($mysql_url) {
    try {
        $url = parse_url($mysql_url);
        $dsn = "mysql:host=".$url['host'].";dbname=".ltrim($url['path'], '/').";charset=utf8mb4";
        $pdo = new PDO($dsn, $url['user'], $url['pass']);
        echo "<h3 style='color: green;'>Database connection: SUCCESS</h3>";
    } catch (Exception $e) {
        echo "<h3 style='color: red;'>Database connection: FAILED</h3>";
        echo "Error: " . $e->getMessage();
    }
}
?>