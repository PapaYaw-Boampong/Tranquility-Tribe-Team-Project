<?php
// Include database connection file
include('../settings/connection.php');

// Start session to access session variables
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header("Location: ../");
    exit();
}

// Fetch user profile information from the database
$user_id = $_SESSION['user_id']; // Assuming 'user_id' is stored in the session

// Query to get user information
$user_sql = "SELECT * FROM Users WHERE user_id = ?";
$user_stmt = $conn->prepare($user_sql);
$user_stmt->bind_param("i", $user_id);
$user_stmt->execute();
$user_result = $user_stmt->get_result();

// Fetch user information
if ($user_row = $user_result->fetch_assoc()) {
    // Assign fetched values to variables
    $fname = $user_row['firstName'];
    $lname = $user_row['lastName'];
    $username = $user_row['userName'];
    $email = $user_row['email'];
    $country = $user_row['country'];
    $occupation = $user_row['occupation'];
    $interests_id = $user_row['interest_id'];
    $dob = $user_row['date_of_birth'];
    $gender = $user_row['gender'];
}

$user_stmt->close();

// Query to get interest name
$interest_sql = "SELECT name FROM Interests WHERE interest_id = ?";
$interest_stmt = $conn->prepare($interest_sql);
$interest_stmt->bind_param("i", $interests_id);
$interest_stmt->execute();
$interest_result = $interest_stmt->get_result();

// Fetch interest name
if ($interest_row = $interest_result->fetch_assoc()) {
    $interests = $interest_row['name'];
}

$interest_stmt->close();

// Close database connection
$conn->close();

// Return profile information as JSON
echo json_encode([
    'fname' => $fname,
    'lname' => $lname,
    'username' => $username,
    'email' => $email,
    'country' => $country,
    'occupation' => $occupation,
    'interests_name' => $interests,
    'interests_id' => $interests_id,
    'dob' => $dob,
    'gender' => $gender
]);
?>
