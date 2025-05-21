<?php
// otp_request.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// 1. Include Composer's autoload file:
require __DIR__ . '/../vendor/autoload.php'; // Adjust the path as needed (e.g., "../vendor/autoload.php")

// 2. Import PHPMailer classes into the global namespace:
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'db.php'; // Your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if (empty($email)) {
        echo json_encode(["success" => false, "message" => "Email is required."]);
        exit;
    }

    // Check if the email exists in your users table
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        echo json_encode(["success" => false, "message" => "Email not found."]);
        exit;
    }
    $stmt->bind_result($user_id);
    $stmt->fetch();

    // Generate a 6-digit OTP
    $otp = random_int(100000, 999999);
    // Set expiration time (e.g., 10 minutes from now)
    $expires = date("Y-m-d H:i:s", strtotime('+10 minutes'));

    // Save OTP and expiry in the database
    $stmt = $conn->prepare("UPDATE users SET otp_code = ?, otp_expires = ? WHERE id = ?");
    $stmt->bind_param("ssi", $otp, $expires, $user_id);
    if ($stmt->execute()) {
        // 3. Set up PHPMailer and send the OTP email
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';   // Replace with your SMTP server
            $mail->SMTPAuth   = true;
            $mail->Username   = 'your@email.com'; // Replace with your SMTP username
            // $mail->Password   = 'sensitive cred goes here';    // Replace with your SMTP password
            $mail->SMTPSecure = 'place';                     // 'tls' or 'ssl'
            // $mail->Port       = portnum;                       // 587 or 465 for SSL

            // Recipients
            $mail->setFrom('asharc789@gmail.com', 'Study-Sphere');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(false); // Set to true if you want to send HTML email
            $mail->Subject = "Your OTP for Password Reset";
            $mail->Body    = "Your One Time Password (OTP) for resetting your password is: $otp\n"
                           . "It expires in 10 minutes.";

            $mail->send();

            // Redirect to the OTP confirmation page, passing the email
            header("Location: ../html/otp_confirm.php?email=" . urlencode($email));
            exit;
        } catch (Exception $e) {
            // If email fails to send, you might want to handle it differently
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo json_encode(["success" => false, "message" => "Error processing OTP request."]);
    }
}
?>
