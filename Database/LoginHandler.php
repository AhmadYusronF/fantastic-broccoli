<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Four Project</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/indikator.css">
</head>

<body>
    <?php
    session_start();
    require_once("connect.php");
    require_once("util.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $Check = "SELECT * FROM ACCOUNT WHERE EMAIL='$email'";
        $result = mysqli_query($conn, $Check);
        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            Indikator("ERROR", "Email atau password salah!", "../login.html");
        } else {
            if ($row['PASSWORD'] == $password) {
                $_SESSION['UID'] = $row['ID'];
                $_SESSION['EMAIL'] = $row['EMAIL'];
                $_SESSION['PASSWORD'] = $row['PASSWORD'];
                Indikator("Login Berhasil", "Selamat datang di website kami", "../index.php");
            } else {
                Indikator("ERROR", "Email atau password salah!", "../login.html");
            }
        }
    }
    ?>
</body>

</html>