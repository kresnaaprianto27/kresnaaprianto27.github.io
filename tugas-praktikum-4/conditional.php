<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> tiile Document</title>
</head>
<body>
    <?php
    // membuat variabel untuk menyimpan data
    // yang di kirim
    $nama= $_REQUEST['nama'];
    $gender= $_REQUEST['gender'];
    // cek data jika kosong
    if ($nama == '' || $gender == '') {
        echo'<h2> maaf Data kurang lengkap fgdfgfdg </h2>';
    }else {
        if ($gender == 'L') {
            echo'<h2> Selamat Datang Saudara, '.$nama.'</h2>';
        }else {
            echo'<h2> Selamat Datang Saudari, '.$nama.'</h2>';
        }
        
    }
    ?>
</body>
</html>