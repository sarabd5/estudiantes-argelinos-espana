<?php

$url =
"https://restcountries.com/v3.1/name/spain";

$data =
file_get_contents($url);

$pais =
json_decode($data,true);

echo $pais[0]['name']['common'];
echo "<br>";

echo $pais[0]['capital'][0];
echo "<br>";

echo $pais[0]['population'];

?>
