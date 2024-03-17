<?php
require_once '../settings/connection.php';

global $conn;

$sql = "SELECT * FROM Interests";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    $interests = array();

    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Store interest ID and name in the array
        $interests[] = array(
            'id' => $row['interest_id'],
            'name' => $row['name']
        );
    }

    // Encode the array as JSON
    $json_response = json_encode($interests);

    // Set the Content-Type header to application/json
    header('Content-Type: application/json');

    // Output the JSON response
    echo $json_response;
} else {
    // If the query fails, return an error message
    echo json_encode(array('error' => 'Failed to fetch interests.'));
}

// Close the database connection
mysqli_close($conn);

