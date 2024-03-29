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
        <div class="card">
            <form action="sistemadd.php" method="post">
                <label for="" class="label-control">Tambahkan Bidang</label>
                <input type="text" class='form-control' name="bidang" style="margin-bottom: 10px;" placeholder="Tambahkan Bidang">
                <input type="submit" class="btn btn-success" style="float:right;" value="Tambahkan"><br>
            </form>
        </div>
        <hr>
        
        <div class="card">
        <table id="example" width="100%" class="table table-striped">
            <thead>
                <tr>
                    <th>Bidang</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require "../koneksi.php";
                    
                    $sql = "select * from bidang";
                    $mysql = mysqli_query($koneksi, $sql);
                    while ($row = mysqli_fetch_array($mysql)) {
                        echo "
                             <tr>
                             <td style='position:relative;padding:10px 10px;'>" . $row["status"] . "</td>
                             <td style='position:relative;'> <a style='position:absolute;top:-10px;right:10px;' href='deletsistem.php?status=". $row["status"] ."'><button class='removebtn-position-relative'><ion-icon name='trash'></ion-icon></button></a> </td>
                             </tr>
                           ";
                    }

                    ?>
            </tbody>
        </table>
        </div>
    </section>
    <script src="../js/script.js"></script>
    <script>
        function save() {
            document.getElementById("save").style.display = "block";
        }
    </script>

</body>

</html>