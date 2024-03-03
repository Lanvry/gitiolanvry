<?php
    session_start();
    $judul =   $_POST["judul"];
    $date =    $_POST["time"];
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./gambar/" . $filename;
    $id = $_GET["id_gambar"];

    require "../koneksi.php";
    if($filename){
        // Get all the submitted data from the form
        $sql = "UPDATE `gambar` SET `judul`='$judul',`tgl`='$date',`url_gambar`='$filename' WHERE `id_gambar`='$id'";
    
        // Execute query
        mysqli_query($koneksi, $sql);
    
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
            header("location:index.php");
        }
    }
    else{
        
        $sql = "UPDATE `gambar` SET `judul`='$judul',`tgl`='$date' WHERE `id_gambar`='$id'";
        mysqli_query($koneksi, $sql);
        echo"$sql";
        header("location:index.php");
    }
