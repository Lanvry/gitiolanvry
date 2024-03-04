<?php
session_start();
$_SESSION["otp1"] = "0";
$user = $_GET["user"];
header("location:index.php?user=$user");