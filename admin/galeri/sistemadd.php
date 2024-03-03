<?php
    session_start();
    $judul =   $_POST["judul"];
    $date =    $_POST["time"];
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./gambar/" . $filename;
    $id = rand(1,10000);

    require "../koneksi.php";

    // Get all the submitted data from the form
    $sql = "INSERT INTO gambar (id_gambar, url_gambar, judul, tgl) VALUES ('$id', '$filename', '$judul', '$date')";

    // Execute query
    mysqli_query($koneksi, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header("location:index.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

