<?php
session_start();
if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
    header("Location: ../index.php");
    exit();
}
?>
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
    session_unset();
    if (session_destroy()) {
        Indikator("SUCCESS", "Sampai jumpa lagi! Kamu sudah berhasil keluar", "../index.php");
    }
    ?>
</body>

</html>