<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_berita   = $_GET['id_berita'];
// query SQL untuk insert data
$query="DELETE from berita where id_berita='$id_berita'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php")

?>