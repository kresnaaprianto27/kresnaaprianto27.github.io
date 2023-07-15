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
    <title>Dashboard User | Sistem Pakar</title>
    <link rel="stylesheet" href="../../style/dashboardUserStyle.css">
</head>

<body>

    <!-- MENU NAVIGASI -->
    <section class="navigasi-menu">
        <nav class="navbar">
            <div class="nav-brand">
                <h2>Pakar Mentalku</h2>
            </div>
            <div class="nav-link">
                <a class="pindah-baris" href="">Home</a>
                <a class="pindah-baris" href="">MyProfile</a>
                <a class="pindah-baris" href="">Contact Us</a>
                <a class="pindah-baris" href="?keluar='oke bestie'">Logout</a>
            </div>
        </nav>

    </section>
    <!-- AKHIR MENU NAVIGASI -->

    <!-- HERO IMAGE -->
    <section id="1" class="hero-image">
        <div class="bg-transparant"></div>
        <h2>Kenali Gangguan Mental Anda <br>dan Mulai Hidup Sehat
            Untuk Menjalani <br>Semua Aktivitas Anda</h2>

        <a target="_blank" href="../konsultasiUser/konsultasi.php">Mulai Konsultasi</a>
    </section>
    <!-- AKHIR HERO IMAGE -->

    <section id="2" class="myprofil">
        <!-- FOTO -->
        <div class="itm foto">
            <img style="background-color: white;" class="imageprofil"
                src="../../upload/<?php echo $dataUser['fotoprofil']; ?>" alt="foto profil user">
            <form style="display: inline-block; margin-top: 15px;" action="" method="post"
                enctype="multipart/form-data">
                <input type="file" name="ubahfoto">
                <button class="btnubahfoto" type="submit" name="btnubahfoto">Terapkan</button>
            </form>
        </div>
        <!-- AKHIR FOTO -->

        <!-- DATA DIRI -->
        <div class="itm datadiri">
            <h2>Data Diri Anda</h2>
            <table class="tbl-data-diri" border="1px" cellpadding="15" cellspacing="0">
                <tr>
                    <td class="namarow">Nama</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['nama']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="namarow">Email</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="namarow">Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['tempatlahir']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="namarow">Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['tanggallahir']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="namarow">Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['jeniskelamin']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="namarow">Agama</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['agama']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="namarow">Alamat Lengkap</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['alamat']; ?>
                    </td>
                </tr>
            </table>
            <form action="" method="post">
                <button type="submit" name="btnubahdata">Ubah Data diri</button>
                <button name="btncekhasil" style="background-color: red; border: 3px solid rgb(77, 0, 0);"
                    type="submit">Lihat Hasil
                    Diagnosa</button>
            </form>
        </div>
        <!--AKHIR DATA DIRI -->
    </section>

    <section id="3" class="contactus">
        <h2>Contact Us</h2>
        <form action="" method="post">
            <label for="nama">Nama</label><br>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama anda"><br>

            <label for="nama">Email</label><br>
            <input type="text" id="email" name="email" value="<?php echo $dataUser['email']; ?>"><br>

            <label for="pesan">Pesan</label><br>
            <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="Masukkan Pesan"></textarea><br>

            <button type="submit" name="btnpesan">Kirim Pesan</button>
        </form>
    </section>

    <footer class="footer">
        <p>Copyright by Kresna aprianto, Juni 2023</p>
        <p>App Version 1.0</p>
    </footer>
    <script>

    </script>


    <?php if (isset($_GET['keluar'])) { ?>

        <script>
            //  window.location.href = 'dashboardUser.php';
            window.location.href = '../loginUser/LoginUser.php';
        </script>
    <?php } else { ?>
         <script>
            //  window.location.href = 'dashboardUser.php';
            // window.location.href = '../loginUser/LoginUser.php';
        </script>
    <?php } ?>
    <!-- UBAH FOTO PROFIL -->
    <!-- ================================================================= -->
    <?php if (isset($_POST['btnubahfoto'])) { ?>

        <?php
        $namaFoto = $_FILES['ubahfoto']['name'];
        $typeFoto = $_FILES['ubahfoto']['type'];
        $sizeFoto = $_FILES['ubahfoto']['size'];
        $tempName = $_FILES['ubahfoto']['tmp_name'];
        $error = $_FILES['ubahfoto']['error'];
        ?>
        <?php
        $extensiGambarValid = [
            'jpg',
            'jpeg',
            'png'
        ];
        $extensiGambar = explode('.', $namaFoto);
        $extensiGambar = strtolower(end($extensiGambar));
        ?>
        <!-- cek apakah nama file sesuai di array -->

        <?php if ($error === 4) { ?>
            <script type="module">
                import { fotoKosong } from "../../js/validasiFoto.js";
                fotoKosong();
            </script>
        <?php } else if (!in_array($extensiGambar, $extensiGambarValid)) { ?>
                <script type="module">
                    import { fileBukanGambar } from "../../js/validasiFoto.js";
                    fileBukanGambar();
                </script>
                <!-- cek apakah ukuran gambar lebih dari 2mb -->
            <?php } else if ($sizeFoto > 2000_000) { ?>
                    <script type="module">
                        import { ukuranGambarBesar } from "../../js/validasiFoto.js";
                        ukuranGambarBesar();
                    </script>
                <?php } else { ?>
                    <!-- upload file di directory -->
                    <?php
                    $upload = move_uploaded_file($tempName, '../../upload/' . $namaFoto);

                    $query = "UPDATE `tbl_registeruser` SET `fotoprofil` = '$namaFoto' WHERE `tbl_registeruser`.`username` = '$username'";
                    $result = mysqli_query($koneksi, $query);
                    ?>
                    <script type="module">
                        import { suksesUploadGambar } from "../../js/validasiFoto.js";
                        suksesUploadGambar();
                    </script>
                <?php } ?>
    <?php } ?>



    <!-- UBAH DATA DIRI -->
    <!-- ================================================================= -->
    <?php if (isset($_POST['btnubahdata'])) { ?>
        <script>
            window.location.href = 'ubahDataDiri.php';
        </script>
    <?php } ?>

    <!-- CEK HASIL DIAGNOSA -->
    <!-- ================================================================= -->
    <?php if (isset($_POST['btncekhasil'])) { ?>
        <script>
            window.location.href = '../hasilDiagnosa/hasilDiagnosa.php';
        </script>
    <?php } ?>




    <!-- CONTACT US -->
    <!-- ================================================================= -->
    <?php if (isset($_POST['btnpesan'])) { ?>
        <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];
        ?>
        <?php if (empty($nama) || empty($email) || empty($pesan)) { ?>
            <script>
                alert('harap isi semua data');
            </script>
        <?php } else { ?>
            <?php
            $query = " INSERT INTO `tbl_pesanuser` 
            (`idpesan`, `nama`, `email`, `pesan`) VALUES 
            (NULL, '$nama', '$email', '$pesan')";
            $result = mysqli_query($koneksi, $query);
            ?>
            <script>
                alert('pesan berhasil terkirim');
            </script>
        <?php } ?>
    <?php } ?>


    <!-- ========================= -->
    <!-- <script src="../../js/validasiFoto.js"></script> -->
</body>

</html>