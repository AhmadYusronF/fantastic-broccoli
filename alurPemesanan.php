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
          <a href="alurPemesanan.php" class="active">Alur Pemesanan</a>
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
    <h1>Alur Pemesanan Jasa</h1>
  </center>

  <div class="flow-container" style="padding: 20px">
    <div class="step">
      <h2>
        <font color="red" face="monospace">Langkah 1: Konsultasi dan Penawaran</font>
      </h2>
      <p>
        <font size="5" face="monospace">
          Hubungi kami melalui halaman
          <a href="kontak.html">Hubungi Kami</a> untuk menjelaskan kebutuhan
          proyek Anda (misalnya: Desain Logo, Pembuatan Website Bisnis,
          Kampanye Iklan). Tim kami akan merespons dengan pertanyaan detail
          untuk memahami ruang lingkup proyek. Setelah itu, kami akan
          mengirimkan proposal resmi dan invoice yang berisi rincian layanan,
          waktu pengerjaan, dan biaya.
        </font>
      </p>
    </div>

    <div class="step">
      <h2>
        <font color="red" face="monospace">Langkah 2: Pembayaran Uang Muka (DP)</font>
      </h2>
      <p>
        <font size="5" face="monospace">
          Untuk memulai pengerjaan proyek, Anda diminta melakukan pembayaran
          uang muka (DP) sebesar 50 dari total biaya yang disepakati.
          Pembayaran ini berfungsi sebagai konfirmasi pesanan Anda. Setelah
          pembayaran kami terima, tim akan segera menjadwalkan dan memulai
          proses pengerjaan.
        </font>
      </p>
    </div>

    <div class="step">
      <h2>
        <font color="red" face="monospace">Langkah 3: Proses Pengerjaan dan Ulasan (Review)</font>
      </h2>
      <p>
        <font size="5" face="monospace">
          Tim kami akan mulai mengerjakan proyek sesuai dengan detail dan
          tenggat waktu yang disepakati. Kami akan memberikan pembaruan
          berkala (progres) dan mengirimkan draf atau hasil awal untuk Anda
          tinjau dan berikan masukan (revisi). Jumlah revisi akan disesuaikan
          dengan paket layanan yang Anda ambil.
        </font>
      </p>
    </div>

    <div class="step">
      <h2>
        <font color="red" face="monospace">Langkah 4: Persetujuan dan Pelunasan</font>
      </h2>
      <p>
        <font size="5" face="monospace">
          Setelah Anda sepenuhnya puas dengan hasil akhir pekerjaan dan
          memberikan persetujuan (final approval), kami akan mengirimkan
          invoice pelunasan sisa biaya (50%). Pelunasan harus dilakukan
          sebelum penyerahan file akhir atau peluncuran proyek.
        </font>
      </p>
    </div>

    <div class="step">
      <h2>
        <font color="red" face="monospace">Langkah 5: Penyerahan Hasil Akhir</font>
      </h2>
      <p>
        <font size="5" face="monospace">
          Setelah pembayaran lunas kami terima, kami akan menyerahkan semua
          file proyek dalam format final (misalnya: file desain master, akses
          website, laporan kampanye) atau meluncurkan proyek (seperti website)
          secara daring. Proyek Anda kini resmi selesai!
        </font>
      </p>
    </div>
  </div>
  <center>
    <div class="footer" style="margin-top: 115px">
      &copy; 2025 Kelompok 4. All Rights Reserved.
    </div>
  </center>
</body>

</html>