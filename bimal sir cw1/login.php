<?php 
include "connection.php";
session_start();


if(isset($_POST['submit'])){
  include "connection.php";

  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  $sql = "SELECT * FROM pets WHERE username = '$username' OR email = '$username'";
  $result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  if($row){
    if(password_verify($password, $row["password"])){
      $_SESSION['name'] = $row['username'];
      header("Location: index.php");
      exit();
    } else {
      echo '<script>alert("Invalid username or password."); window.location.href = "login.php";</script>';
    }
  } else {
    echo '<script>alert("Invalid username or password."); window.location.href = "login.php";</script>';
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
        <link rel="stylesheet" href="register.css" />
  </head>
<body>
  <div class="box">
    <form name="form" action="login.php" method="POST">
      <h1>Login</h1>
      <label>Username or Email</label>
      <input type="text" name="username" placeholder="" />
      <label>Password</label>
      <input type="password" name="password" placeholder="" />
      <p class="forgotpassword">forgot password?</p>
      <button type="submit" id="loginbutton" name='submit'>Login</button>
      <p class="bottom2">Not have an account? <a href="register.php">Sign Up Here</a></p>
    </form>
  </div>
</body>
</html>

