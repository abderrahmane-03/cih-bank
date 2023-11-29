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

// $sql = "INSERT INTO adresse (ville ,quartier, rue, codepostal,email,telephone)
// VALUES ('safi', 'boujdour',' massira', '46000', 'abdrahmanehh', '0771918979')";

// $sql = "INSERT INTO user (username ,password,adresse_id,agency_id,role_id)
//  VALUES ('abderr', 'abdo123',2,1,1)";

// $sql = "INSERT INTO compte (rib ,balance,currency,user_id)
//  VALUES (5454545656565,1000, '$',1)";

// $sql = "INSERT INTO agency (name,adresse_id,bank_id)
// VALUES ('CIHAG', 1, 1)";

// $sql = "INSERT INTO bank (nom,logo)
// VALUES ('cih', 'logo')";

// INSERT INTO role (name) VALUES ('admin'), ('client');





// if ($conn->query($sql) === TRUE) {
//     echo "success";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

$conn->close();
?>
