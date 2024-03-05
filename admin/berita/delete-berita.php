<?php
include 'koneksi.php';

// Menyimpan data id ke dalam variabel
$id_berita = $_GET['id_berita'];

// Query SQL untuk mengambil nama file dari database sebelum menghapus record
$query_select = "SELECT * FROM berita WHERE id_berita='$id_berita'";
$result = mysqli_query($koneksi, $query_select);
$row = mysqli_fetch_assoc($result);
$nama_file = $row['img'];

// Query SQL untuk menghapus data dari tabel berita
$query_delete = "DELETE FROM berita WHERE id_berita='$id_berita'";
mysqli_query($koneksi, $query_delete);

// Menghapus file terkait dari folder jika record berhasil dihapus dari database
if ($nama_file != '') {
    $file_path = "image/" . $nama_file;
    if (file_exists($file_path)) {
        unlink($file_path); // Menghapus file dari folder
    }
}

// Mengalihkan ke halaman index.php
header("location:index.php");
