<?php
include '../settings/connection.php';

$response = array('success' => false, 'message' => '');

// Decode JSON data sent in the request
$data = json_decode(file_get_contents('php://input'), true);

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($data)) {
    $goal_id = $data['goal_id'];
    $newgoalName = $data['text'];
    $goalstat = $data['status'];

    $sql = "UPDATE Goals SET goal_text = ?, goal_status = ? WHERE goal_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi",$newgoalName,$goalstat, $goal_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $response['success'] = true;
        $response['message'] = "Goal updated successfully.";
    } else {
        $response['message'] = "Error updating goal. Please try again.";
    }

    $stmt->close();
} else {
    $response['message'] = "Wrong request method or missing data. Please try again.";
}

$conn->close();
echo json_encode($response);

