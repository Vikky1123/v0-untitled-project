<!doctype html>
<html lang="en" data-bs-theme="dark">
  
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fund Your Wallet | COINEX</title>
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
        </div>    
    </div>
    <!-- loader END -->
    
    <div style="background-image: url('../assets/images/auth/01.png')">
        <div class="wrapper">
<section class="vh-100 bg-image">
   <div class="container h-100">
      <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-lg-9">
            <div class="card bg-dark">
                                <div class="card-body p-4">
                  <div class="auth-form">
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
                                                        <span class="progress-label">Select Method</span>
                                                    </button>
                                                    <button class="progress-point" onclick="goToStep(2)" data-step="2" disabled>
                                                        <span class="progress-number">2</span>
                                                        <span class="progress-label">Make Payment</span>
                                                    </button>
                                                    <button class="progress-point" onclick="goToStep(3)" data-step="3" disabled>
                                                        <span class="progress-number">3</span>
                                                        <span class="progress-label">Confirm</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Step 1: Payment Method Selection -->
                                        <div id="step1" class="payment-step active">
                                            <h2 class="text-center mb-4">Select Payment Method</h2>
                                            <div class="row g-4">
                                                <!-- Bitcoin Option -->
                                                <div class="col-md-6">
                                                    <div class="payment-option-card" onclick="selectPaymentMethod('bitcoin')">
                                                        <div class="card bg-dark-subtle cursor-pointer h-100">
                                                            <div class="card-body text-center p-4">
                                                                <img src="../assets/images/coins/01.png" class="mb-3" 
                                                                     style="width: 64px;" alt="Bitcoin">
                                                                <h4>Bitcoin (BTC)</h4>
                                                                <p class="mb-0">Pay with the world's leading cryptocurrency</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- USDT Option -->
                                                <div class="col-md-6">
                                                    <div class="payment-option-card" onclick="selectPaymentMethod('usdt')">
                                                        <div class="card bg-dark-subtle cursor-pointer h-100">
                                                            <div class="card-body text-center p-4">
                                                                <img src="../assets/images/coins/02.png" class="mb-3" 
                                                                     style="width: 64px;" alt="USDT">
                                                                <h4>USDT (TRC20)</h4>
                                                                <p class="mb-0">Pay with USDT on TRON network</p>
                                                            </div>
                                                        </div>
                                    </div>
                              </div>
                                                
                                                <!-- Litecoin Option -->
                                                <div class="col-md-6">
                                                    <div class="payment-option-card" onclick="selectPaymentMethod('litecoin')">
                                                        <div class="card bg-dark-subtle cursor-pointer h-100">
                                                            <div class="card-body text-center p-4">
                                                                <img src="../assets/images/coins/06.png" class="mb-3" 
                                                                     style="width: 64px;" alt="Litecoin">
                                                                <h4>Litecoin (LTC)</h4>
                                                                <p class="mb-0">Fast and low-cost transactions</p>
                                                            </div>
                                 </div>
                              </div>
                           </div>
                                                
                                                <!-- Bank Transfer Option -->
                                                <div class="col-md-6">
                                                    <div class="payment-option-card" onclick="selectPaymentMethod('bank')">
                                                        <div class="card bg-dark-subtle cursor-pointer h-100">
                                                            <div class="card-body text-center p-4">
                                                                <i class="fas fa-university mb-3" style="font-size: 64px;"></i>
                                                                <h4>Bank Transfer</h4>
                                                                <p class="mb-0">Direct bank transfer in GBP</p>
                                                            </div>
                                    </div>
                              </div>
                                 </div>
                              </div>
                           </div>

                                        <!-- Step 2: Payment Details (Initially Hidden) -->
                                        <div id="step2" class="payment-step d-none">
                                            <div class="d-flex align-items-center mb-4">
                                                <button class="btn btn-link text-white p-0 me-3" onclick="goBack()">
                                                    <i class="fas fa-arrow-left"></i>
                                                </button>
                                                <h2 class="mb-0" id="paymentMethodTitle">Make Payment</h2>
                                            </div>

                                            <!-- Payment Instructions -->
                                            <div class="payment-instructions bg-dark-subtle p-4 rounded mb-4">
                                                <h5 class="text-warning mb-3">⚠️ Important Payment Instructions</h5>
                                                <ol class="mb-0">
                                                    <li><strong>Send your payment to the wallet address below</strong> - this is your unique deposit address</li>
                                                    <li>Only send the exact currency type shown (e.g., BTC to BTC address only)</li>
                                                    <li>After sending, wait for at least one blockchain confirmation</li>
                                                    <li>Take a screenshot of your transaction confirmation</li>
                                                    <li>Upload the proof of payment in the section below</li>
                                                    <li>Enter the exact amount you sent and click "Confirm Payment"</li>
                                                </ol>
                                            </div>

                                            <!-- Dynamic Payment Details -->
                                            <div id="bitcoinDetails" class="payment-details d-none">
                                                <div class="wallet-info mb-4">
                                                    <label class="form-label">Bitcoin Wallet Address (BTC Network)</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" 
                                                               value="bc1qxy2kgdygjrsqtzq2n0yrf2493p83kkfjhx0wlh" readonly>
                                                        <button class="btn btn-primary" onclick="copyToClipboard(this)">
                                                            <i class="fas fa-copy"></i> Copy
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="qr-code text-center mb-4">
                                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=bc1qxy2kgdygjrsqtzq2n0yrf2493p83kkfjhx0wlh" 
                                                         alt="BTC QR Code" class="img-fluid">
                                                </div>
                                            </div>

                                            <div id="usdtDetails" class="payment-details d-none">
                                                <div class="wallet-info mb-4">
                                                    <label class="form-label">USDT Wallet Address (TRC20 Network)</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" 
                                                               value="TUzKLKnB53wKYZ6q7i1gQxwuM9T5J3QXCF" readonly>
                                                        <button class="btn btn-primary" onclick="copyToClipboard(this)">
                                                            <i class="fas fa-copy"></i> Copy
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="qr-code text-center mb-4">
                                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=TUzKLKnB53wKYZ6q7i1gQxwuM9T5J3QXCF" 
                                                         alt="USDT QR Code" class="img-fluid">
                                                </div>
                                            </div>

                                            <div id="litecoinDetails" class="payment-details d-none">
                                                <div class="wallet-info mb-4">
                                                    <label class="form-label">Litecoin Wallet Address (LTC Network)</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" 
                                                               value="ltc1qxy2kgdygjrsqtzq2n0yrf2493p83kkfjhx0wlh" readonly>
                                                        <button class="btn btn-primary" onclick="copyToClipboard(this)">
                                                            <i class="fas fa-copy"></i> Copy
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="qr-code text-center mb-4">
                                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=ltc1qxy2kgdygjrsqtzq2n0yrf2493p83kkfjhx0wlh" 
                                                         alt="LTC QR Code" class="img-fluid">
                                                </div>
                                            </div>

                                            <div id="bankDetails" class="payment-details d-none">
                                                <div class="bank-info mb-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Account Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" 
                                                                   value="COINEX GLOBAL LIMITED" readonly>
                                                            <button class="btn btn-primary" onclick="copyToClipboard(this)">
                                                                <i class="fas fa-copy"></i> Copy
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Account Number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" 
                                                                   value="0123456789" readonly>
                                                            <button class="btn btn-primary" onclick="copyToClipboard(this)">
                                                                <i class="fas fa-copy"></i> Copy
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Sort Code</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" 
                                                                   value="01-23-45" readonly>
                                                            <button class="btn btn-primary" onclick="copyToClipboard(this)">
                                                                <i class="fas fa-copy"></i> Copy
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Bank Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" 
                                                                   value="Example Bank PLC" readonly>
                                                            <button class="btn btn-primary" onclick="copyToClipboard(this)">
                                                                <i class="fas fa-copy"></i> Copy
                                                            </button>
                                    </div>
                              </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Reference</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" 
                                                                   value="COINEX-FUND" readonly>
                                                            <button class="btn btn-primary" onclick="copyToClipboard(this)">
                                                                <i class="fas fa-copy"></i> Copy
                                                            </button>
                                                        </div>
                                    </div>
                              </div>
                           </div>

                                            <!-- Upload Proof Section -->
                                            <div class="upload-section mb-4">
                                                <label class="form-label">Upload Payment Proof</label>
                                                <div class="drop-zone">
                                                    <span class="drop-zone__prompt">
                                                        <i class="fas fa-cloud-upload-alt mb-2" style="font-size: 2rem;"></i>
                                                        <br>Drop files here or click to upload
                                                    </span>
                                                    <input type="file" class="drop-zone__input" accept="image/*,.pdf">
                                                </div>
                                                <small class="text-muted">Accepted formats: PNG, JPG, PDF (Max 5MB)</small>
                                            </div>

                                            <!-- Amount Input -->
                                            <div class="mb-4">
                                                <label class="form-label">Amount Sent</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" placeholder="Enter amount sent">
                                                    <span class="input-group-text" id="currency-label">USD</span>
                                                </div>
                                            </div>

                                            <!-- Confirm Button -->
                                            <button class="btn btn-primary w-100" onclick="confirmPayment()">
                                                Confirm Payment
                                            </button>
                                        </div>

                                        <!-- Step 3: Confirmation (Initially Hidden) -->
                                        <div id="step3" class="payment-step d-none">
                                            <div class="d-flex align-items-center mb-4">
                                                <button class="btn btn-link text-white p-0 me-3" onclick="goBack()">
                                                    <i class="fas fa-arrow-left"></i>
                                                </button>
                                                <h2 class="mb-0">Payment Confirmation</h2>
                           </div>
                           <div class="text-center">
                                                <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                                                <h2 class="mt-4">Payment Submitted!</h2>
                                                <p class="mb-4">Your payment is being processed. We'll notify you once it's confirmed.</p>
                                                <div class="d-grid gap-2">
                                                    <a href="../dashboard/index.html" class="btn btn-primary">
                                                        Return to Dashboard
                                                    </a>
                                                    <button class="btn btn-outline-light" onclick="startNewPayment()">
                                                        Make Another Payment
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
      
    <!-- Required JavaScript -->
    <script src="../assets/js/core/libs.min.js"></script>
    <script src="../assets/js/core/external.min.js"></script>
    <script src="../assets/js/coinex.js"></script>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

    <script>
    // Remove loading screen when page is ready
    window.addEventListener('load', function() {
        const loader = document.getElementById('loading');
        if (loader) {
            loader.style.display = 'none';
        }
    });

    // Payment flow management
    let currentStep = 1;
    let selectedMethod = '';
    const progressBar = document.getElementById('progress-bar');

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
        
        // Hide all steps
        document.querySelectorAll('.payment-step').forEach(el => {
            el.classList.add('d-none');
        });
        
        // Show the requested step
        document.getElementById('step' + step).classList.remove('d-none');
        currentStep = step;
        updateProgress();
    }

    function selectPaymentMethod(method) {
        // Store selected method
        selectedMethod = method;
        
        // Hide step 1 and show step 2
        document.getElementById('step1').classList.add('d-none');
        document.getElementById('step2').classList.remove('d-none');
        
        // Update progress
        currentStep = 2;
        updateProgress();

        // Show relevant payment details
        document.querySelectorAll('.payment-details').forEach(detail => {
            detail.classList.add('d-none');
        });
        document.getElementById(method + 'Details').classList.remove('d-none');

        // Update method title
        const methodTitles = {
            'bitcoin': 'Bitcoin (BTC) Payment',
            'usdt': 'USDT (TRC20) Payment',
            'litecoin': 'Litecoin (LTC) Payment',
            'bank': 'Bank Transfer Payment'
        };
        document.getElementById('paymentMethodTitle').textContent = methodTitles[method] || 'Make Payment';

        // Update currency label
        const currencyLabel = document.getElementById('currency-label');
        switch(method) {
            case 'bitcoin':
                currencyLabel.textContent = 'BTC';
                break;
            case 'usdt':
                currencyLabel.textContent = 'USDT';
                break;
            case 'litecoin':
                currencyLabel.textContent = 'LTC';
                break;
            case 'bank':
                currencyLabel.textContent = 'GBP';
                break;
        }
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
            
            // If going back to step 2, restore the payment method
            if (currentStep === 2 && selectedMethod) {
                document.querySelectorAll('.payment-details').forEach(detail => {
                    detail.classList.add('d-none');
                });
                document.getElementById(selectedMethod + 'Details').classList.remove('d-none');
            }
        }
    }

    function confirmPayment() {
        // Validate form
        const fileInput = document.querySelector('.drop-zone__input');
        const amountInput = document.querySelector('input[type="number"]');

        if (!fileInput.files.length) {
            alert('Please upload proof of payment');
            return;
        }

        if (!amountInput.value) {
            alert('Please enter the amount sent');
            return;
        }

        // Proceed to confirmation
        document.getElementById('step2').classList.add('d-none');
        document.getElementById('step3').classList.remove('d-none');
        currentStep = 3;
        updateProgress();
    }

    function startNewPayment() {
        selectedMethod = '';
        currentStep = 1;
        updateProgress();
        
        // Hide all steps and show step 1
        document.querySelectorAll('.payment-step').forEach(el => {
            el.classList.add('d-none');
        });
        document.getElementById('step1').classList.remove('d-none');
        
        // Reset form
        document.querySelector('.drop-zone__input').value = '';
        document.querySelector('input[type="number"]').value = '';
        
        // Reset thumbnails
        const thumbnails = document.querySelectorAll('.drop-zone__thumb');
        thumbnails.forEach(thumbnail => {
            const parent = thumbnail.closest('.drop-zone');
            thumbnail.remove();
            const prompt = document.createElement('span');
            prompt.classList.add('drop-zone__prompt');
            prompt.innerHTML = '<i class="fas fa-cloud-upload-alt mb-2" style="font-size: 2rem;"></i><br>Drop files here or click to upload';
            parent.appendChild(prompt);
        });
    }

    // Copy to clipboard function
    function copyToClipboard(button) {
        const input = button.parentElement.querySelector('input');
        input.select();
        document.execCommand('copy');
        
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fas fa-check"></i> Copied!';
        setTimeout(() => {
            button.innerHTML = originalText;
        }, 2000);
    }

    // Drag and drop file upload
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");

        dropZoneElement.addEventListener("click", (e) => {
            inputElement.click();
        });

        inputElement.addEventListener("change", (e) => {
            if (inputElement.files.length) {
                updateThumbnail(dropZoneElement, inputElement.files[0]);
            }
        });

        dropZoneElement.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZoneElement.classList.add("drop-zone--over");
        });

        ["dragleave", "dragend"].forEach((type) => {
            dropZoneElement.addEventListener(type, (e) => {
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        dropZoneElement.addEventListener("drop", (e) => {
            e.preventDefault();

            if (e.dataTransfer.files.length) {
                inputElement.files = e.dataTransfer.files;
                updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
            }

            dropZoneElement.classList.remove("drop-zone--over");
        });
    });

    function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
            dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }

        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("drop-zone__thumb");
            dropZoneElement.appendChild(thumbnailElement);
        }

        thumbnailElement.dataset.label = file.name;

        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
    </script>

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

    .drop-zone {
        max-width: 100%;
        height: 200px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: 500;
        font-size: 1.2rem;
        cursor: pointer;
        color: #cccccc;
        border: 2px dashed #0d6efd;
        border-radius: 10px;
        margin-top: 10px;
    }

    .drop-zone--over {
        border-style: solid;
    }

    .drop-zone__input {
        display: none;
    }

    .drop-zone__thumb {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
        background-color: #cccccc;
        background-size: cover;
        position: relative;
    }

    .drop-zone__thumb::after {
        content: attr(data-label);
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px 0;
        color: #ffffff;
        background: rgba(0, 0, 0, 0.75);
        font-size: 14px;
        text-align: center;
    }
    </style>
</body>
</html>
