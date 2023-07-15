<?php
require '../../database/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Sistem Pakar</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../style/loginAdminStyle.css">
</head>

<body>
    <div class="container">
        <img class="image" src="../../images/gb-loginregis.png" alt="">
        <form class="formlogin" action="" method="post">
            <h2>Login Admin</h2>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" placeholder="Masukkan Username"><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" placeholder="Masukkan password"><br>

            <button type="submit" name="btnlogin">Login</button>
            
            <p>Login sebagai <a href="../../user/loginUser/LoginUser.php">User</a></p>
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
            $queryCek = "SELECT * FROM tbl_admin
                WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($koneksi, $queryCek);
            $row = mysqli_fetch_assoc($result);
            var_dump($row['username'], $row['password']);
            ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <script type="module">
                    import { suksesLogin } from "../../js/validasiAdminLogin.js";
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