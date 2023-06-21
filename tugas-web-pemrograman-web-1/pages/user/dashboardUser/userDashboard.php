<?php
session_start();
require '../../../database/koneksi.php';
$username = $_SESSION['username'];
$password = $_SESSION['password'];
// menampilkan data ke dashboard dari database
$query1 = "SELECT * FROM tbl_user 
WHERE username = '$username' AND password = '$password'";

$result1 = mysqli_query($conn, $query1);
$user = mysqli_fetch_assoc($result1);

?>
<!-- jika button ubah data di klik -->
<?php if (isset($_POST['btneditdata'])) { ?>
    <script>
        window.location.href = '../dashboardUser/formUbahDataDiri.php';
    </script>
<?php } ?>
<!-- jika button edit content di klik -->
<?php if (isset($_POST['btnartikel'])) { ?>
    <script>
        window.location.href = '../dashboardUser/formEditContent.php';
    </script>
<?php } ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/userDashboardd.css">
</head>

<body>
    <div class="container">

        <section class="item data-profil">
            <div class="foto-profil">

                <div class="form-ubah-foto" action="" method="post">
                    <img width="250px" height="300px" src="../../../upload/fotoProfil/<?php echo $user['fotoprofil'] ?>"
                        alt="">
                    <h4>Ubah Foto Profil</h4>
                    <form class="btnedit" method="post" enctype="multipart/form-data">
                        <input type="file" name="inputfoto">
                        <button type="submit" name="ubahfoto">Terapkan</button>
                    </form>
                </div>

                <div class="data-diri">
                    <form class="form-data-diri" action="" method="post">
                        <h2 class="namauser">
                            <?php echo $user['nama']; ?>
                        </h2>
                        <h3 class="profesiuser">
                            <?php echo $user['status']; ?>
                        </h3>
                        <p class="deskripsiprofesi">
                            <?php echo $user['deskripsi']; ?>
                        </p>
                        <button type="submit" name="btneditdata">Edit Data Diri</button>

                    </form>

                </div>
            </div>
        </section>
        <section class="item content-blog">
            <h2>Blog Pribadi</h2>
            <div class="content">
                <div class="content1" contenteditable="false">
                    <h3>
                        <?php echo $user['judul1']; ?>
                    </h3>
                    <p>
                        <?php echo $user['contentsatu']; ?>
                    </p>

                </div>
                <div class="content2" contenteditable="false">
                    <h3>
                        <?php echo $user['judul2']; ?>
                    </h3>
                    <p>
                        <?php echo $user['contentdua']; ?>
                    </p>
                    <form action="" method="post">
                        <button name="btnartikel" class="btnartikel" type="submit">Edit Content</button>
                    </form>
                </div>

            </div>

        </section>
        <section class="item gallery-foto">
            <h2>Gallery</h2>

            <!-- kotak image -->
            <div class="kotak3">
                <div class="image">
                    <img src="" alt=""><br>
                    <a href="">ubah</a>
                </div>
                <div class="image">
                    <img src="" alt=""><br>
                    <a href="">ubah</a>
                </div>
                <div class="image">
                    <img src="" alt=""><br>
                    <a href="">ubah</a>
                </div>
                <div class="image">
                    <img src="" alt=""><br>
                    <a href="">ubah</a>
                </div>
            </div>

        </section>
        <section class="contactus">


            <form class="formcontactus" action="" method="post">
                <h1>Contact Us</h1>
                <label for="nama">Nama</label><br>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama anda"><br>
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email" placeholder="Masukkan email anda"><br>
                <label for="pesan">Pesan</label><br>
                <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="Kirim pesan anda"></textarea><br>
                <button class="btnpesan" type="menu" name="btnkirimpesan">Kirim Pesan</button><br>

            </form>
        </section>
    </div>


    <!-- JS -->
    <!-- <script src="../dashboardUser/js/validasipesan.js"></script> -->

    <!-- ========================================================== -->
    <!-- UPLOAD FILE KE DIRECTORY -->
    <!--  jika button ubah foto di klik untuk upload file -->
    <?php if (isset($_POST['ubahfoto'])) { ?>
        <?php
        echo "<br>";
        // untuk melihat nama gambarnya
        $namaGambar = $_FILES['inputfoto']['name'];
        // bisa digunakan untuk cek error atau tidak
        $error = $_FILES['inputfoto']['error'];
        // tempat menyimpanan gambar
        $tempName = $_FILES['inputfoto']['tmp_name'];
        // size gambar
        $sizeGambar = $_FILES['inputfoto']['size'];
        ?>
        <?php
        $extensiGambarValid = [
            'jpg',
            'jpeg',
            'png'
        ];
        $extensiGambar = explode('.', $namaGambar);
        // memaksa inputan extensi menjadi huruf kecil
        $extensiGambar = strtolower(end($extensiGambar));
        ?>
        <!-- cek jika gambar belum di pilih -->
        <?php if ($error === 4) { ?>
            <script>
                alert('gambar belum di pilih');
            </script>
            <!-- cek apakah extensi file ada didalam array -->
        <?php } else if (!in_array($extensiGambar, $extensiGambarValid)) { ?>
                <script>
                    alert('File yang upload bukan gambar');
                </script>
                <!-- cek apakah ukuran gambar lebih dari 2mb -->
        <?php } else if ($sizeGambar > 2000_000) { ?>
                    <script>
                        alert('file gambar terlalu besar');
                    </script>
        <?php } else { ?>
                    <!-- upload file di directory -->
                <?php
                move_uploaded_file($tempName, '../../../upload/fotoProfil/' . $namaGambar);
                $query = "UPDATE `tbl_user` SET `fotoprofil` = '$namaGambar' WHERE `tbl_user`.`username` = '$username'";
                $result = mysqli_query($conn, $query);
                ?>
                    <script>
                        alert('Gambar Berhasil di upload');
                    </script>
        <?php } ?>
    <?php } ?>
    <!-- ========================================================== -->





    <!-- ============================================================ -->
    <!-- KIRIM PESAN KE ADMIN -->
    <?php if (isset($_POST['btnkirimpesan'])) { ?>
        <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];
        ?>
        <?php if (empty($nama) && empty($email) || empty($pesan)) { ?>
            <script type="module">
                import { dataKosong } from "../dashboardUser/js/validasiPesan.js";
                dataKosong();
            </script>
        <?php } else { ?>
            <?php
            $query = "INSERT INTO `tbl_pesanuser` 
            (`idpesan`, `nama`, `email`, `pesan`) VALUES
            (NULL, '$nama', '$email', '$pesan')";
            $result = mysqli_query($conn, $query);
            ?>
            <?php if (mysqli_affected_rows($conn) < 0) { ?>

            <?php } else { ?>
                <script type="module">
                    import { pesanSucces } from "../dashboardUser/js/validasiPesan.js";
                    pesanSucces();
                </script>
            <?php } ?>

        <?php } ?>
    <?php } ?>
    <!-- ============================================================ -->


</body>

</html>