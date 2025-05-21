<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session at the very beginning
session_start();

// Include the database connection file
require_once 'db.php';

// Set the response header to JSON
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve username and password from POST data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        echo json_encode(["success" => false, "message" => "Username and password are required."]);
        exit;
    }

    // Prepare SQL query to check if the user exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo json_encode(["success" => false, "message" => "Error in preparing statement: " . $conn->error]);
        exit;
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            echo json_encode(["success" => true, "user" => $user]);
            exit;
        } else {
            echo json_encode(["success" => false, "message" => "Invalid password."]);
            exit;
        }
    } else {
        echo json_encode(["success" => false, "message" => "User not found."]);
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
