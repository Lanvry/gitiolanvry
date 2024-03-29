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
            <img src="image/<?php echo $row1["img"] ?>" alt="Profile Picture">
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
        <form action="edituser.php" method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="usersettings">
                    <label for=""><b>Profile</b></label>
                    <input onchange="save()" class="form-control" type="file" value="<?php echo $row1['img']; ?>" name="img">
                </div>
            </div>
            <div class="card">
                <div class="usersettings">
                    <label for=""><b>Username</b></label>
                    <input onchange="save()" class="form-control" type="text" name="username" value="<?php echo $row1['username']; ?>">
                </div>
            </div>
            </div>
            <div class="card">
                <div class="usersettings">
                    <label for=""><b>Password</b></label>
                    <input onchange="save()" class="form-control" type="text" name="password" value="<?php echo $row1['password']; ?>">
                </div>
            </div>
            <div class="card">
                <div class="usersettings">
                    <label for=""><b>Email</b></label>
                    <input onchange="save()" class="form-control" type="text" name="email" value="<?php echo $row1['email']; ?>">
                </div>
            </div>
            <div class="card">
                <div class="usersettings">
                    <label for=""><b>Bidang</b></label>
                    <select onchange="save()" class="form-control" name="bidang">
                    <option value="<?php echo $row1['status']; ?>" hidden><?php echo $row1['status']; ?></option>
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
            <div id="save" class="card">
                <div class="usersettings">
                    <label for=""><b>Save A Changes?</b></label>
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