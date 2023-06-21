<?php
require '../../../database/koneksi.php';
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];

// menampilkan data content satu dan dua berdasarkan username dan password
$query2 = "SELECT * from tbl_user WHERE username = '$username' AND password = '$password'";
$result2 = mysqli_query($conn, $query2);
$content = mysqli_fetch_assoc($result2);



?>


<!-- cek apaka button tambah sudah di klik -->
<?php if (isset($_POST['btntambah'])) { ?>

    <!-- validasi data edit konten -->
    <?php
    $judul1 = $_POST['judul1'];
    $artikel1 = $_POST['artikel1'];
    $judul2 = $_POST['judul2'];
    $artikel2 = $_POST['artikel2'];


    ?>
    <!-- validasi jika data ada yang kosong -->
    <?php if (
        empty($judul1) ||
        empty($artikel1) ||
        empty($judul2) ||
        empty($artikel2)
    ) { ?>
        <script>
            alert('Harap isi semua data');
        </script>

        <!-- cek panjang karakter artikel 1 dan 2 -->
    <?php } else if (
        strlen($artikel1) > 5000 ||
        strlen($artikel2) > 5000
    ) { ?>
            <script>
                alert('karakter melebihi batas maksimal');
            </script>
    <?php } else { ?>
            <?php
            $query1 = "UPDATE `tbl_user` SET 
            `contentsatu` = '$artikel1', `judul1` = '$judul1',
             `judul2` = '$judul2', `contentdua` = '$artikel2' 
             WHERE username = '$username' AND password = '$password'";
            $result1 = mysqli_query($conn, $query1);
            ?>
            <script>
                window.location.href = 'userDashboard.php';
            </script>

    <?php } ?>
<?php } ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content</title>
    <link rel="stylesheet" href="style/formEditContent.css">
</head>

<body>
    <div class="container">
        <form class="form" action="" method="post">
            <h2>Tambah Artikel</h2><br>
            <label for="judul1">Judul Artikel 1</label><br>
            <input type="text" id="judul1" name="judul1" placeholder="Masukkan judul artikel 1"
                value="<?php echo $content['judul1']; ?>"><br>

            <label for="artikel1">Artikel</label><br>
            <textarea name="artikel1" id="artikel1" name="artikel1" cols="30" rows="10"
                placeholder="Masukkan artikel(max. 500 karakter)"><?php echo $content['contentsatu']; ?></textarea><br>

            <label for="judul2">Judul Artikel 2</label><br>
            <input type="text" id="judul2" name="judul2" placeholder="Masukkan judul artikel 2"
                value="<?php echo $content['judul2']; ?>"><br>

            <label for="artike2">Artikel</label><br>
            <textarea name="artikel2" id="artikel2" name="artikel2" cols="30" rows="10"
                placeholder="Masukkan artikel(max. 500 karakter)"> <?php echo $content['contentdua']; ?></textarea><br>

            <button type="submit" name="btntambah">Tambah Artikel</button><br>
        </form>
    </div>



</body>

</html>