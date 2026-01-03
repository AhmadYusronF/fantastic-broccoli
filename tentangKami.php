<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tugas 3 Jasa Kelompok Genapp</title>
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
          <a href="tentangKami.php" class="active">Tentang Kami</a>
          <a href="faq.php" class="nav">FAQ</a>
          <a href="kontak.php" class="nav">Pesan</a>
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

  <center>
    <img src="images/group.jpg" width="920" alt="" />
    <h1>
      <font color="Blue" face="monospace">[Tentang Kami]</font>
    </h1>

    <p>
      <font size="5" face="monospace">Kami adalah sekelompok mahasiswa yang memiliki semangat tinggi untuk
        berkarya, belajar, dan memberikan dampak nyata melalui kreativitas
        serta keahlian yang kami miliki. Berawal dari latar belakang jurusan
        dan minat yang beragam, kami dipertemukan oleh satu tujuan yang sama:
        keinginan kuat untuk terus berkembang dan membantu orang lain
        mewujudkan ide mereka menjadi sesuatu yang nyata dan berdampak. Dunia
        digital saat ini membuka peluang yang sangat luas, dan kami bertekad
        ingin menjadi bagian dari perubahan positif tersebut melalui karya dan
        inovasi yang kami ciptakan dengan sepenuh hati. Kami sangat meyakini
        bahwa setiap langkah kecil yang kami ambil hari ini, penuh dedikasi
        dan ketulusan, akan menjadi fondasi penting untuk masa depan yang
        lebih baik dan lebih bermakna bagi semua pihak yang bekerja sama
        dengan kami.</font>
    </p>
    <p>
      <font size="5" face="monospace">Melalui berbagai proyek yang telah dan sedang kami jalani, kami
        belajar bahwa setiap tantangan adalah kesempatan berharga untuk tumbuh
        dan memperluas wawasan. Kami percaya, meskipun masih dalam tahap
        belajar yang berkelanjutan, kami mampu menghasilkan karya yang
        berkualitas tinggi dengan mengedepankan semangat profesionalisme,
        kerja sama tim yang solid, dan rasa tanggung jawab yang tinggi. Setiap
        anggota tim memiliki peran penting sesuai keahlian intinya — mulai
        dari desain grafis yang menarik, pembuatan website yang fungsional,
        pemasaran digital yang efektif, hingga penulisan konten dan
        penerjemahan yang akurat. Kami secara aktif saling melengkapi, berbagi
        ilmu, dan saling memberi motivasi agar setiap hasil kerja mencerminkan
        dedikasi dan standar kualitas terbaik kami. Kami juga sangat memahami
        bahwa komunikasi yang transparan dan komitmen penuh adalah kunci
        sukses dalam setiap proyek yang kami jalankan.</font>
    </p>
    <p>
      <font size="5" face="monospace">Bagi kami, setiap proyek bukan hanya sekadar tugas yang harus
        diselesaikan, tetapi juga wadah berharga untuk secara mendalam
        memahami kebutuhan klien, mengasah keterampilan teknis, dan
        menciptakan solusi yang benar-benar bermanfaat. Dengan dukungan dan
        bimbingan dari dosen pembimbing kami yang berpengalaman, ditambah
        dengan pengalaman dari berbagai organisasi kemahasiswaan, serta
        eksplorasi mandiri terhadap teknologi terbaru, kami terus
        mengembangkan kemampuan agar siap bersaing di dunia profesional yang
        dinamis. Kami tidak sabar untuk membantu Anda mewujudkan ide dan
        mencapai tujuan bisnis Anda melalui berbagai layanan kreatif yang kami
        tawarkan. Bagi kami, setiap kolaborasi adalah peluang unik untuk
        belajar, tumbuh bersama, dan memberikan kontribusi nyata. Yuk, kenali
        lebih dekat tim kami dan lihat bagaimana kami dapat membantu Anda
        melalui pendekatan yang kreatif, segar, dan penuh semangat! Kami siap
        menjadi mitra digital Anda.
      </font>
    </p>
    <font face="monospace" size="5">
      <p>|</p>
    </font>
    <h1>
      <font face="monospace" color="red">- Nama Anggota -</font>
    </h1>
    <img
      src="images/475960989_592905203551160_923469340684384476_n.jpg"
      alt=""
      srcset="" />

    <h2>
      <font face="monospace" size="5">Ahmad Yusron Fadil - 241004410050</font>
    </h2>
    <img
      src="images/500514620_18138339136404292_3788944429231986825_n.jpg"
      alt="" />
    <h2>
      <font face="monospace" size="5">Muhamad Fajar - 24104410086</font>
    </h2>
    <img
      src="images/475818363_537369185988211_8356088320910025736_n.jpg"
      alt="" />
    <h2>
      <font face="monospace" size="5">Kahanaya Sabrieztha - 24104410077</font>
    </h2>
    <img src="images/Untitled.png" width="150px" alt="" />
    <h2>
      <font face="monospace" size="5">Achmad Ferdinand - 24104410058</font>
    </h2>
    <font face="monospace" size="5"> </font>
    <div class="footer" style="margin-top: 20px">
      &copy; 2025 Kelompok 4. All Rights Reserved.
    </div>
  </center>
</body>

</html>