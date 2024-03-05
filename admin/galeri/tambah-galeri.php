<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    include "../head.php";
    include '../koneksi.php';
    $id_user        = $_SESSION["username"];
    $register  = mysqli_query($koneksi, "select * from user where username='$id_user'");
    $row1       = mysqli_fetch_array($register);
    ?>

    <section>
    <div class="card" style="display:grid;grid-template-columns:10% 90%;">
            <a href="index.php" class='btn btn-success' style="position:relative;width:90px;"><b>< BACK</b></a>
            <h3><b><i>Tambah Galeri</i></b></h3>
        </div>
        <div class="profile">
            <img src="../users/image/<?php echo $row1["img"] ?>" alt="Profile Picture">
            <div class="profile-info">
                <?php
                require "../koneksi.php";
                if (!$koneksi) {
                    die('Gagal terhubung MySQL: ' . mysqli_connect_error());
                }
                $username = $_SESSION["username"];
                $sql = "SELECT * FROM `user` WHERE username='$username'; ";
                $query = mysqli_query($koneksi, $sql);
                if (!$query) {
                    die('SQL Error: ' . mysqli_error($koneksi));
                }
                while ($row = mysqli_fetch_array($query)) {
                    echo "<h2>" . $row["username"] . "</h2>
                          <p>" . $row["status"] . "</p>
                        ";
                }
                ?>
            </div>
            <a href="../index.php"><button class="logout-btn">Logout</button></a>
        </div>
        <hr>
        <div class="card">
            <form action="sistemadd.php" method="post" enctype="multipart/form-data">
                <label for="" class="label-control">Judul </label>
                <input type="text" name="judul" id="" class="form-control">
                <label for="" class="label-control">Tanggal</label>
                <input type="date" name="time" id="" class="form-control">
                <label for="" class="label-control">Gambar <sup>( Rasio 1280x720 )</sup></label>
                <input type="file" name="img" id="" class="form-control"><br>
                <input type="submit" value="Tambah" class="btn btn-success">
            </form>
        </div>


    </section>
    <script src="../js/script.js"></script>
    <script>
    </script>

</body>

</html>