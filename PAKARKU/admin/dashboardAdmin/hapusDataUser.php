<?php
require '../../database/config.php';
$idUser = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi hapus data user</title>
    <style>
        body {
            overflow: hidden;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            background-color: black;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .kotakkonfirmasi {
            background-color: white;
            width: 500px;
            height: 250px;
            border-radius: 10px;
            border: 5px solid orange;
            box-shadow: 0 0 30px orange;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }

        h2 {
            font-size: 25px;
            font-weight: bold;
        }

        .btnopsi {
            /* border: 1px solid black; */
            width: 60%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btnopsi button {
            width: 140px;
            height: 40px;
            font-size: 17px;
            color: white;
            font-weight: bold;
        }

        .btnopsi .oke {
            background-color: green;
            border: 3px solid rgb(0, 80, 0);
            border-radius: 5px;
        }

        .btnopsi .cencel {
            background-color: red;
            border: 3px solid rgb(157, 0, 0);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="kotakkonfirmasi">
            <img width="120px" src="../../images/icon-warning.png" alt="">
            <h2>Apakah anda yakin ingin hapus data ?</h2>
            <form class="btnopsi" method="post">
                <button class="oke" type="submit" name="oke">Oke</button>
                <button class="cencel" type="submit" name="cencel">Cencel</button>
            </form>
        </div>
    </div>
    <!-- ================================= -->
    <?php if (isset($_POST['oke'])) { ?>
        <?php
        $query = "DELETE FROM tbl_registeruser WHERE iduser = '$idUser'";
        $result = mysqli_query($koneksi, $query);
        ?>
        <script>
            alert('Berhasil hapus data');
            window.location.href = 'dashboardAdmin.php';
        </script>

    <?php } ?>
    <?php if (isset($_POST['cencel'])) { ?>
        <script>
            alert('Batal hapus data');
            window.location.href = 'dashboardAdmin.php';
        </script>
    <?php } ?>



</body>

</html>