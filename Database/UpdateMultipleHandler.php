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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['bulk_update'])) {
            $statuses = $_POST['status'];
            $all_success = true;

            foreach ($statuses as $id => $new_status) {
                $query = "UPDATE pesanan SET status = '$new_status' WHERE id = '$id'";
                $result =  mysqli_query($conn, $query);
                if (!$result) {
                    $all_success = false;
                }
            }
            if ($all_success) {
                Indikator("SUCCESS", "Status pesanan berhasil diperbaruhi", "adminDashboard.php");
            } else {
                Indikator("ERROR", "Status pesanan gagal diperbaruhi", "adminDashboard.php");
            }
        }
    }
    ?>
</body>