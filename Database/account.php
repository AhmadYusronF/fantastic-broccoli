<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Four Project</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/account.css" />
    <?php
    session_start();
    require_once('connect.php');
    $UID = $_SESSION['UID'];
    $query = "SELECT * FROM ACCOUNT WHERE ID=$UID";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
</head>

<body>
    <div class="headerContainer">
        <div class="logoContainer">
            <img src="../images/logo.jpg" class="logo" />
        </div>
        <div class="wrapper-header">
            <div>
                <h2 class="name">The Four Project</h2>
            </div>

            <div class="navContainer">
                <div>
                    <a href="../beranda.html" class="nav">Beranda</a>
                    <a href="../Jasa.html" class="nav">Jasa</a>
                    <a href="../portofolio.html" class="nav">Portofolio</a>
                    <a href="../alurPemesanan.html" class="nav">Alur Pemesanan</a>
                    <a href="../detailJasa.html" class="nav">Detail Jasa</a>
                    <a href="../tentangKami.html" class="nav">Tentang Kami</a>
                    <a href="../faq.html" class="nav">FAQ</a>
                    <a href="../kontak.html" class="nav">Pesan</a>
                </div>

                <div>
                    <a href="faq.html" class="nav">Pesanan Saya</a><a href="faq.html" class="active">Account</a>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <form action="Database/LoginHandler.php" method="post">
                <label for="email">Email</label>
                <p><?php
                    echo $row['EMAIL'];
                    ?></p>
                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Masukkan password"
                    required />
                <input type="submit" value="Simpan" />
            </form>
        </div>
    </div>
</body>

</html>