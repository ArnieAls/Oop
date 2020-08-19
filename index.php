<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fuel consumption</title>
<body>
<?php

$distance = rand(0, 1000);
$consumption = 7.5/100;
$price_l = 1.2;
$fuel_total = $distance * $consumption;
$price_trip = $fuel_total * $price_l;
?>
<h1>Keliones skaiciuokle</h1>
<ul>
    <li>Nuvaziuota distancija <?php print $distance; ?></li>
    <li>Kaina <?php print $price_trip; ?> pinigu</li>
    <li>Sunaudota <?php print $fuel_total; ?></li>
</ul>
</body>
</html>