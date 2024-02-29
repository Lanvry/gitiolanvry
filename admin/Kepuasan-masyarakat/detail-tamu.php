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
            <a href="../logout"><button class="logout-btn">Logout</button></a>
        </div>
        <hr>
        <div class="card">
            <a href="index.php" class='btn btn-success' style="position:relative;width:90px;"><b>< BACK</b></a>
        </div>
        <?php
        require "../koneksi.php";
        if (!$koneksi) {
            die('Gagal terhubung MySQL: ' . mysqli_connect_error());
        }
        $id_berita = $_GET['id_tamu'];
        $sql = "SELECT * FROM `kepuasanmasyarakat` where id_tamu='$id_berita' ";
        $query = mysqli_query($koneksi, $sql);
        if (!$query) {
            die('SQL Error: ' . mysqli_error($koneksi));
        }
        while ($row = mysqli_fetch_array($query)) {
            echo "<div class='card'>
                    <text style='margin:0px;padding:0px;position:relative;top:10px;'>Ada Tamu Yang Akan Datang Atas Nama: </text>
                    <p><b>" . $row["Nama_Lengkap"] . "</b></p>
                    <div id='detailtamu'>
                    <label class='form-label'><b>Instansi : </b></label> <text>" . $row["Instansi"] . "</text><br>
                    <label class='form-label'><b>No WA/Telp : </b></label> <text>0" . $row["Telp"] . "</text><br>
                    <label class='form-label'><b>Keperluan : </b></label> <text>" . $row["Keperluan"] . "</text><br>
                    </div>
                     <div id='btnoption' style='display:flex;'>
                     <a href='' style='width:100px; margin:10px;' data-bs-toggle='modal' data-bs-target='#diterimaModal' class='btn btn-success'>Terima</a>
                     <a href='' style='width:100px; margin:10px;' data-bs-toggle='modal' data-bs-target='#ditolakModal' class='btn btn-danger'>Tolak</a>
                     </div>
                    </div>

                    <!-- Modal Diterima -->
        <div class='modal fade' id='diterimaModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <form action='api.php' method='post'>
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Modal title</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <label for='' class='form-label'>Tanggal Perjanjian</label>
                            <input type='date' name='tgl' placeholder='Tanggal Perjanjian' class='form-control'>
                            <label for='' class='form-label'>Pesan</label>
                            <textarea class='form-control' placeholder='Tulis Pesan Anda Disini..' name='pesan'></textarea>
                            <input type='text' name='nomor' hidden value='0". $row["Telp"] ."' class='form-control'>
                            <input type='text' name='status' hidden value='Diterima' class='form-control'>
                            <input type='text' name='bertemu' hidden value='".$row["bidang"]."' class='form-control'>
                            <input type='text' name='id_tamu' hidden value='".$row["id_tamu"]."' class='form-control'>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                            <input type='submit' class='btn btn-primary'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                    <!-- Modal Ditolak -->
        <div class='modal fade' id='ditolakModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <form action='api.php' method='post'>
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5' id='exampleModalLabel'>Modal title</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <label for='' class='form-label'>Alasan</label>
                            <input type='text' name='pesan' class='form-control'>
                            <input type='text' name='nomor' hidden value='0". $row["Telp"] ."' class='form-control'>
                            <input type='text' name='status' hidden value='Ditolak' class='form-control'>
                            <input type='text' name='bertemu' hidden value='".$row["bidang"]."' class='form-control'>
                            <input type='text' name='id_tamu' hidden value='".$row["id_tamu"]."' class='form-control'>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                            <input type='submit' class='btn btn-primary'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                        ";
                        if($row["status"] == "Diterima"){
                            echo "<script>
                            document.getElementById('btnoption').style.display='none';
                            </script>";
                        }
                        else if($row["status"] == "Ditolak"){
                            echo "<script>
                            document.getElementById('btnoption').style.display='none';
                            </script>";
                        }
        }
        ?>
        <!-- Button trigger modal -->

        
    </section>
    <script src="../js/script.js"></script>
    <script>
        function save() {
            document.getElementById("save").style.display = "block";
        }
    </script>

</body>

</html>