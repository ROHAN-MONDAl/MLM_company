<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Basanti Shopee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="../images/logo.jpeg" class="rounded-5" type="image/x-icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="page-wrapper">
        <!-- Header -->
        <nav class="navbar navbar-dark">
            <div class="container justify-content-center align-items-center">
                <a class="navbar-brand d-flex align-items-center gap-2 mx-auto text-white" href="#">
                    <img src="../images/logo.jpeg" class="logo img-fluid" alt="Basanti Shopee Logo">
                    <span class="brand-text">Basanti Shopee</span>
                </a>
            </div>
        </nav>

        <!-- LOGIN FORM -->
        <div class="login-section">
            <div class="login-card">
                <img src="../images/logo.jpeg" alt="Logo" class="login-logo">
                <h2>WELCOME</h2>
                <h4>Sign In</h4>

                <form id="loginForm" novalidate>
                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-user"></i> Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                        <div class="invalid-feedback">Username must be at least 6 characters.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><i class="fa fa-lock"></i> Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password">
                        <div class="invalid-feedback">
                            Password must be at least 6 characters, include 1 uppercase, 1 lowercase, 1 number, and 1
                            special character.
                        </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-3">
                        <input type="checkbox" class="form-check-input mx-1" id="remember">
                        <label class="form-check-label" for="remember">remember me</label>
                    </div>

                    <button type="submit" id="loginBtn" class="btn btn-login">
                        <span id="loginText">Login</span>
                        <span id="loginSpinner" class="spinner-border spinner-border-sm visually-hidden" role="status"
                            aria-hidden="true"></span>
                    </button>

                    <div class="forgot-link">
                        <a href="#">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="page-footer">
            <p class="mb-0">&copy; <span id="year"></span> Basanti Shopee. All rights reserved.</p>
            <p class="mb-0">Design and Develop by <a class="web2infinity" href="https://web2infinity.com/">Web2infinity</a></p>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom js -->
    <script src="script.js"></script>

</body>

</html>