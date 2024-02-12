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
        $id_berita = $_GET['id_berita'];
        $register = mysqli_query($koneksi, "SELECT * FROM `berita` WHERE id_berita='$id_berita'");
        $row = mysqli_fetch_array($register);
        ?>
        <div>
            <!-- Form penambahan berita -->
            <h1>
                Edit Berita
            </h1>
            <form action="sistemedit.php?id_berita=<?php echo $id_berita ?>" method="post" enctype="multipart/form-data">
                <label for="inputPassword5" class="form-label">Judul Berita</label>
                <input type="text" class="form-control"  value="<?php echo $row['judul'] ?>" name="judul"><br>
                <label for="inputPassword5" class="form-label">Tanggal</label>
                <input type="date" class="form-control"  value="<?php echo $row['tanggal'] ?>" class="date" name="time1"><br>
                <label for="inputPassword5" class="form-label">Content</label>
                <textarea name="content1"  value=""><?php echo $row['content'] ?></textarea><br>
                <label for="inputPassword5" class="form-label">Gambar</label>
                <input type="file" class="form-control"   name="img"><br>
                <input type="submit" id="formbtn" class="btn btn-success" name="upload" value="Kirim"><br>
                <input hidden type="text" id="IMG" value="<?php echo $row['img'] ?>" class="date" name="time"><br>
            </form>
        </div>
    </section>


    <script src="../js/script.js"></script>
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