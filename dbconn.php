<?php

$servername = "localhost";
$username = "root";
$password = "root2026";
$database = "abeni";
$port = 3306;
$conn = new mysqli($servername, $username, $password, $database, $port);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}/*else
echo "Database connected successfully"; */

