<?php
// database/migrate.php - Run this once on Railway to setup database
include '../includes/config.php';

try {
    // Read and execute schema
    $schema = file_get_contents('schema.sql');
    $statements = explode(';', $schema);
    
    foreach ($statements as $statement) {
        $statement = trim($statement);
        if (!empty($statement)) {
            $pdo->exec($statement);
            echo "Executed: " . substr($statement, 0, 50) . "...\n<br>";
        }
    }
    
    echo "<h2>Database migration completed successfully!</h2>";
    
    // Create default admin user
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM admin_users WHERE username = 'admin'");
    $stmt->execute();
    
    if ($stmt->fetchColumn() == 0) {
        $adminStmt = $pdo->prepare("INSERT INTO admin_users (username, password, email) VALUES (?, ?, ?)");
        $adminStmt->execute(['admin', password_hash('foundation2025', PASSWORD_DEFAULT), 'admin@benkijuufoundation.com']);
        echo "Default admin user created.<br>";
    }
    
} catch (Exception $e) {
    echo "Migration error: " . $e->getMessage();
}
?>