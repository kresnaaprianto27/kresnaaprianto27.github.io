<?php
require '../../../database/koneksi.php'; 
    session_start();
    $_SESSION['iduser'] = $_GET['id'];
    $idUser = $_SESSION['iduser'];

    $query = "SELECT * FROM tbl_user WHERE iduser = $idUser";
    $result = mysqli_query($conn,$query);
    $dataUser = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data user</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../dashboardAdmin/style/formDetailUserss.css">
</head>

<body>
    <h2>Edit Data User | Admin</h2>
    <div class="container">
        <div class="itm datauser">
            <?php //var_dump($dataUser); ?>
            <form method="post">
                <h3>Data Diri User</h3><br>
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" id="nama" value="<?php echo $dataUser['nama']; ?>"><br>
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email" value="<?php echo $dataUser['email']; ?>"><br>
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" value="<?php echo $dataUser['username']; ?>"><br>
                <label for="password">Password</label><br>
                <input type="text" name="password" id="password" value="<?php echo $dataUser['password']; ?>"><br>
                <label for="repassword">Re-Password</label><br>
                <input type="text" name="repassword" id="repassword" value="<?php echo $dataUser['repassword']; ?>"><br>
                <button type="submit" name="ubahdata">Ubah Data</button>
            </form>
        </div>
        <div class="itm contentuser">
            <h3>Content User</h3>
            <label for="judul1">Judul1</label><br>
            <input type="text" name="judul1" value="<?php echo $dataUser['judul1']; ?>"><br>

            <label for="artikel1">Artikel 1</label><br>
            <textarea name="artikel1" id="artikel1" cols="30" rows="10"><?php echo $dataUser['contentsatu']; ?></textarea><br>

            <label for="judul2">Judul2</label><br>
            <input type="text" name="judul2" value="<?php echo $dataUser['judul2']; ?>"><br>

            <label for="artikel2">Artikel 2</label><br>
            <textarea name="artikel2" id="artikel2" cols="30" rows="10"><?php echo $dataUser['contentdua']; ?></textarea><br>
            <button type="submit" name="ubahdata">Ubah Content</button>
        </div>
    </div>
    <div class="galleryuser"></div>


</body>

</html>