<?php
$name = 'eevee';
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'https://pokeapi.co/api/v2/pokemon/' . $name);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$poke = curl_exec($ch);
curl_close($ch);
$poke = json_decode($poke,true);
// print_r($poke['stats']);
echo '<h2>' . $poke['name'] . ' stats:' . '</h2>';
foreach($poke['stats'] as $stat){
    echo $stat['stat']['name'] .': ' . $stat['base_stat'] . '<br>';
}
echo '<br><br>';

$ch1 = curl_init();
curl_setopt($ch1,CURLOPT_URL,'https://pokeapi.co/api/v2/region/');
curl_setopt($ch1,CURLOPT_RETURNTRANSFER,true);
$regions = curl_exec($ch1);
curl_close($ch1);
$regions = json_decode($regions,true);
// print_r($reg);
echo '<h4>regiony:</h4>';
foreach($regions['results'] as $region){
    echo $region['name'] . '<br> ';
}
?>