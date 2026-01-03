<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tugas 3 Jasa Kelompok Genap</title>
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
          <a href="detailJasa.php" class="nav">Detail Jasa</a>
          <a href="tentangKami.php" class="nav">Tentang Kami</a>
          <a href="faq.php" class="nav">FAQ</a>
          <a href="kontak.php" class="active">Pesan</a>
        </div>

        <div>
          <?php
          if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
            echo '<a href="login.html" class="nav masuk">Masuk</a>';
          } else {
            echo '<a href="faq.php" class="nav">Pesanan Saya</a>
          <a href="Database/account.php" class="nav">Account</a>';
          }
          ?>


        </div>
      </div>
    </div>
    
    </div>
  </div>

  <center>
    <img src="images/themespanda_1761633217.jpg" width="800px" />
    <h1>
      <font color="red" face="monospace">[Form Kontak]</font>
    </h1>

    <font face="monospace" size="5">
      <form>
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" /></td>
          </tr>
          <tr>
            <td>Layanan yang Diminati</td>
            <td>:</td>
            <td>
              <select name="layanan" id="layanan">
                <option value=""></option>
                <option value="">Desain Grafis</option>
                <option value="">Pembuatan Website</option>
                <option value="">Pemasaran Digital</option>
                <option value="">Penerjemahan dan Penulisan</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Pesan Anda</td>
            <td>:</td>
            <td><textarea name="pesan" id="pesan"></textarea></td>
          </tr>
          <tr>
            <td>
              <input type="reset" value="Reset" /><br />
              <input type="submit" value="Kirim" />
            </td>
            <td></td>
          </tr>
        </table>
      </form>
    </font>
    <div class="footer" style="margin-top: 115px">
      &copy; 2025 Kelompok 4. All Rights Reserved.
    </div>
  </center>
</body>

</html>