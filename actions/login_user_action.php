<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


include('../settings/connection.php');
// echo "Successfully";


if (isset($_POST['loginForm'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    //&& filter_var($email, FILTER_VALIDATE_EMAIL
    if (!empty($email) && !empty($password) && !empty($username)) {
        $sql = "SELECT * FROM people WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        $row = mysqli_fetch_assoc($result);
        //echo $row['email'];
        if ($row) {
            if (password_verify(password_hash($password,PASSWORD_DEFAULT), $row['password'])) {
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                echo "Success"; // Corrected typo
                header("Location: ../view/aboutUsTest.html");
                exit(); // Added exit() after header redirect
            } else {
                header("Location: ../view/aboutUsTest.html");
                exit(); // Added exit() after header redirect
            }
        } else {
            header("Location: ../login/loginTest_view.php?msg=notfound");
            exit(); // Added exit() after header redirect
        }
        
    
    }
}


?>
