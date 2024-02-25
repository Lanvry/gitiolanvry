<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$search = $_POST['search'];
 
if($search){
	header("location:../halaman/index.php?search=$search");
    $_SESSION["berita"] = $_POST['search'];
}
?>