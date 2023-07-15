<?php
require '../../database/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Diagnosa Gangguan Mental</title>
    <link rel="stylesheet" type="text/css" href="../../style/konsultasiStyle.css">
</head>

<body>

    <div class="container">
        <h2 class="judul">Diagnosa Gangguan Mental</h2>
        <div class="kotakkonsultasi">
            <form action="redirect.php" method="post">
                <?php
                // Cek koneksi
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    exit();
                }
                // Ambil pertanyaan gejala dari database
                $query = "SELECT * FROM tbl_gejala";
                $result = mysqli_query($koneksi, $query);

                // Tampilkan pertanyaan gejala
                $nomor = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id_gejala = $row['idgejala'];
                    $nama_gejala = $row['namagejala'];

                    echo "<p> $nomor . Apakah anda mengalami $nama_gejala</p>";
                    $nomor++;

                    // Ambil pilihan gejala dari database
                    $query_pilihan = "SELECT * FROM tbl_gejala WHERE idgejala = '$id_gejala'";
                    $result_pilihan = mysqli_query($koneksi, $query_pilihan);

                    // Tampilkan pilihan gejala
                    while ($row_pilihan = mysqli_fetch_assoc($result_pilihan)) {
                        $id_pilihan = $row_pilihan['idgejala'];
                        $nama_pilihan = $row_pilihan['namagejala'];
                        echo "<label>";
                        echo "<input type='checkbox' name='gejala[]' value='$id_pilihan'> $nama_pilihan";
                        echo "</label>";
                    }
                }
                // Tutup koneksi database
                mysqli_close($koneksi);
                ?>
                <br>
                <br>
                <button name="diagnosa" type="submit">Diagnosa</button>
            </form>
        </div>

        <!-- JS -->
        <script src="../../js/konsultasi.js"></script>


    </div>
</body>

</html>