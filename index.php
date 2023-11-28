<?php

$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "cihdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS adresse (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ville VARCHAR(30) NOT NULL,
    quartier VARCHAR(30) NOT NULL,
    rue VARCHAR(30) NOT NULL,
    codepostal INT(8) NOT NULL,
    email VARCHAR(30) NOT NULL,
    telephone INT(10) NOT NULL 
)";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
