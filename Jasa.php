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
          <a href="Jasa.php" class="active">Jasa</a>
          <a href="portofolio.php" class="nav">Portofolio</a>
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
    <img src="images/freelance.jpg" width="200px" alt="" />
    <h1>
      <font face="monospace" color="blue">[Jasa]</font>
    </h1>
  </center>

  <p>
    <font face="monospace" size="5">Kami hadir untuk membantu Anda mewujudkan ide dan tujuan melalui
      berbagai layanan digital yang kami kembangkan dengan semangat dan
      kreativitas.
    </font>
  </p>
  <p>
    <font face="monospace" size="5">Berikut adalah layanan-layanan yang kami tawarkan untuk membantu bisnis
      dan kebutuhan pribadi Anda:</font>
  </p>

  <ol type="A">
    <font>
      <li>
        <h2>
          <font color="red" face="monospace">Desain Grafis</font>
        </h2>
        <img src="images/design.jpg" width="300px" alt="" />
        <p>
          <font size="5" face="monospace">Jasa desain grafis kami mencakup pembuatan logo, banner, brosur,
            dan desain lainnya yang akan memperkuat identitas visual
            Anda.</font>
        </p>
      </li>
    </font>
    <li>
      <h2>
        <font color="red" face="monospace">Pembuatan Website</font>
      </h2>
      <img src="images/website.jpg" width="300px" alt="" />
      <p>
        <font size="5" face="monospace">Kami menawarkan pembuatan website dengan desain yang responsif dan
          user-friendly untuk meningkatkan kehadiran online bisnis Anda.</font>
      </p>
    </li>

    <li>
      <h2>
        <font color="red" face="monospace">Pemasaran Digital</font>
      </h2>
      <img src="images/ad.jpg" width="300px" alt="" />
      <p>
        <font size="5" face="monospace">Strategi pemasaran digital kami meliputi SEO, kampanye iklan
          online, dan manajemen media sosial untuk membantu bisnis Anda
          mencapai audiens yang lebih luas.</font>
      </p>
    </li>

    <li>
      <h2>
        <font color="red" face="monospace">Penerjemahan dan Penulisan</font>
      </h2>
      <img src="images/translate.jpg" width="300px" alt="" />
      <p>
        <font size="5" face="monospace">Jasa penerjemahan dan penulisan kami akan membantu Anda
          menyampaikan pesan secara efektif dalam berbagai bahasa dan
          format.</font>
      </p>
    </li>
  </ol>
  <center>
    <font face="monospace" size="5">
      <p>|</p>
    </font>
    <div class="footer" style="margin-top: 115px">
      &copy; 2025 Kelompok 4. All Rights Reserved.
    </div>
  </center>
</body>

</html>