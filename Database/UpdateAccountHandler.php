<?php
session_start();
if (!isset($_SESSION['UID']) || empty($_SESSION['UID'])) {
    header("Location: ../index.php");
    exit();
}
?>
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
    require_once("connect.php");
    require_once("util.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $UID = $_SESSION['UID'];
        $PASSWORD = $_SESSION['PASSWORD'];
        $newPassword = $_POST['password'];
        if ($PASSWORD == $newPassword) {
            Indikator("ERROR", "Password sama dengan yang lama!", "account.php");
        } else {
            $query = "UPDATE ACCOUNT SET PASSWORD ='$newPassword' WHERE ID ='$UID'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $_SESSION['PASSWORD'] = $newPassword;
                Indikator("SUCCESS", "Password berhasil diperbaruhi!", "account.php");
            } else {
                Indikator("ERROR", "Password gagal diperbaruhi", "account.php");
            }
        }
    }
    ?>
</body>

</html>