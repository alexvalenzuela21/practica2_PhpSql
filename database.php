<?php+
$servername = "localhost";
$username = "root";
$password = "";



// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//Execute command to select dbnames

$sql = "SELECT schema_name FROM information_schema.schemata;";

$databaseXampp = $conn->query($sql);