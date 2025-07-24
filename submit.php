<?php
$host = "localhost";
$user = "root";
$pass = ""; // set your MySQL root password if any
$db   = "test";

// Connect to DB
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle file uploads
function uploadFile($file, $folder)
{
    if (isset($file) && $file['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . "." . $ext;
        $destination = "uploads/$folder/$filename";

        if (!is_dir("uploads/$folder")) {
            mkdir("uploads/$folder", 0777, true);
        }

        move_uploaded_file($file['tmp_name'], $destination);
        return $destination;
    }
    return null;
}

// Get form data
$fullName    = $_POST['fullName'];
$phone       = $_POST['phoneNumber'];
$email       = $_POST['email'];
// Handle group/referral logic
$group    = isset($_POST['groupName']) && trim($_POST['groupName']) !== '' ? $_POST['groupName'] : null;
$referral = isset($_POST['referral']) && trim($_POST['referral']) !== '' ? $_POST['referral'] : null;
$address     = $_POST['address'];
$pincode     = $_POST['pincode'];
$city        = $_POST['city'];
$state       = $_POST['state'];
$agreed      = isset($_POST['termsCheck']) ? 1 : 0;


if ($group !== null) {
    $referral = null;
} elseif ($referral !== null) {
    $group = null;
}


$profilePicPath = uploadFile($_FILES['profilePic'], 'profiles');
$panCardPath    = uploadFile($_FILES['panCard'], 'pancards');

// Save to database
$stmt = $conn->prepare("INSERT INTO mlm_registrations 
    (full_name, phone_number, email, group_name, referral, address, pincode, city, state, profile_picture, pan_card, agreed_to_terms)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "sssssssssssi",
    $fullName,
    $phone,
    $email,
    $group,
    $referral,
    $address,
    $pincode,
    $city,
    $state,
    $profilePicPath,
    $panCardPath,
    $agreed
);

if ($stmt->execute()) {
    // Use a query parameter to indicate success
    header("Location: index.php?registration=success");
    exit();
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
