<?php
require '../../../database/koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="../registerUser/registerUser.css">
</head>

<body>
    <div class="container">

        <form class="form-register" action="" method="post">
            <!-- <div class="disablecontent">
                <div class="validasiregister">
                    <img class="iconimage" src="../../../images/icon-warning.png" alt="">
                    <h2 class="judul">Harap Isi Semua Data</h2>
                    <button class="btnvalidasi" type="button">Ulangi</button>
                </div>
            </div> -->


            <h2>Registrasi User</h2>
            <label for="nama">Nama</label><br>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama" size="40"><br>

            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="Masukkan email" size="40"><br>

            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" placeholder="Masukkan username" size="40"><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" placeholder="Masukkan password" size="40"><br>

            <label for="repassword">Re-Password</label><br>
            <input type="password" id="repassword" name="repassword" placeholder="Masukkan Re-Password" size="40"><br>

            <button type="submit" name="submit">Register</button>

            <p>Sudah Punya account? <a href="../loginUser/loginUser.php">Login</a></p>

        </form>


    </div>
    <!-- JS -->
    <!-- <script src="../registerUser/validasiRegister.js"></script> -->


</body>
<!-- ============================================================= -->
<!-- cek apakah button submit sudah di tekan -->
<?php if (isset($_POST['submit'])) { ?>
    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    var_dump($_POST);
    ?>
    <!-- cek apakah ada input yang tidak di isi -->
    <?php if (
        empty($nama) ||
        empty($email) ||
        empty($username) ||
        empty($password) ||
        empty($repassword)
    ) { ?>
        <script type="module">
            import { warningValidasi } from "../registerUser/validasiRegister.js";
            warningValidasi();
        </script>

    <?php } else { ?>
        <?php
        $query = "INSERT INTO tbl_user VALUES
        (NULL, '$nama', '$email', '$username', '$password', '$repassword',NULL,NULL,NULL,NULL,NULL,NULL)";
        $result = mysqli_query($conn, $query);
        ?>
        <script type="module">
            import { succesValidasi } from "../registerUser/validasiRegister.js";
            succesValidasi();
        </script>
    <?php } ?>
<?php } ?>
<!-- ============================================================= -->

<!-- JS -->



</html>