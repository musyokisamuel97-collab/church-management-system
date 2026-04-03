<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "church_management";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

?>
