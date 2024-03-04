<?php
session_start();

require "../koneksi.php";

if($_SESSION["otp1"] == "1"){

}
else{
    // Cek apakah pengguna telah mencoba sebelumnya
if (!isset($_SESSION['attempt_count'])) {
    $_SESSION['attempt_count'] = 0;
}

// Cek apakah telah berlaku timeout sebelumnya
if (isset($_SESSION['last_attempt_time'])) {
    $time_elapsed = time() - $_SESSION['last_attempt_time'];
    $timeout_duration = 120; // Waktu tunggu setelah 3 kali percobaan gagal (2 menit)

    if ($time_elapsed < $timeout_duration) {
        $time_left = $timeout_duration - $time_elapsed;
        echo "
        <div class='container height-100 d-flex justify-content-center align-items-center'>
            <div class='position-relative'>
                <div class='card p-2 text-center'>
                    <center>
                     <h5>
                     Tersisa $time_left Detik
                     </h5>
                    </center>
                </div>
            </div>
        </div>
       ";
        exit; // Keluar dari skrip jika masih dalam periode timeout
    } else {
        // Jika timeout sudah berakhir, reset percobaan dan waktu mulai
        $_SESSION['attempt_count'] = 0;
        unset($_SESSION['last_attempt_time']);
    }
}

// Cek apakah sudah melebihi batas percobaan
$max_attempts = 2;
if ($_SESSION['attempt_count'] >= $max_attempts) {
    $_SESSION['last_attempt_time'] = time(); // Set waktu mulai timeout
    echo "
        <div class='container height-100 d-flex justify-content-center align-items-center'>
            <div class='position-relative'>
                <div class='card p-2 text-center'>
                    <center>
                     <h5>
                         <b>Mohon Maaf Pengiriman Kode Otp Terlalu Banyak, Mohon Tunggu 2 menit</b>
                     </h5>
                    </center>
                </div>
            </div>
        </div>
    ";
    exit;
}

// Jika belum melebihi batas percobaan, lanjutkan proses

if ($_SESSION["check"] == "salah") {
    echo "
    <script>alert('KODE SALAH')</script>
    ";
} else {
    $_SESSION["check"] = "null";
    $check = "select * from user where username = '" . $_GET["user"] . "'";
    $_SESSION["user"] = $_GET["user"];
    $sql = mysqli_query($koneksi, $check);
    $row = mysqli_fetch_array($sql);
    $random = rand(100000, 999999);

    // Kirim OTP
    $token = "53vftmsSRbs+g7pPXB@G";
    $target = $row["nomor"];
    $pesan = "KODE OTP : " . $random . "";
    $_SESSION["otp"] = $random;

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.fonnte.com/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
            'target' => $target,
            'message' => $pesan,
            'countryCode' => '62', // Opsional
        ),
        CURLOPT_HTTPHEADER => array(
            "Authorization: $token" // Ganti TOKEN dengan token sebenarnya Anda
        ),
    ));

    $response = curl_exec($curl);
    if (curl_errno($curl)) {
        $error_msg = curl_error($curl);
    }
    curl_close($curl);

    if (isset($error_msg)) {
        echo $error_msg;
    }

    // Tambahkan jumlah percobaan
    $_SESSION['attempt_count']++;
    $_SESSION["otp1"] = "1";
}

}