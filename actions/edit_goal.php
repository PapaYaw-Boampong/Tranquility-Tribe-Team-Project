<?php
include '../settings/connection.php';

$response = array('success' => false, 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $goal_id = $_POST['id'];
    $newgoalName = $_POST['text'];

    $sql = "UPDATE Goals SET goal_text = ? WHERE goal_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newgoalName, $goal_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $response['success'] = true;
        $response['message'] = "Goal updated successfully.";
    } else {
        $response['message'] = "Error updating goal. Please try again.";
    }

    $stmt->close();
} else {
    $response['message'] = "Wrong request method. Please try again.";
}

$conn->close();
echo json_encode($response);
?>