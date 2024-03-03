<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
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
            <h3><b><i>Tambah Berita</i></b></h3>
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
                $sql = "SELECT * FROM `User` WHERE username='$username'; ";
                $query = mysqli_query($koneksi, $sql);
                if (!$query) {
                    die('SQL Error: ' . mysqli_error($koneksi));
                }
                while ($row1 = mysqli_fetch_array($query)) {
                    echo "<h2>" . $row1["username"] . "</h2>
                          <p>" . $row1["status"] . "</p>
                        ";
                }
                ?>
            </div>
            <a href="../index.php"><button class="logout-btn">Logout</button></a>
        </div>
        <hr>
        <!-- body -->
        <?php
        include 'koneksi.php';
        $register = mysqli_query($koneksi, "SELECT * FROM `User` WHERE username='$username'");
        $row = mysqli_fetch_array($register);
        // membuat data jurusan menjadi dinamis dalam bentuk array
        // membuat function untuk set aktif radio button
        function active_radio_button($value, $input)
        {
            // apabilan value dari radio sama dengan yang di input
            $result = $value == $input ? 'checked' : '';
            return $result;
        }
        ?>
        <div class="card">
            <!-- Form penambahan berita -->
            <h1>
                Tambahkan berita
            </h1>
            <form action="sistemadd.php" method="post" enctype="multipart/form-data">
                <label for="inputPassword5" class="form-label">Judul Berita</label>
                <input type="text" name="judul" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <label for="inputPassword5" class="form-label">Tanggal</label>
                <input type="date" name="time" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <label for="inputPassword5" class="form-label">Kontent</label>
                <textarea name="content1"></textarea><br>
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" name="img" type="file" id="formFile">
                <input type="submit" class="btn btn-success" id="formbtn" name="upload" value="Kirim"><br><br>
            </form>
        </div>
    </section>


    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
</body>

</html>