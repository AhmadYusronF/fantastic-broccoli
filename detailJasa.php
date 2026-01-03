<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Four Project</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="headerContainer">
    <div class="logoContainer">
      <img src="images/logo.jpg" class="logo" />
    </div>

    <div class="wrapper-header">
      <div>
        <h2 class="name">The Four Project</h2>
      </div>

      <div class="navContainer">
        <div>
          <a href="index.php" class="nav">Beranda</a>
          <a href="Jasa.php" class="nav">Jasa</a>
          <a href="portofolio.php" class="nav">Portofolio</a>
          <a href="alurPemesanan.php" class="nav">Alur Pemesanan</a>
          <a href="detailJasa.php" class="active">Detail Jasa</a>
          <a href="tentangKami.php" class="nav">Tentang Kami</a>
          <a href="faq.php" class="nav">FAQ</a>
          <a href="kontak.php" class="nav">Pesan</a>
        </div>

        <div>
          <?php
          if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
            echo '<a href="login.html" class="nav masuk">Masuk</a>';
          } else {
            echo '<a href="Database/pesananSaya.php" class="nav">Pesanan Saya</a>
          <a href="Database/account.php" class="nav">Account</a>';
          }
          ?>


        </div>
      </div>
    </div>

  </div>
  </div>

  <center>
    <img src="images/plan.jpg" width="700px" />
    <h1>
      <font color="red" face="monospace">[Perbandingan Harga Paket]</font>
    </h1>

    <table border="3">
      <tr bgcolor="pink">
        <td rowspan="2">No</td>
        <td rowspan="2">
          <center>Nama Layanan</center>
        </td>
        <td colspan="2">
          <center>Pilihan Paket</center>
        </td>
      </tr>
      <tr bgcolor="pink">
        <td>Paket Startup</td>
        <td>Paket Bisnis</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Desain Grafis</td>
        <td>
          <center>Rp 500.000</center>
        </td>
        <td>
          <center>Rp 1.500.000</center>
        </td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Pembuatan Website</td>
        <td>
          <center>Rp 2.000.000</center>
        </td>
        <td>
          <center>Rp 5.000.000</center>
        </td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Pemasaran Digital</td>
        <td>
          <center>Rp 1.000.000</center>
        </td>
        <td>
          <center>Rp 3.000.000</center>
        </td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Penerjemahan dan Penulisan</td>
        <td>
          <center>Rp 50.000/halaman</center>
        </td>
        <td>
          <center>Rp 150.000/halaman</center>
        </td>
      </tr>
    </table>
    <font face="monospace" size="5">
      <p>|</p>
    </font>

    <iframe
      src="iframeh.html"
      width="1080px"
      height="500px"
      frameborder="0"></iframe>

    <div class="footer" style="margin-top: 115px">
      &copy; 2025 Kelompok 4. All Rights Reserved.
    </div>
  </center>
</body>

</html>