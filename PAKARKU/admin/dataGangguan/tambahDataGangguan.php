<?php
require '../../database/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Gangguan</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            background: linear-gradient(#8562f6, #b83bbf);
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container .ubahgangguan {
            background-color: #ffe3fa;
            width: 500px;
            /* height: 550px; */
            padding: 10px;
            border-radius: 10px;
            /* display: flex;
            flex-direction: column;
            box-sizing: border-box; */
            border: 5px solid #ad47bf;
        }

        .ubahgangguan h2 {
            text-align: center;
            font-size: 30px;
            margin: 5px;
        }

        .ubahgangguan label {
            margin: 5px;
            font-size: 18px;

        }

        .ubahgangguan input[type="text"],
        textarea,
        label,
        button {
            margin: 10px;
        }

        .ubahgangguan input[type="text"],
        textarea {
            border-radius: 5px;
            border: none;
            box-shadow: 3px 3px 4px #6e6e6e;
            width: 95%;
        }

        .ubahgangguan input[type="text"] {
            height: 40px;
        }

        .ubahgangguan button {
            width: 150px;
            height: 40px;
            background: linear-gradient(rgb(20, 134, 255), rgb(0, 0, 233));
            font-size: 20px;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            box-shadow: 2px 2px 4px black;
            margin: 0px 20px;
        }

        .ubahgangguan button:hover {
            transform: scale(1.05);
            transition: 0.8s;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="ubahgangguan" method="post">
            <h2>Tambah Data Gangguan</h2>
            <label for="namagangguan">Nama Gangguan</label><br>
            <input type="text" name="namagangguan" placeholder="Masukkan nama gangguan"><br>
            <label for="deskripsi">Deskripsi</label><br>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"
                placeholder="Masukkan deskripsi"></textarea><br>
            <label for="penanganan">Penanganan</label><br>
            <textarea name="penanganan" id="penanganan" cols="30" rows="10"
                placeholder="Masukkan pencegahan"></textarea><br>
            <button name="simpan" type="submit">Simpan</button>
        </form>
    </div>
    <?php if (isset($_POST['simpan'])) { ?>
        <?php
        $namaGangguan = $_POST['namagangguan'];
        $deskripsi = $_POST['deskripsi'];
        $penanganan = $_POST['penanganan'];
        ?>
        <?php if (empty($namaGangguan) || empty($deskripsi) || empty($penanganan)) { ?>
            <script>
                alert('Harap isi semua data');
            </script>

        <?php } else { ?>
            <?php
            $query = "INSERT INTO tbl_gangguan VALUES (NULL,'$namaGangguan','$deskripsi','$penanganan')";
            $result = mysqli_query($koneksi, $query);
            ?>
            <script>
                alert('data berhasil di tambahkan');
                window.location.href = 'dataGangguan.php';
            </script>
        <?php } ?>


    <?php } ?>
</body>

</html>