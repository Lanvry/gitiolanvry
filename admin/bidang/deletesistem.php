<?php

require "../koneksi.php";
$bidang = $_GET["status"];

$sql = "DELETE FROM bidang WHERE status='$bidang'";
$mysql = mysqli_query($koneksi,$sql);
if($mysql){
    header("location:index.php");
}