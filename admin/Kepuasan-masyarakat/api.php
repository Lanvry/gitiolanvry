<?php 

require "../koneksi.php";

$token = "53vftmsSRbs+g7pPXB@G";
$target = $_POST["nomor"];
$date = date("d M Y",strtotime($_POST["tgl"]));
$pesan = "Assalamualaikum Wr. Wb \n\n Mohon Maaf mengganggu waktu anda, kami Admin BAKESBANGPOL Ingin Memberitahu permintaan kunjungan anda ingin bertemu dengan ".$_POST["Kepada"]."\n\n Status : ".$_POST["status"]."\n Tanggal Perjanjian : ".$date."\n Pesan : ".$_POST["pesan"]."";

$sql = "UPDATE `kepuasanmasyarakat` SET `status` = '".$_POST["status"]."' WHERE `kepuasanmasyarakat`.`id_tamu` = ".$_POST["id_tamu"] .";";
mysqli_query($koneksi,$sql);

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
'countryCode' => '62', //optional
),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token" //change TOKEN to your actual token
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
echo $response;
header("location:index.php");
?>