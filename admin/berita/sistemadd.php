<?php
if (isset($_POST['upload'])) {
    session_start();
    $judul =   $_POST["judul"];
    $author =  $_SESSION["username"];
    $date =    $_POST["time"];
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./image/" . $filename;
    $content = $_POST["content1"];
    $id = rand(10,10000);

    require "koneksi.php";

    // Get all the submitted data from the form
    $sql = "INSERT INTO `berita` (`judul`, `tanggal`, `author`, `img`, `content`, `id_berita`) VALUES ('$judul', '$date', '$author', '$filename', '$content', '$id');";

    // Execute query
    mysqli_query($koneksi, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header("location:index.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
