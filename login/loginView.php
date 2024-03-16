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
  <div class="image homepage-view">
    <img src="../assets/team_photos/Team Logo 2.png" alt="Tranquility Tribe Logo">
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
    <div class="forgot-password">
      <a href="#">Forgot password?</a>
    </div>
    <div class="register">
      <a href="registerView.php">Join us</a>
    </div>
  </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/login.js">
</script>


</body>
</html>
