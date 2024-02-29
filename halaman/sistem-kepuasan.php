<?php 
 require "koneksi.php";

 $nama =mysqli_real_escape_string($koneksi, $_POST["namaLengkap"]);
 $instansi =mysqli_real_escape_string($koneksi, $_POST["Instansi"]);
 $telp =mysqli_real_escape_string($koneksi, $_POST["Telp"]);
 $alamat =mysqli_real_escape_string($koneksi, $_POST["Alamat"]);
 $keperluan =mysqli_real_escape_string($koneksi, $_POST["Keperluan"]);
 $jenkel =mysqli_real_escape_string($koneksi, $_POST["Jenkel"]);
 $kepada =mysqli_real_escape_string($koneksi, $_POST["dengansiapa"]);
 $usia =mysqli_real_escape_string($koneksi, $_POST["Usia"]);
 $id = rand(1000,100000);
 $date = date("Y-m-d h:i:s");
 
 $query = "INSERT INTO `kepuasanmasyarakat` (`Nama_Lengkap`, `Instansi`, `Telp`, `Alamat`, `bidang`, `Keperluan`, `JenisKelamin`, `Usia`, `id_tamu`, `status`, `tgl`) VALUES ('$nama', '$instansi', '$telp', '$alamat', '$kepada', '$keperluan', '$jenkel', '$usia', '$id', 'Lihat Detail', '$date')";
 $daftar =  mysqli_query($koneksi,$query);
 if( $daftar ){
    header("location:form-kepuasan.php?form=sukses");
 }
