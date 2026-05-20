<?php

$url = "https://restcountries.com/v3.1/name/spain";

$response = file_get_contents($url);

$data = json_decode($response, true);

$pais = $data[0];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Información de España</title>
</head>
<body>

<h1><?php echo $pais['name']['common']; ?></h1>

<img src="<?php echo $pais['flags']['png']; ?>" width="200">

<p><strong>Capital:</strong> <?php echo $pais['capital'][0]; ?></p>

<p><strong>Población:</strong> <?php echo number_format($pais['population']); ?></p>

<p><strong>Región:</strong> <?php echo $pais['region']; ?></p>

<p><strong>Moneda:</strong>
<?php
foreach($pais['currencies'] as $currency){
    echo $currency['name'];
}
?>
</p>

</body>
</html>
