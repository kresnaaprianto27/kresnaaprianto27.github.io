<?php
require '../../../database/koneksi.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../loginAdmin/loginAdmin.css">
</head>

<body>
    <div class="container">
        <form class="form" action="" method="post">
            <h2>Login Admin</h2>
            <label for="usernameadmin">Username</label><br>
            <input type="text" name="txtusernameadmin" id="usernameadmin" placeholder="Masukkan username"><br>
            <label for="passwordadmin">Password</label><br>
            <input type="text" name="txtpasswordadmin" id="passwordadmin" placeholder="Masukkan password"><br>
            <button type="submit" name="btnloginadmin">Login</button><br>
        </form>
    </div>


    <!-- ======================================================================== -->
    <?php if (isset($_POST['btnloginadmin'])) { ?>
        <?php
        $usernameAdmin = $_POST['txtusernameadmin'];
        $passwordAdmin = $_POST['txtpasswordadmin'];
        ?>
        <!-- cek apakah username dan password kosong -->
        <?php if (empty($usernameAdmin) && empty($passwordAdmin)) { ?>
            <script type="module">
                import { userPasswKosong } from "../loginAdmin/validasiLoginAdmin.js";
                userPasswKosong();
            </script>

            <!-- cek apakah usernme kosong -->
        <?php } else if (empty($usernameAdmin)) { ?>
                <script type="module">
                    import { usernameKosong } from "../loginAdmin/validasiLoginAdmin.js";
                    usernameKosong();
                </script>

                <!-- cek apakah password kosong -->
        <?php } else if (empty($passwordAdmin)) { ?>
                    <script type="module">
                        import { passwordKosong } from "../loginAdmin/validasiLoginAdmin.js";
                        passwordKosong();
                    </script>

                    <!-- cek apakah username dan password sesuai database -->
        <?php } else { ?>
                <?php
                $queryCek = "SELECT * FROM tbl_admin
            WHERE username = '$usernameAdmin' AND password = '$passwordAdmin'";
                $result = mysqli_query($conn, $queryCek);
                ?>
            <?php if ((mysqli_num_rows($result) > 0)) { ?>
                        <script type="module">
                            import { suksesLogin } from "../loginAdmin/validasiLoginAdmin.js";
                            suksesLogin();     
                        </script>

                        <!-- validasi jika gagal login -->
            <?php } else { ?>
                        <script type="module">
                            import { gagalLogin } from "../loginAdmin/validasiLoginAdmin.js";
                            gagalLogin();
                        </script>
            <?php } ?>

        <?php } ?>
    <?php } ?>
    <!-- ======================================================================== -->


</body>

</html>