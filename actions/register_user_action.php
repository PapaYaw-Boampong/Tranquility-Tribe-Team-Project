<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include_once "../settings/connection.php";
    global $conn;
    // Get form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $occupation = $_POST["occupation"];
    $interests = $_POST["interests"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Validate form data (you can add more validation if needed)

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare insert statement
    $sql = "INSERT INTO Users (userName, email, firstName, lastName, country, gender, date_of_birth, occupation, interest, registration_date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    if ($stmt = $conn->prepare($sql)) {

        // Bind parameters
        $stmt->bind_param("sssssssss", $username, $email, $fname, $lname, $country, $gender, $dob, $occupation, $interests);

        // Execute statement
        if ($stmt->execute()) {
            echo "User registered successfully.";
            header("Location: ../view/homePage.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();

    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close connection
    $mysqli->close();
} else {
    // Redirect to registration form
    header("Location: ../registration_form.php");
    exit;
}
?>
