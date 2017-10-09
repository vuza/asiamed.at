<?php
$from = $_GET["mail"];
$message = $_GET["text"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify?secret=" . getenv('GOOGLE_RECAPTCHA') . "&response=" . $_GET['captcha']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$result = json_decode(curl_exec($ch),true);

curl_close($ch);

if($result['success'] != true){
    echo 'Bitte Captcha ("Ich bin kein Roboter") &uuml;berpr&uuml;fen.';
    exit();
}

mail(getenv('MAIL'),"E-Mail Anfrage von Homepage","From:".$from."\n".$message);
?>