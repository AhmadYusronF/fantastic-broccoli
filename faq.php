<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ Website Freelance</title>
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
          <a href="faq.php" class="active">FAQ</a>
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
    <img src="images/faq.jpg" width="700px" />
  </center>
  <h1>Pertanyaan yang Sering Diajukan (FAQ) Klien</h1>
  <ul class="faq-list">
    <li>
      <div class="pertanyaan">Layanan apa saja yang dapat saya pesan ?</div>
      <div class="jawaban">
        <p>
          Kami menyediakan berbagai layanan profesional dalam 4 kategori
          utama:
        </p>
        <ul>
          <li>Desain Grafis (Logo, Materi Pemasaran, dll.)</li>
          <li>Pembuatan Website (Landing Page, E-commerce, dll.)</li>
          <li>Pemasaran Digital (SEO, Media Sosial, Iklan)</li>
          <li>Penerjemahan atau Penulisan (Copywriting, Artikel Blog)</li>
        </ul>
      </div>
    </li>

    <li>
      <div class="pertanyaan">
        Berapa kali revisi yang saya dapatkan untuk proyek Desain Grafis atau
        Penulisan?
      </div>
      <div class="jawaban">
        <p>
          Kami biasanya menawarkan sejumlah putaran revisi (misalnya, 2 hingga
          3 kali) yang sudah termasuk dalam harga awal. Namun, jumlah pasti
          revisi akan kita sepakati bersama sebelum proyek dimulai untuk
          memastikan ekspektasi yang jelas.
        </p>
      </div>
    </li>

    <li>
      <div class="pertanyaan">
        Bagaimana tim anda memastikan kerahasiaan materi atau informasi yang
        saya berikan?
      </div>
      <div class="jawaban">
        <p>
          Kerahasiaan data Anda adalah prioritas tinggi bagi kami. Kami siap
          menandatangani Perjanjian Kerahasiaan (NDA) sebelum pekerjaan
          dimulai untuk menjamin semua konten, data, dan detail proyek Anda
          tetap rahasia.
        </p>
      </div>
    </li>

    <li>
      <div class="pertanyaan">
        Bagaimana proses kerja yang tim Anda terapkan setelah saya menyetujui
        penawaran?
      </div>
      <div class="jawaban">
        <p>
          Setelah penawaran disetujui, kami akan memulai dengan sesi diskusi
          untuk detail proyek. Setelah itu, kami akan mengirimkan garis besar
          atau draf awal. Kami akan memberikan pembaruan rutin dan mengirimkan
          pekerjaan final setelah Anda menyetujui dan menyelesaikan
          pembayaran.
        </p>
      </div>
    </li>

    <li>
      <div class="pertanyaan">
        Bagaimana cara tim Anda menentukan harga untuk proyek Penulisan (per
        artikel/per kata)?
      </div>
      <div class="jawaban">
        <p>
          Kami menentukan harga berdasarkan beberapa faktor: tingkat kesulitan
          topik, panjang konten, dan waktu pengerjaan. Kami menawarkan tiga
          metode penetapan harga: harga per kata, harga per halaman, atau
          harga teta untuk seluruh proyek. Kami akan memberikan opsi terbaik
          untuk kebutuhan spesifik Anda.
        </p>
      </div>
    </li>

    <li>
      <div class="pertanyaan">
        Jika proyek Pemasaran Digital membutuhkan software berbayar, siapa
        yang menanggung biayanya?
      </div>
      <div class="jawaban">
        <p>
          Hal ini akan kami jelaskan secara transparan dalam proposal. Biaya
          langganan tool atau software bisa ditanggung oleh Klien atau sudah
          kami masukkan ke dalam total biaya jasa yang kami tawarkan,
          tergantung kesepakatan.
        </p>
      </div>
    </li>
  </ul>

  <center>
    <div class="footer" style="margin-top: 115px">
      &copy; 2025 Kelompok 4. All Rights Reserved.
    </div>
  </center>
</body>

</html>