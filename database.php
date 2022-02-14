<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS posts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
brand TEXT NOT NULL,
image longblob NOT NULL,
description TEXT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$users = "CREATE TABLE IF NOT EXISTS user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password TEXT NOT NULL,
    role VARCHAR(30) NOT NULL
)";

if ($conn->query($users) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $users . "<br>" . $conn->error;
}

$contactForm = "CREATE TABLE IF NOT EXISTS contact (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name TEXT(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  subject TEXT NOT NULL,
  message TEXT NOT NULL
)";

if ($conn->query($contactForm) === TRUE) {
  echo "";
} else {
  echo "Error: " . $contactForm . "<br>" . $conn->error;
}

$conn->close();
?>