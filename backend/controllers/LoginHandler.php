<?php
require_once("../config/connect.php");
require_once("util.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['UID'];

    $Check = "SELECT PASSWORD FROM ACCOUNT WHERE EMAIL='$email'";
    $storedPassword = ReturnSingleValue($conn,$Check);

    if ($storedPassword == null) {
        echo "Email atau Password salah!";
    } else{
        if ($storedPassword == $password) {
            echo "login berhasil";
            
        }
    }
}
