<?php
// Include the database connection file
require_once '../settings/connection.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the raw JSON data from the request body
    $json_data = file_get_contents("php://input");

    // Decode the JSON data into an associative array
    $data = json_decode($json_data, true);

    // Check if the JSON data is valid
    if ($data === null) {
        // JSON data is invalid, send error response
        http_response_code(400); // Bad Request
        echo json_encode(array("error" => "Invalid JSON data"));
        exit;
    }

    // Extract goal_id from the JSON data
    $goal_id = $data['goal_Id'];

    try {
        // Prepare the SQL statement to delete the goal
        $stmt = $conn->prepare("DELETE FROM Goals WHERE goal_id = ?");

        
        $stmt->bind_param("i", $goal_id);

        // Execute the SQL statement
        $stmt->execute();

        // Send success response
        echo json_encode(array("message" => "Goal deleted successfully"));
    } catch(PDOException $e) {
        // Send error response
        http_response_code(500); // Internal Server Error
        echo json_encode(array("error" => "Error deleting goal: " . $e->getMessage()));
    }
}

