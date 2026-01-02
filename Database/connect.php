<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "THEFOURPROJECTDB";

$conn = mysqli_connect($servername, $username, $password, $dbName);
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}
