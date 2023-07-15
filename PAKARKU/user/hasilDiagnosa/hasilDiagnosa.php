<?php
require '../../database/config.php';
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$query1 = "SELECT * FROM tbl_registeruser WHERE
username = '$username' AND password = '$password'";
$result1 = mysqli_query($koneksi, $query1);
$dataUser = mysqli_fetch_assoc($result1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Hasil Konsultasi</title>
    <link rel="stylesheet" href="../../style/hasilDiagnosaStyle.css">
</head>

<body>

    <div class="container">
        <header class="header">
            <h2>Laporan Sistem Pakar</h2>
            <p>Terimakasih telah menggunakan layanan kami
                untuk membantu anda dalam mengetahui gejala mental yang anda derita
            </p>
        </header>
        <h2 class="juduldatadiri">Data Diri Anda</h2>
        <section class="datadiri">
            <!-- image profil -->
            <div class="image">
                <img src="../../upload/<?php echo $dataUser['fotoprofil']; ?>" alt="">
            </div>
            <!-- data diri -->
            <table class="tbldatadiri" border="1" cellpadding="10px" cellspacing="0">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['nama'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['email'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['tempatlahir'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['tanggallahir'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['jeniskelamin'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['agama'] ?>
                    </td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?php echo $dataUser['alamat'] ?>
                    </td>
                </tr>
            </table>

        </section>
        <p class="detail">Dari hasil konsultasi yang sudah anda lakukan di sistem kami, kami mendiagnosa anda memiliki
            penyakit
            gangguan mental berikut :</p>
        <section class="hasildiagnosa">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <th class="jenis">Jenis Gangguan Mental</th>
                    <th>Deskripsi Penyakit</th>
                    <th>Cara Penanganan</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $dataUser['namagangguan'] ?>
                        </td>
                        <td>
                            <?php echo $dataUser['deskripsi'] ?>
                        </td>

                        <td>
                            <?php echo $dataUser['penanganan'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <p class="catatan">Catatan : Sistem ini hanya membantu dalam mendiagnosa awal, untuk lebih detail bisa melakukan
            konsultasi ke psikolog</p>
    </div>

    <!-- JS -->
    <script src="../../js/hasilDiagnosa.js"></script>
</body>

</html>