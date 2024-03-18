<?php
// Include the file containing the database connection
include '../settings/connection.php';

session_start();
$_userid = $_SESSION['user_id'];

// Get JSON payload from POST request
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Prepare SQL query to count completed and incomplete goals
$sql = "SELECT 
            SUM(CASE WHEN goal_status = 'complete' THEN 1 ELSE 0 END) AS completed_goals,
            SUM(CASE WHEN goal_status = 'incomplete' THEN 1 ELSE 0 END) AS incomplete_goals
        FROM Goals
        WHERE user_id = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch result as associative array
    $row = $result->fetch_assoc();

    // Output result as JSON
    echo json_encode(array(
        'completedGoals' => $row['completed_goals'],
        'incompleteGoals' => $row['incomplete_goals']
    ));
} else {
    // No goals found for the user
    echo json_encode(array(
        'completedGoals' => 0,
        'incompleteGoals' => 0
    ));
}

// Close result and connection
$result->close();
$conn->close();

