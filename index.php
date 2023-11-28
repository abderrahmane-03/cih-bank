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

// $sql= "CREATE TABLE IF NOT EXISTS role (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(10) NOT NULL
// )";

// INSERT INTO role (name) VALUES ('admin'), ('client');
// SQL to create table
// $sql = "CREATE TABLE IF NOT EXISTS transactions (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     amount INT(30) NOT NULL,
//     currency INT(6) UNSIGNED,
//     type varchar () 

//     FOREIGN KEY (compte_id) REFERENCES compte(id)
// )";


if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
