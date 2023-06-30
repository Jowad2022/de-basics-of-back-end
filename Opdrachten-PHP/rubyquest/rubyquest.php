<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$myDB = "Rubyqeast";
// Create connection
$conn = new mysqli("mysql:host=@servername;dbname=$myDB",$servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>