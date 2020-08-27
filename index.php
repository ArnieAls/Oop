<?php
require 'functions/html.php';
$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ],
    'fields' => [
        'email' => 'E-Mail',
        'type' => 'email',
        'value' => 'test-mail',
        'extra' => [
            'attr' => [
                'class' => 'email-field',
                'placeholder' => 'asd@asd.com',
            ]
        ]
    ],
    'buttons' => [
        'save' => [
            'title' => 'Join',
            'extra' => [
                'attr' => [
                    'class' => 'big-button'
                ]
            ]
        ]
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms templates</title>
</head>
<body>
<?php include 'templates/form.tpl.php'; ?>
</body>
</html>