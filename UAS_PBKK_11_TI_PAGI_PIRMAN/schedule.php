<?php 
session_start();

if( !isset($_SESSION["login_user"]) ) {
	header("Location: login.php");
	exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Schedule</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- LINK CSS -->
    <link rel="stylesheet" type="text/css" href="css/scheduleStyle.css?<?php echo time(); ?>">
</head>

<body>

    <a href="booking.php" class="btn">Kembali</a>

    <div class="filter"></div>

    <table>
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Buka</th>
            <th>Tutup</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Senin</td>
            <td>15.00</td>
            <td>23.00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Selasa</td>
            <td>15.00</td>
            <td>23.00</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Rabu</td>
            <td>15.00</td>
            <td>23.00</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Kamis</td>
            <td>15.00</td>
            <td>23.00</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Jum'at</td>
            <td>15.00</td>
            <td>23.00</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Sabtu</td>
            <td>15.00</td>
            <td>01.00</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Minggu</td>
            <td>15.00</td>
            <td>01.00</td>
        </tr>
    </table>

</body>

</html>