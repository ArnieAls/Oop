<?php
require "../bootloader.php";

$form = [
    'attr' =>
        [
            'method' => 'POST',
        ],
    'fields' =>
        [
            'name' => [
                'type' => 'text',
                'extra' =>
                    [
                        'attr' =>
                            [
                                'placeholder' => 'Vardas ir pavarde',
                            ],
                    ],
                'validators' =>
                    [
                        'validate_field_not_empty',
                        'validate_field_has_space',
                    ],
            ],
            'age' => [
                'type' => 'number',
                'extra' =>
                    [
                        'attr' =>
                            [
                                'placeholder' => 'Amžius',
                            ],
                    ],
                'validators' => [
                        'validate_field_not_empty',
                        'validate_field_is_numeric',
                        'validate_field_from_18_to_99',
                ]
            ],
        ],
    'buttons' =>
        [
            'save' =>
                [
                    'title' => 'Ar aš normalus?',
                    'extra' =>
                        [
                            'attr' =>
                                [
                                    'class' => 'big-button',
                                ],
                        ],
                ],
        ],
];

if (!empty($_POST)) {
$form_values = sanitize_form_input_values($form);
    $success = validate_form($form, $form_values);
    if (!$success){
        var_dump('Nenormalus');
} else {
        var_dump('Gal ir normalus');
    }
    var_dump($success);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form from array</title>
</head>

<body>

<?php include '../core/templates/form.tpl.php'; ?>

</body>

</html>