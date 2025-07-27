<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Basanti Shopee</title>
  <!-- Favicon -->
  <link rel="icon" href="../../images/favicon.svg" type="image/x-icon">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Custom css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Mobile Menu Toggle -->
  <button class="mobile-toggle" onclick="toggleSidebar()">
    <i class="fa-solid fa-bars-staggered"></i>
  </button>
  <div class="overlay" onclick="toggleSidebar()"></div>

  <div class="main-wrapper d-flex justify-content-center align-items-center">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- End Sidebar -->

    <!-- Main Content -->
    <div class="dashboard-body">
      <!-- Header inside body -->
      <?php include 'header.php'; ?>

      <!-- User Profile Update Section -->
      <div class="dashboard-content">
        <div class="container-fluid profile-container">
          <div class="profile-edit-container">
            <form id="profileForm" class="profile-form">
              <!-- Profile Picture Section -->
              <div class="profile-picture-section">
                <div class="avatar-upload">
                  <div class="avatar-preview" id="avatarPreview" style="background-image: url('https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png');">
                  </div>
                  <div class="avatar-edit">
                    <input type="file" id="avatarUpload" accept="image/*">
                    <label for="avatarUpload" class="upload-label">
                      <i class="fas fa-camera"></i>
                    </label>
                  </div>
                  <p class="upload-hint">Max 2MB • JPG, PNG</p>
                </div>
              </div>

              <!-- Personal Information Section -->
              <div class="form-section">
                <h3 class="section-title">
                  <i class="fas fa-user-circle"></i> Personal Information
                </h3>

                <div class="form-group">
                  <label for="fullName">
                    <i class="fas fa-user"></i> Full Name <span class="required">*</span>
                  </label>
                  <div class="input-with-feedback">
                    <input type="text" id="fullName" name="fullName" placeholder="Enter your full name">
                    <span class="valid-feedback"><i class="fas fa-check-circle"></i></span>
                  </div>
                  <div class="error-message" id="fullNameError"></div>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="phoneNumber">
                      <i class="fas fa-phone-alt"></i> Phone <span class="required">*</span>
                    </label>
                    <div class="input-with-feedback">
                      <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="+1 234 567 8900">
                      <span class="valid-feedback"><i class="fas fa-check-circle"></i></span>
                    </div>
                    <div class="error-message" id="phoneError"></div>
                  </div>

                  <div class="form-group">
                    <label for="emailAddress">
                      <i class="fas fa-envelope"></i> Email <span class="required">*</span>
                    </label>
                    <div class="input-with-feedback">
                      <input type="email" id="emailAddress" name="emailAddress" placeholder="your@email.com">
                      <span class="valid-feedback"><i class="fas fa-check-circle"></i></span>
                    </div>
                    <div class="error-message" id="emailError"></div>
                  </div>
                </div>
              </div>

              <!-- Address Section -->
              <div class="form-section">
                <h3 class="section-title">
                  <i class="fas fa-map-marker-alt"></i> Address Information
                </h3>

                <div class="form-group">
                  <label for="streetAddress">
                    <i class="fas fa-home"></i> Street Address <span class="required">*</span>
                  </label>
                  <textarea id="streetAddress" name="streetAddress" rows="2" placeholder="Enter your street address">Shahid Sukumar Banerjee Sarani, Durgapur</textarea>
                  <div class="error-message" id="addressError"></div>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="city">
                      <i class="fas fa-city"></i> City <span class="required">*</span>
                    </label>
                    <input type="text" id="city" name="city" value="Durgapur">
                    <div class="error-message" id="cityError"></div>
                  </div>

                  <div class="form-group">
                    <label for="state">
                      <i class="fas fa-globe-americas"></i> State <span class="required">*</span>
                    </label>
                    <input type="text" id="state" name="state" value="West Bengal">
                    <div class="error-message" id="stateError"></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="postalCode">
                    <i class="fas fa-mail-bulk"></i> Postal Code <span class="required">*</span>
                  </label>
                  <input type="text" id="postalCode" name="postalCode" value="713200">
                  <div class="error-message" id="postalCodeError"></div>
                </div>
              </div>

              <!-- Documents Section -->
              <div class="form-section card shadow-sm p-4 rounded-3 mb-4">
                <h4 class="section-title mb-4 text-primary">
                  <i class="fas fa-file-upload me-2"></i> Document Uploads
                </h4>

                <div class="mb-3">
                  <label for="panCard" class="form-label fw-semibold">
                    <i class="fas fa-id-card me-1"></i> PAN Card <span class="text-danger">*</span>
                  </label>
                  <div class="custom-file-upload">
                    <input type="file" id="panCard" name="panCard" class="form-control" accept="image/*,.pdf">
                  </div>
                  <small class="form-text text-muted">Accepted formats: JPG, PNG, PDF (Max 5MB)</small>
                  <div class="text-danger mt-1" id="panCardError"></div>
                </div>
              </div>


              <!-- Submit Button -->
              <div class="form-actions">
                <button type="submit" class="submit-button">
                  <i class="fas fa-save"></i> Save Profile
                </button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>







  <!-- jQuery CDN (if not already included) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="script.js"></script>
</body>

</html>