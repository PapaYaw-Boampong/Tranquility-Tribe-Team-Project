<?php
// Include the file containing the database connection
include '../settings/connection.php';

session_start();

$user_id = $_SESSION['user_id'];


// Get JSON payload from POST request
$json = file_get_contents('php://input');
$data = json_decode($json, true);


// Prepare SQL query to count completed and incomplete goals
$sql = "SELECT 
            SUM(CASE WHEN goal_status = 'complete' THEN 1 ELSE 0 END) AS completed_goals,
            SUM(CASE WHEN goal_status = 'incomplete' THEN 1 ELSE 0 END) AS incomplete_goals
        FROM Goals
        WHERE user_id = ?";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the user ID parameter
$stmt->bind_param("i", $user_id);

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Fetch result as associative array
$row = $result->fetch_assoc();

// Output result as JSON
echo json_encode(array(
    'completedGoals' => $row['completed_goals'],
    'incompleteGoals' => $row['incomplete_goals']
));

// Close statement and connection
$stmt->close();
$conn->close();
?>
