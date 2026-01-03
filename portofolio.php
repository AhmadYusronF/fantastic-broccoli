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
          <a href="portofolio.php" class="active">Portofolio</a>
          <a href="alurPemesanan.php" class="nav">Alur Pemesanan</a>
          <a href="detailJasa.php" class="nav">Detail Jasa</a>
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
    <h1>Portofolio Kami</h1>
    <p>
      Selamat datang di galeri karya terbaik kami. Setiap proyek di sini
      mencerminkan dedikasi kami terhadap kualitas, inovasi, dan pemahaman
      mendalam akan kebutuhan klien. Jelajahi hasil kolaborasi kami dan
      temukan inspirasi untuk proyek Anda berikutnya.
    </p>

    <div class="collection1">
      <h2>Desain Grafis</h2>
      <img src="images/LogoShowcase1.jpg" />
      <img src="images/LogoShowcase2.jpg" />
      <img src="images/LogoShowcase3.jpg" />
      <img src="images/LogoShowcase4.jpg" />
    </div>

    <div class="collection2">
      <h2>Pembuatan Website</h2>
      <img src="images/website1.png" />
      <img src="images/website2.jpg" />
      <img src="images/website3.jpg" />
      <img src="images/website4.png" />
    </div>

    <div class="collection1">
      <h2>Pemasaran Digital</h2>
      <img src="images/ad1.png" />
      <img src="images/ad2.jpg" />
    </div>

    <div class="collection2">
      <h2>Penerjemahan dan Penulisan</h2>
      <img src="images/penerjemahan1.jpg" />
    </div>

    <div class="footer">&copy; 2025 Kelompok 4. All Rights Reserved.</div>
  </center>
</body>

</html>