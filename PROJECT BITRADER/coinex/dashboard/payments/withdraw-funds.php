<!doctype html>
<html lang="en" data-bs-theme="dark">
  
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Withdraw Funds | COINEX</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/core/libs.min.css">
      <link rel="stylesheet" href="../assets/css/coinex.min862f.css?v=4.1.0">
      <link rel="stylesheet" href="../assets/css/custom.min862f.css?v=4.1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
  <body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
      <div style="background-image: url('../assets/images/auth/01.png')" >  
        <div class="wrapper">
<section class="vh-100 bg-image">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-lg-8 col-md-10 mt-5">
                <div class="card bg-dark">
                    <div class="card-body p-4">
                        <div class="auth-form">
                            <h2 class="text-center mb-4">Withdraw Funds</h2>
                            
                            <!-- Step Progress Indicator -->
                            <div class="d-flex justify-content-center mb-5">
                                <div class="position-relative payment-progress">
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;" 
                                             id="progress-bar"></div>
                                    </div>
                                    <div class="position-absolute w-100 d-flex justify-content-between" 
                                         style="top: -12px;">
                                        <button class="progress-point active" onclick="goToStep(1)" data-step="1">
                                            <span class="progress-number">1</span>
                                            <span class="progress-label">Method</span>
                                        </button>
                                        <button class="progress-point" onclick="goToStep(2)" data-step="2" disabled>
                                            <span class="progress-number">2</span>
                                            <span class="progress-label">Details</span>
                                        </button>
                                        <button class="progress-point" onclick="goToStep(3)" data-step="3" disabled>
                                            <span class="progress-number">3</span>
                                            <span class="progress-label">Confirm</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Step 1: Withdrawal Method Selection -->
                            <div id="step1" class="payment-step active">
                                <p class="text-center mb-4">Select your preferred withdrawal method below</p>
                                <div class="row g-4">
                                    <!-- Bitcoin Option -->
                                    <div class="col-md-6">
                                        <div class="payment-option-card" onclick="selectWithdrawMethod('bitcoin')">
                                            <div class="card bg-dark-subtle cursor-pointer h-100">
                                                <div class="card-body text-center p-4">
                                                    <img src="../assets/images/coins/01.png" class="mb-3" 
                                                         style="width: 64px;" alt="Bitcoin">
                                                    <h4>Bitcoin (BTC)</h4>
                                                    <p class="mb-0">Withdraw to BTC wallet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- USDT Option -->
                                    <div class="col-md-6">
                                        <div class="payment-option-card" onclick="selectWithdrawMethod('usdt')">
                                            <div class="card bg-dark-subtle cursor-pointer h-100">
                                                <div class="card-body text-center p-4">
                                                    <img src="../assets/images/coins/02.png" class="mb-3" 
                                                         style="width: 64px;" alt="USDT">
                                                    <h4>USDT (TRC20)</h4>
                                                    <p class="mb-0">Withdraw to USDT wallet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Bank Transfer Option -->
                                    <div class="col-md-6">
                                        <div class="payment-option-card" onclick="selectWithdrawMethod('bank')">
                                            <div class="card bg-dark-subtle cursor-pointer h-100">
                                                <div class="card-body text-center p-4">
                                                    <i class="fas fa-university mb-3" style="font-size: 64px;"></i>
                                                    <h4>Bank Transfer</h4>
                                                    <p class="mb-0">Withdraw to bank account</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- PayPal Option -->
                                    <div class="col-md-6">
                                        <div class="payment-option-card" onclick="selectWithdrawMethod('paypal')">
                                            <div class="card bg-dark-subtle cursor-pointer h-100">
                                                <div class="card-body text-center p-4">
                                                    <i class="fab fa-paypal mb-3" style="font-size: 64px;"></i>
                                                    <h4>PayPal</h4>
                                                    <p class="mb-0">Withdraw to PayPal account</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Step 2: Withdrawal Details -->
                            <div id="step2" class="payment-step d-none">
                                <div class="d-flex align-items-center mb-4">
                                    <button class="btn btn-link text-white p-0 me-3" onclick="goBack()">
                                        <i class="fas fa-arrow-left"></i>
                                    </button>
                                    <h2 class="mb-0" id="withdrawMethodTitle">Withdrawal Details</h2>
                                </div>
                                
                                <!-- Available Balance -->
                                <div class="alert alert-info mb-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-wallet me-3 fs-4"></i>
                                        <div>
                                            <p class="mb-0">Available Balance</p>
                                            <h3 class="mb-0">$10,250.75 USD</h3>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Withdrawal Form -->
                                <form id="withdrawForm">
                                    <!-- Amount Input -->
                                    <div class="mb-4">
                                        <label class="form-label">Withdrawal Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="withdrawAmount" placeholder="Enter amount">
                                            <button class="btn btn-outline-secondary" type="button" onclick="setMaxAmount()">MAX</button>
                                        </div>
                                        <div class="form-text" id="feeInfo">
                                            Fee: <span id="feeAmount">$0.00</span> • You will receive: <span id="receiveAmount">$0.00</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Dynamic Withdrawal Forms -->
                                    <div id="bitcoinForm" class="withdraw-form d-none">
                                        <div class="mb-4">
                                            <label class="form-label">Bitcoin Wallet Address</label>
                                            <input type="text" class="form-control" placeholder="Enter your BTC wallet address">
                                            <div class="form-text">Please double-check your wallet address before proceeding</div>
                                        </div>
                                    </div>
                                    
                                    <div id="usdtForm" class="withdraw-form d-none">
                                        <div class="mb-4">
                                            <label class="form-label">USDT Wallet Address (TRC20 Network)</label>
                                            <input type="text" class="form-control" placeholder="Enter your USDT wallet address">
                                            <div class="form-text">Only TRC20 network is supported</div>
                                        </div>
                                    </div>
                                    
                                    <div id="bankForm" class="withdraw-form d-none">
                                        <div class="mb-4">
                                            <label class="form-label">Account Holder Name</label>
                                            <input type="text" class="form-control" placeholder="Enter account holder name">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Bank Name</label>
                                            <input type="text" class="form-control" placeholder="Enter bank name">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Account Number</label>
                                            <input type="text" class="form-control" placeholder="Enter account number">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Sort Code / Routing Number</label>
                                            <input type="text" class="form-control" placeholder="Enter sort code or routing number">
                                        </div>
                                    </div>
                                    
                                    <div id="paypalForm" class="withdraw-form d-none">
                                        <div class="mb-4">
                                            <label class="form-label">PayPal Email Address</label>
                                            <input type="email" class="form-control" placeholder="Enter your PayPal email">
                                        </div>
                                    </div>
                                    
                                    <!-- Continue Button -->
                                    <button type="button" class="btn btn-primary w-100" onclick="validateAndContinue()">
                                        Continue
                                    </button>
                                </form>
                            </div>
                            
                            <!-- Step 3: Confirmation -->
                            <div id="step3" class="payment-step d-none">
                                <div class="d-flex align-items-center mb-4">
                                    <button class="btn btn-link text-white p-0 me-3" onclick="goBack()">
                                        <i class="fas fa-arrow-left"></i>
                                    </button>
                                    <h2 class="mb-0">Confirm Withdrawal</h2>
                                </div>
                                
                                <div class="card bg-dark-subtle mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Withdrawal Summary</h5>
                                        <div class="summary-item d-flex justify-content-between mb-3">
                                            <span>Method:</span>
                                            <span id="summaryMethod" class="fw-bold">Bitcoin (BTC)</span>
                                        </div>
                                        <div class="summary-item d-flex justify-content-between mb-3">
                                            <span>Amount:</span>
                                            <span id="summaryAmount" class="fw-bold">$1,000.00</span>
                                        </div>
                                        <div class="summary-item d-flex justify-content-between mb-3">
                                            <span>Fee:</span>
                                            <span id="summaryFee" class="fw-bold">$25.00</span>
                                        </div>
                                        <div class="summary-item d-flex justify-content-between mb-3">
                                            <span>You Receive:</span>
                                            <span id="summaryReceive" class="fw-bold">$975.00</span>
                                        </div>
                                        <hr>
                                        <div class="summary-item d-flex justify-content-between mb-3">
                                            <span>Destination:</span>
                                            <span id="summaryDestination" class="fw-bold text-break">bc1q...</span>
                                        </div>
                                        <div class="summary-item d-flex justify-content-between">
                                            <span>Estimated Arrival:</span>
                                            <span class="fw-bold">24-48 hours</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Security Verification -->
                                <div class="mb-4">
                                    <h5>Security Verification</h5>
                                    <div class="mb-3">
                                        <label class="form-label">2FA Code</label>
                                        <input type="text" class="form-control" placeholder="Enter 6-digit code from authenticator app">
                                    </div>
                                </div>
                                
                                <!-- Terms Checkbox -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" id="termsCheck">
                                    <label class="form-check-label" for="termsCheck">
                                        I confirm this withdrawal information is correct and I understand that transactions cannot be reversed
                                    </label>
                                </div>
                                
                                <!-- Submit Button -->
                                <button id="confirmWithdrawButton" type="button" class="btn btn-primary w-100" onclick="submitWithdrawal()">
                                    Confirm Withdrawal
                                </button>
                            </div>
                            
                            <!-- Success Step (Initially Hidden) -->
                            <div id="successStep" class="payment-step d-none">
                                <div class="text-center">
                                    <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                                    <h2 class="mt-4">Withdrawal Submitted!</h2>
                                    <p class="mb-2">Your withdrawal request has been successfully submitted.</p>
                                    <p class="mb-4">Tracking ID: <span class="fw-bold">WD12345678</span></p>
                                    <div class="alert alert-info text-start mb-4">
                                        <p class="mb-0"><i class="fas fa-info-circle me-2"></i> Your request is being processed. You'll receive an email notification once completed.</p>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="../dashboard/index.html" class="btn btn-primary">
                                            Return to Dashboard
                                        </a>
                                        <button class="btn btn-outline-light" onclick="startNewWithdrawal()">
                                            Make Another Withdrawal
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
      </div>
      
    
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/core/libs.min.js"></script>
    <script src="../assets/js/core/external.min.js"></script>
    
    <!-- widgetchart JavaScript -->
    <script src="../assets/js/charts/widgetcharts.js"></script>
    
    <!-- GSAP Animation JS-->
    <script src="../assets/vendor/gsap/gsap.min.js"></script>
    <script src="../assets/vendor/gsap/ScrollTrigger.min.js"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="../assets/js/fslightbox.js"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="../assets/js/charts/vector-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/coinex.js"></script>
    
    <!-- apexchart JavaScript -->
    <script src="../assets/js/charts/apexcharts.js"></script>
    
    <!-- Gsap Animation Init -->
    <script src="../assets/js/gsap.js"></script>
    <script src="https://kit.fontawesome.com/12345abcde.js" crossorigin="anonymous"></script>
    
    <style>
    .payment-progress {
        width: 90%;
        margin: 0 auto;
    }

    .progress {
        background-color: #2c3136;
    }

    .progress-bar {
        background-color: #0d6efd;
        transition: width 0.5s ease-in-out;
    }

    .progress-point {
        width: 30px;
        height: 30px;
        background: #1a1d21;
        border: 3px solid #6c757d;
        border-radius: 50%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        outline: none;
        padding: 0;
    }

    .progress-number {
        color: #6c757d;
        font-weight: bold;
    }

    .progress-label {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 8px;
        white-space: nowrap;
        font-size: 0.8rem;
        color: #6c757d;
        font-weight: 500;
    }

    .progress-point.active {
        background: #0d6efd;
        border-color: #0d6efd;
    }

    .progress-point.active .progress-number {
        color: #fff;
    }

    .progress-point.active .progress-label {
        color: #fff;
    }

    .progress-point:disabled {
        cursor: not-allowed;
        opacity: 0.5;
    }
    
    .progress-point:not(:disabled):hover {
        transform: scale(1.1);
    }

    .payment-option-card {
        transition: transform 0.2s;
        cursor: pointer;
    }

    .payment-option-card:hover {
        transform: translateY(-5px);
    }
    </style>
    
    <script>
    // Remove loading screen when page is ready
    window.addEventListener('load', function() {
        const loader = document.getElementById('loading');
        if (loader) {
            loader.style.display = 'none';
        }
    });

    // Withdrawal flow management
    let currentStep = 1;
    let selectedMethod = '';
    const progressBar = document.getElementById('progress-bar');
    const availableBalance = 10250.75; // Example balance in USD
    
    // Fee rates by withdrawal method (as percentages)
    const feeRates = {
        'bitcoin': 0.025,  // 2.5%
        'usdt': 0.015,     // 1.5%
        'bank': 0.03,      // 3%
        'paypal': 0.035    // 3.5%
    };

    function updateProgress() {
        const progress = ((currentStep - 1) / 2) * 100;
        progressBar.style.width = progress + '%';
        
        // Update all progress points
        document.querySelectorAll('.progress-point').forEach((point, index) => {
            const step = index + 1;
            
            // Add/remove active class
            point.classList.toggle('active', step <= currentStep);
            
            // Enable/disable buttons
            if (step <= currentStep) {
                point.disabled = false;
            } else if (step === currentStep + 1) {
                // Next step is always enabled if current step is completed
                point.disabled = false;
            } else {
                point.disabled = true;
            }
        });
    }

    function goToStep(step) {
        // Can only go to steps we've already reached or the next step
        if (step > currentStep + 1) return;
        
        // Special case: Going to step 3 requires validation
        if (step === 3 && currentStep === 2) {
            // Use the regular validation logic
            validateAndContinue();
            return;
        }
        
        // Hide all steps
        document.querySelectorAll('.payment-step').forEach(el => {
            el.classList.add('d-none');
        });
        
        // Show the requested step
        document.getElementById('step' + step).classList.remove('d-none');
        currentStep = step;
        updateProgress();
    }

    function selectWithdrawMethod(method) {
        // Store selected method
        selectedMethod = method;
        
        // Hide step 1 and show step 2
        document.getElementById('step1').classList.add('d-none');
        document.getElementById('step2').classList.remove('d-none');
        
        // Update progress
        currentStep = 2;
        updateProgress();

        // Show relevant withdrawal form
        document.querySelectorAll('.withdraw-form').forEach(form => {
            form.classList.add('d-none');
        });
        document.getElementById(method + 'Form').classList.remove('d-none');

        // Update method title
        const methodTitles = {
            'bitcoin': 'Bitcoin (BTC) Withdrawal',
            'usdt': 'USDT (TRC20) Withdrawal',
            'bank': 'Bank Transfer Withdrawal',
            'paypal': 'PayPal Withdrawal'
        };
        document.getElementById('withdrawMethodTitle').textContent = methodTitles[method] || 'Withdrawal Details';
        
        // Update fee information
        updateFeeInfo(0);
        
        // Set default value for method in summary
        const methodNames = {
            'bitcoin': 'Bitcoin (BTC)',
            'usdt': 'USDT (TRC20)',
            'bank': 'Bank Transfer',
            'paypal': 'PayPal'
        };
        document.getElementById('summaryMethod').textContent = methodNames[method] || '';
    }

    function goBack() {
        if (currentStep > 1) {
            currentStep--;
            updateProgress();
            
            // Hide all steps
            document.querySelectorAll('.payment-step').forEach(el => {
                el.classList.add('d-none');
            });
            
            // Show the previous step
            document.getElementById('step' + currentStep).classList.remove('d-none');
            
            // If going back to step 2, restore the selected method
            if (currentStep === 2 && selectedMethod) {
                document.querySelectorAll('.withdraw-form').forEach(form => {
                    form.classList.add('d-none');
                });
                document.getElementById(selectedMethod + 'Form').classList.remove('d-none');
            }
        }
    }
    
    function updateFeeInfo(amount) {
        const amountNum = parseFloat(amount) || 0;
        const feeRate = feeRates[selectedMethod] || 0.025; // Default to 2.5% if method not found
        const feeAmount = amountNum * feeRate;
        const receiveAmount = Math.max(0, amountNum - feeAmount);
        
        // Update the fee information
        document.getElementById('feeAmount').textContent = '$' + feeAmount.toFixed(2);
        document.getElementById('receiveAmount').textContent = '$' + receiveAmount.toFixed(2);
        
        // Update summary values
        document.getElementById('summaryAmount').textContent = '$' + amountNum.toFixed(2);
        document.getElementById('summaryFee').textContent = '$' + feeAmount.toFixed(2);
        document.getElementById('summaryReceive').textContent = '$' + receiveAmount.toFixed(2);
    }
    
    function setMaxAmount() {
        document.getElementById('withdrawAmount').value = availableBalance;
        updateFeeInfo(availableBalance);
    }
    
    function validateAndContinue() {
        // Get form values
        const amountInput = document.getElementById('withdrawAmount');
        const amount = parseFloat(amountInput.value);
        
        // Validate amount
        if (!amount || isNaN(amount) || amount <= 0) {
            alert('Please enter a valid withdrawal amount');
            return;
        }
        
        if (amount > availableBalance) {
            alert('Withdrawal amount exceeds your available balance');
            return;
        }
        
        // Get the destination address based on selected method
        let destination = '';
        
        switch(selectedMethod) {
            case 'bitcoin':
                const btcAddress = document.querySelector('#bitcoinForm input').value;
                if (!btcAddress) {
                    alert('Please enter your Bitcoin wallet address');
                    return;
                }
                destination = btcAddress;
                break;
                
            case 'usdt':
                const usdtAddress = document.querySelector('#usdtForm input').value;
                if (!usdtAddress) {
                    alert('Please enter your USDT wallet address');
                    return;
                }
                destination = usdtAddress;
                break;
                
            case 'bank':
                const accountName = document.querySelector('#bankForm input:nth-child(1)').value;
                const bankName = document.querySelector('#bankForm input:nth-child(2)').value;
                const accountNumber = document.querySelector('#bankForm input:nth-child(3)').value;
                
                if (!accountName || !bankName || !accountNumber) {
                    alert('Please fill in all bank account details');
                    return;
                }
                
                destination = `${accountName} / ${bankName} / ${accountNumber.substr(-4)}`;
                break;
                
            case 'paypal':
                const paypalEmail = document.querySelector('#paypalForm input').value;
                if (!paypalEmail) {
                    alert('Please enter your PayPal email address');
                    return;
                }
                destination = paypalEmail;
                break;
                
            default:
                alert('Please select a withdrawal method');
                return;
        }
        
        // Update summary destination
        document.getElementById('summaryDestination').textContent = destination;
        
        // Proceed to confirmation step
        document.getElementById('step2').classList.add('d-none');
        document.getElementById('step3').classList.remove('d-none');
        currentStep = 3;
        updateProgress();
    }
    
    function submitWithdrawal() {
        // Validate 2FA and terms
        const twoFACode = document.querySelector('#step3 input[type="text"]').value;
        const termsChecked = document.getElementById('termsCheck').checked;
        
        if (!twoFACode) {
            alert('Please enter your 2FA security code');
            return;
        }
        
        if (!termsChecked) {
            alert('Please confirm that you understand the withdrawal terms');
            return;
        }
        
        // Simulate a successful withdrawal
        document.getElementById('step3').classList.add('d-none');
        document.getElementById('successStep').classList.remove('d-none');
    }
    
    function startNewWithdrawal() {
        selectedMethod = '';
        currentStep = 1;
        updateProgress();
        
        // Reset all forms
        document.getElementById('withdrawForm').reset();
        
        // Hide all steps and show step 1
        document.querySelectorAll('.payment-step').forEach(el => {
            el.classList.add('d-none');
        });
        document.getElementById('step1').classList.remove('d-none');
        
        // Reset fee information
        document.getElementById('feeAmount').textContent = '$0.00';
        document.getElementById('receiveAmount').textContent = '$0.00';
    }
    
    // Add event listener for amount changes
    document.getElementById('withdrawAmount').addEventListener('input', function() {
        updateFeeInfo(this.value);
    });
    </script>  </body>

</html>
