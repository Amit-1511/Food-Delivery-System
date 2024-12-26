<?php
session_start();
require_once "../database/dbconnect.php"; // Include database connection

// Get email and password from POST request
$email = $_POST['email'];
$password = $_POST['password'];

try {
    // global $conn;  
    // Prepare SQL query to find the user by email
    $qry = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($qry);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->num_rows > 0) {
        $result = $res->fetch_assoc();
        if ($password===$result['password']) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['email'] = $result['email'];
            // $_SESSION['password'] = $result['password'];
            echo json_encode(["status" => "success", "message" => "Login successful"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Incorrect password"]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "User not found"]);
    }
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "An error occurred. Please try again later."]);
} finally {
    $conn->close();
}
?>