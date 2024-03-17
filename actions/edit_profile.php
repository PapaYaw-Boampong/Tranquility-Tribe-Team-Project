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

// Get form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$country = $_POST['country'];
$occupation = $_POST['occupation'];
$interests = $_POST['interests'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

// Prepare update statement
$sql = "UPDATE Users SET firstName=?, lastName=?, userName=?, email=?, country=?, occupation=?, interest_id=?, date_of_birth=?, gender=? WHERE user_id=?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ssssssissi", $fname, $lname, $username, $email, $country, $occupation, $interests, $dob, $gender,$_SESSION['user_id']);
    if ($stmt->execute()) {
        // Redirect back to profile page after successful update
        header("Location: ../view/profile.php");
        exit();
    } else {
        // Redirect to an error page if update fails
        header("Location: error.php");
        exit();
    }
} else {
    // Redirect to an error page if preparation fails
    header("Location: error.php");
    exit();
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
