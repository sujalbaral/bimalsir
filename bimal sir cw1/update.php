
<?php
include "connection.php"; // Include your database connection file

// Check if the user ID is provided in the URL parameter
if(isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Fetch user data based on the provided user ID
    $sql = "SELECT * FROM pets WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Close the prepared statement
    $stmt->close();
}

// Check if the form is submitted for updating user details
if(isset($_POST['update'])) {
    $userId = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Update user details in the database
    $sql = "UPDATE pets SET username = ?, email = ? WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssi", $username, $email, $userId);
    $stmt->execute();

    // Close the prepared statement
    $stmt->close();

    // Redirect back to the view page after updating
    header("Location: view.php");
    exit();
}

// Close the database connection
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
       
</head>
<body>
    <h2>Update User Details</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
