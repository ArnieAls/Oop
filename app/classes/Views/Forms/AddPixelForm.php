<?php

namespace App\Views\Forms;
use Core\Views\Form;

class AddPixelForm extends Form
{
    public function __construct(array $form = [])
    {
        $form_array = [
            'attr' => [
                'method' => 'POST',
            ],
            'fields' => [
                'x' => [
                    'type' => 'text',
                    'value' => '',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_is_numeric',
                        'validate_field_range' => [
                            'min' => 0,
                            'max' => 499,
                        ],
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'X koordinate',
                        ],
                    ],
                ],
                'y' => [
                    'type' => 'text',
                    'value' => '',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_is_numeric',
                        'validate_field_range' => [
                            'min' => 0,
                            'max' => 499,
                        ],
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Y koordinate',
                        ],
                    ],
                ],
                'color' => [
                    'type' => 'select',
                    'value' => 'red',
                    'validators' => [
                        'validate_option'
                    ],
                    'options' => [
                        'red' => 'Red',
                        'blue' => 'Blue',
                        'green' => 'Green',
                        'black' => 'Black',
                    ],
                    'extra' => [
                        'attr' => [
                            'class' => 'color-selector'
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Sukurk pixeli',
                    'type' => 'submit',
                    'value' => 'submit',
                ],
            ],
            'validators' => [
                'validate_unique_pixels',
            ]
        ];
        parent::__construct($form_array);
    }

}