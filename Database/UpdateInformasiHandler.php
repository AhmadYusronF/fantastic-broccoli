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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $informasi = $_POST['informasi'];

        $query = "INSERT INTO pesanan_update(id_pesanan,informasi,judul_update) VALUES ('$id','$informasi','$judul')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            Indikator("SUCCESS", "Update berhasil dikirim!", "detailPesanan.php?id=$id");
        } else {
            Indikator("ERROR", "Update gagal dikirim", "detailPesanan.php?id=$id");
        }
    }
    ?>
</body>

</html>