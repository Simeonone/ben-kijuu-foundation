<?php
// admin/get-registration-details.php - Get registration details for modal
include '../includes/config.php';

// session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    echo json_encode(['success' => false, 'message' => 'Not authorized']);
    exit;
}

if (!isset($_GET['id'])) {
    echo json_encode(['success' => false, 'message' => 'Registration ID required']);
    exit;
}

try {
    $id = intval($_GET['id']);
    $stmt = $pdo->prepare("SELECT * FROM event_registrations WHERE id = ?");
    $stmt->execute([$id]);
    $registration = $stmt->fetch();
    
    if ($registration) {
        echo json_encode(['success' => true, 'registration' => $registration]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Registration not found']);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
}
?>