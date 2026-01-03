<?php
session_start();
if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
    header("Location: ../index.html");
    exit();
} ?>
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
        $UID = $_SESSION['UID'];
        $namaLenkap = $_POST['nama'];
        $noHP = $_POST['nohp'];
        $jasa = $_POST['jasa'];
        $pesan = $_POST['pesan'];

        $query = "INSERT INTO pesanan(UID,nama_lengkap,noHp,jasa,pesan) VALUES('$UID','$namaLenkap','$noHP','$jasa','$pesan')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "Pesanan berhasil di tambahkan";
        } else {
            echo "Pesanan gagal di tambahkan";
        }
    }
    ?>
</body>