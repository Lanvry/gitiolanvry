<?php
if (isset($_POST['upload'])) {
    session_start();
    $judul =   $_POST["judul"];
    $author =  $_SESSION["username"];
    $date =    $_POST["time1"];
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./image/" . $filename;
    $content = $_POST["content1"];
    $id = $_GET["id_berita"];

    require "koneksi.php";
    if($filename){
        // Get all the submitted data from the form
        $sql = "UPDATE `berita` SET `judul`='$judul',`tanggal`='$date',`author`='$author',`img`='$filename',`content`='$content' WHERE `id_berita`='$id'";
    
        // Execute query
        mysqli_query($koneksi, $sql);
    
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
            header("location:index.php");
        }
    }
    else{
        
        $sql = "UPDATE `berita` SET `judul`='$judul',`tanggal`='$date',`author`='$author',`content`='$content' WHERE `id_berita`='$id'";
        mysqli_query($koneksi, $sql);
        echo"$sql";
        header("location:index.php");
    }
}
