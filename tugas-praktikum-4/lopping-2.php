<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_form.php" method="post">
  <label for="tanggal">Tanggal:</label>
  <select name="tanggal" id="tanggal">
    <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
    
        <label for="bulan">Bulan:</label>
        <select name="bulan" id="bulan">
            <?php
            $bulan_array = array(
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember"
            );
            
            foreach ($bulan_array as $bulan) {
                echo "<option value=\"$bulan\">$bulan</option>";
            }
            ?>
        </select>
    
        <label for="tahun">Tahun:</label>
        <input type="number" name="tahun" id="tahun" min="1900" max="2099">
    </form>
</body>
</html>