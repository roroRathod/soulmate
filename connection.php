<?php 
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Leave blank unless you've set a password for MySQL
$dbname = "soulmate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "Connected successfully";
}
?>