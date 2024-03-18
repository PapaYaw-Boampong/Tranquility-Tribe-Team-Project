<?php

session_start();

$user_id = $_SESSION['user_id'];

include '../settings/connection.php';

$response = array('success' => false, 'goal_text' => '', 'status_text' => 'incomplete');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $goalName = $_POST['goal'];

    $sql = "INSERT INTO Goals (user_id,goal_text) VALUES (?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $goalName);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $response['success'] = true;
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