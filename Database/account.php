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
    if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
        header("Location: ../index.html");
        exit();
    }

    require_once('connect.php');
    $UID = $_SESSION['UID'];
    $EMAIL = $_SESSION['EMAIL'];
    $PASSWORD = $_SESSION['PASSWORD'];
    ?>
    <style>
        body {
            padding-top: 0px;
        }
    </style>
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
                    <a href="../index.php" class="nav">Beranda</a>
                    <a href="../Jasa.php" class="nav">Jasa</a>
                    <a href="../portofolio.php" class="nav">Portofolio</a>
                    <a href="../alurPemesanan.php" class="nav">Alur Pemesanan</a>
                    <a href="../detailJasa.php" class="nav">Detail Jasa</a>
                    <a href="../tentangKami.php" class="nav">Tentang Kami</a>
                    <a href="../faq.php" class="nav">FAQ</a>
                    <a href="../kontak.php" class="nav">Pesan</a>
                </div>

                <div>
                    <a href="pesananSaya.php" class="nav">Pesanan Saya</a><a href="faq.php" class="active">Account</a>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <form action="UpdateAccountHandler.php" method="post">
                <label for="email">Email</label>
                <p><?php
                    echo $EMAIL;
                    ?></p>
                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="<?php echo $PASSWORD ?>"
                    required />
                <input type="submit" value="Simpan" />
            </form>
            <a href="LogOutHandler.php" class="btn-keluar">Keluar</a>
        </div>
    </div>
</body>

</html>