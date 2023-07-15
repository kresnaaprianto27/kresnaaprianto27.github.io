<?php
require '../../database/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User | Sistem Pakar</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../style/loginUserStyle.css">
</head>

<body>
    <div class="container">
        <img class="image" src="../../images/gb-loginregis.png" alt="">
        <form class="formlogin" action="" method="post">
            <h2>Login User</h2>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" placeholder="Masukkan Username"><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" placeholder="Masukkan password"><br>

            <button type="submit" name="btnlogin">Login</button>
            <p>Belum punya account? <a href="../registerUser/registerUser.php">Register</a></p>
            <p>Login sebagai <a href="../../admin/loginAdmin/LoginAdmin.php">Admin</a></p>
        </form>

    </div>

    <!-- ======================================================== -->
    <?php if (isset($_POST['btnlogin'])) { ?>
        <?php
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        ?>

        <!-- cek jika username dan password kosong -->
        <?php if (empty($username) || empty($password)) { ?>
            <script type="module">
                import { loginDataKosong } from "../../js/validasiLogin.js";
                loginDataKosong();
            </script>
            <!-- jika tidak kosong -->
        <?php } else { ?>
            <?php
            $queryCek = "SELECT * FROM tbl_registeruser
                WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($koneksi, $queryCek);
            ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <script type="module">
                    import { suksesLogin } from "../../js/validasiLogin.js";

                    suksesLogin();
                </script>
                <!-- validasi jika username dan password tidak sesuai database -->
            <?php } else { ?>

                <script type="module">
                    import { userPassSalah } from "../../js/validasiLogin.js";
                    userPassSalah();
                </script>

            <?php } ?>

        <?php } ?>

    <?php } ?>


</body>

</html>