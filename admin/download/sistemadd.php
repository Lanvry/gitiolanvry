<?php

require "../koneksi.php";
$name = $_POST["dokumen"];
$kategori = $_POST["kategori"];
$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];
$folder = "./files/" . $filename;
$id = rand(10,1000);

 // Get all the submitted data from the form
 $sql = "INSERT INTO `download` (nama_dokumen, id_dokumen, url_dokumen, nama_kategori) VALUES ('$name', '$id', '$filename', '$kategori')";

 // Execute query
 mysqli_query($koneksi, $sql);

 // Now let's move the uploaded image into the folder: image
 if (move_uploaded_file($tempname, $folder)) {
     echo "<h3>  Image uploaded successfully!</h3>";
     header("location:index.php");
 } else {
     echo "<h3>  Failed to upload image!</h3>";
 }