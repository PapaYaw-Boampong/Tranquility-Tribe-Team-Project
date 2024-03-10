<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registerCSS.css">
    <title>Account  Registration</title>
</head>

<body>

    <div class="container">
        <div class="image">
            <img src="../assets/team photos/Team Logo 2.png" alt="Tranquility Tribe Logo">
        </div>
        <div class="form">
            <h2>Join Tranquility Tribe!</h2>
            <form action="#" method="post" id="registerForm">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" required>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="country">Country</label>
                <input type="text" id="country" name="country" required>

                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <br>
                <br> 
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
                <br> 
                <br>
                <label for="occupation">Occupation</label>
                <input type="text" id="occupation" name="occupation" required>

                <label for="interests">Interests</label>
                <input type="text" id="interests" name="interests" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>

                <input type="submit" value="Sign Up">
            </form>
        </div>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form field values
            var fullname = document.getElementById("fullname").value;
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var country = document.getElementById("country").value;
            var gender = document.getElementById("gender").value;
            var dob = document.getElementById("dob").value;
            var occupation = document.getElementById("occupation").value;
            var interests = document.getElementById("interests").value;

            // Perform any additional validation if necessary

            // If everything is valid, you can proceed with form submission
            this.submit();
        });
    </script>

</body>

</html>
