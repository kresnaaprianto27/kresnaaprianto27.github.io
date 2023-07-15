<?php
require '../../database/config.php';
$query1 = "SELECT * FROM tbl_gangguan";
$result1 = mysqli_query($koneksi, $query1);



$query2 = "SELECT * FROM tbl_gejala";
$result2 = mysqli_query($koneksi, $query2);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Basis Pengetahuan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('../../../images/bg-admin.jpg');
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            background: linear-gradient(#8562f6, #b83bbf);

        }

        .container {
            width: 100%;
            height: 100vh;
            /* border: 1px solid yellow; */
            display: flex;
        }

        .form {
            margin: auto;
            width: 500px;
            height: 500px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            /* border: 1px solid black; */
        }

        .form h2 {
            text-align: center;
            font-size: 30px;
            margin: 10px;

        }

        .form label,
        input[type="text"] {
            margin: 15px;
        }

        .form label {
            font-size: 18px;

        }

        .form input[type="text"] {
            width: 90%;
            height: 30px;
            border-radius: 5px;
        }

        .form .btnaksi {
            border: 1px solid yellow;
        }

        button {
            margin-left: 15px;
            height: 30px;
            width: 120px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form" method="post">
            <h2>Tambah Gejala <br>Jenis Gangguan Mental</h2>
            <label for="">Jenis Gangguan Mental</label><br>
            <input name="datapenyakit" type="text" list="data-list-penyakit" placeholder="Cari penyakit...." autocomplete="off"><br>
            <datalist id="data-list-penyakit">
                <?php while ($dataPenyakit = mysqli_fetch_assoc($result1)) { ?>
                    <option><?php echo $dataPenyakit['idgangguan'] . '. ' . $dataPenyakit['namagangguan']; ?></option>
                <?php } ?>



            </datalist>

            <label for="">Gejala Psikis</label><br>

            <input name="datagejala" type="text" list="data-list-gejala" placeholder="Cari gejala...." autocomplete="off"><br>
            <datalist id="data-list-gejala">
                <?php while ($dataGejala = mysqli_fetch_assoc($result2)) { ?>
                    <option ><?php echo $dataGejala['idgejala'].'. '.$dataGejala['namagejala']; ?></option>
                <?php } ?>
            </datalist>

            <form class="btnaksi" method="post">
                <button type="submit" name="btnsimpan">Simpan</button>
                <button type="submit" name="btnkembali">Kembali</button>

            </form>
    </div>

    <!-- ================================================================= -->
    <?php if (isset($_POST['btnkembali'])) { ?>
        <script>
            window.location.href = 'pengetahuan.php';
        </script>
    <?php } ?>

    <?php if (isset($_POST['btnsimpan'])) { ?>
        <?php
        $idPenyakit = $_POST['datapenyakit'];
        $idGejala = $_POST['datagejala'];
        ?>
        <!-- jika data penyakit dan gejala masih kosong -->
        <?php if (empty($idPenyakit) || empty($idGejala)) { ?>
            <script>
                alert('harap isi semua data');
            </script>
        <?php } else { ?>
            <?php if (mysqli_affected_rows($koneksi) < 0) { ?>
                <script>
                    alert('data gagal ditambahkan');
                </script>
            <?php } else { ?>
                <?php
                $query = "INSERT INTO `tbl_pengetahuan` (`idpengetahuan`, `idgangguan`, `idgejala`) VALUES (NULL, '$idPenyakit', '$idGejala');";
                $result = mysqli_query($koneksi, $query);
                ?>
                <script>
                    alert('data berhasil ditambahkan');
                    window.location.href = 'pengetahuan.php';
                </script>
            <?php } ?>
        <?php } ?>
    <?php } ?>

</body>

</html>