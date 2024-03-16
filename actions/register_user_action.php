<?php

// Define response codes
$responseCodes = [
    'success' => 200,
    'error' => 500,
    'redirect' => 302
];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_log("POST data: " . print_r($_POST, true));
    // Include database connection file
    include('../settings/connection.php');


    // Get form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $occupation = $_POST["occupation"];
    $interests = $_POST["interests"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare insert statement
    $sql = "INSERT INTO Users (userName, email, firstName, lastName, country, gender, date_of_birth, occupation, interest_id, registration_date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE,?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("ssssssssss", $username, $email, $fname, $lname, $country, $gender, $dob, $occupation, $interests, $hashedPasswordhashe);

        // Execute statement
        if ($stmt->execute()) {
            // Close statement
            $stmt->close();
            // Close connection
            $conn->close();
            // Return success response
            http_response_code($responseCodes['success']);
            echo json_encode(['message' => 'User registered successfully.']);
        } else {
            // Close statement
            $stmt->close();
            // Close connection
            $conn->close();
            // Return error response with detailed error message
            http_response_code($responseCodes['error']);
            echo json_encode(['message' => 'Error registering user: ' . $conn->error]);
        }
    } else {
        // Return error response with detailed error message
        http_response_code($responseCodes['error']);
        echo json_encode(['message' => 'Error preparing statement: ' . $conn->error]);
    }
} 