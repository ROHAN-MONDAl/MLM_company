<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basanti Shopee</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="images/logo.jpeg" class="rounded-5" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-dark">
        <div class="container justify-content-center align-items-center">
            <a class="navbar-brand d-flex align-items-center gap-2 mx-auto text-white" href="#">
                <img src="images/logo.jpeg" class="logo img-fluid" alt="Basanti Shopee Logo">
                <span class="brand-text">Basanti Shopee</span>
            </a>
        </div>
    </nav>


    <!-- Registration Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="registration-form">
                    <h2 class="form-title fw-bold">REGISTRATION</h2>

                    <form id="mlmRegistrationForm" method="POST" action="submit.php" enctype="multipart/form-data">

                        <!-- Profile Picture Upload -->
                        <div class="profile-pic-container">
                            <i class="fas fa-user-circle icon"></i>
                            <img id="profileImage" src="" style="display: none;">
                            <input type="file" id="profilePic" name="profilePic" accept="image/*" capture="user" required>
                        </div>
                        <p class="text-center mb-4">Click to upload your profile photo</p>

                        <!-- Personal Information -->
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name">
                                <div class="error" id="fullNameError">Please enter your full name</div>
                            </div>
                            <div class="col-md-6">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
                                <div class="error" id="phoneError">Please enter a valid 10-digit phone number</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                <div class="error" id="emailError">Please enter a valid email address</div>
                            </div>
                        </div>

                        <!-- Additional Fields: Referral and Group Name -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="groupName" class="form-label">Group Name</label>
                                <input type="text" class="form-control" id="groupName" name="groupName" placeholder="Enter your group name">
                                <div class="error" id="groupNameError">Please enter group name</div>
                            </div>
                            <div class="col-md-6">
                                <label for="referral" class="form-label">Referral</label>
                                <input type="text" class="form-control" id="referral" name="referral" placeholder="Enter referral code">
                                <div class="error" id="referralError">Enter referral code or group name anyone is mandatory</div>
                            </div>
                        </div>

                        <!-- Address Information -->
                        <div class="row">
                            <div class="col-md-8">
                                <label for="address" class="form-label">Home Address</label>
                                <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter your complete address"></textarea>
                                <div class="error" id="addressError">Please enter your address</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Get Location</label>
                                <button type="button" class="btn btn-location w-100" id="getLocationBtn">
                                    <i class="fas fa-map-marker-alt me-2"></i>Get My Location
                                </button>
                                <div id="locationStatus" class="location-status"></div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="pincode" class="form-label">Pin Code</label>
                                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter 6-digit pin code">
                                <div class="error" id="pincodeError">Please enter a valid 6-digit pin code</div>
                            </div>
                            <div class="col-md-4">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city">
                                <div class="error" id="cityError">Please enter your city</div>
                            </div>
                            <div class="col-md-4">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state">
                                <div class="error" id="stateError">Please enter your state</div>
                            </div>
                        </div>

                        <!-- PAN Card Upload -->
                        <div class="row mt-3">
                            <div class="col-md-12 position-relative">
                                <div class="doc-upload" id="panCardUpload">
                                    <i class="fas fa-id-card"></i>
                                    <p>Upload PAN Card</p>
                                    <div id="panCardName" class="small"></div>
                                </div>
                                <div class="upload-options" id="panUploadOptions">
                                    <button type="button" id="panTakePhoto">
                                        <i class="fas fa-camera me-2"></i>Take Photo
                                    </button>
                                    <button type="button" id="panUploadFile">
                                        <i class="fas fa-upload me-2"></i>Upload File
                                    </button>
                                </div>
                                <input type="file" id="panCard" name="panCard" accept="image/*" style="display: none;">
                                <input type="file" id="panCardCamera" accept="image/*" capture="environment" style="display: none;">
                            </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="form-check d-flex justify-content-center mt-3">
                            <input class="form-check-input mx-2" type="checkbox" id="termsCheck" name="termsCheck">
                            <label class="form-check-label" for="termsCheck">
                                I agree to the <a href="#" style="color: var(--color-blue);">Terms and Conditions</a>
                                <br>
                                <div class="error mt-1" id="termsError">You must agree to the terms and conditions</div>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mt-4">Register</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <!-- Registration Success Modal (Professional Style) -->
    <div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #FFFFFF; border: 2px solid #FFB427; border-radius: 10px; color: #0B1F3F;">

                <div class="modal-header" style="background-color: #FFB427; color: #0B1F3F; border-bottom: none;">
                    <h5 class="modal-title" id="thankYouModalLabel" style="font-weight: bold;">Registration Complete</h5>
                </div>

                <div class="modal-body" style="font-size: 1.1rem; color: #0B1F3F;">
                    <strong>Thank you for your registration!</strong><br>
                    Once your application is approved by our Basanti team, your login credentials will be sent to the email address you provided.
                </div>


                <div class="modal-footer" style="background-color: #FFFFFF; border-top: none;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                        style="background-color: #3975D9; border-color: #3975D9;"
                        onmouseover="this.style.backgroundColor='#0B1F3F'; this.style.borderColor='#0B1F3F';"
                        onmouseout="this.style.backgroundColor='#3975D9'; this.style.borderColor='#3975D9';">
                        Close
                    </button>
                </div>

            </div>
        </div>
    </div>





    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="footer-logo">Basanti Shopee</div>
                    <p class="mt-3">Building dreams together through our powerful network marketing platform.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With Us</h5>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <p class="mt-3">
                        <i class="fas fa-phone-alt me-2"></i> +1 234 567 8900<br>
                        <i class="fas fa-envelope me-2"></i> info@mlmnetwork.com
                    </p>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="text-center">
                <p class="mb-0">&copy; <span id="year"></span> Basanti Shopee. All rights reserved.</p>
                <p class="mb-0">Design and Develop by <a href="https://web2infinity.com/">Web2infinity</a></p>
            </div>
        </div>
    </footer>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Js -->
    <script src="script.js"></script>
</body>

</html>