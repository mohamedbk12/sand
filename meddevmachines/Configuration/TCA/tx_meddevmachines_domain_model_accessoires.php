<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_accessoires',
        'label' => 'accessoireimages',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => '',
        'iconfile' => 'EXT:meddevmachines/Resources/Public/Icons/tx_meddevmachines_domain_model_accessoires.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'accessoireimages, accessoiretext, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_meddevmachines_domain_model_accessoires',
                'foreign_table_where' => 'AND {#tx_meddevmachines_domain_model_accessoires}.{#pid}=###CURRENT_PID### AND {#tx_meddevmachines_domain_model_accessoires}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'accessoireimages' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_accessoires.accessoireimages',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_accessoires.accessoireimages.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_accessoireimages',
                'foreign_field' => 'accessoires',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'accessoiretext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_accessoires.accessoiretext',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_accessoires.accessoiretext.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_accessoiretext',
                'foreign_field' => 'accessoires',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
    
        'machines' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
