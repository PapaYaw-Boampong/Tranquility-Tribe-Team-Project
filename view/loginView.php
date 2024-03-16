<!-- Login Page:
For returning users, provide a login form where they can enter their registered email address/username and 
password to access their account.-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/loginCSS.css">
<title>Account Login</title>
</head>
<body>

<div class="container">
  <div class="image">
    <img src="../assets/team photos/Team Logo 2.png" alt="Tranquility Tribe Logo">
  </div>
  <div class="form">
    <h2> Tranquility Tribe Account Login</h2>
    <form action="#" method="post" id="loginForm">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="SIGN IN">
    </form>
    <div class="register">
      <a href="../view/registerView.php">Join us</a>
    </div>
  </div>
</div>

<script>
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    var emailInput = document.getElementById("email").value;
    var passwordInput = document.getElementById("password").value;

    var emailExpression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordExpression = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    if (!emailExpression.test(emailInput)) {
        alert("Please enter a valid email address");
        return false;
    }

    if (!passwordExpression.test(passwordInput)) {
        alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number");
        return false;
    }

    // If both email and password are valid, the user can proceed with form submission
    this.submit();
});
</script>

</body>
</html>
