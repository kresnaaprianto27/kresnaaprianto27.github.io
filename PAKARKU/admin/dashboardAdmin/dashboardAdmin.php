<?php
require '../../database/config.php';
$query1 = "SELECT * FROM tbl_registeruser";
$result1 = mysqli_query($koneksi, $query1);
$query2 = "SELECT * FROM tbl_pesanuser";
$result2 = mysqli_query($koneksi, $query2);
// Pencarian data pada tabel Data User
if (isset($_POST['cariuser'])) {
    $keywordUser = $_POST['keyworduser'];

    $queryUser = "SELECT * FROM tbl_registeruser WHERE nama LIKE '%$keywordUser%'";
    $resultUser = mysqli_query($koneksi, $queryUser);
} else {
    $queryUser = "SELECT * FROM tbl_registeruser";
    $resultUser = mysqli_query($koneksi, $queryUser);
}

// Pencarian data pada tabel Tabel Pesan User
if (isset($_POST['caripesan'])) {
    $keywordPesan = $_POST['keywordpesan'];
 
    $queryPesan = "SELECT * FROM tbl_pesanuser WHERE nama LIKE '%$keywordPesan%'";
    $resultPesan = mysqli_query($koneksi, $queryPesan);
} else {
    $queryPesan = "SELECT * FROM tbl_pesanuser";
    $resultPesan = mysqli_query($koneksi, $queryPesan);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Sistem Pakar</title>
    <link rel="stylesheet" href="../../style/dashboardAdminStyle.css">
</head>

<body>
    <nav class="navbar">
        <div class="navbrand">
            <h2>Selamat Datang Admin</h2>
        </div>
        <div class="navlink">
            <a href="">Data User</a>
            <a target="_blank" href="../dataGangguan/dataGangguan.php">Penyakit Mental</a>
            <a target="_blank" href="../dataGejala/dataGejala.php">Gejala Psikis</a>
            <a target="_blank" href="../basisPengetahuan/pengetahuan.php">Basis Pengetahuan</a>
            <a target="_blank" href="../aturanSistem/aturanSistem.php">Aturan</a>
            <a href="../../index.php">=></a>
        </div>
    </nav>
    <section class="tabeldatauser">
        <div class="kotak1">
            <h2>Tabel Data User</h2>
            <form class="pencarianuser" method="post">
                <input name="keyworduser" type="text" placeholder="Masukkan nama user" autofocus autocomplete="off">
                <button name="cariuser" type="submit">Cari</button>
            </form>
        </div>

        <div class="tabel1">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Hasil Tes Mental</th>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php while ($dataUser = mysqli_fetch_assoc($resultUser)) { ?>
                        <tr>
                            <td>
                                <?php echo $nomor . '.' ?>
                            </td>
                            <td>

                                <!-- <input type="text" value="<?php //echo $dataUser['iduser'] ?>"> -->
                                <a href="?id= <?php echo $dataUser['iduser'] ?>">Ubah</a> |
                                <a href="hapusDataUser.php?id= <?php echo $dataUser['iduser'] ?>">Hapus</a>
                            </td>
                            <td>
                                <?php echo $dataUser['nama']; ?>
                            </td>
                            <td>
                                <?php echo $dataUser['email']; ?>
                            </td>
                            <td>
                                <?php echo $dataUser['tempatlahir']; ?>
                            </td>
                            <td>
                                <?php echo $dataUser['tanggallahir'] ?>
                            </td>
                            <td>
                                <?php echo $dataUser['jeniskelamin'] ?>
                            </td>
                            <td>
                                <?php echo $dataUser['agama']; ?>
                            </td>
                            <td>
                                <?php echo $dataUser['alamat']; ?>
                            </td>
                            <td>
                                <a href="../dashboardAdmin/hasilDiagnosaAdmin.php?iduser=<?php echo $dataUser['iduser']; ?>">Detail Tes</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </section>

    <section class="tabelpesanuser">
        <div class="kotak2">
            <h2>Tabel Pesan User</h2>
            <form class="pencarianpesan" method="post">
                <input name="keywordpesan" type="text" placeholder="Masukkan nama user" autofocus autocomplete="off">
                <button name="caripesan" type="submit">Cari</button>
            </form>
        </div>
        <div class="tabel2">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                </thead>
                <tbody>
                    <?php $nomor1 = 1; ?>
                    <?php while ($pesanUser = mysqli_fetch_assoc($resultPesan)) { ?>
                        <tr>
                            <td>
                                <?php echo $nomor1 . '.'; ?>
                            </td>
                            <td>
                                <a href="hapusDataPesan.php?idpesan=<?php echo $pesanUser['idpesan']; ?>">Hapus</a>
                            </td>
                            <td>
                                <?php echo $pesanUser['nama']; ?>
                            </td>
                            <td>
                                <?php echo $pesanUser['email']; ?>
                            </td>
                            <td>
                                <?php echo $pesanUser['pesan']; ?>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </section>


    <!-- CARI DATA USER -->
    <!-- ============================================= -->
    

    <!-- CARI DATA PESAN USER -->
    <!-- ============================================= -->




</body>

</html>