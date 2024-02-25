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
            <a href="../logout"><button class="logout-btn">Logout</button></a>
        </div>
        <hr>
        <?php
        require "../koneksi.php";
        if (!$koneksi) {
            die('Gagal terhubung MySQL: ' . mysqli_connect_error());
        }
        $sql = "SELECT * FROM `kepuasanmasyarakat` ORDER BY tgl DESC ";
        $query = mysqli_query($koneksi, $sql);
        if (!$query) {
            die('SQL Error: ' . mysqli_error($koneksi));
        }
        while ($row = mysqli_fetch_array($query)) {
            echo "<div class='card'>
                    <text style='margin:0px;padding:0px;position:relative;top:10px;'>Ada Tamu Yang Ingin Menemui Anda, Atas Nama: </text>
                    <p><b>" . $row["Nama_Lengkap"] . "</b></p>
                    <div id='status-detail'>
                     <a id='btn-detail' href='detail-tamu.php?id_tamu=".$row["id_tamu"]."'><button id='detail' class='detailbtn'><ion-icon name='eye'></ion-icon> ".$row["status"]." </button></a>
                    </div>
                    </div>
                        ";               
        }
        $check = mysqli_fetch_array($query)

        

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