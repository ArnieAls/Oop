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
define('ITEM_LOST', 0);
define('ITEM_IN_USE', 1);
define('ITEM_EMPTY', 2);
$games = [
    [
        'user' => 'Petras Pizdzius',
        'item' => [
            'name' => 'telefonas',
            'status' => ITEM_LOST,

        ],
    ],
    [
        'user' => 'Tomas Ablomas',
        'item' => [
            'name' => 'buljonas',
            'status' => ITEM_IN_USE,
        ],
    ],
    [
        'user' => 'Ana Snitkova',
        'item' => [
            'name' => 'rulonas',
            'status' => ITEM_EMPTY,
        ],
    ],
];
var_dump($games);
?>
</body>
</html>