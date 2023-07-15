<?php
require '../../database/config.php';


// Pencarian data pada tabel Data gangguan
if (isset($_POST['btncari'])) {
    $keyword = $_POST['keywordgangguan'];
    $query = "SELECT * FROM tbl_pengetahuan
    JOIN tbl_gangguan ON tbl_gangguan.idgangguan = tbl_pengetahuan.idgangguan 
    JOIN tbl_gejala ON tbl_pengetahuan.idgejala = tbl_gejala.idgejala WHERE namagangguan LIKE '%$keyword%'";

    $result = mysqli_query($koneksi, $query);
} else {
    $query = "SELECT * FROM tbl_pengetahuan
    JOIN tbl_gangguan ON tbl_gangguan.idgangguan = tbl_pengetahuan.idgangguan 
    JOIN tbl_gejala ON tbl_pengetahuan.idgejala = tbl_gejala.idgejala";
    $result = mysqli_query($koneksi, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basis Pengetahuan</title>
    <link rel="stylesheet" href="../../style/pengetahuanStyle.css">
</head>

<body>
    <div class="container">
        <div class="kotakjudul">
            <h2>Tabel Basis Pengetahuan</h2>
        </div>
        <div class="tambahdata">
            <a href="tambahPengetahuan.php">+ Tambah data pengetahuan</a>
            <form action="" method="post">
                <input type="text" name="keywordgangguan" placeholder="Masukan nama gangguan">
                <button type="submit" name="btncari">Cari</button>
            </form>
        </div>
        <!-- tabel pengetahuan -->
        <form class="tblpengetahuan" action="">
            <div class="scrolltable">
                <table border="1" cellpadding="10px" cellspacing="0">
                    <thead>
                        <th>No.</th>
                        <th>Nama Gangguan</th>
                        <th>Gejala Psikis</th>
                        <th>Aksi</th>

                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php while ($dataPengetahuan = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>
                                    <?php echo $nomor . '.'; ?>
                                </td>
                                <td>
                                    <?php echo $dataPengetahuan['namagangguan']; ?>
                                </td>
                                <td>
                                    <?php echo $dataPengetahuan['namagejala']; ?>
                                </td>

                                <td>
                                    <a href="hapusPengetahuan.php?idpengetahuan=<?php echo $dataPengetahuan['idpengetahuan']; ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </form>

    </div>
    

</body>

</html>