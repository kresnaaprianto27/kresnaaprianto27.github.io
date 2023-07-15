<?php
require '../../database/config.php';
// $query = "SELECT * FROM tbl_gejala";
// $result = mysqli_query($koneksi, $query);
// Pencarian data pada tabel Data gangguan
if (isset($_POST['btncari'])) {
    $keyword = $_POST['keywordgejala'];

    $query = "SELECT * FROM tbl_gejala WHERE namagejala LIKE '%$keyword%'";
    $result = mysqli_query($koneksi, $query);
} else {
    $query = "SELECT * FROM tbl_gejala";
    $result = mysqli_query($koneksi, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Gejala</title>
    <link rel="stylesheet" href="../../style/dataGejalaStyle.css">
</head>

<body>
    <div class="container">
        <img class="image" src="../../images/gb-loginregis.png" alt="">


        <form class="formgejala" action="" method="post">
            <h2>Tabel Data Gejala</h2>
            <div class="aksitabel">
                <a href="tambahDataGejala.php">+ Tambah data gejala</a>
                <div class="kotakcari">
                    <input type="text" name="keywordgejala" placeholder="Masukkan nama gejala">
                    <button type="submit" name="btncari">Cari</button>
                </div>
            </div>
            <div class="scrolltable">
                <table border="1" cellpadding="10px" cellspacing="0">
                    <thead>
                        <th>No.</th>
                        <th>Nama Gejala</th>
                        <th class="aksi">Aksi</th>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php while ($dataGejala = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>
                                    <?php echo $nomor . '.'; ?>
                                </td>
                                <td>
                                    <?php echo $dataGejala['namagejala']; ?>
                                </td>
                                <td>
                                    <a href="ubahDataGejala.php?idgejala=<?php echo $dataGejala['idgejala']; ?>">Ubah</a> |
                                    <a href="hapusDataGejala.php?idgejala=<?php echo $dataGejala['idgejala']; ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
    </div>

    </form>

    </div>
    <!-- ======================================== -->
    <?php if (isset($_POST['btnsimpan'])) { ?>
        <?php $namaGejala = $_POST['inputgejala'] ?>
        <?php if (empty($namaGejala)) { ?>
            <script>
                alert('data masih kosong');
            </script>
        <?php } else { ?>
            <?php
            $query = "INSERT INTO tbl_gejala VALUES (NULL,'$namaGejala')";
            $result = mysqli_query($koneksi, $query);
            ?>
            <script>
                alert('data berhasil ditambahkan');
            </script>
        <?php } ?>
    <?php } ?>

</body>

</html>