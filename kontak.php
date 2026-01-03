<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pesan Jasa - The Four Project</title>
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
            echo '<a href="Database/pesananSaya.php" class="nav">Pesanan Saya</a>
                  <a href="Database/account.php" class="nav">Account</a>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <center>
    <div style="margin-top: 50px;">
      <img src="images/themespanda_1761633217.jpg" width="800px" />

      <?php if (isset($_SESSION['UID']) && !empty($_SESSION['UID'])): ?>
        <h1>
          <font color="red" face="monospace">[Form Pemesanan Jasa]</font>
        </h1>
        <font face="monospace" size="4">
          <form action="Database/PesanHandler.php" method="POST">
            <table width="600px" cellspacing="10">
              <tr>
                <td width="200px">Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukkan nama anda" required /></td>
              </tr>
              <tr>
                <td>No. HP / WhatsApp</td>
                <td>:</td>
                <td><input type="tel" name="nohp" placeholder="0812xxxx" required /></td>
              </tr>
              <tr>
                <td>Jasa yang Diminati</td>
                <td>:</td>
                <td>
                  <select name="jasa" required>
                    <option value="">-- Pilih Jasa --</option>
                    <option value="Desain Grafis">Desain Grafis</option>
                    <option value="Pembuatan Website">Pembuatan Website</option>
                    <option value="Pemasaran Digital">Pemasaran Digital</option>
                    <option value="Penerjemahan dan Penulisan">Penerjemahan dan Penulisan</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td valign="top">Pesan Anda</td>
                <td valign="top">:</td>
                <td><textarea name="pesan" placeholder="Detail permintaan jasa..." required></textarea></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <input type="submit" value="Kirim Pesanan" class="btn-submit" />
                  <input type="reset" value="Reset" class="btn-reset" />
                </td>
              </tr>
            </table>
          </form>
        </font>

      <?php else: ?>
        <div class="login-warning">
          <h2 style="margin-top:0;">Akses Terbatas</h2>
          <p>Maaf, Anda harus masuk (login) terlebih dahulu untuk dapat memesan jasa kami.</p>
          <a href="login.html" class="btn-login">Klik di Sini untuk Login</a>
        </div>
      <?php endif; ?>

    </div>

    <div class="footer" style="margin-top: 115px; padding-bottom: 20px;">
      &copy; 2025 Kelompok 4. All Rights Reserved.
    </div>  <div class="footer" style="margin-top: 115px; padding-bottom: 20px;">
      &copy; 2025 Kelompok 4. All Rights Reserved.
    </div>
  </center>
</body>

</html>