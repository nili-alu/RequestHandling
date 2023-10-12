<?php
include('./backend/handling.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Portal</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="login-container">
    <h1>Admin Portal</h1>
    <form action="admin_login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="Names" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="Passwords" required>
      <input type="submit" name="login" value="Login" class="btn"><br>
    </form>
    <a class="btn" href=" index.php">Back
    </a>
  </div>
</body>

</html>