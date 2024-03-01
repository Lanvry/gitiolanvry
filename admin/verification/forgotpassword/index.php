<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            background-color: #e3e3e3;
        }

        .card {
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.150);
        }

        .card img {
            width: 150px;
        }
    </style>
</head>

<body>
    <?php session_start() ?>
    <div class="container" style="padding:40px">
        <div class="card" style="padding:20px">
            <center>
                <img src="sumenep.png" alt="">
                <h4><b>BAKESBANGPOL</b></h4>
                <p>Reset Your Password <?php echo $_SESSION["user"] ?></p>
            </center>
            <form action="sistemadd.php" method="post">
                <label for="" class="label-control">New Password</label>
                <input type="text" name="password1" class="form-control" id="">
                <label for="" class="label-control">Confirm Password</label>
                <input type="text" name="password2" id="" class="form-control">
                <input type="submit" style="position: relative; margin-top:10px; width: 100px;" class="btn btn-success" value="Submit">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>