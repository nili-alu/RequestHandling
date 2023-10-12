<?php
include('./backend/handling.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="registration-container">
    <h1>Registration</h1>
    <form action="register.php" method="post">
      <label for="fullname">Full Name:</label>
      <input type="text" id="Names" name="Names" required>

      <label for="Email">Email:</label>
      <input type="text" id="Email" name="Email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="Passwords" required onkeyup="checkPasswordStrength()">
      <div class="password-strength">
        <span id="password-strength-bar" style="width:auto"></span>
      </div>
      <div id="criteria-list" style="border: 1px solid #ccc;  padding: 10px; 
  width: 300px; 
  text-align: left; 
  margin: 10px; "></div>
      <input type="submit" name="submit" value="Register" class="btn" id="registration-button">

      </input><br>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
    <a class="btn" href=" index.php">Back</a>
  </div>
  <script src="passwords.js">
  </script>
</body>

</html>