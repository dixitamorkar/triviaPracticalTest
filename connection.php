<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$dbName = "trivia";
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $dbName");

$conn = mysqli_connect($servername, $username, $password, $dbName);
$sql = "CREATE TABLE IF NOT EXISTS quizUsers( 
    userId INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    userName VARCHAR(25) NOT NULL ,
    answerKey1 VARCHAR(25) NOT NULL,
    answerKey2 VARCHAR(25) NOT NULL,
    totalScore INT(10) NOT NULL ,
    quizTime TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    )";

mysqli_query($conn, $sql);
?>