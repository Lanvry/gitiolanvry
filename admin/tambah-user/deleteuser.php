<?php
require "../koneksi.php";

$id_user = $_GET["id_user"];

$sql = "delete from user where id_user = '$id_user'";
$mysql = mysqli_query($koneksi,$sql);
if($mysql){
    header("location:index.php");
}