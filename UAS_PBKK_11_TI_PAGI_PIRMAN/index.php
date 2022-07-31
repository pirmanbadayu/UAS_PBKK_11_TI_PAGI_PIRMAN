<?php 
session_start();

if( !isset($_SESSION["login_user"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

$id = $_SESSION["id"];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Home</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/styleIndex.css?<?php echo time(); ?>">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="" class="logo">
            <ul>
                <li><a href="logout.php" onClick="return confirm('yakin ingin Keluar?')">Logout</a></li>
                <li><a href="schedule.php">Jadwal</a></li>
                <li><a href="booking.php" class="btn">Booking</a></li>
                <li><a href="contact.php">Hubungi kami</a></li>
                <li><a href="ubah-user.php">Edit Akun</a></li>
            </ul>
        </div>

        <div class="content">
            <h1><b>SELAMAT DATANG <br> DI SKATE PARK PONTIANAK</b></h1>
            <p>Menjunjung Tinggi Sportivitas Olahraga Indonesia.</p>
        </div>

    </div>

</body>

</html>>