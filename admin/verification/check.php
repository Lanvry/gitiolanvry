<?php 

require "../koneksi.php";
session_start();
$first = $_POST["first"];
$second = $_POST["second"];
$third = $_POST["third"];
$fourth = $_POST["fourth"];
$fifth = $_POST["fifth"];
$sixth = $_POST["sixth"];

$check = "$first$second$third$fourth$fifth$sixth";
if($check == $_SESSION["otp"]){
    $_SESSION["akses"] = "true";
    unset($_SESSION["check"]);
    header("location:forgotpassword/");
}
if($check != $_SESSION["otp"]){
    $_SESSION["check"] = "salah";
    header("location:index.php?user=".$_SESSION["user"]."");
}