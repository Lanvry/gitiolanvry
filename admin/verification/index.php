<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .height-100 {
            height: 100vh
        }

        .card {
            width: 400px;
            border: none;
            height: 300px;
            box-shadow: 0px 5px 20px 0px #d2dae3;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .card h6 {
            color: #20a820;
            font-size: 20px
        }

        .inputs input {
            width: 40px;
            height: 40px
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0
        }

        .card-2 {
            background-color: #fff;
            padding: 10px;
            width: 350px;
            height: 100px;
            bottom: -50px;
            left: 20px;
            position: absolute;
            border-radius: 5px
        }

        .card-2 .content {
            margin-top: 50px
        }

        .card-2 .content a {
            color: #20a820
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #20a820
        }

        .validate {
            border-radius: 20px;
            height: 40px;
            background-color: #20a820;
            border: 1px solid #20a820;
            width: 140px
        }
    </style>
</head>

<body>
    <?php 
    include "send.php";
    require "../koneksi.php";

    $user = $_SESSION["user"];
    $sql = "select * from user where username = '$user'";
    $mysql = mysqli_query($koneksi,$sql);
    $row = mysqli_fetch_array($mysql);
    $target = $row["nomor"];
    $count = strlen($target) - 7;
    $asterix = '';

    for ($a = 0; $a <= $count; $a++) {
        $asterix .= '*';
    }

    $output = substr($target, 0, 0) . $asterix . substr($target, -3);
    ?>

    <form action="check.php" method="post">
        <div class="container height-100 d-flex justify-content-center align-items-center">
            <div class="position-relative">
                <div class="card p-2 text-center">
                    <h6>Please enter the one time password <br> to verify your account</h6>
                    <div> <span>A code has been sent to</span> <small><?php echo $output ?></small> </div>
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input class="m-2 text-center form-control rounded" type="text" id="first" name="first" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="second" name="second" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="third" name="third" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fourth" name="fourth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fifth"  name="fifth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" name="sixth" maxlength="1" /> </div>
                    <div class="mt-4"> <input class="btn btn-success px-4 validate" type="submit" value="Submit"><br><p style="position:relative;top:10px;color:grey;cursor:pointer;" id="Kirim Ulang"><a href="redirect.php?user=<?php echo $user ?>">Kirim Ulang</a></p> </div>
                </div>
            </div>
        </div>
    </form>
    <script src="../js/script.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }
            OTPInput();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>