<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the goal data from the form
    $goal = $_POST['goal'];

    // Validate the goal data (You may add more validation here)

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tt2025";

    try {
        // Create a new PDO instance
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement to insert the goal
        $stmt = $conn->prepare("INSERT INTO WellnessPlans (user_id, goals, creation_date) VALUES (:user_id, :goals, :creation_date)");

        // Bind parameters
        // Assuming you have a user_id stored in a session variable
        $user_id = $_SESSION['user_id']; // Make sure to start the session before using session variables
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':goals', $goal);
        $stmt->bindParam(':creation_date', date("Y-m-d")); // Set current date as creation date

        // Execute the prepared statement
        $stmt->execute();

        echo "Goal inserted successfully!";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>
