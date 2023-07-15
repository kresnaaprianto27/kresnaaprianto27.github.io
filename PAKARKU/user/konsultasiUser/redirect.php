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
<?php } ?>
<?php
// Mengubah array gejala menjadi string untuk query SQL
$gejala_string = implode(",", $gejala);

?>


<?php
// 1. gejala depresi
if ($gejala_string === '23,24,25,26,27,28,29') {

    $query = "SELECT * FROM `tbl_gangguan` WHERE `namagangguan` = 'Depresi'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $namaGangguan = $row['namagangguan'];
    $deskripsi = $row['deskripsi'];
    $penanganan = $row['penanganan'];

    $query = "UPDATE `tbl_registeruser` 
            SET `namagangguan` = '$namaGangguan', `deskripsi` = '$deskripsi', `penanganan` = '$penanganan'
            WHERE `tbl_registeruser`.`username` = '$username'";
    $result = mysqli_query($koneksi, $query);
    ?>

    //  alert jika sudah melakukan konsultasi
   <script type="module">
        import { suksesKonsultasi } from "../../js/redirecting.js";
        suksesKonsultasi()
    </script>
    
 <?php } 
//  2. gejala gangguan kecemasan

 else if ($gejala_string === '30,31,32,33,34') {

    $query = "SELECT * FROM `tbl_gangguan` WHERE `namagangguan` = 'Gangguan Kecemasan'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $namaGangguan = $row['namagangguan'];
    $deskripsi = $row['deskripsi'];
    $penanganan = $row['penanganan'];

    $query = "UPDATE `tbl_registeruser` 
            SET `namagangguan` = '$namaGangguan', `deskripsi` = '$deskripsi', `penanganan` = '$penanganan'
            WHERE `tbl_registeruser`.`username` = '$username'";
    $result = mysqli_query($koneksi, $query);
?>
    //  alert jika sudah melakukan konsultasi
   <script type="module">
        import { suksesKonsultasi } from "../../js/redirecting.js";
        suksesKonsultasi()
    </script>

<?php } 
// 3. gangguan makan
else if ($gejala_string === '35,36,37,38,39') {

    $query = "SELECT * FROM `tbl_gangguan` WHERE `namagangguan` = 'Gangguan Makan'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $namaGangguan = $row['namagangguan'];
    $deskripsi = $row['deskripsi'];
    $penanganan = $row['penanganan'];

    $query = "UPDATE `tbl_registeruser` 
            SET `namagangguan` = '$namaGangguan', `deskripsi` = '$deskripsi', `penanganan` = '$penanganan'
            WHERE `tbl_registeruser`.`username` = '$username'";
    $result = mysqli_query($koneksi, $query);
?>
    //  alert jika sudah melakukan konsultasi
   <script type="module">
        import { suksesKonsultasi } from "../../js/redirecting.js";
        suksesKonsultasi()
    </script>

<?php }

// 4. gangguan perilaku
else if ($gejala_string === '32,36,40,41,42') {

    $query = "SELECT * FROM `tbl_gangguan` WHERE `namagangguan` = 'Gangguan Perilaku'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $namaGangguan = $row['namagangguan'];
    $deskripsi = $row['deskripsi'];
    $penanganan = $row['penanganan'];

    $query = "UPDATE `tbl_registeruser` 
            SET `namagangguan` = '$namaGangguan', `deskripsi` = '$deskripsi', `penanganan` = '$penanganan'
            WHERE `tbl_registeruser`.`username` = '$username'";
    $result = mysqli_query($koneksi, $query);
?>
    //  alert jika sudah melakukan konsultasi
   <script type="module">
        import { suksesKonsultasi } from "../../js/redirecting.js";
        suksesKonsultasi()
    </script>

<?php }

// 5. gangguan skizofrenia
else if ($gejala_string === '25,43,44,45,46') {

    $query = "SELECT * FROM `tbl_gangguan` WHERE `namagangguan` = 'Skizofrenia'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $namaGangguan = $row['namagangguan'];
    $deskripsi = $row['deskripsi'];
    $penanganan = $row['penanganan'];

    $query = "UPDATE `tbl_registeruser` 
            SET `namagangguan` = '$namaGangguan', `deskripsi` = '$deskripsi', `penanganan` = '$penanganan'
            WHERE `tbl_registeruser`.`username` = '$username'";
    $result = mysqli_query($koneksi, $query);
?>
    //  alert jika sudah melakukan konsultasi
   <script type="module">
        import { suksesKonsultasi } from "../../js/redirecting.js";
        suksesKonsultasi()
    </script>

<?php }

// 6. gangguan demensia
else if ($gejala_string === '47,48,49,50,51,52') {

    $query = "SELECT * FROM `tbl_gangguan` WHERE `namagangguan` = 'Demensia'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $namaGangguan = $row['namagangguan'];
    $deskripsi = $row['deskripsi'];
    $penanganan = $row['penanganan'];

    $query = "UPDATE `tbl_registeruser` 
            SET `namagangguan` = '$namaGangguan', `deskripsi` = '$deskripsi', `penanganan` = '$penanganan'
            WHERE `tbl_registeruser`.`username` = '$username'";
    $result = mysqli_query($koneksi, $query);
?>
    //  alert jika sudah melakukan konsultasi
   <script type="module">
        import { suksesKonsultasi } from "../../js/redirecting.js";
        suksesKonsultasi()
    </script>

<?php }
// 7. gangguan psikosis
else if ($gejala_string === '44,45,53,54,55') {

    $query = "SELECT * FROM `tbl_gangguan` WHERE `namagangguan` = 'Gangguan Psikosis'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $namaGangguan = $row['namagangguan'];
    $deskripsi = $row['deskripsi'];
    $penanganan = $row['penanganan'];

    $query = "UPDATE `tbl_registeruser` 
            SET `namagangguan` = '$namaGangguan', `deskripsi` = '$deskripsi', `penanganan` = '$penanganan'
            WHERE `tbl_registeruser`.`username` = '$username'";
    $result = mysqli_query($koneksi, $query);
?>
    //  alert jika sudah melakukan konsultasi
      <script type="module">
        import { suksesKonsultasi } from "../../js/redirecting.js";
        suksesKonsultasi()
    </script>

<?php } else { ?>
    //  alert jika sudah melakukan konsultasi
    <script type="module">
        import { tidakAdaGangguan } from "../../js/redirecting.js";
        tidakAdaGangguan();
    </script>
<?php } ?>
 
 
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

</body>

</html>