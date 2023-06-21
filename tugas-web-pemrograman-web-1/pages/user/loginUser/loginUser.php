<?php
require '../../../database/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="../loginUser/loginUser.css">
</head>

<body>
    <div class="container">

        <form class="form" action="" method="post">
            <h2>login User</h2>
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" placeholder="Masukkan username"><br>
            <label for="pasword">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Masukkan pasword"><br>
            <button type="submit" name="login">Login</button>
            <p>Belum punya akun? <a href="../registerUser/registerUser.php">Register</a></p>
            
        </form>
    </div>

    <!-- ============================================================== -->

    <?php if (isset($_POST['login'])) { ?>

        <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        ?>
        <!-- cek apakah username dan password kosong -->
        <?php if (empty($username) && empty($password)) { ?>
                <script type="module">
                    import { userPasswKosong } from "../loginUser/validasiLoginUser.js";
                    userPasswKosong();
                </script>
            <!-- cek apakah username kosong -->
        <?php } else if (empty($username)) { ?>
                <script type="module">
                    import { usernameKosong } from "../loginUser/validasiLoginUser.js";
                    usernameKosong();
                </script>

                <!-- cek apakah password kosong -->
        <?php } else if (empty($password)) { ?>
                <script type="module">
                    import { passwordKosong } from "../loginUser/validasiLoginUser.js";
                    passwordKosong();
                </script>

                <!-- cek apakah username & password sesuai dengan database -->
        <?php } else { ?>
                <?php
                $queryCek = "SELECT * FROM tbl_user
                WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($conn, $queryCek);
                ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <script type="module">
                    import { suksesLogin } from "../loginUser/validasiLoginUser.js";
                    suksesLogin();     
                </script>

        <!-- validasi jika username dan password tidak sesuai database -->
            <?php } else { ?>
                <script type="module">
                    import { gagalLogin } from "../loginUser/validasiLoginUser.js";
                    gagalLogin();
                </script>
            <?php } ?>

        <?php } ?>
    <?php } ?>

    <!-- ============================================================== -->



</body>

</html>