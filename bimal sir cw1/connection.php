<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'shop';
$connection = new mysqli($servername, $username, $password, $db_name);

if ($connection->connect_error) {
    die("Connection Failed: " . $connection->connect_error);
}

echo "";
?>