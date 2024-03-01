<?php

require "koneksi.php";

// Memeriksa apakah form telah disubmit
    // Mengambil nilai dari form
    $newPassword = $_POST["password1"];
    $confirmPassword = $_POST["password2"];

    // Memeriksa apakah password baru sama dengan konfirmasi password
    if ($newPassword != $confirmPassword) {
        $errors[] = "Password baru dan konfirmasi password tidak cocok.";
    }

 

    // Memeriksa apakah terdapat kesalahan
    if (empty($errors)) {
        // Password telah lolos validasi
        // Lakukan sesuatu di sini, misalnya simpan password ke database
        $user = $_SESSION["user"];
        $sql = "update user set password = '$newPassword' where username = '$user'";
        mysqli_query($koneksi,$sql);
        header("location:../redirect.php");
    } else {
        // Menampilkan pesan kesalahan
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }

