<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array</title>
</head>
<body>
<?php

$products = [
    [
        [
            'name' => 'Kiaušiniai',
            'qty' => 3,
        ],
        [
            'name' => 'Grietinė',
            'qty' => 1,
        ],
        [
            'name' => 'Jogurtas',
            'qty' => 2,
        ],
        [
            'name' => 'Žuvis',
            'qty' => 0,
        ],
    ],
    [
        [
            'name' => 'Pienas',
            'qty' => 1,
        ],
        [
            'name' => 'Kefyras',
            'qty' => 0,
        ],
        [
            'name' => 'Degtinė',
            'qty' => 2,
        ],
        [
            'name' => 'Kečupas',
            'qty' => 2,
        ],
    ],
];
var_dump($products);
?>
</body>
</html>