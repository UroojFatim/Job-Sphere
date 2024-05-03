<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "job_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a new database named 'your_database_name'
$database_name = "job_portal";
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $database_name";

if ($conn->query($sql_create_db) === FALSE) {
    echo "Error creating database: " . $conn->error . "<br>";
}



?>

