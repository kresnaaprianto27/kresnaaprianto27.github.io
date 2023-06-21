<?php

// koneksi ke database
$serverHost = 'localhost';
$username = 'root';
$password = '';
$dbName = 'db_webaplikasi';
$conn = mysqli_connect($serverHost, $username, $password, $dbName);
// function input query
function query($inputQuery)
{
    global $conn;
    $result = mysqli_query($conn, $inputQuery);
    // menyiapkan wadah data/kotak kosong
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // jika data sudah tidak ada maka tampung ke dalam kotak 
    // dan kembalikan nilai semua data tersebut
    return $rows;
}
?>