<?php
include "../settings/core.php";
$result = checkLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
</head>
<body>
    <?php
        // Retrieve the message parameter from the URL
        $message = isset($_GET['msg']) ? $_GET['msg'] : 'profile';
    ?>
    <header>
        <div class="nav-bar">
            <div class="nav-bar-title">
                Hello <?php echo $_SESSION["username"]; ?>
            </div>
            <nav>
                <ul>
                    <li class="<?php echo ($message === 'myWellness' || $message === '') ? 'active' : ''; ?>"><a href="personalizedPlanView.php">My Wellness</a></li>
                    <li class="<?php echo ($message === 'relaxationExercise' || $message === '') ? 'active' : ''; ?>"><a href="exercisesPageView.php?msg=relaxationExercise">Relaxation and Meditation Hub</a></li>
                    <li class="<?php echo ($message === 'wellnessTips' || $message === '') ? 'active' : ''; ?>"><a href="wellness.php?msg=wellnessTips"> Wellness Tips</a></li>
                    <li class="<?php echo ($message === 'profile' || $message === '') ? 'active' : ''; ?>"><a href="profile.php?msg=profile">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="image">
                <!-- Your profile image here -->
                <img src="../assets/team_photos/Team Logo 2.png" alt="Profile Image">
            </div>
            <div class="profile-content">
                <h2>User Profile</h2>
                <p><strong>Username:</strong> <span id="username"></span></p>
                <p><strong>Email:</strong> <span id="email"></span></p>
                <p><strong>First Name:</strong> <span id="fname"></span></p>
                <p><strong>Last Name:</strong> <span id="lname"></span></p>
                <p><strong>Country:</strong> <span id="country"></span></p>
                <p><strong>Gender:</strong> <span id="gender"></span></p>
                <p><strong>Date of Birth:</strong> <span id="dob"></span></p>
                <p><strong>Occupation:</strong> <span id="occupation"></span></p>
                <p><strong>Interest:</strong> <span id="interests"></span></p>
                <div class="actions">
                    <div class="logout">
                        <button class="logout-btn">Logout</button>
                    </div>
                    <div class="update">
                        <button class="update-btn">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/profile.js"></script>
</body>
</html>
