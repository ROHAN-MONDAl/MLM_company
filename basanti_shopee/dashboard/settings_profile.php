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
          <!-- Heading -->
          <h4 class="profile-heading">
            <i class="fas fa-user-cog me-2"></i>Update Your Profile
          </h4>

          <div class="row">
            <!-- Left Column - Profile Picture and Documents -->
            <div class="col-lg-4 profile-left-col">
              <div class="profile-card">
                <!-- Profile Photo Upload -->
                <div class="profile-photo-section">
                  <div class="profile-photo-container">
                    <img id="profile-preview" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                      class="profile-photo">
                    <label for="profile-upload" class="profile-upload-btn">
                      <i class="fas fa-camera"></i>
                    </label>
                    <input type="file" id="profile-upload" class="d-none" accept="image/*">
                  </div>
                  <p class="upload-instruction">Click to upload your profile photo</p>
                  <div id="file-chosen" class="file-status">No file chosen</div>
                </div>

                <!-- PAN Card Upload -->
                <div class="document-upload">
                  <label class="upload-label"><i class="far fa-id-card me-2"></i>Upload PAN Card</label>
                  <div class="upload-control">
                    <input type="file" class="form-control" id="pan-upload" accept="image/*,.pdf">
                    <button class="upload-button" type="button" id="pan-upload-btn">
                      <i class="fas fa-upload"></i>
                    </button>
                  </div>
                  <div class="upload-note">Accepted formats: JPG, PNG, PDF</div>
                </div>
              </div>
            </div>

            <!-- Right Column - Personal Information -->
            <div class="col-lg-8">
              <div class="profile-info-card">
                <form>
                  <!-- Full Name -->
                  <div class="form-group">
                    <label for="full-name" class="form-label"><i class="fas fa-user me-2"></i>Full Name</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                      <input type="text" class="form-control" id="full-name" placeholder="Enter your full name">
                    </div>
                  </div>

                  <!-- Contact Information -->
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="phone" class="form-label"><i class="fas fa-phone-alt me-2"></i>Phone Number</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                      </div>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="email" class="form-label"><i class="fas fa-envelope me-2"></i>Email Address</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                      </div>
                    </div>
                  </div>

                  <!-- Address Information -->
                  <div class="form-group">
                    <label for="address" class="form-label"><i class="fas fa-home me-2"></i>Home Address</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                      <input type="text" class="form-control" id="address"
                        value="Shahid Sukumar Banerjee Sarani, Durgapur, West Bengal, India">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label for="pincode" class="form-label"><i class="fas fa-mailbox me-2"></i>Pin Code</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                        <input type="text" class="form-control" id="pincode" value="713200">
                      </div>
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="city" class="form-label"><i class="fas fa-city me-2"></i>City</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                        <input type="text" class="form-control" id="city" value="Durgapur">
                      </div>
                    </div>
                    <div class="col-md-5 form-group">
                      <label for="state" class="form-label"><i class="fas fa-map me-2"></i>State</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-globe-asia"></i></span>
                        <input type="text" class="form-control" id="state" value="West Bengal">
                      </div>
                    </div>
                  </div>

                  <!-- Submit Button -->
                  <div class="form-actions">
                    <button type="submit" class="submit-btn">
                      <i class="fas fa-check-circle me-2"></i>Update Profile
                    </button>
                  </div>
                </form>
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