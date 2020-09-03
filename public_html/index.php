<?php
require "../bootloader.php";

$form = [
    'attr' =>
        [
            'action' => 'index.php',
            'method' => 'POST',
            'class' => 'my-form',
            'id' => 'login-form',
        ],
    'fields' =>
        [
            'name' => [
//                'label' => 'Name',
                'type' => 'text',
                // 'value' => 'name',
                'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
                'extra' =>
                    [
                        'attr' =>
                            [
                                'class' => 'name-field',
                                'placeholder' => 'Vardas ir pavarde',
                            ],
                    ],
                'validators' =>
                    [
                        'validate_field_not_empty',
                        'validate_field_is_string',
                        'validate_field_lenght_255',
                        'validate_field_has_space',
                    ],
            ],
//            'surname' => [
////                'label' => 'Surname',
//                'type' => 'text',
//                // 'value' => 'name',
//                'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
//                'extra' =>
//                    [
//                        'attr' =>
//                            [
//                                'class' => 'name-field',
//                                'placeholder' => 'Pavarde',
//                            ],
//                    ],
//                'validators' =>
//                    [
//                        'validate_field_not_empty',
//                        'validate_field_is_string',
//                        'validate_field_lenght_255',
//                        'validate_field_has_space',
//                    ],
//            ],
//            'email' => [
//                'label' => 'E-Mail',
//                'type' => 'email',
//                // 'value' => 'test-mail',
//                'extra' =>
//                    [
//                        'attr' =>
//                            [
//                                'class' => 'email-field',
//                                'placeholder' => 'hh@dot.com',
//                            ],
//                    ],
//                'validators' => [
//                    'validate_field_not_empty',
//                    'validate_field_is_string',
//                    'validate_field_lenght_255',
//                    'validate_field_has_space',
//                    'validate_field_is_email',
//                ],
//            ],
            'age' => [
//                'label' => 'Phone',
                'type' => 'text',
                // 'value' => 'phone',
                'extra' =>
                    [
                        'attr' =>
                            [
                                'class' => 'Amzius',
                                'placeholder' => 'Amžius',
                            ],
                    ],
                'validators' => [
                    'validate_field_not_empty',
                    'validate_field_lenght_255',
                    'validate_field_is_numeric',
                ]
            ],
//            'sex' => [
//                'label' => 'Gender',
//                'type' => 'select',
//                'value' => 'female',
//                // 'id' => 'kazkoks',
//                'options' => [
//                    'male' => 'Male',
//                    'female' => 'Female',
//                ],
//            ],

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
ini_set("xdebug.var_display_max_children", '-1');
ini_set("xdebug.var_display_max_data", '-1');
ini_set("xdebug.var_display_max_depth", '-1');
var_dump($form);

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