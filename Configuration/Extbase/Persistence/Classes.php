<?php
declare(strict_types=1);

declare(strict_types=1);

return [
    \Meddev\SandSitepackage\Domain\Model\FrontendUser::class => [
        'tableName' => 'fe_users',
        'properties' => [
            'praxisname' => [
                'fieldName' => 'praxisname'
            ],
        ]
    ],

    \Evoweb\SfRegister\Domain\Model\FrontendUser::class => [
        'tableName' => 'fe_users',
    ],

]; 