<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'machines',
    'description' => 'machines',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Meddev\\Meddevmachines\\' => 'Classes'
        ]
    ],
];
