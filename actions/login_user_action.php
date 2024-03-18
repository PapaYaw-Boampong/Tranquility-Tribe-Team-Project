<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define response codes
$responseCodes = [
    'success' => 200,
    'error' => 500,
    'redirect' => 302
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('../settings/connection.php');

    global $conn;

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    
    if (!empty($email) && !empty($password) && !empty($username)) {
        $sql = "SELECT * FROM USERS WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        
        $row = mysqli_fetch_assoc($result);
    
    }
       
    if ($row) {
        if (password_verify($password, $row['passwrd'])) {
            
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['userName'];
    
            // Return success response
            http_response_code($responseCodes['success']);
            echo json_encode(['message' => 'Login successful']);
        } else {
            // Return error response for incorrect credentials
            http_response_code($responseCodes['error']);
            echo json_encode(['message' => 'Incorrect credentials.']);
        }
    } else {
        // Return error response for preparation error or empty fields
        http_response_code($responseCodes['error']);
        echo json_encode(['message' => 'Error: Invalid credentials or empty fields.']);
    }
    

    // Close connection
    $conn->close();
}


