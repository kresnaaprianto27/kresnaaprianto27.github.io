<?php
session_start();
require '../../../database/koneksi.php';
$query1 = "SELECT * FROM tbl_user";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT * FROM tbl_pesanuser";
$result2 = mysqli_query($conn, $query2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../dashboardAdmin/style/adminDashboardxx.css">
</head>

<body>
    <h1>Dashboard Admin</h1>
    <div class="container">
        <h2>Tabel Data User</h2>
        <div class="kotak1">
            <a href="">+ Tambah User</a>
            <div class="inputcari">
                <input type="text" name="keyword" placeholder="Masukkan Nama User">
                <button type="submit" name="cari">Cari</button>
            </div>
        </div>
        <!-- validasi -->
        <div class="tbldatauser">

            <table border="1px" cellpadding="10" cellspacing="0">

                <thead>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                </thead>
                <tbody>
                    <?php $nomor1 = 1; ?>
                    <?php while ($dataUser = mysqli_fetch_assoc($result1)) { ?>
                        <tr>
                            <td>
                                <?php echo "$nomor1." ?>
                            </td>
                            <td>
                                <a
                                    href="../dashboardAdmin/formDetailUser.php?id=<?php echo $dataUser['iduser']; ?>">Detail</a>

                                | <form style="display: inline-block;" method="post">
                                    <input type="hidden" name="inputiduser" value="<?php echo $dataUser['iduser']; ?>">
                                    <button type="submit" name="btnhapus">Hapus</button>
                                </form>

                            </td>
                            <td>
                                <img width="50px" height="60px"
                                    src="../../../upload/fotoProfil/<?php echo $dataUser['fotoprofil']; ?>"
                                    alt="profil user"><br>
                                <a href="">download</a>
                            </td>
                            <td>
                                
                                <?php echo $dataUser['nama']; ?>
                            </td>
                            <td>
                                <?php echo $dataUser['email']; ?>
                            </td>
                            <td>
                                <?php echo $dataUser['username']; ?>
                            </td>
                            <td>
                                <?php echo $dataUser['password']; ?>
                            </td>
                        </tr>
                        <?php $nomor1++; ?>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <!-- tabel pesan user -->
        <h2>Tabel Masukan User</h2>
        <div class="kotak2">

            <div class="inputcari">
                <input type="text" name="keyword" placeholder="Masukkan Nama User">
                <button type="submit" name="cari">Cari</button>
            </div>
        </div>
        <div class="tblpesanuser">
            <table border="1px" cellpadding="10" cellspacing="0">
                <thead>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Pesan</th>
                </thead>
                <tbody>
                    <?php $nomor2 = 1; ?>
                    <?php while ($dataPesan = mysqli_fetch_assoc($result2)) { ?>
                        <tr>
                            <td>
                                <?php echo "$nomor2 ." ?>
                            </td>
                            <td><a href="">Hapus</a></td>
                            <td>
                                <?php echo $dataPesan['nama']; ?>
                            </td>
                            <td>
                                <?php echo $dataPesan['email']; ?>
                            </td>
                            <td>
                                <?php echo $dataPesan['pesan']; ?>
                            </td>
                        </tr>
                        <?php $nomor2++; ?>
                    <?php } ?>


                </tbody>
            </table>
        </div>
    </div>

    <!-- PHP -->

    <?php if (isset($_POST['btnhapus'])) { ?>
        <!-- <script src="../dashboardAdmin/js/validasiHapusData.js"></script> -->
        <?php
            $idMhs = $_POST['inputiduser'];
            $query = "DELETE FROM tbl_user WHERE `tbl_user`.`iduser` = $idMhs";
            $result = mysqli_query($conn, $query);
            ?>
        <script>
            alert('data berhasil di hapus');
        </script>

    <?php } ?>



    <!-- JS -->



</body>

</html>