<?php 
 require "koneksi.php";

 $nama =mysqli_real_escape_string($koneksi, $_POST["namaLengkap"]);
 $instansi =mysqli_real_escape_string($koneksi, $_POST["Instansi"]);
 $telp =mysqli_real_escape_string($koneksi, $_POST["Telp"]);
 $alamat =mysqli_real_escape_string($koneksi, $_POST["Alamat"]);
 $kepada =mysqli_real_escape_string($koneksi, $_POST["Kepada"]);
 $keperluan =mysqli_real_escape_string($koneksi, $_POST["Keperluan"]);
 $jenkel =mysqli_real_escape_string($koneksi, $_POST["Jenkel"]);
 $pendidikan =mysqli_real_escape_string($koneksi, $_POST["Pendidikan"]);
 $usia =mysqli_real_escape_string($koneksi, $_POST["Usia"]);
 
 $query = "INSERT INTO `kepuasanmasyarakat` (`Nama Lengkap`, `Instansi`, `Telp`, `Alamat`, `Kepada`, `Keperluan`, `JenisKelamin`, `Pendidikan`, `Usia`) VALUES ('$nama', '$instansi', '$telp', '$alamat', '$kepada', '$keperluan', '$jenkel', '$pendidikan', '$usia')";
 $daftar =  mysqli_query($koneksi,$query);
 if( $daftar ){
    header("location:form-kepuasan.php?form=sukses");
 }
