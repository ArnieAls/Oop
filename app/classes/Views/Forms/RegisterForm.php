<?php
namespace App\Views\Forms;
use Core\Views\Form;
class RegisterForm extends Form
{
public function __construct(array $form = [])
{
    $form_array = [
        'attr' => [
            'method' => 'POST',
        ],
        'fields' => [
            'email' => [
                'label' => 'E-mail',
                'type' => 'email',
                'extra' => [
                    'attr' => [
                        'classes' => 'input-field',
                        'placeholder' => 'example@example.com',
                    ]
                ],
            ],
            'password' => [
                'label' => 'Password',
                'type' => 'password',
                'validators' =>
                    [
                        'validate_field_not_empty',
                    ],
            ],
            'password_repeat' => [
                'label' => 'Repeat Password:',
                'type' => 'password',
                'validators' => [
                    'validate_field_not_empty',
                ],
            ],
        ],
        'buttons' => [
            'register' => [
                'title' => 'Register',
            ],
        ],
    ];
    parent::__construct($form_array);
}
}