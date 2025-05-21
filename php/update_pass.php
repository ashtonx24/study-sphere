<?php
// php/update_pass.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'db.php';

// Ensure the user came through the OTP confirmation process.
if (!isset($_SESSION['reset_user_id'])) {
    header("Location: ../html/otp_request.html");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash the new password using PHP's password_hash
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $user_id = $_SESSION['reset_user_id'];
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
    $stmt->bind_param("si", $hashedPassword, $user_id);
    if ($stmt->execute()) {
        // Optionally clear the reset session variable
        unset($_SESSION['reset_user_id']);
        echo "Password updated successfully. You can now <a href='../html/login.html'>login</a>.";
    } else {
        echo "Error updating password.";
    }
}
?>
