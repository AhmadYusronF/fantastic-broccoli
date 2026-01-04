<?php
session_start();
if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
    header("Location: ../index.php");
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

    $id = $_GET['id'];
    $statusCheck = "SELECT status FROM PESANAN WHERE id='$id'";
    $status = ReturnSingleValue($conn, $statusCheck);

    if ($status == "pending") {

        $query = "DELETE FROM PESANAN WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            Indikator("SUCCESS", "Pesanan berhasil dihapus", "pesananSaya.php");
        } else {
            Indikator("ERROR", "Pesanan gagal dihapus", "pesananSaya.php");
        }
    } else {
        Indikator("ERROR", "Pesanan gagal dihapus karena status:" . $status, "pesananSaya.php");
    }

    ?>
</body>