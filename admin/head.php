<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
	session_start();
	if ($_SESSION['status'] != "login") {
		header("location:../login.php?pesan=belum_login");
	}?>
    <div class="header1">
        <div class="headergrid">
            <img src="image/Logos.jpg" class="logo" alt="">
            <h2>Bangkesbangpol</h2>
        </div>
</div>

    <nav class="nav1">
        <ul>
            <li><a href="../dashboard/">Dashboard</a></li>
            <li><a href="../berita/">Isi Berita</a></li>
            <li><a href="../bidang/">Bidang</a></li>
            <li><a href="../Kepuasan-masyarakat/">Kepuasan Masyarakat</a></li>
            <li><a href="../galeri/">Galeri</a></li>
            <li><a href="../tambah-user/">Management User</a></li>
            <li><a href="../users/">Users</a></li>
        </ul>
    </nav>

    <script src="js/script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>