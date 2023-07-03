<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines',
        'label' => 'name',
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
        'searchFields' => 'name,tx_meddevmachines_desc',
        'iconfile' => 'EXT:meddevmachines/Resources/Public/Icons/tx_meddevmachines_domain_model_machines.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'name, images, header, subheader, link, linktext, video, videotitel, videotext, videolink, videolinktext, subimages, subimages_titel, caracteristique, maschineanfragen, technicaldata, accessoires, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_meddevmachines_domain_model_machines',
                'foreign_table_where' => 'AND {#tx_meddevmachines_domain_model_machines}.{#pid}=###CURRENT_PID### AND {#tx_meddevmachines_domain_model_machines}.{#sys_language_uid} IN (-1,0)',
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

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.name',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.name.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'images' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.images',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.images.description',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'images',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ]
                        ],
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'images',
                        'tablenames' => 'tx_meddevmachines_domain_model_machines',
                        'table_local' => 'sys_file',
                    ],
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),

        ],
        'header' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.header',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.header.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'subheader' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.subheader',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.subheader.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.link',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.link.description',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ]
        ],
        'linktext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.linktext',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.linktext.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'video' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.video',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.video.description',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'video',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ]
                        ],
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'video',
                        'tablenames' => 'tx_meddevmachines_domain_model_machines',
                        'table_local' => 'sys_file',
                    ],
                    'maxitems' => 1
                ]
            ),

        ],
        'videotitel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.videotitel',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.videotitel.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'videotext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.videotext',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.videotext.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'videolink' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.videolink',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.videolink.description',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ]
        ],
        'videolinktext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.videolinktext',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.videolinktext.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'subimages' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.subimages',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.subimages.description',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'subimages',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette'
                            ]
                        ],
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'subimages',
                        'tablenames' => 'tx_meddevmachines_domain_model_machines',
                        'table_local' => 'sys_file',
                    ],
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),

        ],
        'subimages_titel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.subimages_titel',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.subimages_titel.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'caracteristique' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.caracteristique',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.caracteristique.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_caracteristique',
                'foreign_field' => 'machines',
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
        'maschineanfragen' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.maschineanfragen',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.maschineanfragen.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_maschineanfragen',
                'foreign_field' => 'machines',
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'technicaldata' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.technicaldata',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.technicaldata.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_technicaldata',
                'foreign_field' => 'machines',
                'maxitems' =>1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],

        'accessoires' => [
            'exclude' => true,
            'label' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.accessoires',
            'description' => 'LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_domain_model_machines.accessoires.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_meddevmachines_domain_model_accessoires',
                'foreign_field' => 'machines',
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],


    ],
    'categories' => [
        'exclude' => true,
        'label' => 'categories',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectTree',
            'treeConfig' => [
                'dataProvider' => \GeorgRinger\News\TreeProvider\DatabaseTreeDataProvider::class,
                'parentField' => 'parent',
                'appearance' => [
                    'showHeader' => true,
                    'expandAll' => true,
                    'maxLevels' => 99,
                ],
            ],
            'MM' => 'sys_category_record_mm',
            'MM_match_fields' => [
                'fieldname' => 'categories',
                'tablenames' => 'tx_meddevmachines_domain_model_machines',
            ],
            'MM_opposite_field' => 'items',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ]
    ],
];