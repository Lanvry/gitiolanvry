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
    <?php
    require "../koneksi.php";
    $username = $_SESSION["username"];
    $sql = "select * from user where username='$username'";
    $mysql = mysqli_query($koneksi, $sql);
    $row3 = mysqli_fetch_array($mysql);

    if ($row3["status"] != "Admin") {
        header("location:../dashboard");
    }
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
        <div class="card">
            <form action="adduser.php" method="post">
                <div style="margin-bottom:10px;display:grid; grid-template-columns: repeat(5, 1fr); gap:5px;">
                    <div>
                        <label for="" class="label-control">Nama</label><br>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div>
                        <label for="" class="label-control">Password</label><br>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div>
                        <label for="" class="label-control">email</label><br>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div>
                        <label for="" class="label-control">nomor</label><br>
                        <input type="tel" name="nomor" class="form-control">
                    </div>
                    <div>
                        <label for="" class="label-control">status</label><br>
                        <select onchange="save()" class="form-control" name="bidang">
                            <option value="" hidden></option>
                            <?php
                            require "../koneksi.php";
                            $sql = "SELECT * FROM `bidang` ";
                            $query = mysqli_query($koneksi, $sql);
                            while ($row2 = mysqli_fetch_array($query)) {
                                $status = $row2["status"];
                                echo "<option value='" . $status . "'>" . $status . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Tambah" class="btn btn-success">
            </form>
        </div>

        <br><br>
        <?php
        require "../koneksi.php";

        $sql = "select * from user";
        $mysql = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($mysql)) {
            echo "
            <div class='card'>
                <p><b>" . $row["username"] . "</b></p>
                <span style='position:absolute; top:40px;'>" . $row["status"] . "</span>
                <a href=''><button class='editbtn'><ion-icon name='create'></ion-icon></button></a> <a href='deleteuser.php?id_user=" . $row["id_user"] . "'><button class='deletebtn'><ion-icon name='trash'></ion-icon></button></a>
            </div>
            ";
        }

        ?>
    </section>
    <script src="../js/script.js"></script>
    <script>
        function save() {
            document.getElementById("save").style.display = "block";
        }
    </script>

</body>

</html>