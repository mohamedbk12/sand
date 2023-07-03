<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata',
        'label' => 'maschinensize',
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
        'searchFields' => 'maschinensize,tablesize',
        'iconfile' => 'EXT:meddevmachines/Resources/Public/Icons/tx_meddevmachines_domain_model_technicaldata.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'maschinensize, tablesize, workingrange, workpiece, maxspeed, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_meddevmachines_domain_model_technicaldata',
                'foreign_table_where' => 'AND {#tx_meddevmachines_domain_model_technicaldata}.{#pid}=###CURRENT_PID### AND {#tx_meddevmachines_domain_model_technicaldata}.{#sys_language_uid} IN (-1,0)',
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

        'maschinensize' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.maschinensize',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.maschinensize.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'tablesize' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.tablesize',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.tablesize.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'workingrange' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.workingrange',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.workingrange.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_workingrange',
                'foreign_field' => 'technicaldata',
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
        'workpiece' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.workpiece',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.workpiece.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_workpiece',
                'foreign_field' => 'technicaldata',
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
        'maxspeed' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.maxspeed',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_technicaldata.maxspeed.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_maxspeed',
                'foreign_field' => 'technicaldata',
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
