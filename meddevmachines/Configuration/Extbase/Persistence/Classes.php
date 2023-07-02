<?php

declare(strict_types=1);

return [
    \Meddev\Meddevmachines\Domain\Model\Machines::class => [
        'properties' => [
           'desc' => [
                'fieldName' => 'tx_meddevmachines_desc'
            ],
           'group' => [
                'fieldName' => 'tx_meddevmachines_group'
            ],
        ]
    ],
];
