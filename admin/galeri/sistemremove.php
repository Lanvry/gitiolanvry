<?php 
require "../koneksi.php";

$id_gambar = $_GET["id_gambar"];

// Query untuk mendapatkan nama file gambar sebelum menghapus record
$sql_select = "SELECT * FROM gambar WHERE id_gambar = '$id_gambar'";
$result = mysqli_query($koneksi, $sql_select);
$row = mysqli_fetch_assoc($result);
$nama_file = $row['url_gambar'];

// Query untuk menghapus record dari tabel gambar
$sql_delete = "DELETE FROM gambar WHERE id_gambar = '$id_gambar'";
$mysql = mysqli_query($koneksi, $sql_delete);

if($mysql){
    // Menghapus gambar terkait dari folder jika record berhasil dihapus dari database
    if ($nama_file != '') {
        $file_path = "gambar/" . $nama_file;
        if (file_exists($file_path)) {
            unlink($file_path); // Menghapus file dari folder
        }
    }
    header("location:index.php");
  
} else {
    echo "Gagal menghapus data gambar.";
}
?>
