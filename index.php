<?php

Kirby::plugin('hananils/contrast-color', [
    'fields' => [
        'contrast-color' => [
            'extends' => 'text',
            'props' => [
                'reference' => function (string $reference) {
                    return $reference;
                },
                'colors' => function (array $colors = []) {
                    if (empty($colors)) {
                        $colors = ['#ffffff', '#000000'];
                    }

                    return $colors;
                },
                'value' => function (string $value = '') {
                    return $value;
                }
            ],
            'validations' => [
                'readable' => function ($value) {
                    if ($value === 'low') {
                        throw new Exception(t('unreadable'));
                    }
                }
            ]
        ]
    ],
    'translations' => [
        'en' => [
            'contrast' => 'Contrast',
            'low' => 'too low',
            'unreadable' => 'Please choose a reference color with a higher contrast.'
        ],
        'de' => [
            'contrast' => 'Kontrast',
            'low' => 'zu gering',
            'unreadable' => 'Bitte wähle eine Referenzfarbe mit höherem Kontrast.'
        ]
    ]
]);
