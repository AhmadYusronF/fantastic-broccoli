<?php
session_start();
if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
    header("Location: ../index.php");
    exit();
}

require_once("connect.php");
require_once("util.php");


$UID = $_SESSION['UID'];
$query = "SELECT * FROM pesanan WHERE UID = '$UID' ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya - The Four Project</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .container {
            width: 80%;
            margin: 50px auto;
            text-align: center;
            flex: 1;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        th,
        td {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="headerContainer">
        <div class="logoContainer">
            <img src="../images/logo.jpg" class="logo" />
        </div>

        <div class="wrapper-header">
            <div>
                <h2 class="name">The Four Project</h2>
            </div>

            <div class="navContainer">
                <div>
                    <a href="../index.php" class="nav">Beranda</a>
                    <a href="../Jasa.php" class="nav">Jasa</a>
                    <a href="../portofolio.php" class="nav">Portofolio</a>
                    <a href="../alurPemesanan.php" class="nav">Alur Pemesanan</a>
                    <a href="../detailJasa.php" class="nav">Detail Jasa</a>
                    <a href="../tentangKami.php" class="nav">Tentang Kami</a>
                    <a href="../faq.php" class="nav">FAQ</a>
                    <a href="../kontak.php" class="nav">Pesan</a>
                </div>

                <div>
                    <?php
                    if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
                        echo '<a href="login.html" class="nav masuk">Masuk</a>';
                    } else {
                        echo '<a href="Database/pesananSaya.php" class="active">Pesanan Saya</a>
          <a href="account.php" class="nav">Account</a>';
                    }
                    ?>


                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <h1>Pesanan Saya</h1>
        <p class="description">
            Berikut adalah daftar pesanan layanan Anda. Pastikan untuk memantau status pesanan secara berkala untuk informasi terbaru mengenai progres pengerjaan kami.
        </p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jasa</th>
                    <th>Pesan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['jasa']; ?></td>
                            <td><?php echo $row['pesan']; ?></td>
                            <td> <?php if ($row['status'] == 'pending') { ?>
                                    <span class="status pending"><?php echo strtoupper($row['status']); ?></span>
                                <?php } elseif ($row['status'] == 'Sedang Diproses') { ?>
                                    <span class="status diproses"><?php echo strtoupper($row['status']); ?></span>
                                <?php } else { ?>
                                    <span class="status selesai"><?php echo strtoupper($row['status']); ?></span>
                                <?php } ?>
                            </td>
                            <td>

                                <a href="detailPesanan.php?id=<?php echo $row['id']; ?>" class="lihatDetail">Lihat detail</a>

                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>Belum ada pesanan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <center>
        <div class="footer" style="margin-top: 115px; padding-bottom: 20px;">
            &copy; 2025 Kelompok 4. All Rights Reserved.
        </div>
    </center>
</body>

</html>