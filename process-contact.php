<?php
// process-contact.php - Handles the "Join the Community" form from homepage
include 'includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

try {
    // Validate required fields
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $human_verification = isset($_POST['human_verification']);
    
    // Basic validation
    if (empty($name) || empty($email)) {
        echo json_encode(['success' => false, 'message' => 'Name and email are required']);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email format']);
        exit;
    }
    
    if (!$human_verification) {
        echo json_encode(['success' => false, 'message' => 'Please verify you are human']);
        exit;
    }
    
    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $result = $stmt->execute([$name, $email, $phone, $message]);
    
    if ($result) {
        // Optional: Send notification email to admin
        // sendNotificationEmail($name, $email, $phone, $message);
        
        echo json_encode([
            'success' => true, 
            'message' => 'Thank you for joining our community! We will be in touch soon.'
        ]);
    } else {
        throw new Exception('Failed to save contact information');
    }
    
} catch (Exception $e) {
    error_log("Contact form error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'There was an error processing your request']);
}

// Optional email notification function
function sendNotificationEmail($name, $email, $phone, $message) {
    $to = "info@benkijuufoundation.com"; // Replace with actual email
    $subject = "New Community Member - " . $name;
    $body = "New community member registration:\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Phone: " . $phone . "\n";
    $body .= "Message: " . $message . "\n";
    $body .= "Time: " . date('Y-m-d H:i:s') . "\n";
    
    $headers = "From: noreply@benkijuufoundation.com\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    mail($to, $subject, $body, $headers);
}
?>