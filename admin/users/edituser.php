<?php
require "../koneksi.php";
session_start();
$where = $_SESSION["username"];
$username = $_POST["username"];
$password = $_POST["password"];
$bidang = $_POST["bidang"];
$email = $_POST["email"];
$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "./image/" . $filename;

    if($filename){
        // Get all the submitted data from the form
        $sql = "UPDATE `user` SET `username` = '$username', `password` = '$password', `email` = '$email', `status` = '$bidang', `img` = '$filename' WHERE `user`.`username` = '$where'";
    
        // Execute query
        mysqli_query($koneksi, $sql);
    
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
            $_SESSION["username"] = "$username";
            header("location:index.php");
        }
    }
    else{
        
        $sql = "UPDATE `user` SET `username` = '$username', `password` = '$password', `email` = '$email', `status` = '$bidang' WHERE `user`.`username` = '$where'";
        mysqli_query($koneksi, $sql);
        echo"$sql";
        $_SESSION["username"] = "$username";
        header("location:index.php");
    }