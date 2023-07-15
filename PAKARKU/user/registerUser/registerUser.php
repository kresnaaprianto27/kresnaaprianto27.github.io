<?php
require '../../database/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User | Sistem Pakar</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../style/registerUserStyle.css">
</head>

<body>

    <div class="container">
        <form class="formlogin" action="" method="post">
            <h2>Register User</h2>
            <div class="inputuser">
                <!-- kotak 1 -->
                <div class="kotak1">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama"><br>

                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Masukkan email"><br>

                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="Masukkan username"><br>

                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="Masukkan password"><br>

                    <label for="repassword">Re-Password</label><br>
                    <input type="password" id="repassword" name="repassword" placeholder="Masukkan Re-Password"><br>

                </div>

                <!-- kotak 2 -->
                <div class="kotak2">
                    <label for="tempatlahir">Tempat Lahir</label><br>
                    <input type="text" id="tempatlahir" name="tempatlahir" placeholder="Masukkan tempat lahir"><br>

                    <label for="tgllahir">Tanggal Lahir</label><br>
                    <input type="date" id="tgllahir" name="tgllahir"><br>

                    <label for="jenis-kelamin">Jenis Kelamin</label><br>
                    <input type="radio" id="laki-laki" name="jeniskelamin" value="Laki-laki">
                    <label for="laki-laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="jeniskelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label><br>

                    <label for="agama">Agama</label><br>
                    <input type="text" id="agama" name="agama" placeholder="Masukkan agama anda"><br>

                    <label for="alamat">Alamat Lengkap</label><br>
                    <textarea name="alamat" id="alamat" cols="30" rows="10">Masukkan alamat lengkap</textarea>
                </div>
            </div>
            <button type="submit" name="btnregis">Register</button>
            <p>Sudah punya account? <a href="../loginUser/loginUser.php">Login</a></p>
        </form>

    </div>

    <!-- ====================================================== -->

    <?php if (isset($_POST['btnregis'])) { ?>
        <?php
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $repassword = htmlspecialchars($_POST['repassword']);
        $repassword = htmlspecialchars($_POST['repassword']);
        $tempatLahir = htmlspecialchars($_POST['tempatlahir']);
        $tanggalLahir = htmlspecialchars($_POST['tgllahir']);
        $jenisKelamin = htmlspecialchars($_POST['jeniskelamin']);
        $agama = htmlspecialchars($_POST['agama']);
        $alamat = htmlspecialchars($_POST['alamat']);

        ?>
        <!-- cek jika salah satu data kosong -->
        <?php if (
            empty($nama) || empty($email) || empty($username)
            || empty($password) || empty($repassword) || empty($tempatLahir) ||
            empty($tanggalLahir) || empty($jenisKelamin) || empty($agama) ||
            empty($alamat)
        ) { ?>
            <script type="module">
                import { dataKosong } from "../../js/validasiRegis.js";
                dataKosong();
            </script>
            <!-- jika data tidak kosong -->
        <?php } else { ?>
            <?php

            $query = "INSERT INTO `tbl_registeruser` 
            (`iduser`, `nama`, `email`, `username`, `password`, `repassword`, `tanggallahir`, `tempatlahir`, `jeniskelamin`, `agama`, `alamat`, `fotoprofil`, `namagangguan`, `deskripsi`, `penanganan`) VALUES 
            (NULL, '$nama', '$email', '$username', '$password', '$repassword', '$tanggalLahir', '$tempatLahir', '$jenisKelamin', '$agama', '$alamat', NULL, NULL, NULL, NULL);";
            $result = mysqli_query($koneksi, $query);
            ?>
            <script type="module">
                import { suksesRegister } from "../../js/validasiRegis.js";
                suksesRegister();        
            </script>


        <?php } ?>
    <?php } ?>

    <!-- ====================================================== -->
    <script src="../../js/validasiRegister.js"></script>
</body>

</html>