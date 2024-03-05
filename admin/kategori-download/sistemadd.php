<?php

require "../koneksi.php";
$name = $_POST["kategori"];

 // Get all the submitted data from the form
 $sql = "INSERT INTO kategori_download (nama_kategori) VALUES ('$name')";

 // Execute query
 mysqli_query($koneksi, $sql);

 // Now let's move the uploaded image into the folder: image
 header("location:index.php");