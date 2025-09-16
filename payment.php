<?php
// payment.php
include 'includes/config.php';

// Get registration details
$registration_id = $_GET['registration_id'] ?? null;
$amount = $_GET['amount'] ?? null;

if (!$registration_id || !$amount) {
    header('Location: register.php');
    exit;
}

// Get registration details from database
try {
    $stmt = $pdo->prepare("SELECT * FROM event_registrations WHERE id = ?");
    $stmt->execute([$registration_id]);
    $registration = $stmt->fetch();
    
    if (!$registration) {
        header('Location: register.php');
        exit;
    }
} catch (Exception $e) {
    header('Location: register.php');
    exit;
}

$page_title = 'Payment - Event Registration';
include 'includes/header.php';
?>

<!-- Payment Page -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h1 class="display-6 mb-3">Complete Your Registration</h1>
                    <p class="lead">Thank you <?php echo htmlspecialchars($registration['full_name']); ?>! Please complete your payment to confirm your registration.</p>
                </div>
                
                <!-- Registration Summary -->
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Registration Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Name:</strong> <?php echo htmlspecialchars($registration['full_name']); ?></p>
                                <p><strong>Email:</strong> <?php echo htmlspecialchars($registration['email']); ?></p>
                                <p><strong>Distance:</strong> <?php echo $registration['distance']; ?></p>
                                <p><strong>Type:</strong> <?php echo $registration['participation_type']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Adults:</strong> <?php echo $registration['number_of_adults']; ?> × KES 1,500</p>
                                <p><strong>Children:</strong> <?php echo $registration['number_of_children']; ?> × KES 1,000</p>
                                <p><strong>Total People:</strong> <?php echo $registration['total_people']; ?></p>
                                <h4 class="text-primary"><strong>Total Amount: KES <?php echo number_format($amount); ?></strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Options -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Choose Your Payment Method</h5>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="paymentAccordion">
                            
                            <!-- M-Pesa Option -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="mpesaHeading">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mpesaCollapse">
                                        <img src="assets/images/mpesa-logo.png" alt="M-Pesa" height="30" class="me-3">
                                        <strong>M-Pesa Payment</strong>
                                    </button>
                                </h2>
                                <div id="mpesaCollapse" class="accordion-collapse collapse show" data-bs-parent="#paymentAccordion">
                                    <div class="accordion-body">
                                        <h6><strong>Name:</strong> Ben Kijuu Foundation</h6>
                                        <p>Use the details below if the automatic M-Pesa option does not work or is unavailable.</p>
                                        <ol>
                                            <li>Go to <strong>Lipa na M-Pesa</strong></li>
                                            <li>Choose <strong>Paybill</strong> and enter <strong>880100</strong></li>
                                            <li>Enter account number <strong>130260</strong></li>
                                            <li>Enter amount: <strong>KES <?php echo number_format($amount); ?></strong></li>
                                            <li>Enter your pin</li>
                                        </ol>
                                        <div class="alert alert-info">
                                            <strong>NB:</strong> If you are outside Kenya, you can use M-Pesa Global Pay on the M-Pesa app. This supports automatic conversion of multiple currencies where necessary.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Airtel Money Option -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="airtelHeading">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#airtelCollapse">
                                        <img src="assets/images/airtel-logo.png" alt="Airtel Money" height="30" class="me-3">
                                        <strong>Airtel Money</strong>
                                    </button>
                                </h2>
                                <div id="airtelCollapse" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                                    <div class="accordion-body">
                                        <h6><strong>Name:</strong> Ben Kijuu Foundation</h6>
                                        <p>Use the details below if the automatic Airtel Money option does not work or is unavailable.</p>
                                        <ol>
                                            <li>Go to <strong>Pay Bill</strong></li>
                                            <li>Choose <strong>M-Pesa Paybill</strong></li>
                                            <li>Enter <strong>880100</strong></li>
                                            <li>Enter account number <strong>130260</strong></li>
                                            <li>Enter amount: <strong>KES <?php echo number_format($amount); ?></strong></li>
                                            <li>Enter your pin</li>
                                        </ol>
                                        <div class="alert alert-info">
                                            <strong>NB:</strong> If you are outside Kenya, you can use Airtel Global Pay on the Airtel Money app. This supports automatic conversion of multiple currencies where necessary.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bank Payment Option -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="bankHeading">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bankCollapse">
                                        <img src="assets/images/ncba-logo.png" alt="NCBA Bank" height="30" class="me-3">
                                        <strong>Bank Payment / PesaLink</strong>
                                    </button>
                                </h2>
                                <div id="bankCollapse" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>Bank Name:</strong> NCBA Bank Kenya PLC</p>
                                                <p><strong>Branch Name:</strong> Parklands</p>
                                                <p><strong>Account Name:</strong> Ben Kijuu Foundation</p>
                                                <p><strong>Bank Code:</strong> 07</p>
                                                <p><strong>Branch Code:</strong> 143</p>
                                                <p><strong>Swift Code:</strong> CBAFKENX</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Account No (KES):</strong> 1001880973</p>
                                                <p><strong>Account No (USD):</strong> 1001881029</p>
                                                <p><strong>Amount to Pay:</strong> KES <?php echo number_format($amount); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="text-center mt-4">
                            <div class="alert alert-success">
                                <strong>After Payment:</strong> Please keep your transaction reference and contact us at 
                                <a href="mailto:info@benkijuufoundation.com">info@benkijuufoundation.com</a> 
                                with your payment confirmation.
                            </div>
                            <a href="register.php" class="btn btn-outline-secondary me-3">Register Another Person</a>
                            <a href="index.php" class="btn btn-primary-custom">Back to Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>