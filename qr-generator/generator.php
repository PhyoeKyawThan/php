<?php

$text = $_POST['texts'];
$pngName = $_POST['img-name'];
$url  = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=".$text;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$qr = curl_exec($curl);
curl_close($curl);

$file = fopen("qr-codes/".$pngName, 'wb');
fwrite($file, $qr);
fclose($file);

header('Location:index.php?alert='.rawurlencode("Successfully Created!"));

?>