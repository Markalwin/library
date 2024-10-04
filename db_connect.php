<?php
// Database connection credentials
$servername = "localhost";  // The server where your database is hosted (localhost if it's on the same server)
$username = "root";         // Your database username
$password = "";             // Your database password (usually empty for XAMPP or WAMP)
$dbname = "library";  // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
