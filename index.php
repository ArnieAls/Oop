<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bomba</title>
    <style>
        img {
            width: 0.2 * <?php print date('s'); ?>'px'
        }
        .bg {
            width: 400px;
            height: 500px;
            background: url("https://img.freepik.com/free-vector/cartoon-bomb-pop-art-style_81894-2844.jpg?size=338&ext=jpg");
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<?php
print date('s');
?>
<div class="bg"></div>
</body>
</html>
