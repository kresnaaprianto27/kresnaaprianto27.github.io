<?php
require '../../database/config.php';

// Pencarian data pada tabel Data gangguan
if (isset($_POST['btncari'])) {
    $keyword = $_POST['keywordgangguan'];

    $query = "SELECT * FROM tbl_gangguan WHERE namagangguan LIKE '%$keyword%'";
    $result = mysqli_query($koneksi, $query);
} else {
    $query = "SELECT * FROM tbl_gangguan";
    $result = mysqli_query($koneksi, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Gangguan</title>
    <link rel="stylesheet" href="../../style/dataGangguanStyle.css">
</head>

<body>
    <div class="container">
        <div class="kotakjudul">
            <h2>Tabel Data Gangguan</h2>
            
        </div>
        <div class="tambahdata">
            <a href="tambahDataGangguan.php">+ Tambah data gangguan</a>
            <form action="" method="post">
                <input type="text" name="keywordgangguan" placeholder="Masukan nama gangguan">
                <button type="submit" name="btncari">Cari</button>
            </form>
        </div>
        <div class="scrolltable">

            <table border="1" cellpadding="10px" cellspacing="0">
                <thead>
                    <th>No.</th>
                    <th>Nama Gejala</th>
                    <th>Deskripsi</th>
                    <th>Penanganan</th>
                    <th class="aksi">Aksi</th>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php while ($dataGangguan = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td>
                                <?php echo $nomor . '.'; ?>
                            </td>
                            <td>
                                <?php echo $dataGangguan['namagangguan']; ?>
                            </td>
                            <td>
                                <?php echo $dataGangguan['deskripsi']; ?>
                            </td>
                            <td>
                                <?php echo $dataGangguan['penanganan']; ?>
                            </td>
                            <td>
                                <a href="ubahDataGangguan.php?idgangguan=<?php echo $dataGangguan['idgangguan']; ?>">Ubah</a> |
                                <a href="hapusDataGangguan.php?idgangguan=<?php echo $dataGangguan['idgangguan']; ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- ======================================== -->
    <?php if (isset($_POST['btnsimpan'])) { ?>
        <?php
        $namaGangguan = $_POST['inputgangguan'];
        $deskripsi = $_POST['deskripsi'];
        $penanganan = $_POST['penanganan'];
        ?>
        <?php if (empty($namaGangguan) || empty($deskripsi) || empty($penanganan)) { ?>
            <script>
                alert('data masih kosong');
            </script>
        <?php } else { ?>
            <?php
            $query = "INSERT INTO tbl_gangguan VALUES (NULL,'$namaGangguan', '$deskripsi','$penanganan')";
            $result = mysqli_query($koneksi, $query);
            ?>
            <script>
                alert('data berhasil ditambahkan');
            </script>
        <?php } ?>
    <?php } ?>

</body>

</html>