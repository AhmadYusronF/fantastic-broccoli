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

    if (isset($_SESSION['EMAIL']) && $_SESSION['EMAIL'] != "kelompok4@admin.com") {
        header("Location: ../index.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $status = $_POST['status'];

        $query = "UPDATE pesanan SET status = '$status' WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            Indikator("SUCCESS", "Status berhasil diperbaruhi!", "detailPesanan.php?id=$id");
        } else {
            Indikator("ERROR", "Status gagal diperbaruhi", "detailPesanan.php?id=$id");
        }
    }
    ?>
</body>

</html>