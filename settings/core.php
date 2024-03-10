<?php
// Start session
session_start();


// Function to check for login using user ID session
function checkLogin() {
    // Check if user ID session exists
    if (!isset($_SESSION['user_id'])) {
        // Redirect to login page
        header("Location: ../index.php");
        die(); // Stop further execution
    }
}

// Function to check for user role ID session
function checkUserRole() {
    // Check if user role ID session exists
    if (!isset($_SESSION['user_role_id'])) {
        return false; // Return false if session doesn't exist
    } else {
        return $_SESSION['user_role_id']; // Return user role ID
    }
}
?>