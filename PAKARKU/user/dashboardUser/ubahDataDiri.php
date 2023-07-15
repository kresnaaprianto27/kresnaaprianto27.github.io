<?php
require '../../database/config.php';
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];

$query1 = "SELECT * FROM tbl_registeruser WHERE
username = '$username' AND password = '$password'";
$result1 = mysqli_query($koneksi, $query1);

$dataUser = mysqli_fetch_assoc($result1);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User | Sistem Pakar</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../style/ubahDataDiriStyle.css">
</head>

<body>
    <div class="container">
        <!-- <img class="image" src="../../../images/gb-loginregis.png" alt=""> -->
        <form class="formlogin" action="" method="post">
            <h2>Ubah Data Diri Anda</h2>
            <div class="inputuser">
                <!-- kotak 1 -->
                <div class="kotak1">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama"
                        value="<?php echo $dataUser['nama']; ?>"><br>

                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Masukkan email"
                        value="<?php echo $dataUser['email']; ?>"><br>

                    <label for="tempatlahir">Tempat Lahir</label><br>
                    <input type="text" id="tempatlahir" name="tempatlahir" placeholder="Masukkan tempat lahir"
                        value="<?php echo $dataUser['tempatlahir']; ?>"><br>

                    <label for="tgllahir">Tanggal Lahir</label><br>
                    <input type="date" id="tgllahir" name="tgllahir"
                        value="<?php echo $dataUser['tanggallahir']; ?>"><br>

                </div>

                <!-- kotak 2 -->
                <div class="kotak2">


                    <label for="jenis-kelamin">Jenis Kelamin</label><br>
                    <input type="radio" id="laki-laki" name="jeniskelamin" value="Laki-laki">
                    <label for="laki-laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="jeniskelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label><br>

                    <label for="agama">Agama</label><br>
                    <input type="text" id="agama" name="agama" placeholder="Masukkan agama anda"
                        value="<?php echo $dataUser['agama']; ?>"><br>

                    <label for="alamat">Alamat Lengkap</label><br>
                    <textarea name="alamat" id="alamat" cols="30"
                        rows="10"><?php echo $dataUser['alamat']; ?></textarea>
                </div>
            </div>
            <button type="submit" name="btnubahdatadiri">Ubah Data</button>

        </form>

    </div>

    <!-- ====================================================== -->
    <?php if (isset($_POST['btnubahdatadiri'])) { ?>
        <?php
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $tempatLahir = htmlspecialchars($_POST['tempatlahir']);
        $tanggalLahir = htmlspecialchars($_POST['tgllahir']);
        $jenisKelamin = htmlspecialchars($_POST['jeniskelamin']);
        $agama = htmlspecialchars($_POST['agama']);
        $alamat = htmlspecialchars($_POST['alamat']);
        ?>
        <?php if (
            empty($nama) || empty($email) || empty($tempatLahir) || empty($tanggalLahir)
            || empty($jenisKelamin) || empty($agama) || empty($alamat)
        ) { ?>
            <script>
                alert('harap isi semua data');
            </script>
        <?php } else { ?>
            <?php
            $query = "UPDATE `tbl_registeruser` SET 
            `nama` = '$nama', `email` = '$email', `tanggallahir` = '$tanggalLahir', `tempatlahir` = '$tempatLahir', 
            `jeniskelamin` = '$jenisKelamin', `agama` = '$agama', `alamat` = '$alamat' 
            WHERE `tbl_registeruser`.`username` = '$username'";

            $result = mysqli_query($koneksi, $query);
            if (mysqli_affected_rows($koneksi) < 0) {
                echo 'gagal ubah data';
            } else {
                echo 'berhasil edit data';
            }
            ?>

            <script>
                alert('berhasil ubah data');
                        window.location.href = '../dashboardUser/dashboardUser.php';
            </script>
        <?php } ?>
    <?php } ?>


    <!-- ====================================================== -->


</body>

</html>