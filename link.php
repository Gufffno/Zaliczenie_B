<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, 'https://api.shrtco.de/v2/shorten');
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(['url' => 'https://www.youtube.com/watch?v=GyZ28N4K1hY']));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-Type: application/json']);
$link = curl_exec($ch);
curl_close($ch);
// var_dump($link);
$link = json_decode($link,true);
echo 'skracanie linku: <br>';
echo 'oryginalny link: <b>' . $link['result']['original_link'] . '</b> <br>';
echo 'skrócony link: <b><a href="http://' . $link["result"]["short_link"] . '">' . $link['result']['short_link'] . '</a></b>';
?>