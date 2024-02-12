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
    ?>
    <section>
        <div class="profile">
            <img src="https://placekitten.com/200/200" alt="Profile Picture">
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
        include '../koneksi.php';
        $id_siswa        = $_SESSION["username"];
        $register  = mysqli_query($koneksi, "select * from user where username='$id_siswa'");
        $row1       = mysqli_fetch_array($register);
        ?>
        <form action="edituser.php" method="post">
            <div class="card">
                <div class="usersettings">
                    <label for="">Username</label>
                    <input onchange="save()" type="text" name="username" value="<?php echo $row1['username']; ?>">
                </div>
            </div>
            </div>
            <div class="card">
                <div class="usersettings">
                    <label for="">Password</label>
                    <input onchange="save()" type="text" name="password" value="<?php echo $row1['password']; ?>">
                </div>
            </div>
            <div class="card">
                <div class="usersettings">
                    <label for="">Email</label>
                    <input onchange="save()" type="text" name="email" value="<?php echo $row1['email']; ?>">
                </div>
            </div>
            <div class="card">
                <div class="usersettings">
                    <label for="">Guru Mapel</label>
                    <input onchange="save()" type="text" name="mapel" value="<?php echo $row1['status']; ?>">
                </div>
            </div>
            <div id="save" class="card" >
                <div class="usersettings">
                    <label for="">Save A Changes?</label>
                    <input type="submit" value="Save" class="addbtn">
                </div>
            </div>
        </form>
    </section>
    <script src="../js/script.js"></script>
    <script>
        function save() {
            document.getElementById("save").style.display = "block";
        }
    </script>

</body>

</html>