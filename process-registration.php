<?php
// process-registration.php - Handles event registration form submissions
include 'includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

try {
    // Collect and sanitize form data
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $nationality = trim($_POST['nationality'] ?? '');
    $gender = $_POST['gender'] ?? '';
    $how_heard = $_POST['how_heard'] ?? '';
    $tshirt_size = $_POST['tshirt_size'] ?? '';
    $participation_type = $_POST['participation_type'] ?? '';
    $distance = $_POST['distance'] ?? '';
    $number_of_adults = intval($_POST['number_of_adults'] ?? 1);
    $number_of_children = intval($_POST['number_of_children'] ?? 0);
    $comments = trim($_POST['comments'] ?? '');
    $special_requirements = trim($_POST['special_requirements'] ?? '');
    $total_amount = floatval($_POST['total_amount'] ?? 0);
    
    // Validation FIRST
    $errors = [];
    
    // Required fields validation
    if (empty($full_name)) $errors[] = 'Full name is required';
    if (empty($email)) $errors[] = 'Email address is required';
    if (empty($phone)) $errors[] = 'Phone number is required';
    if (empty($nationality)) $errors[] = 'Nationality is required';
    if (empty($gender)) $errors[] = 'Gender is required';
    if (empty($how_heard)) $errors[] = 'Please tell us how you heard about the event';
    if (empty($tshirt_size)) $errors[] = 'T-shirt size is required';
    if (empty($participation_type)) $errors[] = 'Participation type is required';
    if (empty($distance)) $errors[] = 'Distance selection is required';
    
    // Email format validation
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    
    // Phone format validation
    if (!empty($phone) && !preg_match('/^(\+254|254|0)\d{9}$/', $phone)) {
        $errors[] = 'Invalid phone number format';
    }
    
    // Enum validations
    if (!in_array($gender, ['Male', 'Female'])) {
        $errors[] = 'Invalid gender selection';
    }
    
    if (!in_array($tshirt_size, ['XS', 'S', 'M', 'L', 'XL', 'XXL'])) {
        $errors[] = 'Invalid t-shirt size';
    }
    
    if (!in_array($participation_type, ['In Person', 'Virtual'])) {
        $errors[] = 'Invalid participation type';
    }
    
    if (!in_array($distance, ['5km', '10km', '21km'])) {
        $errors[] = 'Invalid distance selection';
    }
    
    // Number validation
    if ($number_of_adults < 1 || $number_of_adults > 10) {
        $errors[] = 'Number of adults must be between 1 and 10';
    }
    
    if ($number_of_children < 0 || $number_of_children > 10) {
        $errors[] = 'Number of children must be between 0 and 10';
    }
    
    // Check for duplicates
    $duplicateCheckStmt = $pdo->prepare("SELECT id, email, phone FROM event_registrations WHERE email = ? OR phone = ?");
    $duplicateCheckStmt->execute([$email, $phone]);
    $existingRegistration = $duplicateCheckStmt->fetch();

    if ($existingRegistration) {
        if ($existingRegistration['email'] === $email) {
            $errors[] = 'This email address is already registered for the event';
        } else {
            $errors[] = 'This phone number is already registered for the event';
        }
    }

    // Return errors if any
    if (!empty($errors)) {
        echo json_encode([
            'success' => false, 
            'message' => implode(', ', $errors)
        ]);
        exit;
    }
    
    // Insert registration into database (ONLY ONCE)
    $stmt = $pdo->prepare("
        INSERT INTO event_registrations (
            full_name, email, phone, nationality, gender, how_heard, 
            tshirt_size, participation_type, distance, number_of_adults, 
            number_of_children, comments, special_requirements, total_amount
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    
    $result = $stmt->execute([
        $full_name, $email, $phone, $nationality, $gender, $how_heard,
        $tshirt_size, $participation_type, $distance, $number_of_adults,
        $number_of_children, $comments, $special_requirements, $total_amount
    ]);
    
    if ($result) {
        $registration_id = $pdo->lastInsertId();
        
        echo json_encode([
            'success' => true,
            'message' => 'Registration completed successfully!',
            'registration_id' => $registration_id
        ]);
    } else {
        throw new Exception('Failed to save registration');
    }
    
} catch (Exception $e) {
    error_log("Registration error: " . $e->getMessage());
    echo json_encode([
        'success' => false, 
        'message' => 'An error occurred while processing your registration. Please try again.'
    ]);
}


// Function to send confirmation email to participant
function sendConfirmationEmail($email, $name, $registration_id, $details) {
    // For XAMPP testing, we'll skip email sending or use a simple version
    // You can enable this later when you have proper email configuration
    return true;
    
    /*
    $to = $email;
    $subject = "Registration Confirmation - Liver Cancer Awareness Walk/Run";
    
    $body = "Dear " . $name . ",\n\n";
    $body .= "Thank you for registering for the Liver Cancer Awareness Walk/Run!\n\n";
    $body .= "Your registration details:\n";
    $body .= "Registration ID: #" . $registration_id . "\n";
    $body .= "Distance: " . $details['distance'] . "\n";
    $body .= "Participation Type: " . $details['participation_type'] . "\n";
    $body .= "Total People: " . $details['total_people'] . "\n\n";
    $body .= "We will send you more details about the event soon.\n\n";
    $body .= "Thank you for supporting our cause!\n\n";
    $body .= "Best regards,\n";
    $body .= "Ben Kijuu Foundation Team\n";
    $body .= "Fighting Liver Cancer, Fueling Hope";
    
    $headers = "From: events@benkijuufoundation.com\r\n";
    $headers .= "Reply-To: info@benkijuufoundation.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    return mail($to, $subject, $body, $headers);
    */
}
?>