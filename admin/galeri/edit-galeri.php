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
        <?php 
        $id_gambar = $_GET["id_gambar"];
        $sql_id_gambar = "SELECT * FROM gambar WHERE id_gambar = '$id_gambar'";
        $mysql_id_gambar = mysqli_query($koneksi,$sql_id_gambar);
        $row_gambar = mysqli_fetch_array($mysql_id_gambar);
        ?>
        <div class="card">
            <form action="sistemedit.php?id_gambar=<?php echo $row_gambar["id_gambar"]; ?>" method="post" enctype="multipart/form-data">
                <label for="" class="label-control">Judul</label>
                <input type="text" name="judul" id="" value="<?php echo $row_gambar["judul"]; ?>" class="form-control">
                <label for="" class="label-control">Tanggal</label>
                <input type="date" name="time" id="" value="<?php echo $row_gambar["tgl"]; ?>" class="form-control">
                <label for="" class="label-control">Gambar</label>
                <input type="file" name="img" value="<?php echo $row_gambar["url_gambar"]; ?>" id="" class="form-control"><br>
                <input type="submit" value="Tambah" class="btn btn-success">
            </form>
        </div>


    </section>
    <script src="../js/script.js"></script>
    <script>
    </script>

</body>

</html>