


<?php
include "connection.php";

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $password2 = mysqli_real_escape_string($connection, $_POST['password2']);

    // Hash the password
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);

    $checkEmailQuery = "SELECT * FROM pets WHERE email='$email'";
    $checkEmailResult = mysqli_query($connection, $checkEmailQuery);

    $checkUsernameQuery = "SELECT * FROM pets WHERE username='$username'";
    $checkUsernameResult = mysqli_query($connection, $checkUsernameQuery);

    if(mysqli_num_rows($checkEmailResult) > 0){
        echo "<script>alert('Email already exists');</script>";
    } elseif(mysqli_num_rows($checkUsernameResult) > 0){
        echo "<script>alert('Username already exists');</script>";
    } else {

        $insertQuery = "INSERT INTO pets (username, email, password) VALUES ('$username', '$email', '$hashpassword')";

        $result = mysqli_query($connection, $insertQuery);

        if($result){
            echo "<script>alert('Registration successful!');</script>";
            header("location: index.php");
            exit; // Stop further execution
        } else {
            echo "Error: " . mysqli_error($connection);
            echo "Query: $insertQuery";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="register.css" />
</head>
<body>
    
<div class="box">
  <form id="form" class="form" name="form" action="register.php" method='POST' onsubmit="return validateForm()">
    <h1>Sign Up</h1>

    <div class="form-control"></div>
    <label for="username">Username</label>
    <input type="text" id="username" name="username"/>
    <div class="username_error" style="color:red"></div>

    <label for="email">Email</label>
    <input type="email" id="email" name="email"/>
    <div class="email_error" style="color:red"></div>

    <label for="password">Password</label>
    <input type="password" id="password" name="password"/>
    <div class="password_error" style="color:red"></div>

    <label for="password2">Confirm Password</label>
    <input type="password" id="password2" name="password2" />
    <div class="password2_error" style="color:red"></div>

    <button type="submit" name="submit">Submit</button>
    <p class="bottom2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </form>

