<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../login.php?pesan=belum_login");
    } ?>
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
            <div class="dropdown">
                <a class=" dropdown-toggle" href="#" style="position:relative; top:-5px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Download
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../download/">Download</a></li>
                    <li id="management_user"><a class="dropdown-item" href="../kategori-download/">Kategori Download</a></li>
                </ul>
            </div>
            <li><a href="../Kepuasan-masyarakat/">Kepuasan Masyarakat</a></li>
            <li><a href="../galeri/">Galeri</a></li>
            <li><a href="../users/">Users</a></li>
            <div class="dropdown">
                <a class=" dropdown-toggle" href="#" style="position:relative; top:-5px;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Management
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../bidang/">Tambah Bidang</a></li>
                    <li id="management_user"><a class="dropdown-item" href="../tambah-user/">Management User</a></li>
                </ul>
            </div>
        </ul>
    </nav>

    <?php
    require "koneksi.php";
    $username = $_SESSION["username"];
    $sql = "select * from user where username='$username'";
    $mysql = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_array($mysql);

    if ($row["status"] != "Admin") {
        echo "
    <script>
    document.getElementById('management_user').style.display='none';
    </script>
    ";
    }
    ?>

    <script src="js/script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>