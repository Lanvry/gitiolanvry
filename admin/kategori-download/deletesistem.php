<?php

require "../koneksi.php";
$doc = $_GET["nama_kategori"];


// Menghapus record dari database
$sql_delete = "DELETE FROM kategori_download WHERE nama_kategori='$doc'";
$mysql = mysqli_query($koneksi, $sql_delete);

if ($mysql) {
    // Menghapus file terkait dari folder jika record berhasil dihapus
    header("location:index.php");
} else {
    // Handle jika terjadi kesalahan saat menghapus dari database
    echo "Gagal menghapus data.";
}