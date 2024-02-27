<?php
$rating = $_POST['rating'];
$keterangan = '';

// Menentukan keterangan berdasarkan nilai rating
switch ($rating) {
    case '1':
        $keterangan = 'Tidak Puas';
        break;
    case '2':
        $keterangan = 'Kurang Puas';
        break;
    case '3':
        $keterangan = 'Cukup Puas';
        break;
    case '4':
        $keterangan = 'Puas';
        break;
    case '5':
        $keterangan = 'Sangat Puas';
        break;
    default:
        $keterangan = 'Belum Ada Penilaian';
}

require "koneksi.php";

$sql = "insert into rating (rating, keterangan) values ('$rating', '$keterangan')";
$mysql = mysqli_query($koneksi,$sql);
if($mysql){
    header("location:../ index.php?");
}
