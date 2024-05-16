<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "school_management_system";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>