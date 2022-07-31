<?php 
session_start();

if( !isset($_SESSION["login_admin"])) {
    header("Location:login-admin.php");
    exit;
}

require '../functions.php';

$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM admin WHERE id = $id");
$row = mysqli_fetch_assoc($result);

$nama = $row["nama"];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- LINK CSS -->
    <link rel="stylesheet" type="text/css" href="../css/indexAdminStyle.css?<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="typing">
            <h1>
                <center>Halaman Admin</center>
            </h1>
        </div>
        <h2>Selamat Datang, <?= $nama ?></h2>

        <table border="1" cellpadding="10" cellspacing="0">

            <tr id="header">
                <td colspan="2" align="center">Aksi</td>
            </tr>
            <tr>
                <td><a href="index-user-data.php">
                        <center>Data Login User</center>
                    </a></td>
                <td><a href="index-booking-data.php">
                        <center>Data Booking User</center>
                    </a></td>
            </tr>
        </table>
        <br><br>

        <a href="logout-admin.php" class="btn">Logout</a>
        <br><br>


    </div>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>

    </ul>
</body>

</html>