<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP PHP</title>
    <style>
        body {
            margin: 0;
        }
        .bomb-block {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .bomb {
            background-image: url("https://img.freepik.com/free-vector/cartoon-bomb-pop-art-style_81894-2844.jpg?size=338&ext=jpg");
            background-size: cover;
            width: <?php print 10 * date('s'); ?>px;
            height: <?php print 10 * date('s'); ?>px;
        }
        span {
            text-align: center;
            color: red;
            font-size: 16px;
        }
        .explosion-00 {
            background-image: url("https://upload.wikimedia.org/wikipedia/commons/7/79/Operation_Upshot-Knothole_-_Badger_001.jpg");
            background-size: cover;
        }
    </style>
</head>
<body>
<div class="bomb-block">
    <div class="bomb"></div>
    <span><?php print date('s'); ?></span>
    <div class="bomb explosion-<?php print date('s'); ?>></div>
</div>
</body>
</html>