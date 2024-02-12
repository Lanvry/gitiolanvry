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
    <?php
	if ($_SESSION['status'] != "login") {
		header("location:../login.php?pesan=belum_login");
	}?>
    <section>
        <div class="profile-dashboard">
            <center>
                <h3 style="font-family:Arial, Helvetica, sans-serif;"><b>Your Profile</b></h3><hr>
                <img src="https://placekitten.com/200/200" alt="Profile Picture">
            </center>
            <div class="profile-info-dashboard">
                <?php
                require "../koneksi.php";
                if (!$koneksi) {
                    die('Gagal terhubung MySQL: ' . mysqli_connect_error());
                }
                $username = $_SESSION["username"];
                $sql = "SELECT * FROM `User` WHERE username='$username'; ";
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
            <a href="../logout"><button class="btn btn-danger">Logout</button></a>
            <a href="../users"><button style="color: white; position:absolute; right:10px;" class="btn btn-success">Edit</button></a>
        </div>
    </section>
    <div>
        <img src="" alt="">
    </div>
    <script src="../js/script.js"></script>


</body>

</html>