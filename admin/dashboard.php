<?php
// admin/dashboard.php - Admin dashboard for Ben Kijuu Foundation
include '../includes/config.php';

// Simple authentication (you can enhance this later)
// session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    // For now, we'll create a simple login check
    if (isset($_POST['admin_login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Simple hardcoded login (change this later)
        if ($username === 'admin' && $password === 'foundation2025') {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
        } else {
            $login_error = "Invalid credentials";
        }
    }
    
    if (!isset($_SESSION['admin_logged_in'])) {
        // Show login form
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin Login - <?php echo SITE_NAME; ?></title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="../assets/css/style.css" rel="stylesheet">
        </head>
        <body class="bg-light">
            <div class="container">
                <div class="row justify-content-center" style="min-height: 100vh; align-items: center;">
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow">
                            <div class="card-body p-4">
                                <div class="text-center mb-4">
                                    <h3 class="text-primary">Admin Login</h3>
                                    <p class="text-muted"><?php echo SITE_NAME; ?></p>
                                </div>
                                
                                <?php if (isset($login_error)): ?>
                                    <div class="alert alert-danger"><?php echo $login_error; ?></div>
                                <?php endif; ?>
                                
                                <form method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" name="admin_login" class="btn btn-primary-custom">Login</button>
                                    </div>
                                </form>
                                
                                <div class="mt-3 text-center">
                                    <small class="text-muted">Default: admin / foundation2025</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: dashboard.php');
    exit;
}

// Get dashboard statistics
try {
    // Event registrations stats
    $total_registrations = $pdo->query("SELECT COUNT(*) FROM event_registrations")->fetchColumn();
    $in_person_count = $pdo->query("SELECT COUNT(*) FROM event_registrations WHERE participation_type = 'In Person'")->fetchColumn();
    $virtual_count = $pdo->query("SELECT COUNT(*) FROM event_registrations WHERE participation_type = 'Virtual'")->fetchColumn();
    $total_people = $pdo->query("SELECT SUM(number_of_adults + number_of_children) FROM event_registrations")->fetchColumn();
    
    // Contact submissions stats
    $contact_submissions = $pdo->query("SELECT COUNT(*) FROM contact_submissions")->fetchColumn();
    $newsletter_subscribers = $pdo->query("SELECT COUNT(*) FROM newsletter_subscriptions")->fetchColumn();
    
    // Recent registrations
    $recent_registrations = $pdo->query(
        "SELECT * FROM event_registrations ORDER BY created_at DESC LIMIT 10"
    )->fetchAll();
    
    // Distance breakdown
    $distance_stats = $pdo->query(
        "SELECT distance, COUNT(*) as count FROM event_registrations GROUP BY distance"
    )->fetchAll();
    
    // T-shirt size breakdown
    $tshirt_stats = $pdo->query(
        "SELECT tshirt_size, COUNT(*) as count FROM event_registrations GROUP BY tshirt_size"
    )->fetchAll();
    
} catch (Exception $e) {
    $error_message = "Error loading dashboard data: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - <?php echo SITE_NAME; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
       /* Sidebar styling */
.sidebar {
    background-color: #1f2937; /* Dark gray (Tailwind slate-800) */
    width: 250px;             /* Fix width so main-content aligns */
    min-height: 100vh;
    position: fixed;          /* Ensure it stays fixed on the left */
    top: 0;
    left: 0;
}

/* Sidebar links */
.sidebar .nav-link {
    color: #f3f4f6;           /* Light gray text */
    padding: 1rem 1.5rem;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar .nav-link:hover,
.sidebar .nav-link.active {
    background-color: #2563eb; /* Blue highlight */
    color: #ffffff;            /* White text on hover/active */
}

/* Main content aligned with fixed sidebar */
.main-content {
    margin-left: 250px;
    padding: 2rem;
}

        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border-top: 4px solid var(--primary-color);
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        .table-responsive {
            border-radius: 15px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 1rem;
            }
            .sidebar {
                position: absolute;
                width: 100%;
                z-index: 1000;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            .sidebar.show {
                transform: translateX(0);
            }
            /* Force sidebar nav links to white */
.sidebar .nav-link {
    color: #ffffff !important;
}

/* Keep hover/active states clear */
.sidebar .nav-link:hover,
.sidebar .nav-link.active {
    background-color: var(--primary-color); /* or any color you prefer */
    color: #ffffff !important;
}

        }
    </style>
</head>
<body class="bg-light">
    
    <!-- Sidebar -->
    <nav class="sidebar position-fixed">
        <div class="p-4">
            <h4 class="text-white mb-4"><?php echo SITE_NAME; ?></h4>
            <div class="text-light mb-3">
                <small>Welcome, <?php echo $_SESSION['admin_username']; ?></small>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#dashboard"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#registrations"><i class="fas fa-users me-2"></i> Event Registrations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contacts"><i class="fas fa-envelope me-2"></i> Contact Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#newsletter"><i class="fas fa-newspaper me-2"></i> Newsletter Subscribers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../" target="_blank"><i class="fas fa-external-link-alt me-2"></i> View Website</a>
            </li>
            <li class="nav-item mt-4">
                <a class="nav-link text-danger" href="?logout=1"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Admin Dashboard</h1>
            <button class="btn btn-primary d-md-none" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <!-- Statistics Cards -->
        <div class="row mb-5">
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <div class="stats-number"><?php echo number_format($total_registrations); ?></div>
                    <div class="text-muted">Total Registrations</div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <div class="stats-number"><?php echo number_format($total_people ?: 0); ?></div>
                    <div class="text-muted">Total People</div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <div class="stats-number"><?php echo number_format($in_person_count); ?></div>
                    <div class="text-muted">In-Person</div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stats-card">
                    <div class="stats-number"><?php echo number_format($virtual_count); ?></div>
                    <div class="text-muted">Virtual</div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Distance Breakdown</h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($distance_stats as $stat): ?>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <span><?php echo $stat['distance']; ?></span>
                                    <span><?php echo $stat['count']; ?> people</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?php echo ($stat['count'] / max(1, $total_registrations)) * 100; ?>%"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>T-Shirt Sizes</h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($tshirt_stats as $stat): ?>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <span>Size <?php echo $stat['tshirt_size']; ?></span>
                                    <span><?php echo $stat['count']; ?></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: <?php echo ($stat['count'] / max(1, $total_registrations)) * 100; ?>%"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Registrations -->
        <div class="card mb-5">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Recent Event Registrations</h5>
                <a href="export-registrations.php" class="btn btn-success btn-sm">
                    <i class="fas fa-download me-1"></i> Export All
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Distance</th>
                            <th>Type</th>
                            <th>People</th>
                            <th>T-Shirt</th>
                            <th>Registered</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recent_registrations as $reg): ?>
                        <tr>
                            <td>#<?php echo $reg['id']; ?></td>
                            <td><?php echo htmlspecialchars($reg['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($reg['email']); ?></td>
                            <td><?php echo htmlspecialchars($reg['phone']); ?></td>
                            <td><span class="badge bg-primary"><?php echo $reg['distance']; ?></span></td>
                            <td><span class="badge bg-<?php echo $reg['participation_type'] == 'In Person' ? 'success' : 'info'; ?>"><?php echo $reg['participation_type']; ?></span></td>
                            <td><?php echo $reg['number_of_adults'] + $reg['number_of_children']; ?></td>
                            <td><?php echo $reg['tshirt_size']; ?></td>
                            <td><?php echo date('M j, Y', strtotime($reg['created_at'])); ?></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" onclick="viewDetails(<?php echo $reg['id']; ?>)">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-primary"><?php echo number_format($contact_submissions); ?></h3>
                        <p class="text-muted">Contact Messages</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-success"><?php echo number_format($newsletter_subscribers); ?></h3>
                        <p class="text-muted">Newsletter Subscribers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="text-info"><?php echo date('M j, Y'); ?></h3>
                        <p class="text-muted">Today</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for viewing registration details -->
    <div class="modal fade" id="detailsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registration Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modalContent">
                    <!-- Content loaded via JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar toggle for mobile
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show');
        });

        // View registration details
        function viewDetails(id) {
            fetch(`get-registration-details.php?id=${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const reg = data.registration;
                        const content = `
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Personal Information</h6>
                                    <p><strong>Name:</strong> ${reg.full_name}</p>
                                    <p><strong>Email:</strong> ${reg.email}</p>
                                    <p><strong>Phone:</strong> ${reg.phone}</p>
                                    <p><strong>Nationality:</strong> ${reg.nationality}</p>
                                    <p><strong>Gender:</strong> ${reg.gender}</p>
                                </div>
                                <div class="col-md-6">
                                    <h6>Event Details</h6>
                                    <p><strong>Distance:</strong> ${reg.distance}</p>
                                    <p><strong>Type:</strong> ${reg.participation_type}</p>
                                    <p><strong>T-Shirt Size:</strong> ${reg.tshirt_size}</p>
                                    <p><strong>Adults:</strong> ${reg.number_of_adults}</p>
                                    <p><strong>Children:</strong> ${reg.number_of_children}</p>
                                    <p><strong>Total People:</strong> ${reg.total_people}</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h6>Additional Information</h6>
                                    <p><strong>How heard about event:</strong> ${reg.how_heard}</p>
                                    ${reg.comments ? `<p><strong>Comments:</strong> ${reg.comments}</p>` : ''}
                                    ${reg.special_requirements ? `<p><strong>Special Requirements:</strong> ${reg.special_requirements}</p>` : ''}
                                    <p><strong>Registration Date:</strong> ${new Date(reg.created_at).toLocaleDateString()}</p>
                                </div>
                            </div>
                        `;
                        document.getElementById('modalContent').innerHTML = content;
                        new bootstrap.Modal(document.getElementById('detailsModal')).show();
                    }
                })
                .catch(error => {
                    alert('Error loading details');
                });
        }

        // Auto-refresh every 30 seconds
        setInterval(() => {
            location.reload();
        }, 30000);
    </script>
</body>
</html>