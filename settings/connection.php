<?php

$servername = "18.133.105.236";
$database = "TT2025";
$username = "root";
$password = "cs341webtech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Server DB connection

// $servername = "3.8.171.188";
// $database = "TT2025";
// $username = "ubuntu";
// $password = ""; 


// $conn = mysqli_connect($servername, $username, $password, $database);

// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }


