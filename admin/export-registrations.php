<?php
// admin/export-registrations.php - Export registrations to CSV
include '../includes/config.php';

// session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: dashboard.php');
    exit;
}

try {
    $registrations = $pdo->query("SELECT * FROM event_registrations ORDER BY created_at DESC")->fetchAll();
    
    // Set headers for CSV download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="event_registrations_' . date('Y-m-d') . '.csv"');
    
    $output = fopen('php://output', 'w');
    
    // CSV headers
    fputcsv($output, [
        'ID', 'Full Name', 'Email', 'Phone', 'Nationality', 'Gender',
        'How Heard', 'T-Shirt Size', 'Participation Type', 'Distance',
        'Adults', 'Children', 'Total People', 'Comments', 'Special Requirements',
        'Registration Date'
    ]);
    
    // CSV data
    foreach ($registrations as $reg) {
        fputcsv($output, [
            $reg['id'],
            $reg['full_name'],
            $reg['email'],
            $reg['phone'],
            $reg['nationality'],
            $reg['gender'],
            $reg['how_heard'],
            $reg['tshirt_size'],
            $reg['participation_type'],
            $reg['distance'],
            $reg['number_of_adults'],
            $reg['number_of_children'],
            $reg['number_of_adults'] + $reg['number_of_children'],
            $reg['comments'],
            $reg['special_requirements'],
            $reg['created_at']
        ]);
    }
    
    fclose($output);
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>