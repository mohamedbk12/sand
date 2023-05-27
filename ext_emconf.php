<?php

/**
 * Extension Manager/Repository config file for ext "kappa_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'SAND Sitepackage',
    'description' => '',
    'category' => 'templates',
    'autoload' => [
        'psr-4' => [
            'Meddev\\KappaSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => '',
    'author_email' => 'moeller@meddev-media.com',
    'author_company' => 'MEDDEV',
    'version' => '1.0.0',
];
