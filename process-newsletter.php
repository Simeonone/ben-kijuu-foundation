<?php
// process-newsletter.php - Handles newsletter subscriptions from footer
include 'includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

try {
    $email = trim($_POST['email'] ?? '');
    
    // Validate email
    if (empty($email)) {
        echo json_encode(['success' => false, 'message' => 'Email is required']);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email format']);
        exit;
    }
    
    // Check if already subscribed
    $checkStmt = $pdo->prepare("SELECT id FROM newsletter_subscriptions WHERE email = ?");
    $checkStmt->execute([$email]);
    
    if ($checkStmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'This email is already subscribed']);
        exit;
    }
    
    // Insert subscription
    $stmt = $pdo->prepare("INSERT INTO newsletter_subscriptions (email) VALUES (?)");
    $result = $stmt->execute([$email]);
    
    if ($result) {
        echo json_encode([
            'success' => true, 
            'message' => 'Successfully subscribed to our newsletter!'
        ]);
    } else {
        throw new Exception('Failed to save subscription');
    }
    
} catch (Exception $e) {
    error_log("Newsletter subscription error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'There was an error processing your subscription']);
}
?>