<?php
if (isset($_POST['upload'])) {

    $judul =   $_POST["judul"];
    $author =  $_POST["author"];
    $date =    $_POST["time"];
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./image/" . $filename;
    $filename1 = $_FILES["content"]["name"];
    $tempname1 = $_FILES["content"]["tmp_name"];
    $folder1 = "./halaman/" . $filename1;

    require "koneksi.php";

    // Get all the submitted data from the form
    $sql = "INSERT INTO `berita` (`judul`, `tanggal`, `author`, `img`, `link`, `content`) VALUES ('$judul', '$date', '$author', '$filename', '$filename1', '$filename1');";

    // Execute query
    mysqli_query($koneksi, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempname1, $folder1)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header("location:index.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
