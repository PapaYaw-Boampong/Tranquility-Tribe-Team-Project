<?php
include '../settings/connection.php';

$response = array('success' => false, 'message' => '', 'goal_text' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $goalName = $_POST['goal'];

    $sql = "INSERT INTO Goals (goal_text) VALUES (?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $goalName);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['goal_added'] = true;
        $response['success'] = true;
        $response['message'] = $goalName . " added successfully.";
        $response['goal_text'] = $goalName;

    } else {
        $response['message'] = "Error: Unable to add chore. Please try again.";
    }

    $stmt->close();
} else {
    $response['message'] = "Wrong request method. Please try again.";
}

$conn->close();
echo json_encode($response);