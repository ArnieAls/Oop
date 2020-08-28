<?php
require 'functions/html.php';
$form = [
    'attr' =>
        [
            'action' => 'index.php',
            'method' => 'POST',
            'class' => 'my-form',
            'id' => 'login-form'
        ],
    'fields' => [
        'email' => [
            'label' => 'E-mail',
            'type' => 'email',
            'value' => 'test-email',
            'extra' => [
                'attr' => [
                    'class' => 'email-field',
                    'placeholder' => 'tomas@kamon.lt'
                ]
            ]
        ]
    ],
    'buttons' => [
        'save' => [
            'title' => 'Submit the form',
            'extra' => [
                'attr' => [
                    'class' => 'btn-submit',
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
    <title>FORMS FORM ARRAYS</title>
</head>
<body>
<?php include 'templates/form.tpl.php'; ?>
</body>
</html>