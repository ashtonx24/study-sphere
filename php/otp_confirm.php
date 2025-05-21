<?php
// php/otp_confirm.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $otp = trim($_POST['otp'] ?? '');

    if (empty($email) || empty($otp)) {
        echo "Email and OTP are required.";
        exit;
    }

    // Retrieve the stored OTP and expiration for the given email.
    $stmt = $conn->prepare("SELECT id, otp_code, otp_expires FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        echo "Invalid email.";
        exit;
    }
    $stmt->bind_result($user_id, $storedOtp, $otpExpires);
    $stmt->fetch();

    // Check if the OTP matches and is not expired.
    if ($otp != $storedOtp || strtotime($otpExpires) < time()) {
        echo "Invalid or expired OTP.";
        exit;
    }

    // Clear the OTP fields in the database (optional, for security).
    $stmt = $conn->prepare("UPDATE users SET otp_code = NULL, otp_expires = NULL WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();

    // Store the user ID in the session to allow password update.
    $_SESSION['reset_user_id'] = $user_id;

    // Redirect to the password update page.
    header("Location: ../html/update_pass.html");
    exit;
}
?>
