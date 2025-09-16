<?php
// process-registration.php - Handles event registration form submissions
include 'includes/config.php';

header('Content-Type: application/json');

// Add error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0); // Don't display errors in JSON response
ini_set('log_errors', 1);

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
    
    // Validation
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
    
    // Phone format validation (more lenient)
    if (!empty($phone) && !preg_match('/^\+254\d{9}$/', $phone)) {
        // If it doesn't match the strict format, try to be more lenient
        if (!preg_match('/^(\+254|254|0)\d{9}$/', $phone)) {
            $errors[] = 'Invalid phone number format';
        }
    }
    
    // Check for valid enum values
    $valid_genders = ['Male', 'Female'];
    if (!in_array($gender, $valid_genders)) {
        $errors[] = 'Invalid gender selection';
    }
    
    $valid_tshirt_sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];
    if (!in_array($tshirt_size, $valid_tshirt_sizes)) {
        $errors[] = 'Invalid t-shirt size';
    }
    
    $valid_participation_types = ['In Person', 'Virtual'];
    if (!in_array($participation_type, $valid_participation_types)) {
        $errors[] = 'Invalid participation type';
    }
    
    $valid_distances = ['5km', '10km', '21km'];
    if (!in_array($distance, $valid_distances)) {
        $errors[] = 'Invalid distance selection';
    }
    
    // Number validation
    if ($number_of_adults < 1 || $number_of_adults > 10) {
        $errors[] = 'Number of adults must be between 1 and 10';
    }
    
    if ($number_of_children < 0 || $number_of_children > 10) {
        $errors[] = 'Number of children must be between 0 and 10';
    }
    
    // Check if email or phone already registered (more comprehensive duplicate prevention)
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

    // If there are validation errors, return them
    if (!empty($errors)) {
        echo json_encode([
            'success' => false, 
            'message' => implode(', ', $errors)
        ]);
        exit;
    }
    
    // Insert registration into database
    $stmt = $pdo->prepare("
        INSERT INTO event_registrations (
            full_name, email, phone, nationality, gender, how_heard, 
            tshirt_size, participation_type, distance, number_of_adults, 
            number_of_children, comments, special_requirements
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    
    $result = $stmt->execute([
        $full_name, $email, $phone, $nationality, $gender, $how_heard,
        $tshirt_size, $participation_type, $distance, $number_of_adults,
        $number_of_children, $comments, $special_requirements
    ]);
    
    if ($result) {
        // Get the registration ID for confirmation
        $registration_id = $pdo->lastInsertId();
        
        // Try to send confirmation email (but don't fail if it doesn't work)
        try {
            sendConfirmationEmail($email, $full_name, $registration_id, [
                'distance' => $distance,
                'participation_type' => $participation_type,
                'total_people' => $number_of_adults + $number_of_children
            ]);
        } catch (Exception $emailError) {
            // Log email error but don't fail the registration
            error_log("Email sending failed: " . $emailError->getMessage());
        }
        
        echo json_encode([
            'success' => true,
            'message' => 'Registration completed successfully! Thank you for joining our event.',
            'registration_id' => $registration_id
        ]);
        
    } else {
        throw new Exception('Failed to save registration to database');
    }
    
} catch (PDOException $e) {
    error_log("Database error in registration: " . $e->getMessage());
    echo json_encode([
        'success' => false, 
        'message' => 'Database error occurred. Please try again.'
    ]);
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