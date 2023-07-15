<?php
require '../../database/config.php';
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
?>

<?php if (mysqli_connect_errno()) {
    // Cek koneksi
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>

<?php // Mendapatkan nilai gejala yang dipilih oleh pengguna

if (isset($_POST['gejala'])) {
    $gejala = $_POST['gejala'];
} else {
    $gejala = array();
    ?>
    <!-- alert jika data gejala belum di isi -->
    <script>
        alert('harap isi gejala penyakit');
        window.location.href = 'konsultasi.php';
    </script>
<?php }
// Mengubah array gejala menjadi string untuk query SQL
$gejala_string = implode(",", $gejala);

// Query untuk mendapatkan gangguan mental berdasarkan gejala yang dipilih
$query = "SELECT tbl_gangguan.namagangguan,tbl_gangguan.deskripsi, tbl_gangguan.penanganan  FROM tbl_pengetahuan
          INNER JOIN tbl_gangguan ON tbl_pengetahuan.idgangguan = tbl_gangguan.idgangguan
          WHERE tbl_pengetahuan.idgejala IN ($gejala_string)
          GROUP BY tbl_pengetahuan.idgangguan
          HAVING COUNT(DISTINCT tbl_pengetahuan.idgejala) =" . count($gejala);
$result = mysqli_query($koneksi, $query);


// Menampilkan hasil diagnosa
if (mysqli_num_rows($result) > 0) {
  
    ?>F
    <?php $row = mysqli_fetch_assoc($result) ?>
    <?php
    $namaGangguan = $row['namagangguan'];
    $deskripsi = $row['deskripsi'];
    $penanganan = $row['penanganan'];
    ?>

    <?php
    $query = "UPDATE `tbl_registeruser` 
            SET `namagangguan` = '$namaGangguan', `deskripsi` = '$deskripsi', `penanganan` = '$penanganan'
            WHERE `tbl_registeruser`.`username` = '$username'";
    $result = mysqli_query($koneksi, $query);
    ?>
    <!-- alert jika sudah melakukan konsultasi -->
    <script type="module">
        import { suksesKonsultasi } from "../../js/redirecting.js";
        suksesKonsultasi()
    </script>

<?php } else { ?>
    <script type="module">
        import { tidakAdaGangguan } from "../../js/redirecting.js";
        tidakAdaGangguan();
    </script>
<?php } ?>

<?php
// Tutup koneksi database
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
    <link rel="stylesheet" href="../../style/redirectingStyle.css">
</head>

<body>

    <!-- JS -->
    <script src="../../js/redirecting.js"></script>
</body>

</html>