<?php
require '../../database/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aturan Sistem</title>
    <link rel="stylesheet" href="../../style/aturanSistemStyle.css">
</head>

<body>
    <div class="container">
        <h2>Rule / Aturan Sistem</h2>
        <div class="kotak1">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <th>No.</th>
                    <th>Aturan</th>
                </thead>
                <tbody>
                    <!-- ROLE 1 -->
                    <?php
                    $query1 = "SELECT * FROM tbl_pengetahuan 
                    JOIN tbl_gangguan ON `tbl_gangguan`.`idgangguan` = `tbl_pengetahuan`.`idgangguan`
                    JOIN `tbl_gejala` ON `tbl_gejala`.`idgejala` = `tbl_pengetahuan`.`idgejala` 
                    WHERE `tbl_gangguan`.`namagangguan` = 'depresi'";
                    $resutl = mysqli_query($koneksi, $query1);
                    ?>
                    <tr>
                        <td>RULE1</td>
                        <td>
                            <?php while ($role1 = mysqli_fetch_assoc($resutl)) { ?>
                                <p><span>JIKA</span>
                                    <?php echo $role1['namagejala'] . ' DAN'; ?>
                                </p>
                            <?php } ?>
                            <p style="font-weight: bolder;"><span style="color: red;">MAKA</span> DEPRESI</p>
                        </td>
                    </tr>
                    <!-- AKHIR ROLE 1 -->


                     <!-- ROLE 2 -->
                    <?php
                    $query1 = "SELECT * FROM tbl_pengetahuan 
                    JOIN tbl_gangguan ON `tbl_gangguan`.`idgangguan` = `tbl_pengetahuan`.`idgangguan`
                    JOIN `tbl_gejala` ON `tbl_gejala`.`idgejala` = `tbl_pengetahuan`.`idgejala` 
                    WHERE `tbl_gangguan`.`namagangguan` = 'Gangguan Kecemasan'";
                    $resutl = mysqli_query($koneksi, $query1);
                    ?>
                    <tr>
                        <td>RULE2</td>
                        <td>
                            <?php while ($role1 = mysqli_fetch_assoc($resutl)) { ?>
                                <p><span>JIKA</span>
                                    <?php echo $role1['namagejala'] . ' DAN'; ?>
                                </p>
                            <?php } ?>
                            <p style="font-weight: bolder;"><span style="color: red;">MAKA</span> GANGGUAN KECEMASAN</p>
                        </td>
                    </tr>
                    <!-- AKHIR ROLE 2 -->


                     <!-- ROLE 3 -->
                    <?php
                    $query1 = "SELECT * FROM tbl_pengetahuan 
                    JOIN tbl_gangguan ON `tbl_gangguan`.`idgangguan` = `tbl_pengetahuan`.`idgangguan`
                    JOIN `tbl_gejala` ON `tbl_gejala`.`idgejala` = `tbl_pengetahuan`.`idgejala` 
                    WHERE `tbl_gangguan`.`namagangguan` = 'Gangguan Makan'";
                    $resutl = mysqli_query($koneksi, $query1);
                    ?>
                    <tr>
                        <td>RULE3</td>
                        <td>
                            <?php while ($role1 = mysqli_fetch_assoc($resutl)) { ?>
                                <p><span>JIKA</span>
                                    <?php echo $role1['namagejala'] . ' DAN'; ?>
                                </p>
                            <?php } ?>
                            <p style="font-weight: bolder;"><span style="color: red;">MAKA</span> GANGGUAN MAKAN</p>
                        </td>
                    </tr>
                    <!-- AKHIR ROLE 3 -->


                     <!-- ROLE 4 -->
                    <?php
                    $query1 = "SELECT * FROM tbl_pengetahuan 
                    JOIN tbl_gangguan ON `tbl_gangguan`.`idgangguan` = `tbl_pengetahuan`.`idgangguan`
                    JOIN `tbl_gejala` ON `tbl_gejala`.`idgejala` = `tbl_pengetahuan`.`idgejala` 
                    WHERE `tbl_gangguan`.`namagangguan` = 'Gangguan Perilaku'";
                    $resutl = mysqli_query($koneksi, $query1);
                    ?>
                    <tr>
                        <td>RULE4</td>
                        <td>
                            <?php while ($role1 = mysqli_fetch_assoc($resutl)) { ?>
                                <p><span>JIKA</span>
                                    <?php echo $role1['namagejala'] . ' DAN'; ?>
                                </p>
                            <?php } ?>
                            <p style="font-weight: bolder;"><span style="color: red;">MAKA</span> GANGGUAN PERILAKU</p>
                        </td>
                    </tr>
                    <!-- AKHIR ROLE 4 -->

                    <!-- ROLE 5 -->
                    <?php
                    $query1 = "SELECT * FROM tbl_pengetahuan 
                    JOIN tbl_gangguan ON `tbl_gangguan`.`idgangguan` = `tbl_pengetahuan`.`idgangguan`
                    JOIN `tbl_gejala` ON `tbl_gejala`.`idgejala` = `tbl_pengetahuan`.`idgejala` 
                    WHERE `tbl_gangguan`.`namagangguan` = 'Skizofrenia'";
                    $resutl = mysqli_query($koneksi, $query1);
                    ?>
                    <tr>
                        <td>RULE5</td>
                        <td>
                            <?php while ($role1 = mysqli_fetch_assoc($resutl)) { ?>
                                <p><span>JIKA</span>
                                    <?php echo $role1['namagejala'] . ' DAN'; ?>
                                </p>
                            <?php } ?>
                            <p style="font-weight: bolder;"><span style="color: red;">MAKA</span> SKIZOFRENIA</p>
                        </td>
                    </tr>
                    <!-- AKHIR ROLE 5 -->

                     <!-- ROLE 6 -->
                    <?php
                    $query1 = "SELECT * FROM tbl_pengetahuan 
                    JOIN tbl_gangguan ON `tbl_gangguan`.`idgangguan` = `tbl_pengetahuan`.`idgangguan`
                    JOIN `tbl_gejala` ON `tbl_gejala`.`idgejala` = `tbl_pengetahuan`.`idgejala` 
                    WHERE `tbl_gangguan`.`namagangguan` = 'Demensia'";
                    $resutl = mysqli_query($koneksi, $query1);
                    ?>
                    <tr>
                        <td>RULE6</td>
                        <td>
                            <?php while ($role1 = mysqli_fetch_assoc($resutl)) { ?>
                                <p><span>JIKA</span>
                                    <?php echo $role1['namagejala'] . ' DAN'; ?>
                                </p>
                            <?php } ?>
                            <p style="font-weight: bolder;"><span style="color: red;">MAKA</span> DEMENSIA</p>
                        </td>
                    </tr>
                    <!-- AKHIR ROLE 6 -->

                    <!-- ROLE 7 -->
                    <?php
                    $query1 = "SELECT * FROM tbl_pengetahuan 
                    JOIN tbl_gangguan ON `tbl_gangguan`.`idgangguan` = `tbl_pengetahuan`.`idgangguan`
                    JOIN `tbl_gejala` ON `tbl_gejala`.`idgejala` = `tbl_pengetahuan`.`idgejala` 
                    WHERE `tbl_gangguan`.`namagangguan` = 'Gangguan Psikosis'";
                    $resutl = mysqli_query($koneksi, $query1);
                    ?>
                    <tr>
                        <td>RULE7</td>
                        <td>
                            <?php while ($role1 = mysqli_fetch_assoc($resutl)) { ?>
                                <p><span>JIKA</span>
                                    <?php echo $role1['namagejala'] . ' DAN'; ?>
                                </p>
                            <?php } ?>
                            <p style="font-weight: bolder;"><span style="color: red;">MAKA</span> GANGGUAN PSIKOSIS</p>
                        </td>
                    </tr>
                    <!-- AKHIR ROLE 7 -->
                    
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>