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
                session_start();
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
            <a href="../index.php"><button class="logout-btn">Logout</button></a>
        </div>
        <hr>
        <!-- body -->
        <?php
        require "koneksi.php";
        if (!$koneksi) {
            die('Gagal terhubung MySQL: ' . mysqli_connect_error());
        }
        $sql = "SELECT * FROM `berita` ";

        $query = mysqli_query($koneksi, $sql);

        if (!$query) {
            die('SQL Error: ' . mysqli_error($koneksi));
        }

        while ($row = mysqli_fetch_array($query)) {
            echo "
            <div class='card'>
            <b>" . $row["judul"] . "</b>
            <a href='../index.php'><button class='deletebtn'><ion-icon name='trash'></ion-icon></button></a>
            </div>";
        }
        ?>
    </section>

    <div>
        <button class="buttonadd" onclick="showberitaon()">+</button>
        <!-- Form penambahan berita -->
        <div id="formadd">
            <h1>
                Tambahkan berita
            </h1>
            <button class="close" onclick="showberitaoff()">Back</button>
            <form action="sistemadd.php" method="post" enctype="multipart/form-data">
                <div class="formadd-grid">
                    <div id="formadd1">
                        <label for="">Judul</label><br>
                        <input type="text" name="judul"><br>
                        <label for="">Author</label><br>
                        <input type="text" name="author"><br>
                        <label for="">Tanggal</label><br>
                        <input type="date" class="date" name="time"><br>
                        <label for="">Gambar</label><br>
                        <div class="files">
                            <input type="file" name="img"><br>
                        </div>
                    </div>
                    <div id="formadd2">
                        <label for="">Content (<b>PHP ONLY</b>)</label><br>
                        <div class="files">
                        <textarea name="textarea"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" name="upload" value="Kirim">
        </div>
        

    </div>
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
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
    </script>
</body>

</html>