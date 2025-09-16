<?php
// register.php - Full event registration page
include 'includes/config.php';
$page_title = 'Event Registration - Liver Cancer Awareness Walk/Run';
include 'includes/header.php';
?>

<!-- Registration Hero -->
<section class="hero-section" style="min-height: 50vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title">Liver Cancer Awareness Walk/Run</h1>
                <p class="hero-subtitle font-script">Register for Our Annual Event</p>
                <p class="hero-description">
                    Join us in raising awareness and funds for liver cancer research. 
                    Choose your distance and participation type.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="contact-form">
                    <h3 class="text-center mb-4">Event Registration Form</h3>
                    <p class="text-center text-muted mb-4">
                        Please fill out all required fields to complete your registration
                    </p>
                    
                    <form id="eventRegistrationForm" method="POST" action="process-registration.php">
                        
                        <!-- Personal Information -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="mb-3 text-primary">Personal Information</h5>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="full_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="phone" placeholder="+254" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nationality" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select class="form-control" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">How did you hear about our event? <span class="text-danger">*</span></label>
                                <select class="form-control" name="how_heard" required>
                                    <option value="">Select Option</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Website">Website</option>
                                    <option value="Friend/Family">Friend/Family</option>
                                    <option value="Email Newsletter">Email Newsletter</option>
                                    <option value="Radio/TV">Radio/TV</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Previous Event">Previous Event</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Event Details -->
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <h5 class="mb-3 text-primary">Event Details</h5>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">T-Shirt Size <span class="text-danger">*</span></label>
                                <select class="form-control" name="tshirt_size" required>
                                    <option value="">Select Size</option>
                                    <option value="XS">Extra Small (XS)</option>
                                    <option value="S">Small (S)</option>
                                    <option value="M">Medium (M)</option>
                                    <option value="L">Large (L)</option>
                                    <option value="XL">Extra Large (XL)</option>
                                    <option value="XXL">Double XL (XXL)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Participation Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="participation_type" required>
                                    <option value="">Select Type</option>
                                    <option value="In Person">In Person</option>
                                    <option value="Virtual">Virtual</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Distance <span class="text-danger">*</span></label>
                                <select class="form-control" name="distance" required>
                                    <option value="">Select Distance</option>
                                    <option value="5km">5 Kilometers</option>
                                    <option value="10km">10 Kilometers</option>
                                    <option value="21km">21 Kilometers (Half Marathon)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- Auto-calculated -->
                                <label class="form-label">Total People (Auto-Generated)</label>
                                <input type="text" class="form-control" id="totalPeopleInput" readonly value="1">
                            </div>
                        </div>
                        
                        <!-- Group Information -->
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <h5 class="mb-3 text-primary">Group Information & Pricing</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Number of Adults <span class="text-danger">*</span> <small>(KES 1,500 each)</small></label>
                                <select class="form-control" name="number_of_adults" id="adults" required>
                                    <?php for ($i=1; $i<=10; $i++): ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Number of Children <small>(KES 1,000 each)</small></label>
                                <select class="form-control" name="number_of_children" id="children">
                                    <?php for ($i=0; $i<=10; $i++): ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>

                        <!-- Pricing Summary -->
                        <div class="mb-3">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h6 class="card-title">Registration Summary</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1"><span id="adultCount">1</span> Adult(s): KES <span id="adultCost">1,500</span></p>
                                            <p class="mb-1"><span id="childCount">0</span> Children: KES <span id="childCost">0</span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1"><strong>Total People: <span id="totalPeople">1</span></strong></p>
                                            <p class="mb-0"><strong>Total Amount: KES <span id="totalAmount">1,500</span></strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Additional Information -->
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <h5 class="mb-3 text-primary">Additional Information</h5>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Comments</label>
                            <textarea class="form-control" name="comments" rows="3"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Special Requirements</label>
                            <textarea class="form-control" name="special_requirements" rows="3"></textarea>
                        </div>
                        
                        <!-- Consent Agreement -->
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <h5 class="mb-3 text-primary">Agreement</h5>
                                <div class="card border-warning">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="consentAgreement" name="consent_agreement" required>
                                            <label class="form-check-label" for="consentAgreement">
                                                <strong><span class="text-danger">*</span> I have read and agree to the Participant Agreement, Waiver and Release of Liability</strong>
                                            </label>
                                        </div>
                                        <div class="mt-2">
                                            <button type="button" class="btn btn-outline-primary btn-sm" onclick="showConsent()">
                                                View Agreement Terms
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary-custom btn-custom">
                                Complete Registration
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
// Show consent terms
function showConsent() {
    const terms = [
        `1. Voluntary Participation
I am voluntarily participating in the Liver Cancer Awareness Walk organized by the Ben Kijuu Foundation...`,
        `2. Assumption of Risk
I acknowledge and accept that participation may involve certain risks...`,
        `3. Waiver and Release of Liability
To the fullest extent permitted by law, I hereby release...`,
        `4. Indemnity
I agree to indemnify and keep indemnified the Foundation...`,
        `5. Medical Treatment Consent
In the event of a medical emergency, I consent...`,
        `6. Use of Image and Likeness
I consent to the use of my name, photographs, video recordings...`,
        `7. Binding Effect
I confirm that I have read and understood this Consent, Waiver, and Indemnity Agreement...`
    ];

    for (let i = 0; i < terms.length; i++) {
        const proceed = confirm(terms[i] + "\n\nClick OK to continue reading, or Cancel to stop.");
        if (!proceed) return;
    }
    document.getElementById('consentAgreement').checked = true;
}

// Pricing + form handling
function updatePricing() {
    const adults = parseInt(document.getElementById('adults').value) || 0;
    const children = parseInt(document.getElementById('children').value) || 0;

    const adultCost = adults * 1500;
    const childCost = children * 1000;
    const totalCost = adultCost + childCost;
    const totalPeople = adults + children;

    // Update display
    document.getElementById('adultCount').textContent = adults;
    document.getElementById('childCount').textContent = children;
    document.getElementById('adultCost').textContent = adultCost.toLocaleString();
    document.getElementById('childCost').textContent = childCost.toLocaleString();
    document.getElementById('totalPeople').textContent = totalPeople;
    document.getElementById('totalAmount').textContent = totalCost.toLocaleString();
    document.getElementById('totalPeopleInput').value = totalPeople;
}

document.getElementById('adults').addEventListener('change', updatePricing);
document.getElementById('children').addEventListener('change', updatePricing);

// Form submission
document.getElementById('eventRegistrationForm').addEventListener('submit', function(e) {
    if (!document.getElementById('consentAgreement').checked) {
        e.preventDefault();
        alert('Please read and agree to the Participant Agreement, Waiver and Release of Liability before registering.');
        return false;
    }

    e.preventDefault();

    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Processing...';
    submitBtn.disabled = true;

    const adults = parseInt(document.getElementById('adults').value) || 0;
    const children = parseInt(document.getElementById('children').value) || 0;
    const totalAmount = (adults * 1500) + (children * 1000);

    const formData = new FormData(this);
    formData.append('total_amount', totalAmount);

    fetch('process-registration.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = `payment.php?registration_id=${data.registration_id}&amount=${totalAmount}`;
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        alert('Sorry, there was an error processing your registration. Please try again.');
    })
    .finally(() => {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    });
});

// Initialize pricing
updatePricing();
</script>

<?php include 'includes/footer.php'; ?>
