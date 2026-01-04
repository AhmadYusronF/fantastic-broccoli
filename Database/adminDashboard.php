<?php
session_start();
if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
    header("Location: ../index.php");
    exit();
}

require_once("connect.php");
require_once("util.php");


$UID = $_SESSION['UID'];
$query = "SELECT * FROM pesanan ORDER BY id DESC";
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
    <link rel="stylesheet" href="../css/adminDashboard.css">
</head>

<body>


    <div class="container">
        <h1>List Pesanan</h1>
        <p class="description">
            Berikut adalah daftar pesanan layanan Anda. Pastikan untuk memantau status pesanan secara berkala untuk informasi terbaru mengenai progres pengerjaan kami.
        </p>
        <form action="UpdateMultipleHandler.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lenkap</th>
                        <th>No Hp</th>
                        <th>Jasa</th>
                        <th>Pesan</th>
                        <th>Status</th>
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
                                <td><?php echo $row['nama_lengkap']; ?></td>
                                <td><?php echo $row['noHP']; ?></td>
                                <td><?php echo $row['jasa']; ?></td>
                                <td><?php echo $row['pesan']; ?></td>
                                <td>
                                    <select name="status[<?php echo $row['id']; ?>]">
                                        <option value="pending" <?php if ($row['status'] == 'pending') {
                                                                    echo 'selected';
                                                                } else {
                                                                    echo '';
                                                                }
                                                                ?>>Pending</option>
                                        <option value="proses" <?php if ($row['status'] == 'proses') {
                                                                    echo 'selected';
                                                                } else {
                                                                    echo '';
                                                                }
                                                                ?>>Proses</option>
                                        <option value="selesai" <?php if ($row['status'] == 'selesai') {
                                                                    echo 'selected';
                                                                } else {
                                                                    echo '';
                                                                }
                                                                ?>>Selesai</option>
                                    </select>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='6'>Belum ada pesanan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
    </div>
    <div class="navContainer">
        <a href="LogOutHandler.php" class="btn-keluar">Keluar</a>
        <input name="bulk_update" type="submit" value="Konfirm">
    </div>
    </form>
    <center>
        <div class="footer" style="margin-top: 115px; padding-bottom: 20px;">
            &copy; 2025 Kelompok 4. All Rights Reserved.
        </div>
    </center>
</body>

</html>