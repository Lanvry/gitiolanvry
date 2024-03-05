<?php

require "../koneksi.php";
$doc = $_GET["id_dokumen"];

// Mendapatkan nama file dari database sebelum menghapus record
$sql_select = "SELECT * FROM download WHERE id_dokumen='$doc'";
$result = mysqli_query($koneksi, $sql_select);
$row = mysqli_fetch_assoc($result);
$nama_file = $row['url_dokumen'];

// Menghapus record dari database
$sql_delete = "DELETE FROM download WHERE id_dokumen='$doc'";
$mysql = mysqli_query($koneksi, $sql_delete);

if ($mysql) {
    // Menghapus file terkait dari folder jika record berhasil dihapus
    $file_path = "files/" . $nama_file;
    if (file_exists($file_path)) {
        unlink($file_path); // Menghapus file dari folder
    }
    
    header("location:index.php");
} else {
    // Handle jika terjadi kesalahan saat menghapus dari database
    echo "Gagal menghapus data.";
}