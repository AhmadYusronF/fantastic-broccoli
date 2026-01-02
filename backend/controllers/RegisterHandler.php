<?php
require_once("../config/connect.php");
require_once("util.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $konfirmasiPassword = $_POST["konfirmasiPassword"];

    $emailCheck = "SELECT EMAIL FROM ACCOUNT WHERE EMAIL='$email'";
    if (ReturnSingleValue($conn, $emailCheck) == !null) {
        echo "Email Sudah Di pakai!";
    } else {
        if ($password != $konfirmasiPassword) {
            echo "Pastikan kedua password sama";
        } else {
            $insert = "INSERT INTO ACCOUNT(EMAIL,PASSWORD) VALUES('$email','$password')";
            if (mysqli_query($conn, $insert)) {
                echo "account berhasil dibuat";
            } else {
                echo "account gagal dibuat";
            }
        }
    }
}
