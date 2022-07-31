<?php 
session_start();

if( !isset($_SESSION["login_admin"])) {
    header("Location:login-admin.php");
    exit;
}

require '../functions.php';

$user = tampilDataUser("SELECT * FROM user");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$user = cariUser($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Halaman Data Login User</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- LINK CSS -->
    <link rel="stylesheet" type="text/css" href="../css/indexUserDataStyle.css?<?php echo time(); ?>">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="typing">
            <h1>
                <center><u>Halaman Data Login User</u></center>
            </h1>
        </div>

        <a href="index-admin.php" class="btn1">Kembali</a>
        <br><br><br>


        <form action="" method="post">
            <div class="tb">
                <input type="text" name="keyword" size="37" autofocus placeholder="Masukkan keyword pencarian..."
                    autocomplete=off>
                <button type="submit" name="cari">Cari</button>
            </div>
        </form>
        <br>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>

            </tr>


            <?php $no = 1; ?>
            <?php foreach( $user as $data ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data["id"] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['username'] ?></td>
                <td><?= $data['password'] ?></td>

            </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>