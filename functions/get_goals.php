<?php
// Include database connection file
include '../settings/connection.php';
session_start();
// Check if user_id is provided
if (isset($_SESSION['user_id'])) {
    // Sanitize user_id input
    $user_id = $_SESSION['user_id'];

    // Prepare the SQL query with a placeholder for user_id
    $query = "SELECT goal_id, user_id, goal_status, goal_text FROM Goals WHERE user_id = ?";

    // Prepare the statement
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Bind the user_id parameter to the placeholder
        mysqli_stmt_bind_param($stmt, "i", $user_id);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Store the result
            mysqli_stmt_store_result($stmt);

            // Check if any rows were returned
            if (mysqli_stmt_num_rows($stmt) > 0) {
                // Bind the result variables
                mysqli_stmt_bind_result($stmt, $goal_id, $user_id, $goal_status, $goal_text);

                // Array to store goals data
                $goals = array();

                // Fetch each row from the result set
                while (mysqli_stmt_fetch($stmt)) {
                    // Add the goal data to the goals array
                    $goals[] = array(
                        'goal_id' => $goal_id,
                        'user_id' => $user_id,
                        'goal_status' => $goal_status,
                        'goal_text' => $goal_text
                    );
                }

                // Send the goals data as JSON response
                echo json_encode($goals);
            } else {
                // If no rows were returned, return an empty array
                echo json_encode(array());
            }
        } else {
            // If execution fails, return an error message
            echo json_encode(array('error' => 'Failed to execute query'));
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // If preparation fails, return an error message
        echo json_encode(array('error' => 'Failed to prepare statement'));
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // If user_id is not provided, return an error message
    echo json_encode(array('error' => 'User ID is not provided'));
}
?>
