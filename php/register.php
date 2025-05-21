<?php
// Enable error reporting for debugging (remove or set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Return JSON instead of HTML
header('Content-Type: application/json');

// Include the database connection file
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form inputs safely (avoid undefined index notices)
    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // List of generic or test email addresses to block
    $blocked_emails = [
        'abc@gmail.com',
        'user@example.com',
        'test@mail.com',
        'demo@test.com',
        'user@testing.com',
        'test123@gmail.com',
        'fakeuser@example.org',
        'noreply@sample.com',
        'admin@test.com',
        'support@mydomain.com'
    ];

    // Check if the entered email is in the blocked list
    if (in_array($email, $blocked_emails)) {
        echo json_encode([
            'success' => false,
            'message' => 'This email address is not allowed for registration.'
        ]);
        exit();
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the data into the database
    $sql = "INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $name, $username, $email, $hashed_password);

        if ($stmt->execute()) {
            // Registration successful
            echo json_encode([
                'success' => true,
                'message' => 'Registration successful!'
            ]);
        } else {
            // Error executing the statement
            echo json_encode([
                'success' => false,
                'message' => 'Error executing statement: ' . $stmt->error
            ]);
        }

        $stmt->close();
    } else {
        // Error preparing the statement
        echo json_encode([
            'success' => false,
            'message' => 'Error preparing statement: ' . $conn->error
        ]);
    }

    $conn->close();
} else {
    // Invalid request method
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
}
?>
