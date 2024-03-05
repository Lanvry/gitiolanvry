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
        require "../koneksi.php";

        $sql= "SELECT * FROM gambar";
        $mysql = mysqli_query($koneksi,$sql);
        echo "<div class='grid-galeri'>";
        while($row = mysqli_fetch_array($mysql)){
            echo "
            <div class='card'>
                <img src='gambar/".$row["url_gambar"]."' class='rounded img-fluid'><br>
                <p>".mb_strimwidth($row["judul"], 0, 39, "...")."</p>
                <div class='row' style='gap:10px;'>
                    <div class='col editbtn-position-relative'><a href='edit-galeri.php?id_gambar=".$row["id_gambar"]."' style='color:white;text-decoration:none;'><ion-icon name='create'></ion-icon></a></div>
                    <div class='col removebtn-position-relative'><a href='sistemremove.php?id_gambar=".$row["id_gambar"]."' style='color:white;text-decoration:none;'><ion-icon name='trash'></ion-icon></a></div>
                </div>
            </div>
            ";
        }
        echo "</div>";
        ?>

    </section>
    <a href="tambah-galeri.php"><button class="buttonadd">+</button></a>
    <script src="../js/script.js"></script>
    <script>
        function save() {
            document.getElementById("save").style.display = "block";
        }
    </script>

</body>

</html>