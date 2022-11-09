
<?php

require_once 'server.php';
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = $baseescollida;

        $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($consultaInput);
}
