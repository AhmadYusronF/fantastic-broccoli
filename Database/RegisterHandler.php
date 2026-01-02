<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Four Project</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/indikator.css">
</head>

<body>
    <?php
    require_once("connect.php");
    require_once("util.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $konfirmasiPassword = $_POST["konfirmasiPassword"];

        $emailCheck = "SELECT EMAIL FROM ACCOUNT WHERE EMAIL='$email'";
        if (ReturnSingleValue($conn, $emailCheck) == !null) {
            Indikator("ERROR", "Email sudah dipakai!", "../register.html");
        } else {
            if ($password != $konfirmasiPassword) {
                Indikator("ERROR", "Pastikan kedua password sama!", "../register.html");
            } else {
                $insert = "INSERT INTO ACCOUNT(EMAIL,PASSWORD) VALUES('$email','$password')";
                if (mysqli_query($conn, $insert)) {
                    Indikator("SUCCESS", "Akun berhasil dibuat!", "../index.html");
                } else {
                    Indikator("ERROR", "Akun gagal dibuat!", "../register.html");
                }
            }
        }
    } ?>
</body>