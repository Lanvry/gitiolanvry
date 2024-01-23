<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <center>
            <h2>LOGIN</h2>
            <img src="https://imgv2-2-f.scribdassets.com/img/document/449842912/original/e260a48b1e/1704022820?v=1" alt="">
        </center>
        <form action="login.php" method="post">
            <center>
                <input type="text" name="username" placeholder="Username..." id=""><br>
                <input type="password" name="password" placeholder="Password..." id=""><br>
                <input type="submit" value="Login"><br>
            </center>
        </form>
            <?php
            if (isset($_GET['pesan'])) {
                if($_GET["pesan"] == "oopss"){
                    echo "<div class='pesan'> Password atau Username Yang Anda Masukkan Salah </div>";
                }
            }
            ?>
        
    </div>
    <script src="js/login.js"></script>
</body>

</html>