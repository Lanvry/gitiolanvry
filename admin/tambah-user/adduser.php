<?php 

require "../koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$nomor = $_POST["nomor"];
$status = $_POST["bidang"];
$id_user = rand(1000, 100000);

$sql = "insert into user (username, password, email, nomor, status, img, id_user) values ('$username', '$password', '$email', '$nomor', '$status', 'default.png', '$id_user')";
$mysql = mysqli_query($koneksi,$sql);
if($mysql){
    header("location:index.php");
}