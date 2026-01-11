<?php
session_start();
if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
  header("Location: ../index.php");
  exit();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Four Project</title>
  <link rel="stylesheet" href="../css/global.css" />
  <link rel="stylesheet" href="../css/detailPesanan.css" />
  <style>

  </style>
</head>

<body>
  <?php
  require_once('connect.php');

  $email = $_SESSION['EMAIL'];
  $id = $_GET['id'];
  $query = "SELECT * FROM pesanan WHERE id='$id'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="wrapper">
    <div class="container">
      <div class="header">
        <h1>Detail Pesanan</h1>
        <a href="<?php if ($email == "kelompok4@admin.com") {
                    echo "adminDashboard.php";
                  } else {
                    echo "pesananSaya.php";
                  } ?>">← Kembali</a>
      </div>

      <div class="main">
        <div class="pesanan-info">
          <div class="header-pesanan">
            <div class="informasi-pemesan">
              <h2>INFORMASI PELANGGAN</h2>
              <p><?php echo $row["nama_lengkap"] ?></p>
            </div>

            <?php if ($email == "kelompok4@admin.com") { ?>
              <form action="UpdateStatusHandler.php" method="POST" class="status-form">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <select name="status" class="status-select">
                  <option value="pending" <?php if ($row['status'] == 'pending') {
                                            echo 'selected';
                                          } ?>>Pending</option>
                  <option value="Sedang Diproses" <?php if ($row['status'] == 'Sedang Diproses') {
                                                    echo 'selected';
                                                  } ?>>Sedang Diproses</option>
                  <option value="Selesai" <?php if ($row['status'] == 'Selesai') {
                                            echo 'selected';
                                          } ?>>Selesai</option>
                </select>
                <button type="submit" class="btn-save">Simpan</button>
              </form>
            <?php } else { ?>
              <?php if ($row['status'] == 'pending') { ?>
                <span class="pending"><?php echo strtoupper($row['status']); ?></span>
              <?php } elseif ($row['status'] == 'Sedang Diproses') { ?>
                <span class="diproses"><?php echo strtoupper($row['status']); ?></span>
              <?php } else { ?>
                <span class="selesai"><?php echo strtoupper($row['status']); ?></span>
              <?php } ?>
            <?php } ?>
          </div>

          <div class="informasi-pesanan">
            <div>
              <label>No. HP</label>
              <p><?php echo $row["noHP"] ?>9</p>
            </div>
            <div>
              <label>Tanggal Pesanan</label>
              <p><?php echo $row["tanggal"] ?>6</p>
            </div>
            <div class="jasa">
              <label>Jasa</label>
              <p><?php echo $row["jasa"] ?></p>
            </div>
          </div>

          <div class="pesanan-pesan">
            <label>Pesan :</label>
            <div class="pesan">
              <p><?php echo $row["pesan"] ?>.</p>
            </div>
          </div>
        </div>

        <div class="pesanan-update">
          <div class="update-header">
            <h2>Informasi Terkini</h2>
            <?php
            if ($email == "kelompok4@admin.com") {
              echo ' <a href="updateInformasi.php?id=' . $id . '">Update</a>';
            } else "";
            ?>

          </div>


          <div class="update-wrapper">

            <?php
            $queryUpdate = "SELECT * FROM pesanan_update where id_pesanan ='$id' ORDER BY id_update DESC";
            $resultUpdate = mysqli_query($conn, $queryUpdate);

            if ($resultUpdate->num_rows > 0) {
              $isLatest = true;
              while ($rowUpdate = $resultUpdate->fetch_assoc()) {
                if ($isLatest) {
                  $indikatorClass = "indikator";
                } else {
                  $indikatorClass = "indikator past";
                };
            ?>
                <div class="update">
                  <div class="timeline-wrapper">
                    <div class="<?php echo $indikatorClass; ?>"></div>
                    <div class="line"></div>
                  </div>

                  <div class="informasi">
                    <p class="judul-update"><?php echo $rowUpdate['judul_update']; ?></p>
                    <p class="tanggal-update"><?php echo $rowUpdate['tanggal_update']; ?></p>
                    <p class="informasi-update">
                      <?php echo $rowUpdate['informasi']; ?>
                    </p>
                  </div>
                </div>
            <?php
                $isLatest = false;
              }
            } else {
              echo "<p>Belum ada update terbaru.</p>";
            } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>