<?php
require '../../../database/koneksi.php';
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];


// menampilkan data ke dashboard dari database
$query1 = "SELECT * FROM tbl_user 
WHERE username = '$username' AND password = '$password'";

$result1 = mysqli_query($conn, $query1);
$user = mysqli_fetch_assoc($result1);

?>
<!-- ====================================================== -->

<?php if (isset($_POST['ubahdata'])) { ?>
    <?php
    $nama = htmlspecialchars($_POST['nama']);
    $status = htmlspecialchars($_POST['status']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    ?>
    <?php
    // cek apakah data kosong
    if (empty($nama) && empty($status) && empty($deskripsi)) { ?>
        <script>
            alert('data tidak boleh kosong');
        </script>
        <!-- cek apakah nama kosong -->
    <?php } else if (empty($nama)) { ?>
            <script>
                alert('nama tidak boleh kosong');
            </script>
            <!-- cek apakah status kosong -->
    <?php } else if (empty($status)) { ?>
                <script>
                    alert('profesi/status tidak boleh kosong');
                </script>
                <!-- cek apakah deskripsi kosong -->
    <?php } else if (empty($deskripsi)) { ?>
                    <script>
                        alert('deskripsi tidak boleh kosong');
                    </script>
                    <!-- jika tidak maka ubah data -->
    <?php } else { ?>
            <?php

            $query = "UPDATE `tbl_user` SET `nama` = '$nama', `status` = '$status', `deskripsi` = '$deskripsi' WHERE `iduser` = 5";
            mysqli_query($conn, $query);
            ?>
                    <script>
                        window.location.href = 'userDashboard.php';
                    </script>
    <?php } ?>


<?php } ?>

<!-- ====================================================== -->






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data Diri | User</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/formUbahData.css">
</head>

<body>
    <div class="container">
        <form class="form" action="" method="post">
            <h2>Ubah Data Anda</h2><br>
            <label for="nama">Nama Lengkap</label><br>
            <input class="inputnama" type="text" name="nama" id="nama" placeholder="Masukkan nama"
                value="<?php echo $user['nama']; ?>">
            <br>
            <label for="status">Profesi/Status</label><br>
            <input class="inputstatus" type="text" name="status" id="status" placeholder="Masukkan profesi/status"
                value=" <?php echo $user['status'] ?>"><br>
            <label for="deskripsi">Deskripsi Tentang Anda</label><br>
            <textarea class="inputdeskripsi" name="deskripsi" id="deskripsi" cols="30" rows="10"
                placeholder="maksimal 500 karakter"><?php echo $user['deskripsi']; ?></textarea>
            <button type="submit" name="ubahdata">Ubah Data</button>

        </form>
    </div>


    <!-- ====================================================== -->

    <?php if (isset($_POST['ubahdata'])) { ?>
        <?php
        $nama = htmlspecialchars($_POST['nama']);
        $status = htmlspecialchars($_POST['status']);
        $deskripsi = htmlspecialchars($_POST['deskripsi']);

        ?>
        <?php
        // cek apakah data kosong
        if (empty($nama) && empty($status) && empty($deskripsi)) { ?>
            <script>
                alert('data tidak boleh kosong');
            </script>
            <!-- cek apakah nama kosong -->
        <?php } else if (empty($nama)) { ?>
                <script>
                    alert('nama tidak boleh kosong');
                </script>
                <!-- cek apakah status kosong -->
        <?php } else if (empty($status)) { ?>
                    <script>
                        alert('profesi/status tidak boleh kosong');
                    </script>
                    <!-- cek apakah deskripsi kosong -->
        <?php } else if (empty($deskripsi)) { ?>
                        <script>
                            alert('deskripsi tidak boleh kosong');
                        </script>
                        <!-- jika tidak maka ubah data -->
        <?php } else { ?>
                <?php
                $query = "UPDATE `tbl_user` SET `nama` = '$nama', `status` = '$status', `deskripsi` = '$deskripsi'
                WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($conn, $query);
                ?>
                        <script>
                            window.location.href = 'userDashboard.php';
                        </script>
        <?php } ?>


    <?php } ?>

    <!-- ====================================================== -->
    <!-- JS -->
    <script src="../dashboardUser/js/templeteDataUser.js"></script>
</body>

</html>