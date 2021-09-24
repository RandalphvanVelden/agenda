<?php
$servername = "localhost";
$username = "Randalph";
$password = "MijnDatabase";
$dbname = "Agenda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone INT(10), 
role Varchar(30) NOT NULL,
password VARCHAR(30) NOT NULL,

reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Users created successfully <br>";
} else {
  echo "Error creating table: " . $conn->error . "<br>";
}

$sql = "CREATE TABLE Roster (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    day VARCHAR(30) NOT NULL,
    starttime time NOT NULL,
    endtime time NOT NULL,
    location VARCHAR(10) NOT NULL, 
    startdate date NOT NULL,
    enddate date NOT NULL,
    userID int(6) UNSIGNED, 
    FOREIGN KEY (userID) REFERENCES Users(id),
    
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table Roster created successfully <br>";
    } else {
      echo "Error creating table: " . $conn->error . "<br>";
    }



$conn->close();
?>