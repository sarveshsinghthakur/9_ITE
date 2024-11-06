<?php 
$host = 'localhost';    // Database host
$username = 'root';     // Database username
$password = '';         // Database password (leave empty for default XAMPP setup)
$dbname = 'test.db';   // Correct database name

// Create connection
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
