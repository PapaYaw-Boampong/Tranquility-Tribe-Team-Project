<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $goal = $_POST['goal'];
    $goal_id = $_POST['goal_id']; // Assuming you're passing goal_id in the form

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tt2025";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("UPDATE WellnessPlans SET goals = :goals WHERE plan_id = :goal_id");

        $stmt->bindParam(':goals', $goal);
        $stmt->bindParam(':goal_id', $goal_id);

        $stmt->execute();

        echo "Goal updated successfully!";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>