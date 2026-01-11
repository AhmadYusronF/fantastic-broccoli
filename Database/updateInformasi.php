<?php
session_start();
if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
    header("Location: ../index.php");
    exit();
}


if (isset($_SESSION['EMAIL']) && $_SESSION['EMAIL'] != "kelompok4@admin.com") {
    header("Location: ../index.php");
    exit();
}

require_once('connect.php');
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Four Project</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/updateInformasi.css">
    <style>

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="form-container">
            <a href="detailPesanan.php?id=<?php echo $id; ?>" class="back-link">← Kembali ke Detail Pesanan</a>

            <div class="form-header">
                <h2>Update Informasi Terkini</h2>
                <p>ID Pesanan: <?php echo $id; ?></p>
            </div>

            <form action="UpdateInformasiHandler.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-group">
                    <label for="judul">Judul Update</label>
                    <input type="text" name="judul" id="judul" placeholder="Contoh: Sedang Diproses" required>
                </div>

                <div class="form-group">
                    <label for="informasi">Informasi Detail</label>
                    <textarea name="informasi" id="informasi" rows="5" placeholder="Masukkan detail informasi terkini..." required></textarea>
                </div>

                <button type="submit" class="btn-submit">Simpan Update</button>
            </form>
        </div>
    </div>


</body>

</html>