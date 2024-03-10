<?php


//THIS IS WHAT I USED TO CHECK IF STUFF WAS WORKING
$servername = "localhost";
$database = "TT2025";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    
}


// Server DB connection

// $servername = "3.8.171.188";
// $database = "TT2025";
// $username = "ubuntu";
// $password = ""; 


// $con = mysqli_connect($servername, $username, $password, $database);

// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }


