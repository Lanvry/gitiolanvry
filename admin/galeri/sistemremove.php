<?php 

require "../koneksi.php";
$id_gambar = $_GET["id_gambar"];
$sql = "DELETE FROM gambar WHERE id_gambar = '$id_gambar'";
$mysql = mysqli_query($koneksi,$sql);
if($mysql){
    header("location:index.php");
}