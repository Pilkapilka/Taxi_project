<?php

namespace App\Views\Forms;

use Core\Views\Form;

class FeedbackForm extends Form
{
    public function __construct($id, array $form = [])
    {
        $form += [
            'attr' => [
                'id' => 'feedback-form',
                'class' => 'feedback-form'
            ],
            'fields' => [
                'name' => [
                    'label' => 'Name',
                    'type' => 'text',
                    'value' => '',
                    'validators' => [
                        'validate_not_empty',
                    ],
                ],
                'email' => [
                    'label' => 'E-mail',
                    'type' => 'email',
                    'value' => '',
                    'validators' => [
                        'validate_not_empty',
                        'validate_email',
                    ],
                ],
            ],
            'buttons' => [
                'add_to_cart' => [
                    'text' => 'Send your feedback',
                    'extra' => [
                        'attr' => [
                            'class' => 'add-feedback',
                        ]
                    ]
                ],
            ]
        ];

        parent::__construct($form);
    }
}