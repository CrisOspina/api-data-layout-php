<?php
// API - Aveonline

$URL = 'https://aveonline.co/api/nal/v1.0/estado_guia.php?guia=54010852381';
// $res = file_get_contents($URL);

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL => $URL
]);

$res = curl_exec($curl);

return $res;

curl_close($curl);
