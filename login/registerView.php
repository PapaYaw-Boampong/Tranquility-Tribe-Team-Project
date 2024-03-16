<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registerCSS.css">
    <title>Account Registration</title>
</head>

<body>

    <div class="container">
        <div class="image homepage-view">
            <img src="../assets/team_photos/Team Logo 2.png" alt="Tranquility Tribe Logo">
        </div>
        <div class="form">
            <h2>Join Tranquility Tribe!</h2>
            <form action="#" method="post" id="registerForm">

                <div class="form-content">

                    <div class="first-col">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" required>

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" required>

                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                        <div class="reg-other">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                        </div>
                        <div class="reg-other">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                    </div>

                    <div class="second-col">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" required>

                        <label for="occupation">Occupation</label>
                        <input type="text" id="occupation" name="occupation" required>

                     
                        <div class="reg-other">
                            <label for="insterests">Interests</label>
                            <select id="interests" name="interests" required>
                            </select>
                        </div>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>

                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required>

                        
                    </div>
                </div>

                <div class="register-actions">
                    <div class="to-login">
                        <a href="loginView.php" id="to-login-link">Log in?</a>
                    </div>

                    <button type="submit" > Register </button>
                </div>
                

            </form>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../js/register.js"></script>

</body>

</html>
