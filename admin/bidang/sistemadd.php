<?php 

require "../koneksi.php";
$bidang = $_POST["bidang"];

$sql = "insert into bidang (status) values ('$bidang')";
$mysql = mysqli_query($koneksi,$sql);
if($mysql){
    header("location:index.php");
}